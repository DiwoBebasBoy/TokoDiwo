<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Distributors;

class ListController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        $distributors = Distributor::all();
        $products = Product::all();
        return view('welcome', compact('admins', 'users', 'distributors', 'products'));
    }
}
