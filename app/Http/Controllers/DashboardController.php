<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MsProduct;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $productCount = MsProduct::count();

        return view('dashboard', compact('userCount', 'productCount'));
    }
}
