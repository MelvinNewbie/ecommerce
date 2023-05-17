<!DOCTYPE html>
<html>
<head>
    <title>COCO's KITCHEN TERMS and SERVICE SERVICE PAGE</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body {
            /* background: linear-gradient(to bottom, #009efd, #2af598); */
            background-image: url('assets/Cell_waneella.gif');
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh
        }

        .nav-link {
            color: white;
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
        .blur {
            backdrop-filter: blur(20px);
            background-color: rgba(255, 255, 255, 0.5);
        }

    </style>

</head>
<body>
     <!--Navigation bar-->
     <!-- WAG NYU NA GALAWIN ITONG NAVIGATION BAR -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <div class="container mt-3 mb-4">
            <a class="navbar-brand" href="#" style="color: White; font-size: 20px; font-weight: 600; font-family: Georgia, 'Times New Roman', Times, serif; ">
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

    <div class="container" style="color: white;">
        <div class="row">
            <div class="col-md-12 text-center border border-info bg-transparent blur">
                <h2>Welcome to COCO's KITCHEN </h2>
                <h5>where you can order and have our delicious food delivered right to your doorstep!</h5>
                <p class="mt-3">These terms and conditions outline the rules and regulations for the use of our website and the services we provide. 
                    By accessing this website and/or using our services, you accept and agree to be bound by these terms and conditions as well as our Privacy Policy. 
                    If you do not agree to these terms and conditions, you may not access or use our website or services.</p>
            </div>

        </div>
        <div class="row mt-4 border border-danger blur bg-transparent">
            <h2 class="border border-danger">TERMS & CONDITIONS</h2>
            <h5>Effective January 2023</h5>
            <h3 class="mt-3 border border-danger">Ordering and Payment</h3>
            <p class="ms-2">When placing an order through our website, 
                you may pay either with cash on delivery or through Gcash online payment. 
                By placing an order, you represent that you are authorized to use the selected payment method, 
                and you authorize us to charge your selected payment method for the total amount of your order, 
                including any applicable taxes, fees, and delivery charges.</p>

            <h3 class="mt-3 border border-danger">Delivery</h3>
            <p class="ms-2">We will make every effort to deliver your order within the estimated delivery time provided when you place your order, 
                but please note that delivery times are estimates only and are not guaranteed. 
                You are responsible for providing accurate delivery information, including your address and contact details, 
                and for ensuring that someone is present to receive the order upon delivery. 
                If you are not available to receive your order at the designated delivery address, 
                we may leave your order with a neighbor, security guard, 
                or other person you have authorized to receive your order.</p>

            <h3 class="mt-3 border border-danger">Returns and Refunds</h3>
            <p class="ms-2">Due to the nature of our products and for health and safety reasons, 
                we do not accept returns or offer refunds once the food has been delivered. 
                If you receive an incorrect or damaged item, please contact us immediately upon receipt 
                to discuss a replacement or refund. We reserve the right to refuse returns or refunds 
                if we believe that the request is not warranted.</p>

            <h3 class="mt-3 border border-danger">Intellectual Property</h3>
            <p class="ms-2">All content on our website, including text, graphics, logos, images, and software, 
                is our property or the property of our affiliates, licensors, or suppliers, and is protected by 
                copyright and other intellectual property laws. You may not reproduce, modify, distribute, or 
                otherwise use any content from our website without our prior written consent.</p>

            <h3 class="mt-3 border border-danger">Disclaimer of Warranties</h3>
            <p class="ms-2">We make no representations or warranties of any kind, express or implied, 
                regarding our website or the information, products, or services provided through our website. 
                To the fullest extent permitted by law, we disclaim all warranties, express or implied, 
                including but not limited to implied warranties of merchantability, 
                fitness for a particular purpose, and non-infringement.</p>

            <h3 class="mt-3 border border-danger">Limitation of Liability</h3>
            <p class="ms-2">We will not be liable to you or any third party for 
                any indirect, consequential, incidental, punitive, or special damages arising out of or in connection 
                with your use of our website or the information, products, or services provided through our website. 
                Our total liability to you for any direct damages arising out of or in connection with your use of our website 
                or the information, products, or services provided through our website will not exceed the total amount paid by you for your order.</p>

            <h3 class="mt-3 border border-danger">Indemnification</h3>
            <p class="ms-2">These terms and conditions will be governed by and construed in accordance with the 
                laws of the jurisdiction in which our business is registered, without giving effect to any 
                principles of conflicts of law. Any disputes arising out of or in connection with these terms and conditions 
                will be resolved exclusively in the courts of the jurisdiction in which our business is registered.</p>

            <h3 class="mt-3 border border-danger">Collection of User Data</h3>
            <p class="ms-2">We may collect certain personal information from you in order to provide our services and improve your user experience on our website. 
                This information may include your name, email address, telephone number, billing and delivery addresses, and payment information.</p>
            <p class="ms-2 mt-1">We may also collect non-personal information such as your IP address, browser type, and device information, 
                which is used to analyze and improve the performance of our website and services. We may use cookies 
                and other tracking technologies to collect this information, and you may opt-out of such tracking by adjusting your browser settings.</p>
            <p class="ms-2 mt-1">We may use your personal information to communicate with you about your orders and account, to respond to your inquiries, 
                and to send you marketing communications if you have opted-in to receive them. We will not share your personal information with third parties 
                except as necessary to provide our services, comply with legal obligations, or enforce our rights.</p>
            <p class="ms-2 mt-1">By using our website and services, you consent to the collection and use of your personal information as described in this section. 
                If you wish to access, correct, or delete your personal information, please contact us</p>

            <h3 class="mt-3 border border-danger">Modifications to Terms and Conditions</h3>
            <p class="ms-2">We reserve the right to modify these terms and conditions at any time, without notice to you.</p>
        </div>
        <div class="row mt-3 border border-dark bg-transparent blur text-center">
           <h5> COCO'S KITCHEN</h5>
        </div>
    </div>

</body>
<script src="bootstrap/js/bootstrap.js"></script>
</html>