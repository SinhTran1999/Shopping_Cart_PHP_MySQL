<?php 
// start session, tạo một SESSION để lưu trữ ID 
session_start();

    // header.php
    include("header.php");
    require_once('./php/component.php');
    require_once('./php/CreateDatabase.php');

    // create instance of CreateDB class in file CreateDatabase.php
    $database = new CreateDB("Productdb", "Producttb");

    // Kiểm tra khi ta click vào Add(tức là ở đây có trường name = "add")
    if(isset($_POST['add'])){
        if(isset($_SESSION['cart'])){
            $item_array_id = array_column($_SESSION['cart'], "product_id");

            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart ...!')</script>";
                echo "<script>window.location ='index.php'</script>";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION['cart'][$count] = $item_array;
            }
        }else{
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
        
    }
?>
<?php require_once("php/menu.php")?>
    <div class="container">
        <div class="row text-center py-5">
            <?php 
                $result = $database->getData();
                while($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
        </div>
    </div>
<?php 
    // footer
    include("footer.php");
?>

