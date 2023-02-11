<?php require('./inc/header.php'); ?>
        <div class="container">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewEntryModal"><i class="fa-solid fa-table-list"></i> New entry</button>
        </div>
        <div class="modal fade" id="NewEntryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New entry</h1>
                        <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="save.php" method="post">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Systolic first</label>
                                <input type="number" class="form-control" name="systolic_1" id="systolic_1" placeholder="Systolic first">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Diastolic first</label>
                                <input type="number" class="form-control" name="diastolic_1" id="diastolic_1" placeholder="Diastolic first">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Systolic second</label>
                                <input type="number" class="form-control" name="systolic_2" id="systolic_2" placeholder="Systolic second">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Diastolic second</label>
                                <input type="number" class="form-control" name="diastolic_2" id="diastolic_2" placeholder="Diastolic second">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Pulse</label>
                                <input type="number" class="form-control" name="pulse" id="pulse" placeholder="Pulse">
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive-sm">
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data->num_rows > 0) {
                            while($row = $data->fetch_assoc()) {?>
                                <div class="modal fade" id="DeleteEntryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-dark text-light">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete entry</h1>
                                                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p>Are you sure you want to delete this entry?</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <tr>
                                    <td><?php echo $row["datetime"];?></td>
                                    <td><?php echo $row["systolic_1"];?></td>
                                    <td><?php echo $row["diastolic_1"];?></td>
                                    <td><?php echo $row["systolic_2"];?></td>
                                    <td><?php echo $row["diastolic_2"];?></td>
                                    <td><?php echo $row["pulse"];?></td>
                                    <td><a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#DeleteEntryModal"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>   
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/2b0ac13106.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>