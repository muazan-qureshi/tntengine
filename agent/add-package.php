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
        <input type="text" name="name" class="form-control" value="" required>
      </div>
      <div class="form-group col-md-6">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control" value="" required>
      </div>
      <div class="form-group col-md-4">
        <label for="">Tour Type</label>
        <select name="ttype" class="form-control"  required> 
          <option selected disabled>
            Select the Tour Type
          </option>
          <?php 
          foreach ($object->ttype() as $city) {
          ?>
          <option>
            <?php echo $city['tt_name']?>
          </option>
          <?php } ?>
        </select>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="">Persons</label>
        <input type="text" name="person" class="form-control" value="" required>
      </div>
      <div class="form-group col-md-4">
        <label for="">Location</label>
        <input type="text" name="location" class="form-control" value="" required>
      </div>
      <div class="form-group col-md-4">
        <label for="">From</label>
        <!-- <input type="text" name="from" class="form-control" value=""> -->
        <select class="form-control" name="from" required> 
          <option selected disabled>
            Select the City
          </option>
          <?php 
          foreach ($object->totalcities() as $city) {
          ?>
          <option>
            <?php echo $city['ct_name']?>
          </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="">To</label>
        <!-- <input type="text" name="to" class="form-control" value=""> -->
        <select class="form-control" name="to" required> 
          <option selected disabled>
            Select the City
          </option>
          <?php 
          foreach ($object->totalcities() as $city) {
          ?>
          <option>
            <?php echo $city['ct_name']?>
          </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label>Days</label>
        <input type="number" name="day" class="form-control" required>
      </div>
      <div class="form-group col-md-2">
        <label>Nights</label>
        <input type="number" name="night" class="form-control" required>
      </div>
      <div class="form-group col-md-12">
        <textarea class="form-control" name="desc" required placeholder="Description"></textarea>
      </div>
      <div class="form-group col-md-6">
        <label>Thumbnail</label>
        <input type="file" class="form-control" name="thumbnail" required>
      </div>
      <div class="form-group col-md-6">
        <label>Images</label>
        <input type="file" multiple="true" required class="form-control" name="image[]">
      </div>
        <button type="submit" name="addpkg_btn" class="btn-block btn btn-primary">
          Add Package
        </button>
    </div>

  </form>
</section>


<?php include('footer.php'); ?>
