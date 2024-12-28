<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Brand\Requests\BrandRequest;
use App\Http\Controllers\Brand\Services\BrandService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandService;

    /**
     * BrandController constructor.
     * @param \App\Http\Controllers\Brand\Services\BrandService $brandService
     */

     public function __construct( BrandService $brandService )
     {
        $this->brandService = $brandService;
     }

     /**
      * Displaying brands
      * @return \Illuminate\Http\JsonResponse
      */

      public function index()
      {
        $brands = $this->brandService->getBrands();

        return response()->json([
            'success' => true,
            'data' => $brands
        ], 200);
      }

    /**
     * displaying details
     * @return \Illuminate\Http\JsonResponse
     * @param string $id
     */

    public function show( string $id )
    {
        // $brands = $this->brandService->
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * @param \App\Http\Controllers\Brand\Requests\BrandRequest
     */

    public function store( BrandRequest $request )
    {
        $data = $request->validated();

        $this->brandService->storeBrand($data);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    /**
     * @param BrandRequest $request
     * @param string $id
     * @return JsonResponse
     */

    public function update( BrandRequest $request, string $id )
    {
        $data = $request->validated();

        $this->brandService->updateBrand($id, $data);

        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
    }

    /**
     * @param string $id
     * @return JsonResponse
     */

    public function destroy( string $id )
    {
        $this->brandService->deleteBrand($id);

        return response()->json([
            'success' => true,
            'message' => 'Brand removed!'
        ], 200);
    }

}
