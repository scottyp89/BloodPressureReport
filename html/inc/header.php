<!doctype html>
<?php require('./inc/functions.php'); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Blood Pressure Record Sheet</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-light">
        <div class="container">
            <h1>Home Blood Pressure Record Sheet</h1>
        </div>
        <?php if (CheckDBExists() !== "1") {?>
            <div class="container">
                <div class="alert alert-primary">
                    <p>The "entries" table is missing from the database, would you like to create it?</p>
                    <p><a href="create.php"><button class="btn btn-primary">Yes</button></a>
                </div>
            </div>
        <?php } ?>