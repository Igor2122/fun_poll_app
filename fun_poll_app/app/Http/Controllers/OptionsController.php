<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class OptionsController extends Controller
{
    public function vote (Request $request, $pole_id, $option_id)// , $pole_id, $option_id 
    {
        dd($pole_id, $option_id);
        return 'hello';
    }
}
