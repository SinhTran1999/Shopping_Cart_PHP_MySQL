<?php 
    // header.php
    include("header.php");
    require_once('./php/component.php');
    require_once('./php/CreateDatabase.php');

    // create instance of CreateDB class in file CreateDatabase.php
    $database = new CreateDB("");
?>
    <div class="container">
        <div class="row text-center py-5">
            <?php 
                component("Product 1", 500, "./upload/product1.png");
                component("Product 2", 400, "./upload/product2.png");
                component("Product 3", 350, "./upload/product3.png");
                component("Product 4", 200, "./upload/product4.png");
            ?>
        </div>
    </div>
<?php 
    // footer
    include("footer.php");
?>

