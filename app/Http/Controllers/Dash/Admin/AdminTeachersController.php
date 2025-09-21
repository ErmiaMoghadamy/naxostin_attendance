<?php

namespace App\Http\Controllers\Dash\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminTeachersController extends Controller
{
    public function index() {
        return view("dash.admin.teachers.index", [
            'teachers' => User::where('role', 'teacher')->get(),
        ]);
    }

    public function create() {
        return view("dash.admin.teachers.create");
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => 'string|required',
            'username' => 'string|required|unique:users',
            'password'=> 'string|required',
        ]);

        $user = User::create([
            'fullname' => $request->fullname,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
            'role' => 'teacher'
        ]);

        return redirect()->route('dash.admin.teachers.index')->with('success','Teacher Created Successfuly');
    }


    public function show($id) {}

    public function edit($id) {
        $teacher = User::findOrFail( $id );

        return view('dash.admin.teachers.edit', [
            'teacher' => $teacher,
        ]);
    }

    public function update(Request $request, $id) {

        $teacher = User::findOrFail( $id );

        $request->validate([
            'fullname' => 'string|required',
            'username' => 'string|required',
        ]);

        if (User::where('username', $request->username)->get()->isNotEmpty() && $request->username != $teacher->username) {
            return redirect()->back()->withErrors(['Username Already Taken']);
        }

        $teacher->update($request->only('username', 'fullname'));

        if ($request->has('new_password') && $request->new_password != null) {
            $teacher->password = Hash::make($request->new_password);
            $teacher->save();

            dd("pass updated");
        }

        return redirect()->route('dash.admin.teachers.index')->with('success','Teacher updated successfuly');
    }


    public function destroy($id) {}

    public function banTeacher($id) {}
}
