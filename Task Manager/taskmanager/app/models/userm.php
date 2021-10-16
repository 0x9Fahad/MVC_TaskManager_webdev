<?php

require_once __ROOT__."\\app\\models\\db1.php";

class Userm {

   public $db ;
     
    function __construct(){
         
        $this->db = new db();

     }


     function login (){       
       

        $res = $this->db->select("users", [
              "name"=>trim($_POST["name"]) , 
              "password" => trim($_POST["password"])
         ]);


         return $res;

     }

     function insertuser ($name , $email , $password){

        $this->db->insert("users" , [
            "name" => trim($name),
            "email"=> trim($email) ,
            "password" => trim($password)
       ]);


     }   


     function getProfile ($id){   
        
        $res =  $this->db->select("users" , [                 
            "id" => $id
          ]);

          $data = $res[0];

          return $data;

     } 

     function editProfile ($id , $name , $email , $password ){   
       

        $this->db->update("users" , [                 
                "name" => trim($name),
                "email"=> trim($email) ,
                "password" => trim($password)
              ],
              ["id" => $id ]
          );

     }

     function editProfileWithoutPassWord ($id , $name , $email ){   
       

        $this->db->update("users" , [                 
                "name" => trim($name),
                "email"=> trim($email) ,              
              ],
              ["id" => $id ]
          );

     }

     


    


}
