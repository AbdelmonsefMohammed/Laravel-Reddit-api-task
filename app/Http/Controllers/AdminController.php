<?php

namespace App\Http\Controllers;

use App\User;
use App\Book;
use App\Latetime;
use App\Attendance;


class AdminController extends Controller
{

    /**
     * Display a listing of the attendance.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

}
