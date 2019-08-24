<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title><?=$pageName?></title>
  <link rel="shortcut icon" type="favicon" href="<?=$favicon?>">
  <link rel="stylesheet" href="<?=$styles?>">
</head>
<body>
  
<div  class="container rounded" style="width:75%; height:25%;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="<?=$index?>">
        <img class="logo rounded" src="<?=$logo?>" alt=" Mount Comfort Bible Church">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=$index?>"> Main Home </a>
          </li>
          <?php
          if(isset($_SESSION['adminvalid'])){ ?>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown- " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Add Info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=$sermonLink?>">Sermons</a> 
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=$eventLink?>">Events</a>
          <a class="dropdown-item" href="<?=$boardLink?>">Board Info</a>
         
          
        </div>
      </li>
 
         
         
          
            
            <li class="nav-item">
            <a class='nav-link' href='<?=$logout?>'> Logout</a>
          </li>
          <?php }
         
          ?>
         
        </ul>
     </div>
      
    </nav>
     