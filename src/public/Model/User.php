<?php

class User{
   public int $UserID;
   public string $Username;
   public string $Password;

   public function __construct( int $UserID,string $Username,string  $Password){
    $this->UserID = $UserID;
    $this->Username = $Username;
    $this->Password = $Password;
   }
  
}