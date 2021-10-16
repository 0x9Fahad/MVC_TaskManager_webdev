
<div class="row mb-3 mt-3">
    <div class="col-10"><h4>Task manager Users</h4></div>
    <div class="col-2"><input type="button"  class="btn btn-primary btn-sm" value="Create User"  /></div>
</div>

<div class=pt-2>
<table class="table mb-2">

    <tr>
    <td>Name </td>
    <td>Id </td>
    <td>Email</td>
    <td>PassWord </td>
    <td>Actions </td>
    </tr> 

    <?php while ($row =$data->fetch()) {  ?>
    <tr>
    <td> <?php echo $row["name"]  ?></td>
    <td> <?php echo $row["id"] ?></td>
    <td> <?php echo $row["email"]  ?></td>
    <td> <?php echo $row["password"] ?></td>

    <td>
        <input type="button"  class="btn btn-success btn-sm" value="Edit"  />
        <input type="button"  class="btn btn-warning btn-sm" value="Delete"  />
    </tr>          
    <?php  } ?>


</table>
</div>