<?php include ('connect_database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StandAlone Garage : Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <!--Nav--->
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><h6 class="nav-link px-2 text-white">StandAlone Garage</h6></li>
          <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="services.php" class="nav-link px-2 text-white">Services</a></li>
          <li><a href="shops.php" class="nav-link px-2 text-white">Shops</a></li>
          <li><a href="buycars.php" class="nav-link px-2 text-white">Buy Honda Cars</a></li>
          <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="login.php" class="btn btn-success">Login</a>
          <a href="register.php" class="btn btn-primary">Register</a>
        </div>
      </div>
        <!--End Nav--->
<body>
            <!--Forms--->

      <form action="insertregisters.php" method="post">
        <div class="container">
            <div class="form-group">
                <h6 class="mb-1" style="color: white;">Usernane:</h6>
            <input type="text" class="form-control" name="username" placeholder=""> 
            </div>
            <div class="form-group">
                <h6 class="mb-1" style="color: white;">Name:</h6>
            <input type="text" class="form-control" name="Name" placeholder=""> 
            </div>
            <div class="form-group">
                <h6 class="mb-1" style="color: white;">E-Mail:</h6>
            <input type="text" class="form-control" name="Email" placeholder=""> 
            </div>
            <div class="form-group">
                <h6 class="mb-1" style="color: white;">Password:</h6>
            <input type="text" class="form-control" name="Password" placeholder=""> 
            </div>
            <div class="form-group">
                <h6 class="mb-1" style="color: white;">Role:</h6>
            <select name="Role" id="">
              <option value="employee">Employee</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
    

    




















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>