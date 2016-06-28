<?php
include_once 'controllers/productController.php';
$product = new productController();
$page_title = "Create Product";
include_once "header.php";


if($_POST){
    $product->store();
}

?>

<div class='right-button-margin'>
    <a href='index.php' class='btn btn-default pull-right'>Read Products</a>
</div>






<!-- HTML form for creating a product -->
<form action='create_product.php' method='post'>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' /></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>


        <tr>
            <td>Category</td>
            <td>
                <select class='form-control' name='category_id'>
                    <option>Select category...</option>
                    <option value='1'>Fashion</option>
                    <option value='2'>Electronics</option>
                    <option value='3'>Motors</option>
                </select>

            </td>
        </tr>


        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>

    </table>
</form>




<?php
include_once "footer.php";
?>
