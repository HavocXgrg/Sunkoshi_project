<?php
if ($_POST) {
    $pname = $_POST['pname'];
    $pimage = $_POST['pimage'];
    $pdescription = $_POST['pdescription'];

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "mydatabase";

    //establish the connection with database
    $con = mysqli_connect($server, $user, $password, $database);
    //write necessary query

    $sql = "INSERT INTO phone(Product_Name, Product_Image, Product_Description) VALUES('$pname', '$pimage','$pdescription')";

    //ececute the query

    $res = mysqli_query($con, $sql);
    if ($res == true) {
        echo "success";
    } else
        echo "Fail";
}

?>
<?php
