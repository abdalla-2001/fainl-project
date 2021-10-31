<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

public function index(){

    $tasks = [
        'task_1'=> 'make your assignment',
        'task_2'=> 'check your phone',
        'task_3'=> 'watch a match'
    ];
    return view('contact' , compact ('task'));
}


    //
}
