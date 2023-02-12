<?php require('./inc/header.php'); 
$result = CreateTable();
if ($result === "1") {
    ?>
    <div class="container">
        <div class="alert alert-success">
            Table created successfully
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
        <p>There was a problem creating the table.</p>
        <p><?php echo $result; ?></p>
    </div>
    <?php
}
?>