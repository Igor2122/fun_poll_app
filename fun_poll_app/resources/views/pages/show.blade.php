@extends('home')

@section('content')

    <h1> Poll detail </h1>

    <div class="poll">
        <h2 class="poll-title">{{ $pole->title }}</h2>
        
     @foreach($options as $option)
        <a href="{{  }}"><button class="vote-btn" >{{ $option->title }}</button></a>
    @endforeach 
    </div>

@endsection