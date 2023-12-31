<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Service;
use App\Models\TechStack;
use App\Models\Testimony;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'user' => User::all()->first(),
            'about' => About::all(),
            'service' => Service::all(),
            'testimony' => Testimony::all(),
            'tech_stack' => TechStack::all(),
            'status' => 'about'
        ];
        return view('portfolio.about', compact('data'));
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
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        //
    }
}
