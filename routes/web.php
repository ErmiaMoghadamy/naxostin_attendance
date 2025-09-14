<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dash\Admin\AdminAttendancesController;
use App\Http\Controllers\Dash\Admin\AdminClassbooksController;
use App\Http\Controllers\Dash\Admin\AdminTeachersController;
use App\Http\Controllers\Dash\Teacher\TeacherClassbooksController;
use App\Http\Controllers\Dash\DashController;
use App\Http\Controllers\Dash\Teacher\TeacherAttendancesController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsTeacher;
use Illuminate\Support\Facades\Route;

// Route::redirect("/", "/dash");
Route::view("/", "main.home")->name("home");

Route::prefix("")->group(function () {
    Route::get("/auth/login", [AuthController::class, 'loginView'])->name("login");
    Route::post("/auth/login", [AuthController::class, 'login'])->name("loginAttempt");

    Route::get("/auth/logout", [AuthController::class, 'logout'])->name("logout");
});



Route::middleware("auth")->group(function () {
    // Route::name
    Route::name("dash.")->prefix("/dash")->group(function () {
        Route::get("/", [DashController::class, "index"])->name("main");

        Route::name("admin.")->prefix("/admin")->middleware(IsAdmin::class)->group(function () {
            Route::resources([
                'teachers' => AdminTeachersController::class,
                'classbooks' => AdminClassbooksController::class,
                'classbooks/{classbook}/attendances' => AdminAttendancesController::class,
            ]);
        });


        Route::name("teacher.")->prefix("/teacher")->middleware(IsTeacher::class)->group(function () {
            Route::resources([
                'classbooks' => TeacherClassbooksController::class,
                'classbooks/{classbook}/attendances' => TeacherAttendancesController::class,
            ]);
        });
    });
});


Route::fallback(function () {
    return view("main.fallback");
});