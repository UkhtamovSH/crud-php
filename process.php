<?php

// $db = mysqli_connect('localhost', 'root', 'root', 'crud-php');
// $db = mysqli_connect(
//   'localhost',
//   'id17247656_phpcrud777user',
//   '{X0%?xF864NXM[>[',
//   'id17247656_phpcrud777'
// );

$db = mysqli_connect(
  'sql211.epizy.com',
  'epiz_29195914',
  'X3L54QIFTg59',
  'epiz_29195914_mycrudphp'
);



$changeBtn = false;
$title = '';
$description = '';
$id = 0;

// save records
if (isset($_POST['save'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  $insert = "INSERT INTO data (title, description) values('$title','$description')";
  mysqli_query($db, $insert);
  header('location: index.php');
}

// edit records
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $results = mysqli_query($db, "SELECT * FROM data WHERE id='$id'");
  $row = mysqli_fetch_array($results);
  $title = $row['title'];
  $description = $row['description'];
  $id = $row['id'];
  $changeBtn = true;
}

// records from the database
$results = mysqli_query($db, "SELECT * FROM data");


//update button when clicked
if (isset($_POST['update'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $id = $_POST['id'];
  $results = mysqli_query($db, "UPDATE data SET title='$title', description='$description' WHERE id='$id'");
  header('location: index.php');
}


//delete button when clicked
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $results = mysqli_query($db, "DELETE FROM data WHERE id='$id'");
  header('location: index.php');
}
