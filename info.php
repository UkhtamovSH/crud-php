<?php include('process.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .card {
    margin: 30px auto;
    min-width: 100px;
    min-height: 100px;
    border-radius: 40px;
    box-shadow: 5px 5px 30px 7px rgb(0 0 0 / 25%), -5px -5px 30px 7px rgb(0 0 0 / 22%);
    cursor: pointer;
    transition: 0.4s;
    display: inline-block;
    padding: 30px;
  }
</style>

<body>


  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <div class="card">
      <p class="title">id: <?php echo $row['id'] ?></p>
      <p class="title">title: <?php echo $row['title'] ?></p>
      <p class="description">description: <?php echo $row['description'] ?></p>
    </div>
  <?php }; ?>
</body>

</html>