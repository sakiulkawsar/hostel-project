<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if (isset($_POST['submit'])) {

    $id        = $_GET['id'];
    $studentId = $_POST['studentId'];
    $fullName  = $_POST['fullName'];
    $mill      = $_POST['mill'];
    $phone     = $_POST['phone'];
    $gender    = $_POST['gender'];

    $query = "UPDATE mill 
              SET studentId=?, fullName=?, mill=?, phone=?, gender=?
              WHERE id=?";

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param(
        'sssssi',
        $studentId,
        $fullName,
        $mill,
        $phone,
        $gender,
        $id
    );
    $stmt->execute();

    echo "<script>alert('Mill details updated successfully');</script>";
}


?>

<?php
// get record for edit
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM mill WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();

    if (!$row) {
        die("Record not found");
    }
}


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Edit Room Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Room Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Room Details</div>
									<form method="post" class="form-horizontal">

<div class="form-group">
<label class="col-sm-2 control-label">Student ID</label>
<div class="col-sm-8">
<input type="text" name="studentId" class="form-control"
value="<?php echo $row->studentId; ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-8">
<input type="text" name="fullName" class="form-control"
value="<?php echo $row->fullName; ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Mill</label>
<div class="col-sm-8">
<input type="text" name="mill" class="form-control"
value="<?php echo $row->mill; ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Phone</label>
<div class="col-sm-8">
<input type="text" name="phone" class="form-control"
value="<?php echo $row->phone; ?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender</label>
<div class="col-sm-8">
<input type="text" name="gender" class="form-control"
value="<?php echo $row->gender; ?>">
</div>
</div>

<div class="col-sm-8 col-sm-offset-2">
<input class="btn btn-primary" type="submit" name="submit"
value="Update Mill">
</div>

</form>


									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>