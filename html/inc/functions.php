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
?>