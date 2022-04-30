<?php

include 'processing.php';
// If the user is not logged through the session it will redirect to the login page
if (!isset($_SESSION['user_id'])) {

	header('Location: index.php');
}
// WE STORE THE HEWSTON REDIRECT URL IN THE SESSION SUCH THAT IT CAN BE USED TO REDIRECT IN THE INCLUDE

?>


<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			onclick='window.location.reload(true)';
		</script>
		<meta charset="utf-8">
		<title>The Council</title>
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
			<h2>The Students Council</h2>
			<p>Welcome back, <?php echo $_SESSION['user_id'];?></p>
			<p> Please vote your candidates by clicking the vote button next to the candidate<b> remember you only vote once and this is irreversible.</b> </p>
			<?php
			$username=$_SESSION['user_id'];

			 ?>


			 <form action="" method="post">





	 <strong>CHAIRMAN</strong> <br>
	 <br>

	 		<?php
	 		//candidate 1
	 	$query="SELECT `username` FROM `chairman` WHERE `id`=1";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 		if (mysqli_num_rows($query_run)==1) {
	 			$fetch = mysqli_fetch_assoc($query_run);
	 			$name = $fetch['username'];
	 			echo '&nbsp'.'&nbsp'.$name;
	 			echo '&nbsp'.'&nbsp'."<input type='submit' name='S1' id='S1' value=$name class='btn btn-primary'></input>" ;
	 		}else {
	 			echo " N/A";
	 		}
	 	}else {
	 			echo " N/A";
	 	}

	 	//candidate 2
	 	$query="SELECT `username` FROM `chairman` WHERE `id`=2";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S2' id='S2' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 	//candidate 3
	 	$query="SELECT `username` FROM `chairman` WHERE `id`=3";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S3' id='S3' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 	//candidate 4
	 	$query="SELECT `username` FROM `chairman` WHERE `id`=4";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S4' id='S4' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 	//candidate 5
	 	$query="SELECT `username` FROM `chairman` WHERE `id`=5";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S5' id='S5' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 		  ?>




