<?php
$page_title = "Read Products";
include_once 'controllers/productController.php';
include_once 'models/product.php';
include_once "header.php";

if(isset($_GET['delete_id'])){
    $controller = new productController();
    $controller -> delete();
}


$product = new Product();
$products = $product->readAll();

?>

<div class='right-button-margin'>
    <a href='create_product.php' class='btn btn-default pull-right'>Create Product</a>
</div>


<?php if(!empty($products)){ ?>

    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>


        <?php foreach($products as $product){ ?>


            <tr>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->description ?></td>
                <td><?php echo $product->category_id ?></td>
                <td>
                    <a href='update_product.php?id=<?php echo$product->id?>' class='btn btn-default left-margin'>Edit</a>
                    <a href='index.php?delete_id=<?php echo$product->id?>' class='btn btn-default delete-object'>Delete</a>
                </td>
            </tr>

        <?php  } ?>


    </table>

    <?php
}


else{
    echo "<div>No products found.</div>";
}

?>



<?php
include_once "footer.php";
?>
