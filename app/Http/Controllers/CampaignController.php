<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Transaction;
use App\Services\PaginationService;
use Illuminate\View\View;

class CampaignController extends Controller
{
    public function index(): View
    {
        $query = Campaign::query()
        ->published()
        ->leftjoin('partnerships', 'campaigns.owner_id', '=', 'partnerships.user_id')
        ->select('campaigns.*', 'partnerships.nama_lembaga as partnership_name');
        $campaigns = PaginationService::make($query)
            ->setSearchables([
                'name',
            ])
            ->build();

        return view('campaigns.index', [
            'campaigns' => $campaigns,
        ]);
    }

    public function show(string $slug): View
    {
        /** @var Campaign $campaign */
        $campaign = Campaign::query()
            ->leftjoin('partnerships', 'campaigns.owner_id', '=', 'partnerships.user_id')
            ->select('campaigns.*', 'partnerships.nama_lembaga as partnership_name')
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();

        $transactions = $campaign
            ->transactions()
            ->where('status', Transaction::STATUS_PAID)
            ->latest('updated_at')
            ->limit(9)
            ->get();

        return view('campaigns.show', [
            'campaign' => $campaign,
            'transactions' => $transactions,
        ]);
    }
}
