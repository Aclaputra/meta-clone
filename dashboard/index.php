<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../meta-logo.png" alt="logo-meta" width="100" height="20"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php">Create New +</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main id="choose">
        <div class="row mx-auto p-4">
            <?php
                include '../config.php';

                $result = mysqli_query($mysqli, "SELECT * FROM metaverse");

                while($row = mysqli_fetch_array($result)){
                $id = $row['id'];

                echo '<div class="col-sm-6">';
                echo '<div class="card mb-2">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$row['id'].'. Title - '.$row['title'].'</h5>';
                echo '<img src="./img/'.$row['image'].'.jpg" height="50"></img>';
                echo '<p class="text-dark">Image: '.$row['image'].'</p>';
                echo '<p class="card-text text-dark">Location: '.$row['location'].'</p>';
                echo '<a href="update.php?id= '.$id.'" class="btn btn-primary" name="update">Update</a>';
                echo '<a href="delete.php?id= '.$id.'" class="btn btn-warning mx-2" name="delete">delete</a>';
                echo '<input type="hidden" name="id" value="'.$row['id'].'">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                }
            ?>
        </div>
    </main>
    <?php

    ?>
</body>
</html>