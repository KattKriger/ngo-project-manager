<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //no comments yet!
    public function store(Request $request)
{
    //no comments yet!
    Report::create($request->all());

    return "Saved!";
}
}

