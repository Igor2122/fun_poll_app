<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Option;

class VoteController extends Controller
{
    //
    public function vote($id, $opt_id)
    {
        // dd($opt_id); 
        if (Vote::where([ 
            ['user_id', '=', \Auth::id()],
            ['pole_id', '=' ,$id]])->count()) {
                // user found
                session()->flash('error', 'You already voted here!');
            } else {  
                $option = Option::findOrFail($opt_id);
                // dd($option);
            $vote = new Vote;
            $vote->user_id = \Auth::user()->id;
            $vote->pole_id = $id;
            $vote->save();
            $option->n_votes++;
            $option->save();
            session()->flash('success', 'Your vote has been submitted!');
            
        };
        
        return redirect()->action('PoleController@show', $id);
    }

}
