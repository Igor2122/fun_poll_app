@extends('home')

@section('content')




    <h1> Poll detail </h1>




    <h2> Pick wisely because you can vote here only once </h2>
    <div class="">
        <div class="card w-50 mx-auto">
            <h2 class="poll-title">{{ $pole->title }}</h2>
            @php $total = 0; @endphp
            @foreach ($options as $option)
                <div class="btn-group w-100" role="group" aria-label="Basic example">
                <form class="w-100 pt-4" action="{{ action('VoteController@vote', [$pole->id, $option->id]) }}" method="post">
                        @csrf
                        {{ csrf_field() }}
                        <button type= "submit" class="btn btn-block btn-secondary " >{{ $option->title }}</button>
                    </form>
                </div>
                @php 
                    $total += $option->n_votes;
                @endphp
            @endforeach      
        </div>
        
        
        
        @foreach($options as $option)
            @php
                // $sum = $option->n_votes;
                if($option->n_votes > 0){
                    $result = ($option->n_votes/$total)*100;
                }else{
                    $result = 0;
                }
            @endphp
            <li class="list-group-item w-50 mx-auto">
                <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $result}}%"  aria-valuemin="10" aria-valuemax="100">{{ $result }}% </div>
                </div>
            </li>
        @endforeach
    </div>

@endsection