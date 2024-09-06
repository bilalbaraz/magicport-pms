<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json(['success' => true]);
    }

    public function create()
    {
        return response()->json(['success' => true]);
    }


    public function update()
    {
        return response()->json(['success' => true]);
    }

    public function delete()
    {
        return response()->json(['success' => true]);
    }
}

