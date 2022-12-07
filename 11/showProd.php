<?php
$query = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
if (! empty($query)){
    foreach ($query as $key => $value) {?>
    <div class="image">
        <img src="<?php echo $query[$key]["image"] ; ?>" />
    data-id=<?php echo $query[$key]["id"] ; ?>
<a href='get-peoduct-info.php?id=<?php $query[$key]["id"] ; ?>'target="_blank"> click</a>}
<a target="popup"
onclick="window.open('get-product-info.php?id=<?php echo$query[$key]["id"] ; ?> </a>}