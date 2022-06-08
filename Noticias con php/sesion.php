<?php
session_start();
if($_SESSION){
}else{
header("Location: index.php");
}
?>