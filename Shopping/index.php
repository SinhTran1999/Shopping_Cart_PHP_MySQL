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
                    
                }
            ?>
        </div>
    </div>
<?php 
    // footer
    include("footer.php");
?>

