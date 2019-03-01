@extends('home')

@section('content')


    <h1> Poll detail </h1>


    <h2> Pick wisely because you can vote here only once </h2>
    <div class="card" style="width: 18rem;">
        <h2 class="poll-title">{{ $pole->title }}</h2>
        
     @foreach($options as $option)
        {{-- <a href="{{ action('VoteController@vote', $pole->id) }}"><button class="vote-btn" >{{ $option->title }}</button></a> --}}

        <form action="{{ action('VoteController@vote', $pole->id) }}" method="post">
            @csrf
            {{ csrf_field() }}
            <button type= "submit" class="vote-btn" >{{ $option->title }}</button>
        </form>
    @endforeach 
    </div>

@endsection