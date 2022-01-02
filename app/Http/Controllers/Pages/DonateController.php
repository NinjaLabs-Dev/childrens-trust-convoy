<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class DonateController extends Controller
{
    public function index(): RedirectResponse
    {
        return Redirect::away('https://www.justgiving.com/fundraising/' . config('app.just_giving_page_shortcode'));
    }
}
