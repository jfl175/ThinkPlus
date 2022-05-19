<?php
    require_once 'dbconfig.php';

    // print_r($_POST);

    if(isset($_POST['form'])) {
        if($_POST['form'] == 'mentor') {
            $sql = "INSERT INTO mentor_sessions (`fullname`, `phone`, `email`, `session_date`, `status`)
                    VALUES ('".test_input($_POST['fullname'])."',
                    '".test_input($_POST['phone'])."', 
                    '".test_input($_POST['email'])."', 
                    '".test_input($_POST['sessionDate'])."', 
                    '1')";
        }

        if ($conn->query($sql) === TRUE) {
            $result['code'] = 200;
            $result['ref'] = date('ymd').$conn->insert_id;
            
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