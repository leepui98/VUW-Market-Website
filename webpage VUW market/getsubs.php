<?php
    $data = file_get_contents("php://input");
    $jsonData = json_decode($data,TRUE);

    $conn = new mysqli("localhost", "myuser", "mypass", "mydb");
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tbl_stock";
    $result = $conn->query($sql);
    $data = array();
    foreach($result as $row) {
        $data[] = $row;
    }
    echo json_encode($data);
    // $conn.close();
?>