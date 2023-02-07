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
        <p>There was a problem deleteing the record</p>
        <p><?php echo $result; ?></p>
    </div>
    <?php
}
?>