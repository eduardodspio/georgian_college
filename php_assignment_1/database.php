<?php
  class Database{
    
    private $connection;
  
    function __construct(){
      
      $this->connect_db();
    }
  
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'db_php_1');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }
    public function create($pet_name, $pet_breed, $pet_gender, $spayed_neutered, $pet_dob, $pet_weight){
      $sql = "INSERT INTO pet_health_cover (pet_name, pet_breed, pet_gender, spayed_neutered, pet_dob, pet_weight) VALUES ('$pet_name','$pet_breed','$pet_gender','$spayed_neutered','$pet_dob','$pet_weight')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read($id=null){
		    $sql = "SELECT * FROM pet_health_cover";
		    if($id){
          $sql .= " WHERE id=$id";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
