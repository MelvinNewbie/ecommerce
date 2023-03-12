
<html>
<?php include_once "conn_db.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>List of Products</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Add Product</h3>
                <?php
                     if(isset($_GET['new_record'])){
                            switch($_GET['new_record']){
                                case "added": echo "<div class='alert alert-success'>product Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>product Not Added</div>";
                                      break;
                                        
                            }
                       }
                ?>

                <form action="add_product.php" method="post">
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="item_price">Item Price</label>
                        <input type="number" class="form-control" id="item_price" name="item_price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>

            <div class="col-8">
                <h1>List of Products</h1>
                <?php
                    $product_list = query($conn, "SELECT item_id, item_name, item_price FROM products WHERE item_status='A'");
                    echo "<hr>";
                        if(isset($_GET['update_status'])){
                            switch($_GET['update_status']){
                                case "success": echo "<div class='alert alert-success'>Product Updated.</div>";
                                    break;
                                case "failed":  echo "<div class='alert alert-danger'>Product Failed to be updated.</div>";
                                    break;
                            }
                        }
                    echo "<hr>";
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<th>Product Name</th>";
                    echo "<th>Price</th>";
                    echo "<th>Action</th>";
                    echo "<th>Action</th>";
                    echo "</thead>";
                    foreach($product_list as $key => $row){
                        echo "<tr>";
                        echo "<td>" . $row['item_name'] . "</td>";
                        echo "<td>" . $row['item_price'] . "</td>";

                        echo "<td> <a class='btn btn-success' href='update_product.php?item_id=". $row['item_id'] ."'> Update </a> </td>";

                        echo "<td> <a class='btn btn-danger' href='delete_product.php?item_id=". $row['item_id'] ."'> Delete </a> </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>
