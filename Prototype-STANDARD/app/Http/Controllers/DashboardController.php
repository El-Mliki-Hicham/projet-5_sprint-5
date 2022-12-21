<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $task=Task::All();
        return view("dashboard",compact('task'));
    }
}
