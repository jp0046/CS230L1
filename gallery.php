<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/0809ee8fa6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/signup.css">

</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Naruto"
                    style="position: absolute; left: 750px; top: 5px; height:35px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if (isset($_SESSION['uid'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="includes/logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>';
                    }
                    else {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>';
                    }
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<link rel="stylesheet" href="css/gallery.css">

<main>
<body>
    

    <
  
        <h1 style="padding-top: 50px; color: goldenrod;">Gallery</h1>
        <div class="gallery-container">
            <?php
        include_once 'includes/dbhandler.php';
        $sql = "SELECT * FROM reviews ORDER BY upload_date DESC"; 
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo 'SQL Failure';
        }
        else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_assoc($result)){
                echo '<div class= "card">
                    <a href="review.php?id='.$row['pid'].'">
                        <img src= "reviews/'.$row["picpath"].'">
                        <h3>'.$row["title"].'</h3>
                        <p>'.$row["descript"].'</p>
                    </a>
                </div> ';
            }
        }
        ?>
      
    </div>
    <div class="gallery-container">
        <form method="get" action="admin.php">
            <button class="btn btn-lg btn-dark btn-block" style="color: goldenrod" type="submit">Add a Picture!</button>
        </form>
    </div>
</body>
</main>