<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classname;

class ClassnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classname::all();
        return view('class/index', compact('classes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $class = Classname::find($id);
         $students=Classname::find($id)->students;
         $staff=Classname::find($id)->staff;
         $subjects = Classname::find($id)->subjects;
         return view('class/show', compact('class','students','staff','subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
