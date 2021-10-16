<div class="row mb-3 mt-3">
    <div class="col-10">
      <h4>Create Task Form</h4>
    </div>
    <div class="col-2"></div>
</div>

<div class="pt-2 pb-2">

<?php if (isset($_SESSION["message"])) { ?>

<div class="alert alert-success" role="alert"">
    <?php 
     echo $_SESSION["message"];
     $_SESSION["message"]=null;
    ?>
</div>

<?php } ?>

<form action= "<?=BASE_URL ?>task/inserttask" method="POST">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Title</label> 
    <div class="col-8">
      <input id="title" name="title" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="email">Description</label> 
    <div class="col-8">
      <input id="description" name="description" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>