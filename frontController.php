<?php
    require_once 'config.php';
    require_once 'dbconfig.php';

    // print_r($_POST);

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

            $ref = 'FMS' . date('ymd') . $newID;

            $sql = "INSERT INTO mentor_sessions (`fullname`, `phone`, `email`, `session_date`, `ref_no`, `status`)
                    VALUES ('".test_input($_POST['fullname'])."',
                    '".test_input($_POST['phone'])."', 
                    '".test_input($_POST['email'])."', 
                    '".test_input($_POST['sessionDate'])."', 
                    '$ref',
                    '1')";
        }

        if ($conn->query($sql) === TRUE) {
            $result['code'] = 200;
            $result['ref'] = $ref;
            $result['timezone'] = date_default_timezone_get();;
                        
            echo json_encode($result);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>