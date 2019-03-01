<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Option;
use App\Pole;
use App\User;

class PoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
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
        $logged_in_user = \Auth::id();
        $pole = new Pole;
        $pole->title = $request->input('title');
        $pole->user_id = $logged_in_user;
        $pole->save();  

        $option = new Option;
        $option->user_id = $logged_in_user;
        // dd($request->input('option-1'));
        $option->title = $request->input('option-1');
        $option->pole_id = 1;
        $option->save();
        

        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pole = Pole::findOrFail($id);
        return view('pages.show', compact('pole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
