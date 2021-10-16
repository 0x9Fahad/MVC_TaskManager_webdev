
<div class="row mb-3 mt-3">
    <div class="col-10"><h4>Task manager Users</h4></div>
    <div class="col-2"><a href="<?= BASE_URL ?>task/creatTaskForm" class="btn btn-primary btn-sm" value="Create Task"  />Create Task</a></div>
</div>

<div class=pt-2>
    
<?php if (isset($_SESSION["message"])) { ?>

<div class="alert alert-success" role="alert"">
    <?php 
     echo $_SESSION["message"];
     $_SESSION["message"]=null;
    ?>
</div>

<?php } ?>
<table class="table mb-2">

    <tr>
        <td>id </td>
        <td>Title </td>
        <td>description</td>
        <td>Create At </td>
        <td>Update At </td>
    </tr> 

    <?php foreach($data  as $row ) {  ?>
    <tr>
        <td> <?php echo $row["id"]  ?></td>
        <td> <?php echo $row["title"] ?></td>
        <td> <?php echo $row["description"]  ?></td>
        <td> <?php echo $row["create_date"] ?></td>
        <td> <?php echo $row["update_date"] ?></td>

        <td>
            <a href="<?=BASE_URL?>task/updatetaskform/<?=$row['id']?>"  class="btn btn-success btn-sm">Edit</a>
            <a href="<?=BASE_URL?>task/deletetask/<?=$row['id']?>"  class="btn btn-warning btn-sm">Delete</a>
        </td>    
    </tr>          
    <?php  } ?>


</table>
</div>