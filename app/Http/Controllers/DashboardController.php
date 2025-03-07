<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->role === 'admin') {
            return view('admin.dashboard');
        }

        return view('client.dashboard');
    }

    private function adminDashboard()
    {
        $data = [
            'totalUsers' => User::where('role', 'client')->count(),
            'totalProducts' => Product::count(),
        ];

        return view('admin.dashboard', $data);
    }

    private function clientDashboard()
    {
        $data = [
            'products' => Product::where('user_id', auth()->id())->get(),
        ];

        return view('client.dashboard', $data);
    }
}
