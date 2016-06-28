<?php

//get product model
include_once("models/product.php");

class productController {
    public $product;

    public function __construct()
    {

        $this->product = new Product();

    }

    public function store()
    {


        // set product property values
        $this->product->name = $_POST['name'];
        $this->product->price = $_POST['price'];
        $this->product->description = $_POST['description'];
        $this->product->category_id = $_POST['category_id'];

        // create the product
        if($this->product->create()){
            echo "<div class=\"alert alert-success alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Product was created.";
            echo "</div>";
        }

        // if unable to create the product, tell the user
        else{
            echo "<div class=\"alert alert-danger alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Unable to create product.";
            echo "</div>";
        }
    }

    public function update(){



        // set product property values
        $this->product->id = $_POST['id'];
        $this->product->name = $_POST['name'];
        $this->product->price = $_POST['price'];
        $this->product->description = $_POST['description'];
        $this->product->category_id = $_POST['category_id'];



        // update the product
        if($this->product->update()){
            header("Refresh:2");
            echo "<div class=\"alert alert-success alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Product was updated.";
            echo "</div>";
        }

        // if unable to update the product, tell the user
        else{
            echo "<div class=\"alert alert-danger alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Unable to update product.";
            echo "</div>";
        }
    }

     public function delete(){

             // set product id to be deleted
             $this->product->id = $_GET['delete_id'];

             // delete the product
             if($this->product->delete()){
                 echo "<div class=\"alert alert-success alert-dismissable\">";
                 echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
                 echo "Object was deleted.";
                 echo "</div>";
             }

             // if unable to delete the product
             else{
                 echo "<div class=\"alert alert-danger alert-dismissable\">";
                 echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
                 echo "Unable to delete object.";
                 echo "</div>";
             }
         }




}

?>