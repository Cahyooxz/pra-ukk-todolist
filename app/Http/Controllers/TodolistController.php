<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('index');
    }
    public function index()
    {
        confirmDelete('Delete Task', 'Are you sure you want to delete?');

        return view('todolist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todolist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('todolist.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
    public function calendar()
    {
        return view('calendar.index');
    }
    public function modal_calendar(Request $request)
    {
        return response()->json([
            'title' => 'Ngerjain Matematika | 30 April 2025',
            'description' => 'lorem20',
            'deadline' => '30 April 2025',
        ]);
    }
}
