<?php

// class Users {
//     private $con;
//     private $users_id;
//     private $phonenumber;
//     private $username;
//     private $dateCreated;
//     private $dateUpdated;


//     /**
//      * Class constructor.
//      */
//     public function __construct($con, $users_id)
//     {
//         $this->con = $con;
//         $this->users_id = $users_id;
        
//         $sql = mysqli_query($this->con, "SELECT * FROM users WHERE users = '$this->users_id'");

//         $users = $sql->fetch_array();
//         $this->phonenumber = $users['phonenumber'];
//         $this->username = $users['username'];
//         $this->dateCreated = $users['dateCreated'];
//         $this->$dateUpdated = $users['dateUpdated'];


//     }

//     public function getUserId() {
//         return $this->user_id;
//     }

//     public function getPhonenumber() {
//         return $this->phonenumber;
//     }

//     public function getUsername() {
//         return $this->username;
//     }

//     public function getDateCreated() {
//         return $this->dateCreated;
//     }

//     public function getDateUpdated() {
//         return $this->dateUpdated;
//     }

    
// }


?>