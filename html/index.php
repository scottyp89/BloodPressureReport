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
            <p>Complete the table below with your blood pressure records.</p>
            <button type="button" class="btn btn-primary"><i class="fa-solid fa-table-list"></i> New entry</button>
        </div>
        <div class="container">
            <?php $data = GetData();?>
            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Systolic first</th>
                        <th scope="col">Diastolic first</th>
                        <th scope="col">Systolic second</th>
                        <th scope="col">Diastolic second</th>
                        <th scope="col">Pulse</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($data->num_rows > 0) {
                        while($row = $data->fetch_assoc()) {?>
                            <tr>
                                <td><?php echo $row["datetime"];?></td>
                                <td><?php echo $row["systolic_1"];?></td>
                                <td><?php echo $row["diastolic_1"];?></td>
                                <td><?php echo $row["systolic_2"];?></td>
                                <td><?php echo $row["diastolic_2"];?></td>
                                <td><?php echo $row["pulse"];?></td>
                        <?php }
                        } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="https://kit.fontawesome.com/2b0ac13106.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>