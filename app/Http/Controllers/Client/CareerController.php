<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class CareerController extends Controller
{
    public function index(): View
    {
        return view('client.pages.careers');
    }
}
