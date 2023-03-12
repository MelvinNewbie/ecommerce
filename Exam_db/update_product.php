<?php

    // update_product.php

include_once "conn_db.php";

if(isset($_POST['item_id'])){
    $table = "products";
    
    $p_item_id  = $_POST['item_id'];
    $p_item_name  = $_POST['item_name'];
    $p_item_price = $_POST['item_price'];

    $fields = array( 'item_name' => $p_item_name
                    , 'item_price' => $p_item_price
                   );
    $filter = array( 'item_id' => $p_item_id );
    
   
   if( update($conn, $table, $fields, $filter )){
       header("location: product_display.php?update_status=success");
       exit();
   }
    else{
        header("location: product_display.php?update_status=failed");
        exit();
    }
}
else{
    $item_id = $_GET['item_id'];
    $product = query($conn, "SELECT item_name, item_price FROM products WHERE item_id=$item_id AND item_status='A'");

    if(count($product) == 0){
        header("location: product_display.php");
        exit();
    }

    $item_name = $product[0]['item_name'];
    $item_price = $product[0]['item_price'];
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Update Product</h1>
                <form action="update_product.php" method="post">
                    <input type="hidden" name="item_id" value="<?php echo $_GET['item_id']; ?>">
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $item_name; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="item_price">Item Price</label>
                        <input type="number" class="form-control" id="item_price" name="item_price" value="<?php echo $item_price; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>
