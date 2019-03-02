@extends('layouts.app')

@section('content')
<h1 class="display-4 text-center">List of polls</h1>
<br>
<div class="container">
    <div class="row">
            @foreach ($poles as $pole)
            <div class="col-sm-4">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title h4">{{ $pole->title }}</h5>
                    <ul class="list-group list-group-flush">
                        @foreach ($pole->options as $option)
                            <li class="list-group-item">{{ $option->title }}</li>
                        @endforeach 
                    </ul>
                        <div class="card-body">
                            <a href="{{ action('PoleController@show', $pole->id) }}" class="card-link">Go to vote</a>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
   
    </div>





 
        

@endsection