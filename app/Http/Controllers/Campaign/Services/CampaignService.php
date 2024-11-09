<?php

namespace App\Http\Controllers\Campaign\Services;

use App\Models\Campaign;

class CampaignService
{
    protected $model;

    public function __construct( Campaign $model )
    {
        $this->model = $model;
    }

    public function getCampaigns()
    {
        return $this->model
            ->with('products')
            ->paginate(15);

    }

    public function getProductsByCampaigns( $campaignId )
    {
        return $this->model
            ->where('id', $campaignId)
            ->with('products')
            ->first();
    }

    public function storeCampaign(array $data)
    {
        return $this->model
            ->create($data);
    }

    public function updateCampaign( string $campaignId, array $data )
    {
        $campaign = $this->model->findOrFail($campaignId);

        return $campaign->update($data);
    }

    public function deleteCampaign( string $campaignId )
    {
        $campaign = $this->model->findOrFail($campaignId);
        return $campaign->delete();
    }
}

