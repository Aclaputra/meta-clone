<?php
    include("../config.php");

    //check data jika ingin di update
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $image = $_POST['image'];
        $location = $_POST['location'];

        //update siswa data
        $result = mysqli_query($mysqli, "UPDATE metaverse SET title='$title',image='$image',location='$location' WHERE id=$id");
        echo $result;
        // Redirect ke halaman index
        header("Location: index.php");
    }
    $id = $_GET['id'];
?>
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
              <a class="nav-link" href="../dashboard/index.php">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
        echo $id;
        $result_fetch = mysqli_query($mysqli, "SELECT * FROM metaverse WHERE id=$id");
        while($row = mysqli_fetch_array($result_fetch)){
            $id = $row['id'];

    ?>
    <form class="m-auto mt-4" style="width: 80%;" action="update.php" method="post" name="form1">
        <div class="mb-4">
          <h1>Update Metaverse</h1>
        <label for="exampleInputEmail1" class="form-label">Title:</label>
        
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Metaverse Title (ex: Fantasy)" name="title" value="<?php echo $row['title'];?>">
        </div>
        
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image:</label>
        
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Metaverse Image (ex: tmc1)" name="image" value="<?php echo $row['image'];?>">
        </div>
        
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Location:</label>
        
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Redirect to.. (ex: metaverse/fantasy)" name="location" value="<?php echo $row['location'];?>">
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <input class="btn btn-primary m-2 p-2 px-4 shadow-lg rounded-pill m-auto" type="submit" name="update" value="Submit Here">
    </form>
    <?php
        }

    ?>
</body
</html>