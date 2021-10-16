<div class="row mb-3 mt-3">
    <div class="col-10">
      <h4>Login User</h4>
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

<form action= "<?=BASE_URL ?>user/loginprocess" method="POST">
  <div class="form-group row" >
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <input id="name" name="name" type="text" class="form-control" required="required">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" type="text" class="form-control" required="required">
    </div>
  </div>
   <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>