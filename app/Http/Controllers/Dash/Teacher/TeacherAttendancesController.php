<?php

namespace App\Http\Controllers\Dash\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Classbook;

class TeacherAttendancesController extends Controller
{
    public function create(Request $request, Classbook $classbook) {
        return view("dash.teacher.attendances.create", [
            "classbook" => $classbook,
        ]);
    }

    public function store(Request $request, Classbook $classbook) {


        $request->validate([
            "year" => "numeric|required",
            "month" => "numeric|required",
            "day" => "numeric|required",
        ]);


        $content = collect();


        if (!$request->has('students') || !$request->has('attend')) {
            return redirect()->back()->withErrors(['Invalid Students']);
        }

        foreach ($request->students as $k => $attendances) {
            $content->push([
                "name" => $attendances,
                "attend" => json_decode($request->attend[$k]), 
            ]);
        }


        
        $classbook->attendances()->create([
            'year' => $request->year,
            'month' => $request->month,
            'day' => $request->day,
            'content' => $content
        ]);
        

        return redirect()->route('dash.teacher.classbooks.show', ['classbook' => $classbook->id])->with('success','');
    }

    public function show(Classbook $classbook, Attendance $attendance) {
        return view('dash.teacher.attendances.show', [
            'attendance' => $attendance,
        ]);
    }
}
