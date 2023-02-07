<?php
function ConnectToDB() {
    // Connection details
    $servername = "mariadb";
    $username = "bpr01";
    $password = "Monastery-Harpist-Shone3";
    $dbname = "bloodpressurereports01";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection to database failed: " . $conn->connect_error);
    } 
    return ($conn);
    // echo "Connected successfully";
}

function CloseDB($conn){
    return ($conn->close());
}

function GetData() {
    $conn = ConnectToDB();
    $sql = "SELECT id,datetime, systolic_1, diastolic_1, systolic_2, diastolic_2, pulse FROM entries";
    $result = $conn->query($sql);
    return ($result);
    CloseDB($conn);
}

function InsertData($systolic_1,$diastolic_1,$systolic_2,$diastolic_2,$pulse){
    $conn = ConnectToDB();
    $sql = "INSERT INTO entries (systolic_1, diastolic_1, systolic_2, diastolic_2, pulse) VALUES ($systolic_1,$diastolic_1,$systolic_2,$diastolic_2,$pulse)";
    if ($conn->query($sql) === TRUE) {
        return ("1");
    } else {
        return ("Error: " . $sql . "<br>" . $conn->error);
    }
    CloseDB($conn);
}

function DeleteData($id){
    $conn = ConnectToDB();
    $sql = "DELETE FROM entries WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        return ("1");
    } else {
        return ("Error: " . $sql . "<br>" . $conn->error);
    }
    CloseDB($conn);
}

function CheckDBExists(){
    $conn = ConnectToDB();
    $sql = "SHOW TABLES";
    $tables = $conn->query($sql);
    if ($tables->num_rows > 0) {
        while($row = $tables->fetch_assoc()) {
            if ($row["Tables_in_bloodpressurereports01"] === 'entries') {
                return "1";
            } 
        }
    }
    CloseDB($conn);
}

function CreateTable(){
    $conn = ConnectToDB();
    $sql = "CREATE TABLE `entries` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `datetime` datetime NOT NULL DEFAULT current_timestamp(),
        `systolic_1` int(11) NOT NULL,
        `diastolic_1` int(11) NOT NULL,
        `systolic_2` int(11) NOT NULL,
        `diastolic_2` int(11) NOT NULL,
        `pulse` int(11) NOT NULL
      )";
    if ($conn->query($sql) === TRUE) {
        return ("1");
    } else {
        return ("Error: " . $sql . "<br>" . $conn->error);
    }
    CloseDB($conn);
}
?>