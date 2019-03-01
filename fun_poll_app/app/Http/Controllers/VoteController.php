<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class VoteController extends Controller
{
    //
    public function vote($id)
    {
        if (Vote::where([ 
            ['user_id', '=', \Auth::id()],
            ['pole_id', '=' ,$id]])->count()) {
            // user found
            session()->flash('error', 'You already voted here!');
        } else {  
            $vote = new Vote;
            $vote->user_id = \Auth::user()->id;
            $vote->pole_id = $id;
            $vote->save();
            session()->flash('success', 'Your vote has been submitted!');
        };



        return redirect()->action('PoleController@show', $id);
    }

}
