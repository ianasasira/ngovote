<br><br><?php

include 'processing.php';
// If the user is not logged through the session it will redirect to the login page
if (!isset($_SESSION['user_id'])) {
	header('Location: index.php');
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>reesinck</title>
		  <link rel="shortcut icon" href="logo.jpg" />
		<link href="style3.css" rel="stylesheet" type="text/css">
		<link rel ="stylesheet"	href="css/bootstrap.min.css">
		<script type="text/javascript" src="jquery.js">
		</script>
		<script type="text/javascript" src="jquery.min.js">
		</script>
		<script type="text/javascript" src="custom.js">
		</script>
		</head>
	<body class="loggedin">




		<nav class="navtop">
<div>
	<h3>&nbspNamilyango Vote</h3>


				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>&nbsp&nbsp

</div>



		</nav>

		<div class="content">
			<h2>reesinck House</h2>
			<p>Welcome back, <?php echo $_SESSION['user_id'];?>!</p>
<p>  Please vote your candidates by clicking the vote button next to the candidate<b> remember you only vote once and this is irreversible.
</b> </p>

			 <form action="" method="post">





				 	 <strong>SENIOR reesinck</strong> <br>
				 	 <br>

				 	 		<?php
				 	 		//candidate 1
				 	 	$query="SELECT `username` FROM `seniorreesinck` WHERE `id`=1";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 		if (mysqli_num_rows($query_run)==1) {
				 	 			$fetch = mysqli_fetch_assoc($query_run);
				 	 			$name = $fetch['username'];
				 	 			echo '&nbsp'.'&nbsp'.$name;;
				 	 			echo '&nbsp'.'&nbsp'."<input type='submit' id='C192' name='C192' value=$name class='btn btn-primary'></input>" ;
				 	 		}else {
				 	 			echo " N/A";
				 	 		}
				 	 	}else {
				 	 			echo " N/A";
				 	 	}

				 	 	//candidate 2
				 	 	$query="SELECT `username` FROM `seniorreesinck` WHERE `id`=2";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C193' name='C193' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	//candidate 3
				 	 	$query="SELECT `username` FROM `seniorreesinck` WHERE `id`=3";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C194' name='C194' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	//candidate 4
				 	 	$query="SELECT `username` FROM `seniorreesinck` WHERE `id`=4";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C195' name='C195' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	//candidate 5
				 	 	$query="SELECT `username` FROM `seniorreesinck` WHERE `id`=5";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C196' name='C196' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 		  ?>




				<br><br> 	 <strong>JUNIOR reesinck</strong> <br>
				 	 <br>


				 	 		<?php
				 	 		//candidate 1
				 	 	$query="SELECT `username` FROM `juniorreesinck` WHERE `id`=1";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 		if (mysqli_num_rows($query_run)==1) {
				 	 			$fetch = mysqli_fetch_assoc($query_run);
				 	 			$name = $fetch['username'];
				 	 			echo '&nbsp'.'&nbsp'.$name;;
				 	 			echo '&nbsp'.'&nbsp'."<input type='submit' id='C197' name='C197' value=$name class='btn btn-primary'></input>" ;
				 	 		}else {
				 	 			echo " N/A";
				 	 		}
				 	 	}else {
				 	 			echo " N/A";
				 	 	}

				 	 	//candidate 2
				 	 	$query="SELECT `username` FROM `juniorreesinck` WHERE `id`=2";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C198' name='C198' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	//candidate 3
				 	 	$query="SELECT `username` FROM `juniorreesinck` WHERE `id`=3";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C199' name='C199' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	//candidate 4
				 	 	$query="SELECT `username` FROM `juniorreesinck` WHERE `id`=4";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C200' name='C200' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	//candidate 5
				 	 	$query="SELECT `username` FROM `juniorreesinck` WHERE `id`=5";
				 	 	$query_run = mysqli_query($conn,$query);
				 	 	if ($query_run) {
				 	 	if (mysqli_num_rows($query_run)==1) {
				 	 		$fetch = mysqli_fetch_assoc($query_run);
				 	 		$name = $fetch['username'];
				 	 		echo '&nbsp'.'&nbsp'.$name;;
				 	 		echo '&nbsp'.'&nbsp'."<input type='submit' id='C201' name='C201' value=$name class='btn btn-primary'></input>" ;
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 	}else {
				 	 		echo " N/A";
				 	 	}
				 	 		  ?>




																								<br>	<br><strong>HEAD PREFECT</strong> <br>
																									<br>

																									<?php
																									//candidate 1
																								$query="SELECT `username` FROM `headprefect` WHERE `id`=1";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C11'  id='C11'name='C11' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																								}else {
																										echo " N/A  ";
																								}

																								//candidate 2
																								$query="SELECT `username` FROM `headprefect` WHERE `id`=2";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C12' name='C12' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}

																								//candidate 3
																								$query="SELECT `username` FROM `headprefect` WHERE `id`=3";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C13' name='C13' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}
																								//candidate 4
																								$query="SELECT `username` FROM `headprefect` WHERE `id`=4";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C14' name='C14' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}
																								//candidate 5
																								$query="SELECT `username` FROM `headprefect` WHERE `id`=5";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C15' name='C15' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}
																									  ?>





																								<br> <br><br>	<strong>HEAD BOY</strong> <br>
																								 	<br>
																									<?php
																									//candidate 1
																								$query="SELECT `username` FROM `headboy` WHERE `id`=1";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C16'  id='C16' name='C16' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																								}else {
																										echo " N/A  ";
																								}

																								//candidate 2
																								$query="SELECT `username` FROM `headboy` WHERE `id`=2";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C17' name='C17' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}
																								//candidate 3
																								$query="SELECT `username` FROM `headboy` WHERE `id`=3";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C18' name='C18' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}
																								//candidate 4
																								$query="SELECT `username` FROM `headboy` WHERE `id`=4";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C19' name='C19' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {

																									echo " N/A  ";
																								}
																								//candidate 5
																								$query="SELECT `username` FROM `headboy` WHERE `id`=5";
																								$query_run = mysqli_query($conn,$query);
																								if ($query_run) {
																								if (mysqli_num_rows($query_run)==1) {
																									$fetch = mysqli_fetch_assoc($query_run);
																									$name = $fetch['username'];
																									echo '&nbsp'.'&nbsp'.$name;
																									echo '&nbsp'.'&nbsp'."<input type='submit' id='C20' name='C20' value=$name class='btn btn-primary'></input>" ;
																								}else {
																									echo " N/A  ";
																								}
																								}else {
																									echo " N/A  ";
																								}
																									  ?>






																								<br>	<br>	<strong>SENIOR LITURGY</strong> <br>
																										<br>
																										<?php
																										//candidate 1
																									$query="SELECT `username` FROM `seniorliturgy` WHERE `id`=1";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																										if (mysqli_num_rows($query_run)==1) {
																											$fetch = mysqli_fetch_assoc($query_run);
																											$name = $fetch['username'];
																											echo '&nbsp'.'&nbsp'.$name;
																											echo '&nbsp'.'&nbsp'."<input type='submit' id='C21' name='C21' value=$name class='btn btn-primary'></input>" ;
																										}else {
																											echo " N/A  ";
																										}
																									}else {
																											echo " N/A  ";
																									}

																									//candidate 2
																									$query="SELECT `username` FROM `seniorliturgy` WHERE `id`=2";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C22' name='C22' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																									//candidate 3
																									$query="SELECT `username` FROM `seniorliturgy` WHERE `id`=3";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C23' name='C23' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																									//candidate 4
																									$query="SELECT `username` FROM `seniorliturgy` WHERE `id`=4";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C24' name='C24' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																									//candidate 5
																									$query="SELECT `username` FROM `seniorliturgy` WHERE `id`=5";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C25' name='C25' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																										  ?>






																								<br><br>	 	<strong>JUNIOR LITURGY</strong> <br>
																									 	<br>

																										<?php
																										//candidate 1
																									$query="SELECT `username` FROM `juniorliturgy` WHERE `id`=1";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																										if (mysqli_num_rows($query_run)==1) {
																											$fetch = mysqli_fetch_assoc($query_run);
																											$name = $fetch['username'];
																											echo '&nbsp'.'&nbsp'.$name;
																											echo '&nbsp'.'&nbsp'."<input type='submit' id='C26' name='C26' value=$name class='btn btn-primary'></input>" ;
																										}else {
																											echo " N/A  ";
																										}
																									}else {
																											echo " N/A  ";
																									}

																									//candidate 2
																									$query="SELECT `username` FROM `juniorliturgy` WHERE `id`=2";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C27' name='C27' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																									//candidate 3
																									$query="SELECT `username` FROM `juniorliturgy` WHERE `id`=3";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C28' name='C28' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																									//candidate 4
																									$query="SELECT `username` FROM `juniorliturgy` WHERE `id`=4";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C29' name='C29' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																									//candidate 5
																									$query="SELECT `username` FROM `juniorliturgy` WHERE `id`=5";
																									$query_run = mysqli_query($conn,$query);
																									if ($query_run) {
																									if (mysqli_num_rows($query_run)==1) {
																										$fetch = mysqli_fetch_assoc($query_run);
																										$name = $fetch['username'];
																										echo '&nbsp'.'&nbsp'.$name;
																										echo '&nbsp'.'&nbsp'."<input type='submit' id='C30' name='C30' value=$name class='btn btn-primary'></input>" ;
																									}else {
																										echo " N/A  ";
																									}
																									}else {
																										echo " N/A  ";
																									}
																										  ?>





																									<br><br>		<strong>HOSTEL CHAIRMAN</strong> <br>
																											<br>

																													<?php
																													//candidate 1
																													$query_hostel_code = "SELECT `code` FROM `hostelcode`";
																								 $query_run_hostel_code = mysqli_query($conn,$query_hostel_code);
																								 if ($fetch=mysqli_fetch_assoc($query_run_hostel_code)) {
																								$hostelcode = $fetch['code'];
																								if ($_SESSION['$posthostelcode']==$hostelcode) {


																												$query="SELECT `username` FROM `hostelchairman` WHERE `id`=1";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C31' name='C31' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																												}else {
																														echo " N/A  ";
																												}

																												//candidate 2
																												$query="SELECT `username` FROM `hostelchairman` WHERE `id`=2";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C32' name='C32' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												//candidate 3
																												$query="SELECT `username` FROM `hostelchairman` WHERE `id`=3";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C33' name='C33' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												//candidate 4
																												$query="SELECT `username` FROM `hostelchairman` WHERE `id`=4";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C34' name='C34' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												//candidate 5
																												$query="SELECT `username` FROM `hostelchairman` WHERE `id`=5";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C35' name='C35' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												}
																											}
																													  ?>





																									<br>	 	<br><strong>SENIOR ACADEMICS</strong> <br>
																										 	<br>

																													<?php
																													//candidate 1
																												$query="SELECT `username` FROM `senioracademics` WHERE `id`=1";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C36' name='C36' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																												}else {
																														echo " N/A  ";
																												}

																												//candidate 2
																												$query="SELECT `username` FROM `senioracademics` WHERE `id`=2";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C37' name='C37' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												//candidate 3
																												$query="SELECT `username` FROM `senioracademics` WHERE `id`=3";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C38' name='C38' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												//candidate 4
																												$query="SELECT `username` FROM `senioracademics` WHERE `id`=4";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C39' name='C39' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																												//candidate 5
																												$query="SELECT `username` FROM `senioracademics` WHERE `id`=5";
																												$query_run = mysqli_query($conn,$query);
																												if ($query_run) {
																												if (mysqli_num_rows($query_run)==1) {
																													$fetch = mysqli_fetch_assoc($query_run);
																													$name = $fetch['username'];
																													echo '&nbsp'.'&nbsp'.$name;
																													echo '&nbsp'.'&nbsp'."<input type='submit' id='C40' name='C40' value=$name class='btn btn-primary'></input>" ;
																												}else {
																													echo " N/A  ";
																												}
																												}else {
																													echo " N/A  ";
																												}
																													  ?>





																										<br><br>		<strong>JUNIOR ACADEMICS</strong> <br>
																												<br>


																														<?php
																														//candidate 1
																													$query="SELECT `username` FROM `junioracademics` WHERE `id`=1";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C41' name='C41' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																													}else {
																															echo " N/A  ";
																													}

																													//candidate 2
																													$query="SELECT `username` FROM `junioracademics` WHERE `id`=2";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C42' name='C42' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 3
																													$query="SELECT `username` FROM `junioracademics` WHERE `id`=3";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C43' name='C43' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 4
																													$query="SELECT `username` FROM `junioracademics` WHERE `id`=4";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C44' name='C44' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 5
																													$query="SELECT `username` FROM `junioracademics` WHERE `id`=5";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C45' name='C45' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																														  ?>




																										 	<br><br>	<strong>SENIOR MAIL AND lib</strong> <br>
																										 		<br>


																														<?php
																														//candidate 1
																													$query="SELECT `username` FROM `seniormailandlib` WHERE `id`=1";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C46' name='C46' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																													}else {
																															echo " N/A  ";
																													}

																													//candidate 2
																													$query="SELECT `username` FROM `seniormailandlib` WHERE `id`=2";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C47' name='C47' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 3
																													$query="SELECT `username` FROM `seniormailandlib` WHERE `id`=3";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C48' name='C48' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 4
																													$query="SELECT `username` FROM `seniormailandlib` WHERE `id`=4";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C49' name='C49' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 5
																													$query="SELECT `username` FROM `seniormailandlib` WHERE `id`=5";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C50a' name='C50a' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																														  ?>




																										<br><br>	 	<strong>JUNIOR MAIL AND lib</strong> <br>
																											 	<br>


																														<?php
																														//candidate 1
																													$query="SELECT `username` FROM `juniormailandlib` WHERE `id`=1";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C49a' name='C49a' value=$name class='btn btn-primary'></input>" ;

																														}else {
																															echo " N/A  ";
																														}
																													}else {
																															echo " N/A  ";
																													}

																													//candidate 2
																													$query="SELECT `username` FROM `juniormailandlib` WHERE `id`=2";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C50' name='C50' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 3
																													$query="SELECT `username` FROM `juniormailandlib` WHERE `id`=3";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C51' name='C51' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 4
																													$query="SELECT `username` FROM `juniormailandlib` WHERE `id`=4";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C52' name='C52' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																													//candidate 5
																													$query="SELECT `username` FROM `juniormailandlib` WHERE `id`=5";
																													$query_run = mysqli_query($conn,$query);
																													if ($query_run) {
																													if (mysqli_num_rows($query_run)==1) {
																														$fetch = mysqli_fetch_assoc($query_run);
																														$name = $fetch['username'];
																														echo '&nbsp'.'&nbsp'.$name;
																														echo '&nbsp'.'&nbsp'."<input type='submit' id='C53' name='C53' value=$name class='btn btn-primary'></input>" ;
																													}else {
																														echo " N/A  ";
																													}
																													}else {
																														echo " N/A  ";
																													}
																														  ?>




																											<br><br>		<strong>SENIOR SPORTS</strong> <br>
																													<br>

																															<?php
																															//candidate 1
																														$query="SELECT `username` FROM `seniorsports` WHERE `id`=1";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C54' name='C54' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																														}else {
																																echo " N/A  ";
																														}

																														//candidate 2
																														$query="SELECT `username` FROM `seniorsports` WHERE `id`=2";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C55' name='C55' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 3
																														$query="SELECT `username` FROM `seniorsports` WHERE `id`=3";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C56' name='C56' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 4
																														$query="SELECT `username` FROM `seniorsports` WHERE `id`=4";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C57' name='C57' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 5
																														$query="SELECT `username` FROM `seniorsports` WHERE `id`=5";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C58' name='C58' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																															  ?>




																											 <br><br>		<strong>JUNIOR SPORTS</strong> <br>
																											 		<br>

																															<?php
																															//candidate 1
																														$query="SELECT `username` FROM `juniorsports` WHERE `id`=1";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C59' name='C59' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																														}else {
																																echo " N/A  ";
																														}

																														//candidate 2
																														$query="SELECT `username` FROM `juniorsports` WHERE `id`=2";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C60' name='C60' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 3
																														$query="SELECT `username` FROM `juniorsports` WHERE `id`=3";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C61' name='C61' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 4
																														$query="SELECT `username` FROM `juniorsports` WHERE `id`=4";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C62' name='C62' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 5
																														$query="SELECT `username` FROM `juniorsports` WHERE `id`=5";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C63' name='C63' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																															  ?>




																											<br>	 <br>	<strong>SENIOR DINNING</strong> <br>
																												 	<br>


																															<?php
																															//candidate 1
																														$query="SELECT `username` FROM `seniordinning` WHERE `id`=1";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C64' name='C64' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																														}else {
																																echo " N/A  ";
																														}

																														//candidate 2
																														$query="SELECT `username` FROM `seniordinning` WHERE `id`=2";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C65' name='C65' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 3
																														$query="SELECT `username` FROM `seniordinning` WHERE `id`=3";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C66' name='C66' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 4
																														$query="SELECT `username` FROM `seniordinning` WHERE `id`=4";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C67' name='C67' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																														//candidate 5
																														$query="SELECT `username` FROM `seniordinning` WHERE `id`=5";
																														$query_run = mysqli_query($conn,$query);
																														if ($query_run) {
																														if (mysqli_num_rows($query_run)==1) {
																															$fetch = mysqli_fetch_assoc($query_run);
																															$name = $fetch['username'];
																															echo '&nbsp'.'&nbsp'.$name;
																															echo '&nbsp'.'&nbsp'."<input type='submit' id='C68' name='C68' value=$name class='btn btn-primary'></input>" ;
																														}else {
																															echo " N/A  ";
																														}
																														}else {
																															echo " N/A  ";
																														}
																															  ?>




																											<br><br>			<strong>JUNIOR DINNING</strong> <br>
																														<br>

																																<?php
																																//candidate 1
																															$query="SELECT `username` FROM `juniordinning` WHERE `id`=1";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C69' name='C69' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																															}else {
																																	echo " N/A  ";
																															}

																															//candidate 2
																															$query="SELECT `username` FROM `juniordinning` WHERE `id`=2";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C70' name='C70' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																															//candidate 3
																															$query="SELECT `username` FROM `juniordinning` WHERE `id`=3";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C71' name='C71' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																															//candidate 4
																															$query="SELECT `username` FROM `juniordinning` WHERE `id`=4";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C72' name='C72' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																															//candidate 5
																															$query="SELECT `username` FROM `juniordinning` WHERE `id`=5";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C73' name='C73' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																																  ?>




																											<br>	<br><br>	 	<strong>SENIOR UNIFORM</strong> <br>
																													 	<br>


																																<?php
																																//candidate 1
																															$query="SELECT `username` FROM `senioruniform` WHERE `id`=1";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C74' name='C74' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																															}else {
																																	echo " N/A  ";
																															}

																															//candidate 2
																															$query="SELECT `username` FROM `senioruniform` WHERE `id`=2";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C75' name='C75' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																															//candidate 3
																															$query="SELECT `username` FROM `senioruniform` WHERE `id`=3";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C76' name='C76' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																															//candidate 4
																															$query="SELECT `username` FROM `senioruniform` WHERE `id`=4";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C77' name='C77' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																															//candidate 5
																															$query="SELECT `username` FROM `senioruniform` WHERE `id`=5";
																															$query_run = mysqli_query($conn,$query);
																															if ($query_run) {
																															if (mysqli_num_rows($query_run)==1) {
																																$fetch = mysqli_fetch_assoc($query_run);
																																$name = $fetch['username'];
																																echo '&nbsp'.'&nbsp'.$name;
																																echo '&nbsp'.'&nbsp'."<input type='submit' id='C78' name='C78' value=$name class='btn btn-primary'></input>" ;
																															}else {
																																echo " N/A  ";
																															}
																															}else {
																																echo " N/A  ";
																															}
																																  ?>





																														<br><br>	<strong>JUNIOR UNIFORM</strong> <br>
																															<br>


																																	<?php
																																	//candidate 1
																																$query="SELECT `username` FROM `junioruniform` WHERE `id`=1";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																	if (mysqli_num_rows($query_run)==1) {
																																		$fetch = mysqli_fetch_assoc($query_run);
																																		$name = $fetch['username'];
																																		echo '&nbsp'.'&nbsp'.$name;
																																		echo '&nbsp'.'&nbsp'."<input type='submit' id='C79' name='C79' value=$name class='btn btn-primary'></input>" ;
																																	}else {
																																		echo " N/A  ";
																																	}
																																}else {
																																		echo " N/A  ";
																																}

																																//candidate 2
																																$query="SELECT `username` FROM `junioruniform` WHERE `id`=2";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C80' name='C80' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 3
																																$query="SELECT `username` FROM `junioruniform` WHERE `id`=3";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C81' name='C81' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 4
																																$query="SELECT `username` FROM `junioruniform` WHERE `id`=4";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C82' name='C82' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 5
																																$query="SELECT `username` FROM `junioruniform` WHERE `id`=5";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C83' name='C83' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																	  ?>




																												<br>	<br>	 	<strong>SENIOR ENTERTAINMENT</strong> <br>
																														 	<br>


																																	<?php
																																	//candidate 1
																																$query="SELECT `username` FROM `seniorentertainment` WHERE `id`=1";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																	if (mysqli_num_rows($query_run)==1) {
																																		$fetch = mysqli_fetch_assoc($query_run);
																																		$name = $fetch['username'];
																																		echo '&nbsp'.'&nbsp'.$name;
																																		echo '&nbsp'.'&nbsp'."<input type='submit' id='C84' name='C84' value=$name class='btn btn-primary'></input>" ;
																																	}else {
																																		echo " N/A  ";
																																	}
																																}else {
																																		echo " N/A  ";
																																}

																																//candidate 2
																																$query="SELECT `username` FROM `seniorentertainment` WHERE `id`=2";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C85' name='C85' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 3
																																$query="SELECT `username` FROM `seniorentertainment` WHERE `id`=3";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C86' name='C86' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 4
																																$query="SELECT `username` FROM `seniorentertainment` WHERE `id`=4";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C87' name='C87' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 5
																																$query="SELECT `username` FROM `seniorentertainment` WHERE `id`=5";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C88' name='C88' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																	  ?>






																											<br><br>			 	<strong>JUNIOR ENTERTAINMENT</strong> <br>
																														 	<br>

																																	<?php
																																	//candidate 1
																																$query="SELECT `username` FROM `juniorentertainment` WHERE `id`=1";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																	if (mysqli_num_rows($query_run)==1) {
																																		$fetch = mysqli_fetch_assoc($query_run);
																																		$name = $fetch['username'];
																																		echo '&nbsp'.'&nbsp'.$name;
																																		echo '&nbsp'.'&nbsp'."<input type='submit' id='C89' name='C89' value=$name class='btn btn-primary'></input>" ;
																																	}else {
																																		echo " N/A  ";
																																	}
																																}else {
																																		echo " N/A  ";
																																}

																																//candidate 2
																																$query="SELECT `username` FROM `juniorentertainment` WHERE `id`=2";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C90' name='C90' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 3
																																$query="SELECT `username` FROM `juniorentertainment` WHERE `id`=3";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C91' name='C91' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 4
																																$query="SELECT `username` FROM `juniorentertainment` WHERE `id`=4";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C92' name='C92' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																//candidate 5
																																$query="SELECT `username` FROM `juniorentertainment` WHERE `id`=5";
																																$query_run = mysqli_query($conn,$query);
																																if ($query_run) {
																																if (mysqli_num_rows($query_run)==1) {
																																	$fetch = mysqli_fetch_assoc($query_run);
																																	$name = $fetch['username'];
																																	echo '&nbsp'.'&nbsp'.$name;
																																	echo '&nbsp'.'&nbsp'."<input type='submit' id='C93' name='C93' value=$name class='btn btn-primary'></input>" ;
																																}else {
																																	echo " N/A  ";
																																}
																																}else {
																																	echo " N/A  ";
																																}
																																	  ?>


			 </form>
		</div>

	</body>
</html>
