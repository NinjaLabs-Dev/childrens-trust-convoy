<?php

namespace App\Observers;

use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

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

        $data = [
            'embeds' => [
                [
                    'title' => $donation->donation_name . ' - ' . $donationAmount,
                    'description' => $donation->donation_message !== 'No Message' ? substr($donation->donation_message, 0, 1000) . ' . . .' : 'No message set!',
                    'color' => 3720732,
                    'footer' => [
                        'text' => 'Thanks for your support <3 - Total Raised £' . $donation->raisedTotal,
                    ],
                    'timestamp' => Carbon::parse($donation->created_at)->toDateTimeString()
                ]
            ]
        ];

        Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(config('app.just_giving_updates_webhook'), $data);

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
