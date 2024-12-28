<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    protected $table;
    protected $columns = [];
    protected $validationRules = [];
    protected $viewPath = '';

    protected $paginationLimit = 15;
    protected $sortBy = 'desc';

    protected $breadcrumbs;
    protected $relationships = [];
    protected $imageFieldName = '';
    protected $directoryName = '';

    protected $additionalData = [];

    public function __construct()
    {
        $this->breadcrumbs = generateBreadcrumbs();
    }

    /**
     * Handle image uploads.
     */
    protected function handleImageUpload(Request $request, $fieldName, $directory = 'uploads')
    {
        if ($request->hasFile($fieldName)) {
            $path = $request->file($fieldName)->store($directory, 'public');
            return $path;
        }
        return null;
    }

    /**
     * Sync many-to-many relationships.
     */
    protected function syncRelationships($id, $data)
    {
        foreach ($this->relationships as $relation => $pivotTable) {
            if (isset($data[$relation])) {
                $relatedIds = $data[$relation];
                DB::table($pivotTable)
                    ->where($this->table . '_id', $id)
                    ->delete();
                foreach ($relatedIds as $relatedId) {
                    DB::table($pivotTable)->insert([
                        $this->table . '_id' => $id,
                        $relation . '_id' => $relatedId,
                    ]);
                }
            }
        }
    }

    protected function getAdditionalData()
    {
        return [
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ];
    }


    public function index(Request $request)
    {
        $data = DB::table($this->table)->select($this->columns);
        // Apply dynamic filters
        foreach ($request->all() as $key => $value) {
            if (in_array($key, $this->columns) && !is_null($value)) {
                $data->where($key, 'like', "%$value%");
            }
        }

        $sortColumn = $request->get('sort', 'id');
        $sortOrder = $request->get('order', $this->sortBy);
        if (in_array($sortColumn, $this->columns)) {
            $data->orderBy($sortColumn, $sortOrder);
        }

        // Paginate results
        $limit = $request->get('limit', $this->paginationLimit);
        $data = $data->paginate($limit);

        if ($request->expectsJson()) {
            return response()->json($data);
        }

        return view($this->viewPath . '.index', array_merge([
            'data' => $data,
            'breadcrumbs' => $this->breadcrumbs,
            'filters' => $request->all(),
            'sortColumn' => $sortColumn,
            'sortOrder' => $sortOrder,
        ], $this->getAdditionalData()));
    }

    public function create(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Display create form here'], 200);
        }
        return view(
            $this->viewPath . '.create',
            array_merge(
                [
                    'breadcrumbs' => $this->breadcrumbs
                ],
                $this->getAdditionalData()
            )
        );
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate($this->validationRules);

        if ($this->imageFieldName && $request->hasFile($this->imageFieldName)) {
            $path = $this->handleImageUpload($request, $this->imageFieldName, 'uploads');
            if ($path) {
                $validated[$this->imageFieldName] = $path;
            }
        }

        // Insert into the database
        if (!empty($this->relationships)) {
            $id = DB::table($this->table)
                ->insertGetId($validated);

            if ($id) {
                $this->syncRelationships($id, $request->all());
            }
       }

        // Return response
        if ($request->expectsJson()) {
            return response()->json(['id' => $id, 'message' => 'Record created successfully']);
        }

        return redirect()->back()->with('success', 'Record created successfully!');
    }


    public function show(Request $request, $id)
    {
        $data = DB::table($this->table)->where('id', $id)->first();

        if (!$data) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Record not found'], 404);
            }
            return redirect()->back()->with('error', 'Record not found');
        }

        if ($request->expectsJson()) {
            return response()->json($data);
        }

        return view($this->viewPath . '.show', ['data' => $data]);
    }

    public function edit(Request $request, $id)
    {
        $data = DB::table($this->table)->where('id', $id)->first();

        if (!$data) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Record not found'], 404);
            }
            return redirect()->back()->with('error', 'Record not found');
        }

        if ($request->expectsJson()) {
            return response()->json(['data' => $data]);
        }

        return view($this->viewPath . '.edit', ['data' => $data, 'breadcrumbs' => $this->breadcrumbs]);
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate($this->validationRules);

        // Handle image uploads
        if ($this->imageFieldName && $request->hasFile($this->imageFieldName)) {
            $path = $this->handleImageUpload($request, $this->imageFieldName, 'uploads');
            if ($path) {
                $validated[$this->imageFieldName] = $path;
            }
        }

        // Update the database
        $updated = DB::table($this->table)->where('id', $id)->update($validated);

        // Sync relationships
        $this->syncRelationships($id, $request->all());

        // Handle response
        //        if (!$updated) {
        //            if ($request->expectsJson()) {
        //                return response()->json(['message' => 'Record not updated'], 400);
        //            }
        //            return redirect()->back()->with('error', 'Record not updated');
        //        }

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Record updated successfully']);
        }

        return redirect()->back()->with('success', 'Record updated successfully!');
    }


    public function destroy(Request $request, $id)
    {
        $deleted = DB::table($this->table)->where('id', $id)->delete();

        if (!$deleted) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Record not deleted'], 400);
            }
            return redirect()->back()->with('error', 'Record not deleted');
        }

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Record deleted successfully']);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
