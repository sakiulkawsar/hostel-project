<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (isset($_POST['submit'])) {

    $studentId = trim($_POST['studentId']);
    $fullName  = trim($_POST['fullName']);
    $mill      = trim($_POST['mill']);
    $phone     = trim($_POST['phone']);
    $gender    = trim($_POST['gender']);

    // Duplicate check
    $sql = "SELECT id FROM mill WHERE studentId = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $studentId);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['msg'] = "Student ID already exists";
    } else {

        $query = "INSERT INTO mill (studentId, fullName, mill, phone, gender)
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sssss", $studentId, $fullName, $mill, $phone, $gender);

        if ($stmt->execute()) {
            $_SESSION['msg'] = "Mill added successfully";
        } else {
            $_SESSION['msg'] = "Something went wrong";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Mill</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <div class="ts-main-content">
        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <div class="container-fluid">

                <h2 class="page-title">Add meal</h2>

                <?php if (!empty($_SESSION['msg'])) { ?>
                    <div class="alert alert-info">
                        <?php echo htmlentities($_SESSION['msg']); ?>
                    </div>
                    <?php $_SESSION['msg'] = ""; ?>
                <?php } ?>

                <div class="panel panel-default">
                    <div class="panel-heading">Add Mill</div>
                    <div class="panel-body">

                        <form method="post" class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Student ID</label>
                                <div class="col-sm-8">
                                    <input type="text" name="studentId" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullName" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Meal</label>
                                <div class="col-sm-8">
                                    <input type="text" name="mill" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-8">
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-8 col-sm-offset-2">
                                <input type="submit" name="submit" value="Add Meal" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>

</html>