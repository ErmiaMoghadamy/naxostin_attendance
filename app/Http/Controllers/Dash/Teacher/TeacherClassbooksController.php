<?php

namespace App\Http\Controllers\Dash\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classbook;

class TeacherClassbooksController extends Controller
{
    public function index(Request $request) {
        $classbooks = Classbook::where('user_id', $request->user()->id)->get();
        return view('dash.teacher.classbooks.index', [
            'classbooks' => $classbooks
        ]);
    }

    public function create() {
        return view('dash.teacher.classbooks.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required',
            'students' => 'array',
        ]);

        $classbook = Classbook::create([
            'name' => $request->name,
            'students' => json_encode($request->students),
            'user_id' => $request->user()->id,
        ]);

        $classbook->save();

        return redirect()->route('dash.teacher.classbooks.index')->with('success','Classbook Created Successfuly');
    }

    public function show($id) {
        $classbook = Classbook::findOrFail($id);
        return view('dash.teacher.classbooks.show', [
            'classbook' => $classbook,
            'attendaces' => $classbook->attendances()->orderByDesc('created_at')->get()

        ]);
    }
}
