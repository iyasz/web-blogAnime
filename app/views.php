<?php 

$page = isset($_GET['page']) ? $_GET['page'] : '';

if($page == 'beranda'){
    include $base_url;
}

?>