<?php

namespace App\Http\Controllers;

use App\Superadmin;
use Illuminate\Http\Request;
use Laratrust\Traits\LaratrustRoleTrait;

class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use LaratrustRoleTrait;
    public function __construct()
    {
        $this->middleware('role:superadmin');
    }
    public function index()
    {
        return view('index-superadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Superadmin $superadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Superadmin $superadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superadmin $superadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superadmin $superadmin)
    {
        //
    }
}
