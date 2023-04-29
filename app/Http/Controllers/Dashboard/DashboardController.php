<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data =
            [
                'users' => User::all()->count(),
                'invoices' => Invoice::all()->count(),
                'incomes' => Invoice::where('status', 'success')->sum('total')
            ];
        return view('dashboard.index', $data);
    }
}
