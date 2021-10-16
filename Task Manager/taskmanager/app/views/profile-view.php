<div class="row mb-3 mt-3">
    <div class="col-10">
      <h4>User Profile</h4>
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

<form action= "<?=BASE_URL ?>user/up_profile" method="POST">

  <input id="id" name="id" type="hidden" class="form-control" required="required" value="<?=$data['id']?>">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <input id="name" name="name" type="text" class="form-control" required="required" value="<?=$data['name']?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="email">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" required="required" value="<?=$data['email']?>" >
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" type="text" class="form-control"  value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="retype" class="col-4 col-form-label">Retype Password</label> 
    <div class="col-8">
      <input id="retype" name="retype" type="text" class="form-control"  value="">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>



</div>