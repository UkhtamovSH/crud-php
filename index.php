<?php include('process.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>
<style>
  table {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: 1px;
    border-color: #a9c6c9;
    border-collapse: collapse;
  }

  table th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #a9c6c9;
  }

  table td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #a9c6c9;
  }

  .table-flex {
    display: flex;
    justify-content: center;
    width: 100%;
  }

  p {
    margin-bottom: 0;
  }
</style>

<body>
  <div class="table-flex">
    <div class="">
      <table>
        <thead>
          <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
              <th><?php echo $row['id'] ?></th>
              <th><?php echo $row['title'] ?></th>
              <th><?php echo $row['description'] ?></th>
              <th><a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a></th>
              <th><a class="del_btn" href="index.php?delete=<?php echo $row['id']; ?>">Delete</a></th>
            </tr>
          <?php }; ?>
        </tbody>
      </table>

      <form action="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>Title</p>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <p>Description</p>
        <input type="text" name="description" value="<?php echo $description; ?>">
        <div class="" style="margin-top: 10px;">
          <?php if ($changeBtn == false) : ?>
            <button type="submit" name="save">Save</button>
          <?php else : ?>
            <button type="submit" name="update">Edit</button>
          <?php endif; ?>
        </div>
      </form>
    </div>
  </div>

</body>

</html>