<br> <br><strong>seniortreasurer</strong> <br>
	 <br>


	 		<?php
	 		//candidate 1
	 	$query="SELECT `username` FROM `seniortreasurer` WHERE `id`=1";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 		if (mysqli_num_rows($query_run)==1) {
	 			$fetch = mysqli_fetch_assoc($query_run);
	 			$name = $fetch['username'];
	 			echo '&nbsp'.'&nbsp'.$name;
	 			echo '&nbsp'.'&nbsp'."<input type='submit' name='S6' id='S6' value=$name class='btn btn-primary'></input>" ;
	 		}else {
	 			echo " N/A";
	 		}
	 	}else {
	 			echo " N/A";
	 	}

	 	//candidate 2
	 	$query="SELECT `username` FROM `seniortreasurer` WHERE `id`=2";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S7' id='S7' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 	//candidate 3
	 	$query="SELECT `username` FROM `seniortreasurer` WHERE `id`=3";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S8' id='S8' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 	//candidate 4
	 	$query="SELECT `username` FROM `seniortreasurer` WHERE `id`=4";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S9' id='S9' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 	//candidate 5
	 	$query="SELECT `username` FROM `seniortreasurer` WHERE `id`=5";
	 	$query_run = mysqli_query($conn,$query);
	 	if ($query_run) {
	 	if (mysqli_num_rows($query_run)==1) {
	 		$fetch = mysqli_fetch_assoc($query_run);
	 		$name = $fetch['username'];
	 		echo '&nbsp'.'&nbsp'.$name;
	 		echo '&nbsp'.'&nbsp'."<input type='submit' name='S10' id='S10' value=$name class='btn btn-primary'></input>" ;
	 	}else {
	 		echo " N/A";
	 	}
	 	}else {
	 		echo " N/A";
	 	}
	 		  ?>




				<br>	<br><strong>seniorspeaker</strong> <br>
					<br>

					<?php
					//candidate 1
				$query="SELECT `username` FROM `seniorspeaker` WHERE `id`=1";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S11a' id='S11a' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
				}else {
						echo " N/A  ";
				}

				//candidate 2
				$query="SELECT `username` FROM `seniorspeaker` WHERE `id`=2";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S12b' id='S12b' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
				//candidate 3
				$query="SELECT `username` FROM `seniorspeaker` WHERE `id`=3";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S13c' id='S13c' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
				//candidate 4
				$query="SELECT `username` FROM `seniorspeaker` WHERE `id`=4";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S14d' id='S14d' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
				//candidate 5
				$query="SELECT `username` FROM `seniorspeaker` WHERE `id`=5";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S15e' id='S15e' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
					  ?>





				<br> <br><br>	<strong>seniorgeneralsecretary</strong> <br>
				 	<br>
					<?php
					//candidate 1
				$query="SELECT `username` FROM `seniorgeneralsecretary` WHERE `id`=1";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S11' id='S11' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
				}else {
						echo " N/A  ";
				}

				//candidate 2
				$query="SELECT `username` FROM `seniorgeneralsecretary` WHERE `id`=2";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S12' id='S12' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
				//candidate 3
				$query="SELECT `username` FROM `seniorgeneralsecretary` WHERE `id`=3";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S13' id='S13' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
				//candidate 4
				$query="SELECT `username` FROM `seniorgeneralsecretary` WHERE `id`=4";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S14' id='S14' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {

					echo " N/A  ";
				}
				//candidate 5
				$query="SELECT `username` FROM `seniorgeneralsecretary` WHERE `id`=5";
				$query_run = mysqli_query($conn,$query);
				if ($query_run) {
				if (mysqli_num_rows($query_run)==1) {
					$fetch = mysqli_fetch_assoc($query_run);
					$name = $fetch['username'];
					echo '&nbsp'.'&nbsp'.$name;
					echo '&nbsp'.'&nbsp'."<input type='submit' name='S15' id='S15' value=$name class='btn btn-primary'></input>" ;
				}else {
					echo " N/A  ";
				}
				}else {
					echo " N/A  ";
				}
					  ?>






				<br>	<br>	<strong>seniorlegaladvisor</strong> <br>
						<br>
						<?php
						//candidate 1
					$query="SELECT `username` FROM `seniorlegaladvisor` WHERE `id`=1";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
						if (mysqli_num_rows($query_run)==1) {
							$fetch = mysqli_fetch_assoc($query_run);
							$name = $fetch['username'];
							echo '&nbsp'.'&nbsp'.$name;
							echo '&nbsp'.'&nbsp'."<input type='submit' name='S16' id='S16' value=$name class='btn btn-primary'></input>" ;
						}else {
							echo " N/A  ";
						}
					}else {
							echo " N/A  ";
					}

					//candidate 2
					$query="SELECT `username` FROM `seniorlegaladvisor` WHERE `id`=2";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S17' id='S17' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
					//candidate 3
					$query="SELECT `username` FROM `seniorlegaladvisor` WHERE `id`=3";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S18' id='S18' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
					//candidate 4
					$query="SELECT `username` FROM `seniorlegaladvisor` WHERE `id`=4";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S19' id='S19' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
					//candidate 5
					$query="SELECT `username` FROM `seniorlegaladvisor` WHERE `id`=5";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S20' id='S20' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
						  ?>






				<br><br>	 	<strong>seniorpublicitysecretary</strong> <br>
					 	<br>

						<?php
						//candidate 1
					$query="SELECT `username` FROM `seniorpublicitysecretary` WHERE `id`=1";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
						if (mysqli_num_rows($query_run)==1) {
							$fetch = mysqli_fetch_assoc($query_run);
							$name = $fetch['username'];
							echo '&nbsp'.'&nbsp'.$name;
							echo '&nbsp'.'&nbsp'."<input type='submit' name='S21' id='S21' value=$name class='btn btn-primary'></input>" ;
						}else {
							echo " N/A  ";
						}
					}else {
							echo " N/A  ";
					}

					//candidate 2
					$query="SELECT `username` FROM `seniorpublicitysecretary` WHERE `id`=2";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S22' id='S22' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
					//candidate 3
					$query="SELECT `username` FROM `seniorpublicitysecretary` WHERE `id`=3";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S23' id='S23' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
					//candidate 4
					$query="SELECT `username` FROM `seniorpublicitysecretary` WHERE `id`=4";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S24' id='S24' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
					//candidate 5
					$query="SELECT `username` FROM `seniorpublicitysecretary` WHERE `id`=5";
					$query_run = mysqli_query($conn,$query);
					if ($query_run) {
					if (mysqli_num_rows($query_run)==1) {
						$fetch = mysqli_fetch_assoc($query_run);
						$name = $fetch['username'];
						echo '&nbsp'.'&nbsp'.$name;
						echo '&nbsp'.'&nbsp'."<input type='submit' name='S25' id='S25' value=$name class='btn btn-primary'></input>" ;
					}else {
						echo " N/A  ";
					}
					}else {
						echo " N/A  ";
					}
						  ?>





					<br><br>		<strong>vicechairman</strong> <br>
							<br>

									<?php


								$query="SELECT `username` FROM `vicechairman` WHERE `id`=1";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S26' id='S26' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
								}else {
										echo " N/A  ";
								}

								//candidate 2
								$query="SELECT `username` FROM `vicechairman` WHERE `id`=2";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S27' id='S27' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
								//candidate 3
								$query="SELECT `username` FROM `vicechairman` WHERE `id`=3";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S28' id='S28' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
								//candidate 4
								$query="SELECT `username` FROM `vicechairman` WHERE `id`=4";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S29' id='S29' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
								//candidate 5
								$query="SELECT `username` FROM `vicechairman` WHERE `id`=5";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S30' id='S30' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}


									  ?>





					<br>	 	<br><strong>juniortreasurer</strong> <br>
						 	<br>

									<?php
									//candidate 1
								$query="SELECT `username` FROM `juniortreasurer` WHERE `id`=1";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S31' id='S31' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
								}else {
										echo " N/A  ";
								}

								//candidate 2
								$query="SELECT `username` FROM `juniortreasurer` WHERE `id`=2";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S32' id='S32' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
								//candidate 3
								$query="SELECT `username` FROM `juniortreasurer` WHERE `id`=3";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S33' id='S33' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
								//candidate 4
								$query="SELECT `username` FROM `juniortreasurer` WHERE `id`=4";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S34' id='S34' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
								//candidate 5
								$query="SELECT `username` FROM `juniortreasurer` WHERE `id`=5";
								$query_run = mysqli_query($conn,$query);
								if ($query_run) {
								if (mysqli_num_rows($query_run)==1) {
									$fetch = mysqli_fetch_assoc($query_run);
									$name = $fetch['username'];
									echo '&nbsp'.'&nbsp'.$name;
									echo '&nbsp'.'&nbsp'."<input type='submit' name='S35' id='S35' value=$name class='btn btn-primary'></input>" ;
								}else {
									echo " N/A  ";
								}
								}else {
									echo " N/A  ";
								}
									  ?>





						<br><br>		<strong>juniorspeaker</strong> <br>
								<br>


										<?php
										//candidate 1
									$query="SELECT `username` FROM `juniorspeaker` WHERE `id`=1";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S36' id='S36' value=$name class='btn btn-primary'></input>" ;
										}else {
											echo " N/A  ";
										}
									}else {
											echo " N/A  ";
									}

									//candidate 2
									$query="SELECT `username` FROM `juniorspeaker` WHERE `id`=2";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S37' id='S37' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 3
									$query="SELECT `username` FROM `juniorspeaker` WHERE `id`=3";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S38' id='S38' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 4
									$query="SELECT `username` FROM `juniorspeaker` WHERE `id`=4";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S39' id='S39' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 5
									$query="SELECT `username` FROM `juniorspeaker` WHERE `id`=5";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S40' id='S40' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
										  ?>




						 	<br><br>	<strong>juniorgeneralsecretary</strong> <br>
						 		<br>


										<?php
										//candidate 1
									$query="SELECT `username` FROM `juniorgeneralsecretary` WHERE `id`=1";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S41' id='S41' value=$name class='btn btn-primary'></input>" ;
										}else {
											echo " N/A  ";
										}
									}else {
											echo " N/A  ";
									}

									//candidate 2
									$query="SELECT `username` FROM `juniorgeneralsecretary` WHERE `id`=2";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S42' id='S42' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 3
									$query="SELECT `username` FROM `juniorgeneralsecretary` WHERE `id`=3";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S43' id='S43' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 4
									$query="SELECT `username` FROM `juniorgeneralsecretary` WHERE `id`=4";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S44' id='S44' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 5
									$query="SELECT `username` FROM `juniorgeneralsecretary` WHERE `id`=5";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S45' id='S45' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
										  ?>




						<br><br>	 	<strong>juniordeputyacademics</strong> <br>
							 	<br>


										<?php
										//candidate 1
									$query="SELECT `username` FROM `juniordeputyacademics` WHERE `id`=1";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S46' id='S46' value=$name class='btn btn-primary'></input>" ;
										}else {
											echo " N/A  ";
										}
									}else {
											echo " N/A  ";
									}

									//candidate 2
									$query="SELECT `username` FROM `juniordeputyacademics` WHERE `id`=2";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S47' id='S47' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 3
									$query="SELECT `username` FROM `juniordeputyacademics` WHERE `id`=3";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S48' id='S48' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 4
									$query="SELECT `username` FROM `juniordeputyacademics` WHERE `id`=4";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S49' id='S49' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
									//candidate 5
									$query="SELECT `username` FROM `juniordeputyacademics` WHERE `id`=5";
									$query_run = mysqli_query($conn,$query);
									if ($query_run) {
									if (mysqli_num_rows($query_run)==1) {
										$fetch = mysqli_fetch_assoc($query_run);
										$name = $fetch['username'];
										echo '&nbsp'.'&nbsp'.$name;
										echo '&nbsp'.'&nbsp'."<input type='submit' name='S50a' id='S50a' value=$name class='btn btn-primary'></input>" ;
									}else {
										echo " N/A  ";
									}
									}else {
										echo " N/A  ";
									}
										  ?>




							<br><br>		<strong>juniorpublicitysecretary</strong> <br>
									<br>

											<?php
											//candidate 1
										$query="SELECT `username` FROM `juniorpublicitysecretary` WHERE `id`=1";
										$query_run = mysqli_query($conn,$query);
										if ($query_run) {
											if (mysqli_num_rows($query_run)==1) {
												$fetch = mysqli_fetch_assoc($query_run);
												$name = $fetch['username'];
												echo '&nbsp'.'&nbsp'.$name;
												echo '&nbsp'.'&nbsp'."<input type='submit' name='S49a' id='S49a' value=$name class='btn btn-primary'></input>" ;
											}else {
												echo " N/A  ";
											}
										}else {
												echo " N/A  ";
										}

										//candidate 2
										$query="SELECT `username` FROM `juniorpublicitysecretary` WHERE `id`=2";
										$query_run = mysqli_query($conn,$query);
										if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S50' id='S50' value=$name class='btn btn-primary'></input>" ;
										}else {
											echo " N/A  ";
										}
										}else {
											echo " N/A  ";
										}
										//candidate 3
										$query="SELECT `username` FROM `juniorpublicitysecretary` WHERE `id`=3";
										$query_run = mysqli_query($conn,$query);
										if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S51' id='S51' value=$name class='btn btn-primary'></input>" ;
										}else {
											echo " N/A  ";
										}
										}else {
											echo " N/A  ";
										}
										//candidate 4
										$query="SELECT `username` FROM `juniorpublicitysecretary` WHERE `id`=4";
										$query_run = mysqli_query($conn,$query);
										if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S52' id='S52' value=$name class='btn btn-primary'></input>" ;
										}else {
											echo " N/A  ";
										}
										}else {
											echo " N/A  ";
										}
										//candidate 5
										$query="SELECT `username` FROM `juniorpublicitysecretary` WHERE `id`=5";
										$query_run = mysqli_query($conn,$query);
										if ($query_run) {
										if (mysqli_num_rows($query_run)==1) {
											$fetch = mysqli_fetch_assoc($query_run);
											$name = $fetch['username'];
											echo '&nbsp'.'&nbsp'.$name;
											echo '&nbsp'.'&nbsp'."<input type='submit' name='S53' id='S53' value=$name class='btn btn-primary'></input>" ;
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
