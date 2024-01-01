<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#"><b style="color: lightblue;">List Of Student </b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        
                    </ul>
                    <?php
                    if (isset($_SESSION['logged_in'])) {
                        $userID = $_SESSION['id'];

                        $getUser = $conn->prepare("SELECT fname FROM users WHERE id = ?");
                        $getUser->execute([$id]);

                        foreach ($getUser as $user) { ?>
                            <a class="nav-link me-3" href="process.php?logout">Welcome <b><?= $user['fname'] ?></b>, Logout</a>
                        <?php } ?>
                    <?php } else { ?>
                        <a class="nav-link me-3" href="register.php"><h2>Login</h2></a>
                    <?php } ?>

                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        
        
      </div>
    </div>

  

    
</body>
</html>