<?php
include 'dbcontroller.php';
$db_handle = new DBController();

$query = $db_handle->runQuery("SELECT * FROM tblproduct WHERE id = " . $_GET["id"]);
if (! empty($query)) {
        ?>  
            <div class="preview-image">
            <img src="<?php echo $query[0]["image"] ; ?>" />
        </div>
<div class="product-info">
                <div class="product-title"><?php echo $query[0]["name"] ; ?></div>
                <ul>
  
                <div><?php echo $query[0]["price"] ; ?> USD</div>
                <div><button class="btn-info">View More</button><button class="btn-info">Add to Cart</button></div>
            </div>      
<?php
}
?>