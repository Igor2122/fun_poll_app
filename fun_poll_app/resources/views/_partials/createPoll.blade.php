<form method="POST" action=" {{ action('PoleController@store') }} ">
  @csrf
    <div class="form-group" >
      <label for="title">Pole Name</label>
      <input name="title" type="text" class="form-control" id="title   " placeholder="Pole Name">
    </div>
    <div class="form-group">
      <label for="option-1">Option Name</label>
      <input name="option[1]" type="text" class="form-control" id="option-1" placeholder="Option Name">
    </div>
    <div class="add_pole_form"></div>
    <div class="btn btn-primary" id="add-option">Add New Option</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
