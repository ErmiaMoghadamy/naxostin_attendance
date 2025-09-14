<?php

namespace App\Http\Controllers\Dash\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Classbook;

class AdminAttendancesController extends Controller
{
    public function show(Classbook $classbook, Attendance $attendance) {
        return view('dash.admin.attendances.show', [
            'attendance' => $attendance,
        ]);
    }
}
