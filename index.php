<?php
$title ="Home";
ob_start();
?>

    <h1>Ici Home</h1>
 

<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'?>





