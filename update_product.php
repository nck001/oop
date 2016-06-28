<?php

include_once 'models/product.php';
include_once 'controllers/productController.php';
$page_title = "Update Product";
include_once "header.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$product = new Product();
$product->id = $id;
$product->readOne();


if($_POST){
    $controller = new productController();
    $controller -> update();
}


?>


<div class='right-button-margin'>
    <a href='index.php' class='btn btn-default pull-right'>Read Products</a>
</div>

<form action='update_product.php?id=<?php echo $id; ?>' method='post'>

    <input type='hidden' name='id' value='<?php echo $id; ?>'/>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' value='<?php echo $product->name; ?>' class='form-control' /></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type='text' name='price' value='<?php echo $product->price; ?>' class='form-control' /></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'><?php echo $product->description; ?></textarea></td>
        </tr>

        <tr>
            <td>Category</td>
            <td>
        <tr>
            <td>Category</td>
            <td>
                <select class='form-control' name='category_id'>
                    <option>Please select...</option>
                    <option value="1" <?php if($product->category_id=='1') echo "selected='selected'"; ?> >Fashion</option>
                    <option value="2" <?php if($product->category_id=='2') echo "selected='selected'"; ?> >Electronics</option>
                    <option value="3" <?php if($product->category_id=='3') echo "selected='selected'"; ?> >Motors</option>

                </select>
            </td>
        </tr>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Update</button>
            </td>
        </tr>

    </table>
</form>


<?php
include_once "footer.php";
?>


