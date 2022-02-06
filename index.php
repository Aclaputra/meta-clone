<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to meta - Facebook</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <!-- <nav>
      <img src="./meta-logo.png" alt="logo-meta" width="100" height="20">
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./meta-logo.png" alt="logo-meta" width="100" height="20"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard/index.php">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div class="header__container">
        <img src="./ip13pro_mockup.png" alt="mockup" class="left__header__img left__animation" height="900">
        <div class="header__right">
          <h1>Connection is evolving<br> and so are we.</h1>
          <a href="#choose"><button>Learn more</button></a>
          <br><br>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae saepe temporibus aut nam aliquid corporis, velit pariatur eveniet atque obcaecati recusandae autem, enim quia cum quos ab dignissimos laboriosam!</p>
        </div>
      </div>
    </header>

    <main id="choose">
      <div class="container">
        <div class="choose">
          <h1>Choose your Metaverse</h1>
          <div class="top__main">
          <?php
            // $result_dummy = [
            //   [
            //     'title' => 'Fantasy',
            //     'img' => 'tmc1',
            //     'location' => 'metaverse/fantasy'
            //   ],
            //   [
            //     'title' => 'Blockman',
            //     'img' => 'tmc2',
            //     'location' => 'metaverse/blockman'
            //   ],
            //   [
            //     'title' => 'Party',
            //     'img' => 'tmc3',
            //     'location' => 'metaverse/party'
            //   ],
            // ];
            include 'config.php';

            $result = mysqli_query($mysqli, "SELECT * FROM metaverse");

            while($row = mysqli_fetch_array($result)){

              echo '<div class="tmc__container">';
              echo '<div class="tm__content '.$row['image'].'" onclick="location.href=`'.$row['location'].'.php`">';
              echo '<h1>'.$row['title'].'</h1>';
              echo '</div>';
              echo '</div>';
            }
          ?>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>
