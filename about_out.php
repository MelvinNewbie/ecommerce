<html lang="en">
<head>
    <title>COCO's KITCHEN ABOUT PAGE</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style type="text/css">
        body {
            background-image: url('assets/Cell_waneella.gif');
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh
        }
        .nav-link {
            font-size: larger;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
        }
        .nav-link:hover {
            text-shadow: 0 0 20px white;
        }
        .nav-item {
            margin-right: 30px;
        }
        
        .signup-form h2 {
            font-family: 'Times New Roman', Times, serif;
        }

        .signup-form .form-control {
            
            height: 40px;
            font-size: 15px;
            margin-bottom: 20px;
        }
        .blur {
            backdrop-filter: blur(20px);
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>
    <!--Navigation bar ni melvs-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <div class="container mt-3">
            <a class="navbar-brand" href="#" style="color: White; font-size: 20px; font-weight: 600; font-family: Georgia, 'Times New Roman', Times, serif;">
                <img src="assets/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
                COCO's KITCHEN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav ms-auto" style="font-weight: bolder;">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#registerModal">MENU</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="service_out.php">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about_out.php">ABOUT</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal for my bbgurl -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" style="font-family: Georgia, 'Times New Roman', Times, serif;">
        <div class="modal-dialog">
            <div class="modal-content bg-transparent blur border border-danger">
                <div class="modal-header"  style="background: orange;">
                    <h5 class="modal-title" id="registerModalLabel">Kindly Log In Before Proceeding</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-white"  style="font-size: 20px;">
                    Do you want to Register or go to Log In?
                </div>
                <div class="modal-footer">
                    <a href="registerPage.php" class="btn btn-outline-primary">Register?</a>
                    <a href="index.php" class="btn btn-outline-success">Log In??</a>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="color: White; font-size: 20px; font-weight: 600; font-family: Georgia, 'Times New Roman', Times, serif;">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-3 bg-transparent border border-info blur">
                <h2 class="">ABOUT US</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5 mb-3 bg-transparent border border-info blur">
            <h2>Welcome to Coco’s Kitchen! <h2>
            <h4>
                We are a tapsilogan located in the charming town of Camalig in Albay, Philippines. <br>
                Our mission is to provide you with delicious, budget-friendly meals that will leave you satisfied and coming back for more.<br>
                At Coco’s Kitchen, we offer a variety of silog meals, short orders, appetizers, soup, sizzling plates, beverages, drink set promos, and extras such as plain and java rice and eggs. <br>
                Whether you prefer dining in, taking out, or having your food delivered, we’ve got you covered.
                To make ordering even more convenient, we now offer online ordering through our website at coco’skitchen.com.<br>
                Simply select your orders, choose a mode of payment (COD or Gcash), and send us your location. <br>
                We accept orders from 8am to 8pm, 7 days a week.
                At Coco’s Kitchen, we are committed to providing you with quality food that will make you want to order again and again. <br>
                So why not give us a try? Visit our Facebook page at Coco’s Kitchen or contact us at 09636295321 or coco’skitchen@gmail.com to learn more.
            </h4>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/js/bootstrap.js"></script>
</html>