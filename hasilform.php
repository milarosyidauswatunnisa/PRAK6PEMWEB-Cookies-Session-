<?php



$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

if($uname=="mila" && $pwd=="milamila"){
    $_SESSION["user"] =$uname;
    header("Location: manajemenfile.php");
}
else{
    session_unset();
session_destroy();
    echo "Gagal Login";
}

?>