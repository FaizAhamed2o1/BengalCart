<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\Requests\CampaignRequest;
use App\Http\Controllers\Campaign\Services\CampaignService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    protected $campaignService;

    /**
     * @param CampaignService $campaignService
     */
    public function __construct( CampaignService $campaignService )
    {
        $this->campaignService = $campaignService;
    }

     /**
      * Summary of index
      * @return mixed|\Illuminate\Http\JsonResponse
      */
     public function index()
     {
        $data = $this->campaignService->getCampaigns();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
     }

     /**
      * Summary of campaignWiseProducts
      * @param mixed $campaignId
      * @return JsonResponse
      */
     public function campaignWiseProducts( $campaignId )
     {
        $data = $this->campaignService
            ->getProductsByCampaigns($campaignId);

        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
     }

     /**
      * Summary of store
      * @param \App\Http\Controllers\Campaign\Requests\CampaignRequest $request
      * @return JsonResponse
      */
     public function store( CampaignRequest $request )
     {
        $data = $request->validated();

        $campaign = $this->campaignService
            ->storeCampaign($data);

        // attaching products to campaign

        if ( $request->has('product_ids') )
        {
            foreach( $data['product_ids'] as $productId )
            {
                $campaign->attach($productId);
            }

        }

        return response()->json([
            'success' => true,
            'data' => $data
        ], 201);
     }

     /**
      * Summary of update
      * @param \App\Http\Controllers\Campaign\Requests\CampaignRequest $request
      * @param string $id
      * @return JsonResponse
      */
     public function update( CampaignRequest $request, string $id )
     {
        $data = $request->validated();

        $campaign = $this->campaignService->updateCampaign($id, $data);

        if( $request->has('product_ids') )
        {
            foreach( $data['product_ids'] as $productId )
            {
                $campaign->attach($productId);
            }
        }

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'campaign updated'
        ], 200);
     }

     /**
      * Summary of destroy
      * @param string $id
      * @return JsonResponse
      */
     public function destroy( string $id )
     {
        $this->campaignService->deleteCampaign($id);
        return response()->json([
            'success' => true,
            'message' => 'Campaign removed'
        ], 200);
     }
}
