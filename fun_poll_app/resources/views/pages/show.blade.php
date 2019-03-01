@extends('home')

@section('content')




    <h1> Poll detail </h1>




    <h2> Pick wisely because you can vote here only once </h2>
    <div class="">
        <div class="card w-50 mx-auto">
            <h2 class="poll-title">{{ $pole->title }}</h2>
            
            @foreach ($options as $option)
                <div class="btn-group w-100" role="group" aria-label="Basic example">
                <form class="w-100 pt-4" action="{{ action('VoteController@vote', [$pole->id, $option->id]) }}" method="post">
                        @csrf
                        {{ csrf_field() }}
                        <button type= "submit" class="btn btn-block btn-secondary " >{{ $option->title }}</button>
                    </form>
                </div>
                    @endforeach
                
            </div>
    </div>

@endsection