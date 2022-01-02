<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
{
    public function toArray($request)
    {

        $formatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);

        return [
            'id' => $this->id,
            'donation_id' => $this->donation_id,
            'raisedPercent' => $this->raisedPercent,
            'raisedTotal' => $this->raisedTotal,
            'donation_name' => $this->donation_name,
            'donation_message' => $this->donation_message,
            'donation_amount' => $this->donation_amount,
            'currency' => $formatter->formatCurrency($this->donation_amount, $this->donation_country_code),
            'created_at' => $this->created_at
        ];
    }
}
