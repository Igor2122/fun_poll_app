@extends('layouts.app')


@section('content')
    <div class="container">
        @include('_partials.createPoll')
    </div>


    <h2>See your all Poles</h2>

    
    <div class="container">
            <div class="row">
                    @foreach ($allPoles as $pole)
                    <div class="col-sm-4">
        
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title h4">{{ $pole->title }}</h5>
                            <ul class="list-group list-group-flush">
                                {{-- @foreach ($pole->options as $option)
                                    <li class="list-group-item">{{ $option->title }}</li>
                                @endforeach  --}}
                            </ul>
                                <div class="card-body">
                                    {{-- <a href="{{ action('PoleController@' }}" class="card-link">Go to vote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
           
            </div>
@endsection