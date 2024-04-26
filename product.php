<?php
include 'product.search.php';
include 'load.template.php';
load::template('_header');

// Checking tha the product name has value using isset function if it's has any value 
// Calling the function for searched product name details.
if(isset($_POST['product_name'])){
    $product = $_POST['product_name'];
    $result = product::productsearch($product);
} 

//If result has the value then geing data from db and stored in variables using tha data showing the data to he user. 
if($result){
    ?> 
    <h2 style="text-align: center;">Data Fetched Successfully!</h2>
    <?php
    if(isset($result['image'])){
        $image = $result['image'];
    }else{
        $image = "https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/800px-No-Image-Placeholder.svg.png";
    }
    if(isset($result['description'])){
        $desc = $result['description'];
    }
    else{
        $desc = "No more details awailable.";
    }
    $title = $result['product_name'];
    $price = $result['price'];
    ?>
<div class="product-list">
<div class="product">
            <img src= "<?php echo $image; ?>" alt="Product Image">
            <h2><?php echo $title ?></h2>
            <p><?php echo $desc ?></p>
            <p>Price: ₹<?php echo $price ?></p>
        </div>
        <div class="product">
            <img src= "<?php echo $image; ?>" alt="Product Image">
            <h2><?php echo $title ?></h2>
            <p><?php echo $desc ?></p>
            <p>Price: ₹<?php echo $price ?></p>
        </div>
        <div class="product">
            <img src= "<?php echo $image; ?>" alt="Product Image">
            <h2><?php echo $title ?></h2>
            <p><?php echo $desc ?></p>
            <p>Price: ₹<?php echo $price ?></p>
        </div>
    </div>
<?php
}

//If here is no data for user searched product providding else condition.
else{?>
    <h2 style="text-align: center;">Oops! No Data Available....</h2>
    <?php
}
?>
 
