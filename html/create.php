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
    <script>
        $(function () {
            setTimeout(function() {
                window.location.replace("index.php");
            }, 5000);
        });
    </script>
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