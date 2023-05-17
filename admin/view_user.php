<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- Link to Bootstrap CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head>

<body class="bg-dark text-light">
    <div class="container-fluid bg-light text-dark">   
        <div class="row">
            <div class="col-12">
                <h3 class="display">
                    USERS ACCOUNT
                </h3>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <div class="input-group mb-3 w-50">
                    <input type="search" placeholder="Search for an Item" name="searchkey" class="form-control" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>

            <div class="col-12 p-3 mb-2 bg-transparent border border-dark" style="color: black;">
               <h3>Records</h3>
                <?php

                    if (isset($_POST['searchkey'])) {
                    $searchkey = $_POST['searchkey'];
                    $userlist = query($conn, "select user_id
                                        , firstname
                                        , lastname
                                        , email
                                        , username
                                        , password
                                        , address
                                        , contact_number 
                                        , user_type
                                        , user_status
                                        , last_update
                                        FROM users 
                                        WHERE firstname LIKE '%{$searchkey}%' OR lastname LIKE '%{$searchkey}%'
                                        ORDER BY user_status, user_type DESC");
                    }else{
                        $userlist = query($conn, "select user_id
                                        , firstname
                                        , lastname
                                        , email
                                        , username
                                        , password
                                        , address
                                        , contact_number 
                                        , user_type
                                        , user_status
                                        , last_update
                                        FROM users 
                                        ORDER BY user_status, user_type DESC");
                    }

                        echo "<table class='table table-bordered'>";
                        echo "<thead>";
                            echo "<th>Fullname</th>";
                            echo "<th>Username</th>";
                            echo "<th>Password</th>";
                            echo "<th>Address</th>";
                            echo "<th>contact Number</th>";
                            echo "<th>User Type</th>";
                            echo "<th>User Status</th>";
                            echo "<th>Last Update</th>";
                            echo "<th>Update</th>";
                            echo "<th>Remove</th>";
                            

                        echo "</thead>";
                    foreach($userlist as $key => $row){
                        echo "<tr>";
                            echo "<td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['contact_number'] . "</td>";
                            echo "<td>" . $row['user_type'] . "</td>";
                            echo "<td>" . $row['user_status'] . "</td>";
                            echo "<td>" . $row['last_update'] . "</td>";

                            echo "<td> <a class='btn btn-success' href='view_user_submit.php?password=" . $row['password'] . "&username=" . $row['username'] . "&email=" .$row['email'] . "&firstname=" .$row['firstname'] . "&lastname=" .$row['lastname'] .  "&user_id=". $row['user_id'] . "&address=". $row['address'] . "&contact_number=" . $row['contact_number'] . "&user_type=" . $row['user_type'] . "' > 🔘 </a> </td>";
                            echo "<td> <a class='btn btn-danger' href='view_user_delete.php?user_id=". $row['user_id'] ." ' > 🔘 </a> </td>";
                            
                        echo "</tr>";
                    }
                    echo "</table>";
                
                ?>
                
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <!-- Link to jQuery -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <!-- Link to Bootstrap JS -->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</body>

</html>