<?php

namespace App\Http\Controllers\Dash\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classbook;
use App\Models\User;

class AdminClassbooksController extends Controller
{
    public function index(Request $request) {
        $classbooks = Classbook::all();
        return view('dash.admin.classbooks.index', [
            'classbooks' => $classbooks
        ]);
    }

    public function create() {
        return view('dash.admin.classbooks.create', [
            'teachers' => User::where('role', 'teacher')->get(),
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required',
            'students' => 'array',
            'teacher_id' => 'integer|required'
        ]);

        $classbook = Classbook::create([
            'name' => $request->name,
            'students' => json_encode($request->students),
            'user_id' => $request->teacher_id,
        ]);

        $classbook->save();

        return redirect()->route('dash.admin.classbooks.index')->with('success','Classbook Created Successfuly!');
    }

    public function show($id) {
        $classbook = Classbook::findOrFail($id);

        return view('dash.admin.classbooks.show', [
            'classbook' => $classbook,
            'attendaces' => $classbook->attendances()->orderByDesc('created_at')->get()
        ]);
    }

    public function edit($id) {
    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {
        $classbook = Classbook::findOrFail($id);
        $classbook->delete();
        return redirect()->route('dash.admin.classbooks.index')->with('success','Classbook Deleted successfuly!');
    }
}
