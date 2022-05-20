<?php

    require_once '../config.php';

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function getMentorRequests() {
        
        require_once '../dbconfig.php';
    
        $sql = "SELECT * FROM mentor_sessions ORDER BY id DESC";

        $result = $conn->query($sql, MYSQLI_STORE_RESULT);

        if ($result == TRUE) {
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>'.$row['ref_no'].'</td>';
                    echo '<td>'.$row['fullname'].'</td>';
                    echo '<td>'.$row['phone'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['session_date'].'</td>';
                    echo '</tr>';
                }
            } else {
                echo 'No data to show';
            }

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            exit();
        }
        
        $conn->close();
    }





?>