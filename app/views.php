<?php 

$page = isset($_GET['page']) ? $_GET['page'] : '';

if($page == 'beranda'){
    include "views/beranda/index.php";
}elseif($page == "terbaru"){
    include "views/terbaru/index.php";
}elseif($page == "populer"){
    include "views/populer/index.php";
}elseif($page == 'contact'){
    include "views/contact/index.php";
}

?>