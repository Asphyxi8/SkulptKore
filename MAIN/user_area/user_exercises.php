<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Exercises</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .exercises th{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="full-screen" style="height: auto;">
        <div class="content-block">
            <div style="width:100%; height:auto; border-radius: 5vh; padding-top: 2vh; ">
        <?php
            $count = 1;
            $user_name = $_SESSION['user_username'];

            $select_query = "Select * from `user_details` where username = '$user_name'";
            $run_query = mysqli_query($con,$select_query);
            $user_row = mysqli_fetch_assoc($run_query);
            $user_id = $user_row['user_id'];

            $query_2 = "Select * from `exercise_log` where user_id = $user_id";
            $run_2 = mysqli_query($con,$query_2);
            while($row = mysqli_fetch_assoc($run_2)){
                echo "<div style='border-radius: 5vw; width: 65vw; margin: auto;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;'>";
                echo "<table class='exercises text-small' style = 'width: 100%;'><tr>
                <th>Name</th><th>Level</th><th>Equipment</th></tr>";
                $serialized_data = $row['log'];
                $exercises = unserialize($serialized_data);
                $array_length = count($exercises);
                foreach ($exercises as $exercise) {
                    echo "<tr>";
                    echo "<td>{$exercise['name']}</td>";
                    echo "<td>{$exercise['level']}</td>";
                    echo "<td>{$exercise['equipment']}</td>";
                    echo "</tr>";
                }
                echo "</table></div><br>";
            
                $count++;
            }
        ?>
        </div>
        <div class="separater" style="height: 5vh;"></div>
        </div>
    </div>
    
</body>
</html>