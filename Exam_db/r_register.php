<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <!--Navigation bar ni melvs-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container mt-3">
            <a class="navbar-brand" href="#" style="color: White; font-size: 20px; font-weight: 600; font-family: Georgia, 'Times New Roman', Times, serif;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav ms-auto" style="font-weight: bolder;">
                <li class="nav-item">
                        <a class="nav-link active " href="l_logout.php">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="#">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="#u_user_display.php">USERS</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="product_display.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="o_order_display.php">ORDER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disable " href="l_logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h3>Register</h3>  
                <?php
                     if(isset($_GET['new_record'])){
                            switch($_GET['new_record']){
                                case "added": echo "<div class='alert alert-success'>User Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>User Not Added</div>";
                                      break;
                            }
                       }
                ?>
                <form action="r_submit.php" method="post">
                    <div class="mb-3">
                        <label for="new_username" class="form-label">Username</label>
                        <input type="text" id="new_username" required name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password</label>
                        <input type="password" required id="new_password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_fullname" class="form-label">Fullname</label>
                        <input type="text" required id="new_fullname" name="fullname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" required id="new_address" name="address" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="contac_number" class="form-label">Contact Number</label>
                        <input type="number" required id="new_contact_number" name="contact_number" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary float-end" value="Register">
                    <a class="btn btn-info me-5" href="l_login_page.php">back</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>