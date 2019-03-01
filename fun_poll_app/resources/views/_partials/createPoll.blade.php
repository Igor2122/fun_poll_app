<form>
    <div class="form-group">
      <label for="title">Pole Name</label>
      <input name="title" type="text" class="form-control" id="title   " placeholder="Pole Name">
    </div>
    <div class="form-group">
      <label for="option-1">Pole Name</label>
      <input name="option-1" type="text" class="form-control" id="option-1" placeholder="Pole Name">
    </div>
    <div class="btn btn-primary" id="add-option">Add New Option</div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  <script>
  
    var addOption = document.querySelector('#add-option');
         addOption.addEventListener("click", function() {
             console.log(addOption);
             console.log('click');
         })
        
       
</script>