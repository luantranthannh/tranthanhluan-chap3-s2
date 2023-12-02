
<form action="process.php" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input name = "color" type="color" class="form-range" >
        </div>
        <div class="col">
            <input name="range" type="range" class="form-range" max="100" min="1">
        </div>
    </div>
    <div class="mb-3">
        <input name="date" type="date" class="form-control">
    </div>
    <div class="d-grid">
        <button  class="btn btn-primary">Submit</button>
    </div>
</form>