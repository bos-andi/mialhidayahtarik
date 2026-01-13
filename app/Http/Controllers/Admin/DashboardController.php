<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_teachers' => Teacher::count(),
            'active_teachers' => Teacher::where('is_active', true)->count(),
            'total_users' => User::count(),
            'kepala_madrasah' => Teacher::where('position', 'Kepala Madrasah')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
