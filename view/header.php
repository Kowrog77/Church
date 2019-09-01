<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->


  <title><?=$pageName?></title>
  <link rel="shortcut icon" type="./image/png" href="./images/mt_comfort_favacon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
  <div class="container rounded">

    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="index.php">
        <img class="logo rounded" src="./images/logo.jpg" alt=" Mount Comfort Bible Church">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sermon_display.php">Sermons</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown- " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Ministries
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="ministries.php?type=1">Men's</a>
              <a class="dropdown-item" href="ministries.php?type=2">Women's</a>
              <a class="dropdown-item" href="ministries.php?type=3">Youth</a>
              <a class="dropdown-item" href="ministries.php?type=4">Worship</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="ministries.php?type=5">Misc.</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Events_display.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <a href="https://www.facebook.com/pages/Mount-Comfort-Church/110884565642309" target="_blank">
          <img src="./images/facebook.png" class="socialMedia" alt="Facebook">
        </a>
        <a href="https://www.youtube.com/channel/UC4nf_LTiMTZ2E7D3Mv2dKUQ" target="_blank">
        <img src="./images/youtubeIcon.png" class="socialMedia" alt="Youtube"></a>
      </div>
    </nav>