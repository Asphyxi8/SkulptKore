<?php
include '../includes/connect.php';
include '../functions/commonfuncts.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise3</title>
    <style>
        .footer td{
            width: 8vw;
        }
    </style>
    <link rel="stylesheet" href="..\user_area\style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
<body>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="home3.html"><img src="assets/logo.png" height="90vh"></a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Workouts</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Shop</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item my-auto">
                <?php
                    if(isset($_SESSION['user_username'])){
                        echo'
                    <a class="nav-link" href="..\user_area\user_logout.php">Logout</a>';
                    }
                    else{
                        echo'
                    <a class="nav-link" href="..\user_area\login3.php">Login</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register3.html"><i class="bi bi-journal" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register3.html"><i class="bi bi-handbag" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register3.html"><i class="bi bi-person" style="font-size: 4vh"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Sidebar-->
    <div class="sidebar">
        <form class="text-small font-purple" style="padding: 20px;">
        <label for="body_part">Body Part:</label>
        <hr class="back-pink">
        <select id="body_part" name="body_part">
            <option value="Legs">Legs</option>
            <option value="Arms">Arms</option>
            <option value="Chest">Chest</option>
            <option value="Back">Back</option>
        </select>
        <hr class="back-pink">
        <label for="difficulty_level">Difficulty Level:</label>
        <select id="difficulty_level" name="difficulty_level">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
            <hr class="back-pink">
            <label>Equipment:</label><br>
                <input type="checkbox" name="eqipment[]" value="Barbell"> Barbell <br>
                <input type="checkbox" name="eqipment[]" value="Bench"> Bench <br>
                <input type="checkbox" name="eqipment[]" value="Dumbbells"> Dumbbells <br>
                <input type="checkbox" name="eqipment[]" value="Resistance Bands/Cables"> Resistance Bands <br>
                <input type="checkbox" name="eqipment[]" value="Cones"> Cones <br>
                <input type="checkbox" name="eqipment[]" value="Raised Platform/Box"> Raised Platform <br>
                <input type="checkbox" name="eqipment[]" value="Heavy Ropes"> Heavy Ropes <br>
                <input type="checkbox" name="eqipment[]" value="Hurdles"> Hurdles <br>
                <input type="checkbox" name="eqipment[]" value="Kettlebells"> Kettlebells <br>
                <input type="checkbox" name="eqipment[]" value="Medecine Ball"> Medecine Ball <br>
                <input type="checkbox" name="eqipment[]" value="Pull up bar"> Pull up bar <br>
                <input type="checkbox" name="eqipment[]" value="Stability Ball" > Stability Ball <br>
                <input type="checkbox" name="eqipment[]" value="No Equipment" checked> No Equipment <br>
                <br>
                <input type="submit" class="button-35" id="querysubmit" name="submit_exercises">
            <hr class="back-pink">
            <br>
            <hr class="back-pink">
        </form>
    </div>

    <!--Screen 1-->
    <div class="third-screen content-top font-blue" style="background-image: url(assets/work13.jpg); background-size:cover;">

    </div>

    <!--Screen 2-->
    <div class="full-screen" style="height:auto">
        <div style="margin: auto; width: 90vw; float: right; padding-top: 1%; padding-left: 5%;">
        <div class="row row-ex">
        <?php
        if (!isset($_GET['submit_exercises'])) {;
            $query = "Select * from `exercise_details`";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<script>alert('Yeah!')</script>";
            }
            echo "<form type='get'>";
            while ($row_result = mysqli_fetch_assoc($result)) {
                $exercise_name = $row_result['exercise_name'];
                $body_part = $row_result['body_part'];
                $difficulty_level = $row_result['difficulty_level'];
                $equipment = $row_result['equipment'];
                $e_id = $row_result['e_id'];
                echo"<div class='column' style='height: 20rem; width: 18vw; margin:0.7%'>
                        <div class='card card-hover' style='width: 18vw; height: 20rem; text-align: center; border-radius: 5%;box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;'>
                            <div class='card-body' style='display:flex; flex-direction: column;'>
                                <div class='text-small font-blue' style='padding-top: 1vh'>$exercise_name</div>
                                <div>$difficulty_level</div>
                                <div>$body_part</div>
                                <div class='card-subtitle mb-2 text-muted'>$equipment</div>
                            </div>
                            <div class='card-button-wrap' style='padding-bottom: 1vh' >
                                Select <input type='checkbox' name=ex_id[] value=$e_id>
                            </div>
                        </div>
                    </div>";
                }
        echo "</div>
         <input style='width:8vw; position: fixed; bottom: 5vh; right: 1vw;' class='sub-button' type='submit' name='add_exercise' value='Add to plan'></form>";  // add a closing quote here
        }
        if (isset($_GET['submit_exercises'])) {
            $body_part = $_GET['body_part'];
            $difficulty_level = $_GET['difficulty_level'];
            $eqipment = $_GET['eqipment'];
            $count = 0;
            $string = "";
            foreach ($eqipment as $eq) {
                $count++;
            }
            $max = $count;
            foreach ($eqipment as $eq) {
                if ($count != $max) {
                    $string = $string . ' or equipment like ' . '\'%';
                } else {
                    $string = $string . ' equipment like ' . '\'%';
                }
                $string = $string . $eq;
                $string = $string . '%\'';
                $count--;
            }

            $query = "Select * from `exercise_details` where body_part like '%$body_part%' and difficulty_level = '$difficulty_level' and ($string) ";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<script>alert('Yeah!')</script>";
            }
            echo "<form type='get'>";
            while ($row_result = mysqli_fetch_assoc($result)) {
                $exercise_name = $row_result['exercise_name'];
                $body_part = $row_result['body_part'];
                $difficulty_level = $row_result['difficulty_level'];
                $equipment = $row_result['equipment'];
                $e_id = $row_result['e_id'];
                echo"
                    <div class='column' style='height: 20rem; width: 18vw; margin:1%'>
                        <div class='card' style='width: 18vw; height: 20rem; text-align: center; border-radius: 5%; background-color: #cadef2;'>
                            <div class='card-body' style='display:flex; flex-direction: column;'>
                                <div class='text-small font-blue' style='padding-top: 1vh'><mark>$exercise_name</mark></div>
                                <div>$difficulty_level</div>
                                <div>$body_part</div>
                                <div class='card-subtitle mb-2 text-muted'>$equipment</div>
                            </div>
                            <div class='card-button-wrap' style='padding-bottom: 1vh'>
                                Select <input type='checkbox' name=ex_id[] value=$e_id>
                            </div>
                        </div>
                    </div>";
            }
            echo "</div><input style='position: fixed; bottom: 5vh; right: 2vw;' class='button-35'  type = 'submit' name = 'add_exercise' value='Add to Plan'</form>"; // add a closing quote here
        }
        ?>
        
        </div>
        </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footer">
        <table>
            <tr>
                <th colspan="5"> Skulpt Kore</th>
            </tr>
            <tr>
                <td><a href="home3.html">Home</a></td>
                <td><a href="home3.html">Workouts</a></td>
                <td><a href="products3.html">Shop</a></td>
                <td><a href="aboutus3.html">About Us</a></td>
                <td><a href="home3.html">Contact Us</a></td>
            </tr>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php if (isset($_GET['add_exercise'])) {
    print_r($_GET['ex_id']);
    $ex_id = $_GET['ex_id'];
    $ip = getIPAddress();
    foreach ($ex_id as $id) {
        $query_add = "Select * from `exercise_details` where e_id = $id";
        $result_add = mysqli_query($con, $query_add);
        $row = mysqli_fetch_assoc($result_add);
        $name = $row['exercise_name'];
        $bpart = $row['body_part'];
        $level = $row['difficulty_level'];
        $equip = $row['equipment'];
        $reps=$row['reps'];
        $sets=$row['sets'];
        $links=$row['links'];
        $check_query = "Select * from `temp_exercise_log` where e_name = '$name'";
        $result_check_query = mysqli_query($con, $check_query);
        $num_rows_result_check_query = mysqli_num_rows($result_check_query);
        if ($num_rows_result_check_query > 0) {
            echo "<script>alert('$name already in plan')</script>";
        } else {
            $insert_ex = "Insert into `temp_exercise_log` (e_name, e_level, e_body, e_equipment, ip,e_link,e_sets,e_reps) values ('$name', '$level', '$bpart', '$equip', '$ip','$links','$sets','$reps')";
            $result_ex = mysqli_query($con, $insert_ex);
        }
    }
}

?>
