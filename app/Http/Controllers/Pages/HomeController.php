<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

use App\Http\Resources\DonationResource;
use App\Models\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        $donationInfo = new DonationResource(Donation::all()->last());

        return view('pages.home')
                ->with('donationInfo', $donationInfo);
    }
}
