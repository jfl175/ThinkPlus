<?php
    require_once 'config.php';
    require_once 'dbconfig.php';

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['form'])) {
        if($_POST['form'] == 'mentor') {

            $lastID = $conn->query("SELECT `id` FROM mentor_sessions ORDER BY id DESC LIMIT 1");

            if ($lastID->num_rows > 0) {
                // output data of each row
                while($row = $lastID->fetch_assoc()) {
                  $newID = intval($row["id"])+1;
                }
            } else {
                $newID = 1;
            }

            $ref = 'FMS' . date('ym') . $newID;

            $sql = "INSERT INTO mentor_sessions (`fullname`, `phone`, `email`, `session_date`, `ref_no`, `status`)
                    VALUES ('".test_input($_POST['fullname'])."',
                    '".test_input($_POST['phone'])."', 
                    '".test_input($_POST['email'])."', 
                    '".test_input($_POST['sessionDate'])."', 
                    '$ref',
                    '1')";

            if ($conn->query($sql) === TRUE) {
                $result['code'] = 200;
                $result['ref'] = $ref;
                            
                echo json_encode($result);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }
    }

    if(isset($_POST['form'])) {
        if($_POST['form'] == 'contact') {

            $lastID = $conn->query("SELECT `id` FROM queries ORDER BY id DESC LIMIT 1");

            if ($lastID->num_rows > 0) {
                while($row = $lastID->fetch_assoc()) {
                  $newID = intval($row["id"])+1;
                }
            } else {
                $newID = 1;
            }

            $ref = 'TPQ' . date('ym') . $newID;

            $sql = "INSERT INTO queries (`name`, `phone`, `message`, `ref_no`)
                    VALUES ('".test_input($_POST['fullname'])."',
                    '".test_input($_POST['phone'])."', 
                    '".test_input($_POST['message'])."', 
                    '$ref')";

            if ($conn->query($sql) === TRUE) {
                $result['code'] = 200;
                $result['ref'] = $ref;
                            
                echo json_encode($result);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }
    }

?>