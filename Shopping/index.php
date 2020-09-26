<?php 
    // header.php
    include("header.php");
    require_once('./php/component.php');
    require_once('./php/CreateDatabase.php');

    // create instance of CreateDB class in file CreateDatabase.php
    $database = new CreateDB("Productdb", "Producttb");
?>
    <div class="container">
        <div class="row text-center py-5">
            <?php 
                $result = $database->getData();
                while($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image']);
                }
            ?>
        </div>
    </div>
<?php 
    // footer
    include("footer.php");
?>

