<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Distributor;
use App\Models\User;
use App\Models\FlashSale;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $distributors = Distributor::count();
        $users = User::count();

        return view('pages.admin.index', compact('products', 'distributors', 'users'));
    }
}
