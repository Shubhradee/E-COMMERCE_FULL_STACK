


<?php

if(isset($_POST['submit'])){

        include 'config.php'; //this line use for configuration database and insert.php file( xamp server-Admin)

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    // print_r( $product_image);
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
        $img_des = "uploadimage/".$image_name;

    move_uploaded_file($image_loc , "uploadimage/".$image_name);

    $product_category = $_POST['Pages'];

    $result=mysqli_query($con,"SELECT `Pname` from `tblproduct` where `Pname`='$product_name'");
    if(mysqli_num_rows($result)==0)
    {// insert product
    mysqli_query($con , " INSERT INTO `tblproduct`(`Pname`, `Pprice`, `Pimage`, `Pcategory`) VALUES ('$product_name' , '$product_price' , '$img_des' , '$product_category' ) ");
    echo "<script>
    alert('Product added!');
    window.location.href='index.php';</script>";
    }
    else
    {
        echo "<script>
        alert('Product already present!');
        window.location.href='index.php';</script>";
    }
}


?>

