<?php

include 'processing.php';
// We need to use sessions, so you should always start sessions using the below code or including processing php to get other session data AND MYSQLI FETCH data.

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['user_id'])) {
	header('Location: index.html');
	exit;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style3.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h3>Namilyango vote</h3>
<a href="<?php echo $_SESSION['house']; ?>"> <i class="fas fa-sign-out-alt"></i>Back To Home</a>&nbsp
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>&nbsp
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['user_id']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td> Please Contact your Administration for inquiries.</td>
					</tr>

					<tr>
						<td>house:</td>
						<td><?php if (isset($_SESSION['user_house'])) {
							echo $_SESSION['user_house'] ;
						}else {

						}  ?></td>
					</tr>
					<tr>
						<td>hostel:</td>
						<td><?php echo ""?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
