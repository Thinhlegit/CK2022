<?php
include 'connect.php'; 

if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}

function insert(){
  global $connect;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];

  $query = "INSERT INTO users VALUES('', '$name', '$email', '$gender')";
  mysqli_query($connect, $query);
  echo "Inserted Successfully";
}

function edit(){
  global $connect;

  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];

  $query = "UPDATE users SET name = '$name', email = '$email', gender = '$gender' WHERE id = $id";
  mysqli_query($connect, $query);
  echo "Updated Successfully";
}

function delete(){
  global $connect;
  $MaDDL = $_POST["MaDDL"];

  $query = "DELETE FROM `diemdl` WHERE MaDDL = $MaDDL";
  mysqli_query($connect, $query);
  echo "Deleted Successfully";
}
