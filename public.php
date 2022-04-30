<?php
require 'DB_conn.php';


// If the user is not logged through the session it will redirect to the login page
if (!isset($_SESSION['user_id_public'])) {
	header('Location: index.php');
}

?>


<!DOCTYPE html>
<html>
	<head>
		  <link rel="shortcut icon" href="logo.jpg" />
		<meta charset="utf-8">
		<title>Public Student Page</title>

		<link href="style3.css" rel="stylesheet" type="text/css">
		<link rel ="stylesheet"	href="css/bootstrap.min.css">
		</head>
	<body class="loggedin">




		<nav class="navtop">
<div>
	<h3>Namilyango Vote</h3>
	<a href="logout.php"> <i class="fas fa-sign-out-alt"></i>Logout</a>&nbsp&nbsp&nbsp

</div>



		</nav>

		<div class="content">
			<h2>Public Page</h2>
			<p>Welcome back, <?php echo $_SESSION['user_id_public'];?>! The Polls for the candidates are presented as below.</p>
<p> <b>HEAD PREFECT</b><br>
						<?php


												//HEADPREFECT
												$query = "SELECT `username`,`votes` FROM `headprefect`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}
echo "<b>HEAD BOY</b><br><br>";
												//headboy
												$query = "SELECT `username`,`votes` FROM `headboy`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}
echo "<b>Hostel Chairman</b><br><br>";
												//HostelChairman
												$query = "SELECT `username`,`votes` FROM `hostelchairman`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

										echo "<b>SENIOR ACADEMICS</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `senioracademics`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR ACADEMICS</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `junioracademics`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>SENIOR SPORTSS</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorsports`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR SPORTS</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorsports`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>SENIOR MAIL AND INFO</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniormailandlib`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

										echo "<b>JUNIOR MAIL AND INFO</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniormailandlib`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

									echo "<b> SENIOR DINNING</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniordinning`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR DINNING</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniordinning`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR UNIFORM</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `senioruniform`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR UNIFORM</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `junioruniform`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>SENIOR ENTERTAINMENT</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorentertainment`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>JUNIOR ENTERTAINMENT</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorentertainment`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR DOYLE</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniordoyle`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR DOYLE</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniordoyle`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR heweston</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorheweston`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR heweston</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorheweston`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}


												echo "<b>SENIOR CAMPLNG</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorcampling`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>JUNIOR CAMPLNG</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorcampling`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR HANLON</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorhanlon`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR HANLON</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorhanlon`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>SENIOR KIWANUKA</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorkiwanuka`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

											echo "<b>JUNIOR KIWANUKA</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorkiwanuka`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR reesinck</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorreesinck`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>JUNIOR reesinck</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorreesinck`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR mckee</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniormckee`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>JUNIOR mckee</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniormckee`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR CHARLSELWANGA</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorcharlselwanga`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>JUNIOR CHARLSELWANGA</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorcharlselwanga`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR MUKASA</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniormukasa`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>JUNIOR MUKASA</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniormukasa`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR KUIPERS</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorkuipers`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

                        echo "<b>JUNIOR KUIPERS</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorkuipers`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR biermans</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorbiermans`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

                        echo "<b>JUNIOR biermans</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorbiermans`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

												echo "<b>SENIOR BILLINGTON</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `seniorbillington`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}

                        echo "<b>JUNIOR BILLINGTON</b><br><br>";
												$query = "SELECT `username`,`votes` FROM `juniorbillington`";
												$query_run = mysqli_query($conn,$query);
						while ($fetch=mysqli_fetch_assoc($query_run)) {
							$username = $fetch['username'];
							$votes = $fetch['votes'];

							echo $username.'&nbsp'.$votes.'<br>';

						}
									echo "<b>chairman</b><br><br>";
									//chairman
									$query = "SELECT `username`,`votes` FROM `chairman`";
									$query_run = mysqli_query($conn,$query);
									while ($fetch=mysqli_fetch_assoc($query_run)) {
									$username = $fetch['username'];
									$votes = $fetch['votes'];

									echo $username.'&nbsp'.$votes.'<br>';

									}
echo "<b>seniortreasurer</b><br><br>";
//seniortreasurer
$query = "SELECT `username`,`votes` FROM `seniortreasurer`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>seniorspeaker</b><br><br>";
//seniorspeaker
$query = "SELECT `username`,`votes` FROM `seniorspeaker`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}

echo "<b>seniorgeneralsecretary</b><br><br>";
//seniorspeaker
$query = "SELECT `username`,`votes` FROM `seniorgeneralsecretary`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>	seniorlegaladvisor</b><br><br>";
//	seniorlegaladvisor
$query = "SELECT `username`,`votes` FROM `seniorlegaladvisor`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>	seniorpublicitysecretary</b><br><br>";
				//	seniorpublicitysecretary

				$query = "SELECT `username`,`votes` FROM `seniorpublicitysecretary`";
				$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>vicechairman</b><br><br>";
//vicechairman
$query = "SELECT `username`,`votes` FROM `vicechairman`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>juniortreasurer</b><br><br>";
//juniortreasurer
$query = "SELECT `username`,`votes` FROM `juniortreasurer`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>juniorspeaker</b><br><br>";
//juniorspeaker
$query = "SELECT `username`,`votes` FROM `juniorspeaker`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>juniorgeneralsecretary</b><br><br>";
//juniorgeneralsecretary

$query = "SELECT `username`,`votes` FROM `juniorgeneralsecretary`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>juniordeputyacademics</b><br><br>";
//juniordeputyacademics

$query = "SELECT `username`,`votes` FROM `juniordeputyacademics`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}
echo "<b>juniorpublicitysecretary</b><br><br>";
//juniordeputyacademics

$query = "SELECT `username`,`votes` FROM `juniorpublicitysecretary`";
$query_run = mysqli_query($conn,$query);
while ($fetch=mysqli_fetch_assoc($query_run)) {
$username = $fetch['username'];
$votes = $fetch['votes'];

echo $username.'&nbsp'.$votes.'<br>';

}

?>




</p>


		</div>

	</body>
</html>
