<?php
    require_once 'dbconfig.php';

    print_r($_POST);

    if(isset($_POST['form'])) {
        if($_POST['form'] == 'mentor') {
            $sql = "INSERT INTO mentor_sessions (`fullname`, `phone`, `email`, `session_date`, `status`)
                    VALUES (".$_POST['fullname']."',
                    ".$_POST['phone'].", 
                    ".$_POST['email'].", 
                    ".$_POST['sessionDate'].", 
                    1)";
        }

        if ($conn->query($sql) === TRUE) {
            $result['code'] = 200;
            $result['ref'] = date('ymd').$conn->insert_id;
            $result['message'] = "Request registered successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }

?>