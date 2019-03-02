@php
    // dd($showPole)
@endphp

<div class="card mx-auto" style="width: 30rem;">
  @if (count($showPole) === 0)
      <h2>Please Vote to See The Results</h2>
  @else
    <img class="card-img-top" src="https://images.pexels.com/photos/374815/pexels-photo-374815.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
  @endif
    <div class="card-body">
      <h5 class="card-title">{{ $pole->title }}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <div class="btn-group" role="group" aria-label="Basic example">
        @foreach ($options as $option)
            <form action="{{ action('OptionsController@vote', [$pole->id, $option->id ]) }}" method="POST">
              @csrf
              @if (count($showPole) === 0)
                <button type="submit" class="btn btn-secondary poleButtons mx-2">{{ $option->title}}</button>
              @else
                <button type="submit" disabled class="btn btn-secondary poleButtons mx-2">{{ $option->title}}</button>
              @endif
          </form>
        @endforeach
    </div>
    </div>
  </div>

