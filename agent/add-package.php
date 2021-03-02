<?php include('header.php');

  $object->add_package();
 ?>

<section class="container">
  <h3>
    Add Package
  </h3>
  <form class="" action="" enctype="multipart/form-data" method="post">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">Package Name</label>
        <input type="text" name="name" class="form-control" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Persons</label>
        <input type="text" name="person" class="form-control" value="">
      </div>
      <div class="form-group col-md-6">
        <label for="">Location</label>
        <input type="text" name="location" class="form-control" value="">
      </div>
      <div class="form-group col-md-4">
        <label for="">From</label>
        <input type="text" name="from" class="form-control" value="">
      </div>
      <div class="form-group col-md-4">
        <label for="">To</label>
        <input type="text" name="to" class="form-control" value="">
      </div>
      <div class="form-group col-md-2">
        <label>Days</label>
        <input type="number" name="day" class="form-control">
      </div>
      <div class="form-group col-md-2">
        <label>Nights</label>
        <input type="number" name="night" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <textarea class="form-control" name="desc" placeholder="Description"></textarea>
      </div>
      <div class="form-group col-md-12">
        <input type="file" multiple="true" class="form-group" name="image[]">
      </div>
        <button type="submit" name="addpkg_btn" class="btn-block btn btn-primary">
          Add Package
        </button>
    </div>

  </form>
</section>


<?php include('footer.php'); ?>
