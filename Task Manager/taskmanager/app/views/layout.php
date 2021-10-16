<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Manager </title>  
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/css/style.css">
           
        
    </head>
    
        <body>             
            
                <div class="topBar">
                    <ul class="listTop">
                        <li><a class="top_link" href="<?=BASE_URL?>home/index">Home |</a></li> 
                        <li class="dropdown">
                            <span  style="color:white">Task Manager |</span>
                            <div class="dropdown-content">
                                <p><a href="<?=BASE_URL?>task/creatTaskForm">Create Task<a></p>
                                <p><a href="<?=BASE_URL?>task/index">View Tasks<a></p>
                             </div>                       
                        </li>
                        <li><a class="top_link" href="<?=BASE_URL?>home/about">About Us |</a></li>

                        <?php
                         if(isset($_SESSION["login"])){
                        ?>   
                            <li><a class="top_link" style="float:right ; color:yellow ; font-weiht:bold" href="<?=BASE_URL?>user/profile"><?=$_SESSION["name"]?></li>
                            <li><a class="top_link" style="float:right" href="<?=BASE_URL?>user/logout">Logout</a></li>
                        <?php
                        }else{
                         ?>
                           <li><a class="top_link" style="float:right" href="<?=BASE_URL?>user/login">Login</a></li>
                           <li><a class="top_link" style="float:right" href="<?=BASE_URL?>user/registerUser">Register</a></li>
                        <?php } ?>
                      
                   
                    </ul>

                    
                </div>

                <div class="container" >                
             
                        <?php include $view .".php";  ?>

               </div>      
        
        
                
        </body>

</html>