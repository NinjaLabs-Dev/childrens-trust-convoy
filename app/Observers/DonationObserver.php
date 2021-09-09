<?php

namespace App\Observers;

use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DonationObserver
{
    /**
     * Handle the donation "created" event.
     *
     * @param Donation $donation
     */
    public function created(Donation $donation)
    {
        $formatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
        $donationAmount = $formatter->formatCurrency($donation->donation_amount, $donation->donation_country_code);

        if($donation->donation_message !== 'No Message') {
            if(strlen($donation->donation_message) > 1000) {
                $description = substr($donation->donation_message, 0, 1000) . ' . . .' ;
            } else {
                $description = $donation->donation_message;
            }
        } else {
            $description = 'No message set!';
        }

        $data = [
            'embeds' => [
                [
                    'title' => $donation->donation_name . ' - ' . $donationAmount,
                    'description' => $description,
                    'color' => 3720732,
                    'footer' => [
                        'text' => 'Thanks for your support 💙 - Total Raised £' . $donation->raisedTotal,
                    ],
                    'timestamp' => Carbon::parse($donation->created_at)->toDateTimeString()
                ]
            ]
        ];

        $r = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(config('app.just_giving_updates_webhook'), $data);

        if($r->failed()) {
            Log::error('ERROR ' . $donation->donation_name . ' == ' . json_encode($r->json()));
        }

    }

    /**
     * Handle the donation "updated" event.
     *
     * @param Donation $donation
     */
    public function updated(Donation $donation)
    {
        //
    }

    /**
     * Handle the donation "deleted" event.
     *
     * @param Donation $donation
     */
    public function deleted(Donation $donation)
    {
        //
    }

    /**
     * Handle the donation "restored" event.
     *
     * @param Donation $donation
     */
    public function restored(Donation $donation)
    {
        //
    }

    /**
     * Handle the donation "force deleted" event.
     *
     * @param Donation $donation
     */
    public function forceDeleted(Donation $donation)
    {
        //
    }
}
