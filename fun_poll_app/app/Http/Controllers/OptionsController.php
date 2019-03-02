<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class OptionsController extends Controller
{
    public function vote ($pole_id, $option_id)
    {
        // $vote = new Vote;
        // $vote->user_id = \Auth::id();
        // $vote->pole_id = $pole_id;
        // $vote->save();
        Vote::create(['user_id' => \Auth::id(),'pole_id' => $pole_id]);
        return redirect()->back();
    }
}
