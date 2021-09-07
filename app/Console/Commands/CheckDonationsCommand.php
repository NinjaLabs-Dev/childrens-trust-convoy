<?php

namespace App\Console\Commands;

use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CheckDonationsCommand extends Command
{
    protected $signature = 'check:donations';

    protected $description = 'Check recent donations on JustGiving Page';

    public function handle()
    {
        $request = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get($this->getDonationsUrl());

        $pageInfo = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get($this->getPageInfoUrl());

        if($request->successful() && $pageInfo->successful()) {
            $donations = $request->json();
            $page = $pageInfo->json();
            $donationPos = null;

            foreach ($donations["donations"] as $i => $donation) {
                $donoCheck = Donation::where('donation_id', $donation['id'])->get();

                if(!$donoCheck->count()) {
                    $donationPos = $i;
                }
            }


            if($donationPos !== null) {
                for ($i = $donationPos; $i >= 0; $i--) {
                    $donationData = $donations["donations"][$i];

                    $donationTime = str_replace(array('/Date(', '+0000)/'), '', $donationData['donationDate']);
                    $donationTime = Carbon::createFromTimestamp($donationTime / 1000);

                    $donation = new Donation;
                    $donation->donation_id = $donationData['id'];
                    $donation->donation_name = $donationData['donorDisplayName'];
                    $donation->donation_amount = round((float)$donationData['donorLocalAmount'], 2);
                    $donation->donation_country_code = $donationData['donorLocalCurrencyCode'];
                    $donation->donation_message = empty($donationData['message']) ? 'No Message' : $donationData['message'];
                    $donation->raisedPercent = $page['totalRaisedPercentageOfFundraisingTarget'];
                    $donation->raisedTotal = $page['grandTotalRaisedExcludingGiftAid'];
                    $donation->created_at = $donationTime->toISOString();
                    $donation->save();
                }
            }


            $this->info('Donations are upto date');
        } else {
            $this->info('There was an error getting donations.');
        }
    }

    private function getDonationsUrl(): string {
        return $this->getPageInfoUrl() . '/donations';
    }
    private function getPageInfoUrl(): string {
        return 'https://api.justgiving.com/' . config('app.just_giving_app_id') . '/v1/fundraising/pages/' . config('app.just_giving_page_shortcode');
    }
}
