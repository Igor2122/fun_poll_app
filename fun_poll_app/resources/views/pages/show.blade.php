@extends('home')

@section('content')

    <h1> Poll detail </h1>

    <div class="poll">
        <h2 class="poll_title">{{ $pole->title }}</h2>
        
        @include('_partials.poleView')
        

    </div>

@endsection