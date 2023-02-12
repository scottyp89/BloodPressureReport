<?php require('./inc/header.php'); 
$id = $_GET["id"];
$result = DeleteData($id); 
if ($result === "1") {
    ?>
    <div class="container">
        <div class="alert alert-success">
            Record deleted successfully
        </div>
    </div>
    <div class="container">
        <p>Redirecting to the main page. If you aren't redirected automatically, please click <a href="index.php">here</a>.</p>
    </div>
    <meta http-equiv="refresh" content="3;url=http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
    <?php
} else {
    ?>
    <div class="alert alert-danger">
        <p>There was a problem deleteing the record</p>
        <p><?php echo $result; ?></p>
    </div>
    <?php
}
?>