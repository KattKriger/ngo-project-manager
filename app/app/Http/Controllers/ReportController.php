<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //pulls all rows from DB
    public function store(Request $request){
    
        Report::create($request->all());

        return "Saved!";
    }

    //sends data to the view
    public function index(){
        $reports = \App\Models\Report::all();

        return view('reports.index', compact('reports'));
    }


}

