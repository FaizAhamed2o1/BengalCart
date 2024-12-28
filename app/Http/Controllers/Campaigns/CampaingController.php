<?php

namespace App\Http\Controllers\Campaigns;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaingController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::paginate(10);
        return view('dashboard.campaign.index', compact('campaigns'));
    }

    public function create()
    {
        return view('dashboard.campaign.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'campaign_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'campaign_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('campaign_image')) {
            $validated['campaign_image'] = $request->file('campaign_image')->store('campaigns', 'public');
        }

        Campaign::create($validated);

        return redirect()->route('campaigns.index')->with('success', 'Campaign created successfully.');
    }

    public function show(string $id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('dashboard.campaign.show', compact('campaign'));
    }

    public function edit(string $id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('dashboard.campaign.update', compact('campaign'));
    }

    public function update(Request $request, string $id)
    {
        $campaign = Campaign::findOrFail($id);

        $validated = $request->validate([
            'campaign_name' => 'required|unique:campaigns,campaign_name,' . $campaign->id . '|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'campaign_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('campaign_image')) {
            $validated['campaign_image'] = $request->file('campaign_image')->store('campaigns', 'public');
        }

        $campaign->update([$validated]);

        return redirect()->route('campaigns.index')->with('success', 'Campaign updated successfully.');
    }

    public function destroy(string $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->delete();

        return redirect()->route('campaigns.index')->with('success', 'Campaign deleted successfully.');
    }
}
