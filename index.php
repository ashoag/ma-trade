<?php include './head.php'; ?>
<?php include './header.php'; ?>

<!--/header-->
<?php

if (isset($pages)) {

    if ($pages =='about_us') {
        include './pages/about_us.php';
    }
    else if ($pages =='service') {
        include './pages/services.php'; 
        
    }else if($pages=='portfolio'){
        include './pages/portfolio_content.php';
    }
    else if($pages=='contact'){
        include './pages/contact_content.php';
    }
} else {
    include './pages/main.php';
}
?>

<?php include './footer.php'; ?>


