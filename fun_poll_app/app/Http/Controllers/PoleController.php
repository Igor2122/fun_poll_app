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
     * 
     * 
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    public function index()
    {
        $poles = Pole::all();
        // $options = Option::all();
        
        return view('pages.home', compact(['poles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allPoles = Pole::all();
        return view('pages.create', compact('allPoles'));
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

        // dd($pole);

        foreach ($request->input('option') as $option_value) {
            $option = new Option;
            $option->user_id = $logged_in_user;
            $option->title = $option_value;
            $option->pole_id = $pole->id;
            $option->save();
        }
        

        return redirect()->back();
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
        $options = $pole->options;
        return view('pages.show', compact(['pole', 'options']));
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
