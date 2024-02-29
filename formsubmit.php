<?php
  include('config.php');


  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['response'])){

    $data = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'answers' => $_POST['response'],
    ];
    
    $sql = "INSERT INTO puzzle_leads (name,email,answers)
    VALUES ('". $data['name'] ."', '". $data['email'] ."', '". $data['answers'] ."')";
    $mysqli->query($sql);
    $last_inserted_id = $mysqli->insert_id;

    echo 'true';
    // exit;
    // return $last_inserted_id;
  }
  else {
    echo 'false';
  }
?>