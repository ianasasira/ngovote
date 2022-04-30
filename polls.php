<?php
require 'DB_conn.php';



if (!isset($_SESSION['user_id_admin'])) {
	header('Location: index.php');
}



 ?>

 <!DOCTYPE html>
 <html>
 	<head>
		  <link rel="shortcut icon" href="logo.jpg" />
 		<meta charset="utf-8">
 		<title>Admin Page</title>

 		<link href="style3.css" rel="stylesheet" type="text/css">
 		<link rel ="stylesheet"	href="css/bootstrap.min.css">
		<style media="screen">
			.span1{
color:red;
			}
		</style>
 		</head>
 	<body class="loggedin">




 		<nav class="navtop">
 <div>
 	<h3>Namilyango Vote</h3>

 	<a href="logout.php"> <i class="fas fa-sign-out-alt"></i>Logout</a>&nbsp&nbsp&nbsp
	<a href="admin.php"> <i class="fas fa-sign-out-alt"></i>Back To Home</a>&nbsp&nbsp&nbsp




 		</nav>

 		<div class="content">
 			<h2>Polls Management Page</h2>
 			<p>Welcome back, <?php echo $_SESSION['user_id_admin'];?>! The Polls for Management for the student are presented as below.</p>

<div class="row">
	<div class="form-group">
<strong>Create Poll</strong><br><br>
<strong>NOTE </strong>There will be no edtiing of indivual student data however
<br> a poll can be deleted with its content and re entred.
<br><br>
<form class="" action="polls.php" method="post">
	<strong>No spaces should be left while typing in the text below <br> i.e headprefect not head prefect.</strong><br>
<br>Please fill in as with correct spelling maximum of 5prefects per poll.<br>
	 <input type="text"  name="title" class="form-control" placeholder=" Post i.e headprefect, juniordoyle, senioracademics, seniordoyle  no spaces should be left when filling in this text." id="username">


<br>
<input type="text" name="prefect1" class="form-control"  placeholder=" Candidate 1 i.e Asasira Ian" id="" ><br>
<input type="text" name="prefect2" class="form-control"  placeholder=" Candidate 2" id="" ><br>
<input type="text" name="prefect3" class="form-control"  placeholder=" Candidate 3" id="" ><br>
<input type="text" name="prefect4" class="form-control"  placeholder=" Candidate 4" id="" ><br>
<input type="text" name="prefect5" class="form-control"  placeholder=" Candidate 5" id="" ><br>
<input type="text" name="prefect6" class="form-control"  placeholder=" Candidate 6" id="" ><br>
<input type="text" name="prefect7" class="form-control"  placeholder=" Candidate 7" id="" ><br>
<input type="text" name="prefect8" class="form-control"  placeholder=" Candidate 8" id="" ><br>

<button type="submit" class ="btn"name="buttonsubmit">Submit</button>
<br>
<br>

<?php
if (isset($_POST['title'])) {
  //SEND the data to the severe only if the title is filled in
  if (!empty($_POST['title'])) {
    $post_title =$_POST['title'];
    //creating a table in title names
    $query_title = "SELECT * FROM `".mysqli_real_escape_string($conn,$post_title)."`";
    $query_run_title=mysqli_query($conn,$query_title);
    //message for data submitted in consideration with the tiile
  if ($query_run_title) {
		//check id if available if not create one
		$query_check_id = "SELECT `id` FROM `$post_title`";
		$query_check_id_run = mysqli_query($conn,$query_check_id);
		if ($query_check_id_run) {

		}else {
			$query_add_id="ALTER TABLE `$post_title` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
		  $query_add_id_run=mysqli_query($conn,$query_add_id);

		}
	/**/
      $_SESSION['prefect_title']='Successfully added Into Prefect Post'.'  '.$post_title;
      echo $_SESSION['prefect_title'];
    }else {
      echo "Failed to enter for prefect post"."  ".$post_title."  "."since you might have typed it incorrectly";
    }
    //Posting data for different prefect posts
  if (isset($_POST['prefect1'])OR isset($_POST['prefect2'])OR isset($_POST['prefect3'])OR isset($_POST['prefect4'])OR isset($_POST['prefect5'])OR isset($_POST['prefect6'])OR isset($_POST['prefect7'])OR isset($_POST['prefect8'])) {



  if (!empty($_POST['prefect1'])) {
		//increamenting the voting id



    // querying data to the post[title] table
    $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect1'])."','')";
    $query_run_prefect= mysqli_query($conn,$query_prefect);
    if ($query_run_prefect) {
 echo  'Successfully added candidate  : '.$_POST['prefect1'].'<br>';
}else {
      echo " Re-spell and try again";
}

}

      if (!empty($_POST['prefect2'])) {
        // querying data to the post[title] table
        $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect2'])."','')";
        $query_run_prefect= mysqli_query($conn,$query_prefect);
        if ($query_run_prefect) {
     echo  'Successfully added candidate  : '.$_POST['prefect2'].'<br>';
    }else {
          echo " Re-spell and try again";
    }
      }

       if (!empty($_POST['prefect3'])) {
         // querying data to the post[title] table
         $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect3'])."','')";
         $query_run_prefect= mysqli_query($conn,$query_prefect);
         if ($query_run_prefect) {
      echo  'Successfully added candidate  : '.$_POST['prefect3'].'<br>';
     }else {
           echo " Re-spell and try again";
     }
       }
        if (!empty($_POST['prefect4'])) {
          // querying data to the post[title] table
          $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect4'])."','')";
          $query_run_prefect= mysqli_query($conn,$query_prefect);
          if ($query_run_prefect) {
       echo  'Successfully added candidate  : '.$_POST['prefect4'].'<br>';
      }else {
            echo " Re-spell and try again";
      }
        }
         if (!empty($_POST['prefect5'])) {
           // querying data to the post[title] table
           $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect5'])."','')";
           $query_run_prefect= mysqli_query($conn,$query_prefect);
           if ($query_run_prefect) {
        echo  'Successfully added candidate  : '.$_POST['prefect5'].'<br>';
       }else {
             echo " Re-spell and try again";
       }
         }
          if (!empty($_POST['prefect6'])) {
            // querying data to the post[title] table
            $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect6'])."','')";
            $query_run_prefect= mysqli_query($conn,$query_prefect);
            if ($query_run_prefect) {
         echo  'Successfully added candidate  : '.$_POST['prefect6'].'<br>';
        }else {
              echo " Re-spell and try again";
        }
          }
           if (!empty($_POST['prefect7'])) {
             // querying data to the post[title] table
             $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect7'])."','')";
             $query_run_prefect= mysqli_query($conn,$query_prefect);
             if ($query_run_prefect) {
          echo  'Successfully added candidate  : '.$_POST['prefect7'].'<br>';
         }else {
               echo " Re-spell and try again";
         }
           }
            if (!empty($_POST['prefect8'])) {
              // querying data to the post[title] table
              $query_prefect="INSERT INTO `".mysqli_real_escape_string($conn,$post_title)."` (`id`,`username`,`votes`) VALUES (NULL,'".mysqli_real_escape_string($conn,$_POST['prefect8'])."','')";
              $query_run_prefect= mysqli_query($conn,$query_prefect);
              if ($query_run_prefect) {
           echo  'Successfully added candidate  : '.$_POST['prefect8'].'<br>';
          }else {
                echo " Re-spell and try again";
          }
            }
}
}
          else {
            echo "please feel the title first ";
            }
}

            else {
            echo "You can fill in the polls above";
            }

 ?>

</form><br>
<form action="polls.php" method="post">
	<input type="text" name="sethostelcode" class="form-control"  placeholder="Reset hostel code" id="" ><br>
	<button type="submit" class ="btn"name="buttonsubmit-reset">Reset</button> &nbsp&nbsp&nbsp&nbsp <button type="submit" class ="btn btn"name="buttonsubmit-delete">delete</button>

</form>




<?php
if(isset($_POST['buttonsubmit-reset'])){
	if (isset($_POST['sethostelcode'])){
		//SEND the data to the severe only if the hostelcode is filled in
		if(!empty($_POST['sethostelcode'])){
			$query="SELECT `code` FROM `hostelcode`";
			$query_run = mysqli_query($conn,$query);
			$query_run_fetch_hostel_code = mysqli_fetch_assoc($query_run);
			$fetch_hostel_code = $query_run_fetch_hostel_code['code'];

		//checking the database if the hostel code is empty and so it sets a new value
      if(empty($fetch_hostel_code)){


    	$hostel_login_code = mysqli_real_escape_string($conn, $_POST['sethostelcode']);
			$query_set_hostel_code = "INSERT INTO `hostelcode` (`code`) VALUES ('$hostel_login_code')";
			$query_run_set_hostel_code = mysqli_query($conn, $query_set_hostel_code);
			if ($query_run_set_hostel_code){
				$query="SELECT `code` FROM `hostelcode`";
				$query_run = mysqli_query($conn,$query);
				$query_run_fetch_hostel_code = mysqli_fetch_assoc($query_run);
				$fetch_hostel_code = $query_run_fetch_hostel_code['code'];
				echo "<b>$fetch_hostel_code</b> is the new hostel code";
			}else{

			}
		}else{
			echo "Please delete the previous<b>  $fetch_hostel_code</b> to continue";
		}
	}
        else{
			echo "Please fill in the hostel code to reset it";
		}
	}else{

	}}

if(isset($_POST['buttonsubmit-delete'])){

	$query = "drop table `hostelcode`";
	$query_run = mysqli_query($conn, $query);
	// setting hostel table data
	$query = "CREATE TABLE `ngovote`.`hostelcode` ( `code` INT(255) NULL , PRIMARY KEY (`code`)) ENGINE = InnoDB";
	$query_run = mysqli_query($conn,$query);

	if($query_run){
    echo "Successfully deleted previous hostel code";
	}else{

	}
}else{

}
 ?>

	</div>
<div class="">
	<strong>Delete and view polls</strong><br><br>
	<form class="" action="polls.php" method="post">


	<?php
//headprefect


if (isset($_POST['button1'])) {
	//delete usernames and votes
	$query_delete="DELETE FROM `headprefect` WHERE `headprefect`.`id`";
	$query_run_delete=mysqli_query($conn,$query_delete);
//drop the id column
  $query_drop_id="alter table `headprefect` drop `id`";
	$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all headprefect candidates".'<br>';
}
else {
echo "failed";
}}
	echo '<strong>HEADPREFECT <button type="submit" class ="btn"name="button1">Delete</button></strong>';

	$query= "SELECT `username` FROM `headprefect`";
  $query_run = mysqli_query($conn,$query);
	if (mysqli_num_rows($query_run)==0) {
			echo ":   No Registered Candidates".'<br>'.'<br>';
		}else {

		}
  while ($fetch=mysqli_fetch_assoc($query_run)) {
	$candidate_name = $fetch['username'];
	echo $candidate_name.'<br>';
    }



//headboy
if (isset($_POST['button2'])) {
	$query_delete="DELETE FROM `headboy` WHERE `headboy`.`id`";
	$query_run_delete=mysqli_query($conn,$query_delete);

	//drop the id column
	  $query_drop_id="alter table `headboy` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all headboy candidates".'<br>';
}
else {
echo "failed";
}}
					echo '<strong>HEADBOY <button type="submit" class ="btn"name="button2">Delete</button></strong>';

					$query= "SELECT `username` FROM `headboy`";
				  $query_run = mysqli_query($conn,$query);
					if (mysqli_num_rows($query_run)==0) {
							echo ":   No Registered Candidates".'<br>'.'<br>';
						}else {

						}
				  while ($fetch=mysqli_fetch_assoc($query_run)) {
					$candidate_name = $fetch['username'];
					echo $candidate_name.'<br>';
				    }
						//litrugy
						if (isset($_POST['button3'])) {
							$query_delete="DELETE FROM `seniorliturgy` WHERE `seniorliturgy`.`id`";
							$query_run_delete=mysqli_query($conn,$query_delete);
							//drop the id column
							  $query_drop_id="alter table `seniorliturgy` drop `id`";
								$query_drop_id_run = mysqli_query($conn,$query_drop_id);

						if ($query_run_delete) {
						echo "Successfully deleted all seniorliturgy candidates".'<br>';
						}
						else {
						echo "failed";
						}}
						echo '<strong>SENIORLITURGY<button type="submit" class ="btn"name="button3">Delete</button></strong>';

						$query= "SELECT `username` FROM `seniorliturgy`";
					  $query_run = mysqli_query($conn,$query);
						if (mysqli_num_rows($query_run)==0) {
								echo ":   No Registered Candidates".'<br>'.'<br>';
							}else {

							}
					  while ($fetch=mysqli_fetch_assoc($query_run)) {
						$candidate_name = $fetch['username'];
						echo $candidate_name.'<br>';
					    }



        //liturgy
				if (isset($_POST['button4'])) {
					$query_delete="DELETE FROM `juniorliturgy` WHERE `juniorliturgy`.`id`";

					$query_run_delete=mysqli_query($conn,$query_delete);
					//drop the id column
					  $query_drop_id="alter table `juniorliturgy` drop `id`";
						$query_drop_id_run = mysqli_query($conn,$query_drop_id);

				if ($query_run_delete) {
				echo "Successfully deleted all juniorliturgy candidates".'<br>';
				}
				else {
				echo "failed";
				}}
							echo '<strong>JUNIORLITURGY<button type="submit" class ="btn"name="button4">Delete</button></strong>';

							$query= "SELECT `username` FROM `juniorliturgy`";
						  $query_run = mysqli_query($conn,$query);
							if (mysqli_num_rows($query_run)==0) {
									echo ":   No Registered Candidates".'<br>'.'<br>';
								}else {

								}
						  while ($fetch=mysqli_fetch_assoc($query_run)) {
							$candidate_name = $fetch['username'];
							echo $candidate_name.'<br>';
						    }






								//chairman
								if (isset($_POST['button5'])) {
									$query_delete="DELETE FROM `hostelchairman` WHERE `hostelchairman`.`id`";
									$query_run_delete=mysqli_query($conn,$query_delete);
									//drop the id column
									  $query_drop_id="alter table `hostelchairman` drop `id`";
										$query_drop_id_run = mysqli_query($conn,$query_drop_id);

								if ($query_run_delete) {
								echo "Successfully deleted all HostelChairman candidates".'<br>';
								}
								else {
								echo "failed";
								}}
								echo '<strong>HOSTELCHAIRMAN<button type="submit" class ="btn"name="button5">Delete</button></strong>';

								$query= "SELECT `username` FROM `hostelchairman`";
							  $query_run = mysqli_query($conn,$query);
								if (mysqli_num_rows($query_run)==0) {
										echo ":   No Registered Candidates".'<br>'.'<br>';
									}else {

									}
							  while ($fetch=mysqli_fetch_assoc($query_run)) {
								$candidate_name = $fetch['username'];
								echo $candidate_name.'<br>';
							    }




//academics
if (isset($_POST['button6'])) {
	$query_delete="DELETE FROM `senioracademics` WHERE `senioracademics`.`id`";
	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `senioracademics` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all senioracademics candidates".'<br>';
}
else {
echo "failed";
}}
									echo '<strong>SENIORACADEMICS<button type="submit" class ="btn"name="button6">Delete</button></strong>';

									$query= "SELECT `username` FROM `senioracademics`";
								  $query_run = mysqli_query($conn,$query);
									if (mysqli_num_rows($query_run)==0) {
											echo ":   No Registered Candidates".'<br>'.'<br>';
										}else {

										}
								  while ($fetch=mysqli_fetch_assoc($query_run)) {
									$candidate_name = $fetch['username'];
									echo $candidate_name.'<br>';
								    }



										//academics
									 	if (isset($_POST['button7'])) {
											$query_delete="DELETE FROM `junioracademics` WHERE `junioracademics`.`id`";

											$query_run_delete=mysqli_query($conn,$query_delete);
											//drop the id column
											  $query_drop_id="alter table `junioracademics` drop `id`";
												$query_drop_id_run = mysqli_query($conn,$query_drop_id);

										if ($query_run_delete) {
										echo "Successfully deleted all junioracademics candidates".'<br>';
										}
										else {
										echo "failed";
										}}
										echo '<strong>JUNIORACADEMICS<button type="submit" class ="btn"name="button7">Delete</button></strong>';

										$query= "SELECT `username` FROM `junioracademics`";
									  $query_run = mysqli_query($conn,$query);
										if (mysqli_num_rows($query_run)==0) {
												echo ":   No Registered Candidates".'<br>'.'<br>';
											}else {

											}
									  while ($fetch=mysqli_fetch_assoc($query_run)) {
										$candidate_name = $fetch['username'];
										echo $candidate_name.'<br>';
									    }




											//mail and info
											if (isset($_POST['button8'])) {
												$query_delete="DELETE FROM `seniormailandlib` WHERE `seniormailandlib`.`id`";

												$query_run_delete=mysqli_query($conn,$query_delete);
												//drop the id column
												  $query_drop_id="alter table `seniormailandlib` drop `id`";
													$query_drop_id_run = mysqli_query($conn,$query_drop_id);

											if ($query_run_delete) {
											echo "Successfully deleted all seniormailandlib candidates".'<br>';
											}
											else {
											echo "failed";
											}}
											echo '<strong>SENIORMAILANDLIB<button type="submit" class ="btn"name="button8">Delete</button></strong>';

											$query= "SELECT `username` FROM `seniormailandlib`";
										  $query_run = mysqli_query($conn,$query);
											if (mysqli_num_rows($query_run)==0) {
													echo ":   No Registered Candidates".'<br>'.'<br>';
												}else {

												}
										  while ($fetch=mysqli_fetch_assoc($query_run)) {
											$candidate_name = $fetch['username'];
											echo $candidate_name.'<br>';
										    }
												//mail and lib
												if (isset($_POST['button9'])) {
													$query_delete="DELETE FROM `juniormailandlib` WHERE `juniormailandlib`.`id`";

													$query_run_delete=mysqli_query($conn,$query_delete);
													//drop the id column
													  $query_drop_id="alter table `juniormailandlib` drop `id`";
														$query_drop_id_run = mysqli_query($conn,$query_drop_id);

												if ($query_run_delete) {
												echo "Successfully deleted all juniormailandlib candidates".'<br>';
												}
												else {
												echo "failed";
												}}
												echo '<strong>JUNIORMAILANDLIB<button type="submit" class ="btn"name="button9">Delete</button></strong>';

												$query= "SELECT `username` FROM `juniormailandlib`";
											  $query_run = mysqli_query($conn,$query);
												if (mysqli_num_rows($query_run)==0) {
														echo ":   No Registered Candidates".'<br>'.'<br>';
													}else {

													}
											  while ($fetch=mysqli_fetch_assoc($query_run)) {
												$candidate_name = $fetch['username'];
												echo $candidate_name.'<br>';
											    }





//sports
if (isset($_POST['button10'])) {
	$query_delete="DELETE FROM `seniorsports` WHERE `seniorsports`.`id`";

	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `seniorsports` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all seniorsports candidates".'<br>';
}
else {
echo "failed";
}}
													echo '<strong>SENIORSPORTS<button type="submit" class ="btn"name="button10">Delete</button></strong>';

													$query= "SELECT `username` FROM `seniorsports`";
												  $query_run = mysqli_query($conn,$query);
													if (mysqli_num_rows($query_run)==0) {
															echo ":   No Registered Candidates".'<br>'.'<br>';
														}else {

														}
												  while ($fetch=mysqli_fetch_assoc($query_run)) {
													$candidate_name = $fetch['username'];
													echo $candidate_name.'<br>';
												    }
														//sports
														if (isset($_POST['button11'])) {
															$query_delete="DELETE FROM `juniorsports` WHERE `juniorsports`.`id`";

															$query_run_delete=mysqli_query($conn,$query_delete);
															//drop the id column
															  $query_drop_id="alter table `juniorsports` drop `id`";
																$query_drop_id_run = mysqli_query($conn,$query_drop_id);

														if ($query_run_delete) {
														echo "Successfully deleted all juniorsports candidates".'<br>';
														}
														else {
														echo "failed";
														}}
														echo '<strong>JUNIORSPORTS<button type="submit" class ="btn"name="button11">Delete</button></strong>';

														$query= "SELECT `username` FROM `juniorsports`";
													  $query_run = mysqli_query($conn,$query);
														if (mysqli_num_rows($query_run)==0) {
																echo ":   No Registered Candidates".'<br>'.'<br>';
															}else {

															}
													  while ($fetch=mysqli_fetch_assoc($query_run)) {
														$candidate_name = $fetch['username'];
														echo $candidate_name.'<br>';
													    }




//DINNING
if (isset($_POST['button12'])) {
	$query_delete="DELETE FROM `seniordinning` WHERE `seniordinning`.`id`";

	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `seniordinning` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all seniordinning candidates".'<br>';
}
else {
echo "failed";
}}
															echo '<strong>SENIORDINNING<button type="submit" class ="btn"name="button12">Delete</button></strong>';

															$query= "SELECT `username` FROM `seniordinning`";
														  $query_run = mysqli_query($conn,$query);
															if (mysqli_num_rows($query_run)==0) {
																	echo ":   No Registered Candidates".'<br>'.'<br>';
																}else {

																}
														  while ($fetch=mysqli_fetch_assoc($query_run)) {
															$candidate_name = $fetch['username'];
															echo $candidate_name.'<br>';
														    }


																//dining
																if (isset($_POST['button13'])) {
																	$query_delete="DELETE FROM `juniordinning` WHERE `juniordinning`.`id`";

																	$query_run_delete=mysqli_query($conn,$query_delete);
																	//drop the id column
																	  $query_drop_id="alter table `juniordinning` drop `id`";
																		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																if ($query_run_delete) {
																echo "Successfully deleted all junior dinning candidates".'<br>';
																}
																else {
																echo "failed";
																}}
																echo '<strong>JUNIORDINNING<button type="submit" class ="btn"name="button13">Delete</button></strong>';

																$query= "SELECT `username` FROM `juniordinning`";
															  $query_run = mysqli_query($conn,$query);
																if (mysqli_num_rows($query_run)==0) {
																		echo ":   No Registered Candidates".'<br>'.'<br>';
																	}else {

																	}
															  while ($fetch=mysqli_fetch_assoc($query_run)) {
																$candidate_name = $fetch['username'];
																echo $candidate_name.'<br>';
															    }
//uniform
if (isset($_POST['button14'])) {
	$query_delete="DELETE FROM `senioruniform` WHERE `senioruniform`.`id`";

	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `senioruniform` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all senioruniform candidates".'<br>';
}
else {
echo "failed";
}}
																	echo '<strong>SENIORUNIFORM<button type="submit" class ="btn"name="button14">Delete</button></strong>';

																	$query= "SELECT `username` FROM `senioruniform`";
																  $query_run = mysqli_query($conn,$query);
																	if (mysqli_num_rows($query_run)==0) {
																			echo ":   No Registered Candidates".'<br>'.'<br>';
																		}else {

																		}
																  while ($fetch=mysqli_fetch_assoc($query_run)) {
																	$candidate_name = $fetch['username'];
																	echo $candidate_name.'<br>';
																    }
																		//uniform
																		if (isset($_POST['button15'])) {
																			$query_delete="DELETE FROM `junioruniform` WHERE `junioruniform`.`id`";

																			$query_run_delete=mysqli_query($conn,$query_delete);
																			//drop the id column
																			  $query_drop_id="alter table `junioruniform` drop `id`";
																				$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																		if ($query_run_delete) {
																		echo "Successfully deleted all junioruniform candidates".'<br>';
																		}
																		else {
																		echo "failed";
																		}}
																		echo '<strong>JUNIORUNIFORM<button type="submit" class ="btn"name="button15">Delete</button></strong>';

																		$query= "SELECT `username` FROM `junioruniform`";
																	  $query_run = mysqli_query($conn,$query);
																		if (mysqli_num_rows($query_run)==0) {
																				echo ":   No Registered Candidates".'<br>'.'<br>';
																			}else {

																			}
																	  while ($fetch=mysqli_fetch_assoc($query_run)) {
																		$candidate_name = $fetch['username'];
																		echo $candidate_name.'<br>';
																	    }
//senior ENTERTAINMENT
if (isset($_POST['button16'])) {
	$query_delete="DELETE FROM `seniorentertainment` WHERE `seniorentertainment`.`id`";

	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `seniorentertainment` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all seniorentertainment candidates".'<br>';
}
else {
echo "failed";
}}
																			echo '<strong>SENIORENTERTAINMENT<button type="submit" class ="btn"name="button16">Delete</button></strong>';

																			$query= "SELECT `username` FROM `seniorentertainment`";
																		  $query_run = mysqli_query($conn,$query);
																			if (mysqli_num_rows($query_run)==0) {
																					echo ":   No Registered Candidates".'<br>'.'<br>';
																				}else {

																				}
																		  while ($fetch=mysqli_fetch_assoc($query_run)) {
																			$candidate_name = $fetch['username'];
																			echo $candidate_name.'<br>';
																		    }




																				//ENTERTAINMENT
																				if (isset($_POST['button17'])) {
																					$query_delete="DELETE FROM `juniorentertainment` WHERE `juniorentertainment`.`id`";

																					$query_run_delete=mysqli_query($conn,$query_delete);
																					//drop the id column
																					  $query_drop_id="alter table `juniorentertainment` drop `id`";
																						$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																				if ($query_run_delete) {
																				echo "Successfully deleted all juniorentertainment candidates".'<br>';
																				}
																				else {
																				echo "failed";
																				}}
																				echo '<strong>JUNIORENTERTAINMENT<button type="submit" class ="btn"name="button17">Delete</button></strong>';
																				$query= "SELECT `username` FROM `juniorentertainment`";
																			  $query_run = mysqli_query($conn,$query);
																				if (mysqli_num_rows($query_run)==0) {
																						echo ":   No Registered Candidates".'<br>'.'<br>';
																					}else {

																					}

																			  while ($fetch=mysqli_fetch_assoc($query_run)) {

																				$candidate_name = $fetch['username'];
																				echo $candidate_name.'<br>';

																			}
//doyle
if (isset($_POST['button18'])) {
	$query_delete="DELETE FROM `seniordoyle` WHERE `seniordoyle`.`id`";

	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `seniordoyle` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all seniordoyle candidates".'<br>';
}
else {
echo "failed";
}}
																					echo '<strong>SENIORDOYLE<button type="submit" class ="btn"name="button18">Delete</button></strong>';
																					$query= "SELECT `username` FROM `seniordoyle`";
																				  $query_run = mysqli_query($conn,$query);
																					if (mysqli_num_rows($query_run)==0) {
																							echo ":   No Registered Candidates".'<br>'.'<br>';
																						}else {

																						}
																				  while ($fetch=mysqli_fetch_assoc($query_run)) {
																					$candidate_name = $fetch['username'];
																					echo $candidate_name.'<br>';
																				    }



																						//doyle
																						if (isset($_POST['button19'])) {
																							$query_delete="DELETE FROM `juniordoyle` WHERE `juniordoyle`.`id`";

																							$query_run_delete=mysqli_query($conn,$query_delete);
																							//drop the id column
																							  $query_drop_id="alter table `juniordoyle` drop `id`";
																								$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																						if ($query_run_delete) {
																						echo "Successfully deleted all juniordoyle candidates".'<br>';
																						}
																						else {
																						echo "failed";
																						}}
																						echo '<strong>JUNIORDOYLE<button type="submit" class ="btn"name="button19">Delete</button></strong>';
																						$query= "SELECT `username` FROM `juniordoyle`";
																					  $query_run = mysqli_query($conn,$query);
																						if (mysqli_num_rows($query_run)==0) {
																								echo ":   No Registered Candidates".'<br>'.'<br>';
																							}else {

																							}
																					  while ($fetch=mysqli_fetch_assoc($query_run)) {
																						$candidate_name = $fetch['username'];
																						echo $candidate_name.'<br>';
																					    }
//heweston
if (isset($_POST['button20'])) {
	$query_delete="DELETE FROM `seniorheweston` WHERE `seniorheweston`.`id`";

	$query_run_delete=mysqli_query($conn,$query_delete);
	//drop the id column
	  $query_drop_id="alter table `seniorheweston` drop `id`";
		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all seniorheweston candidates".'<br>';
}
else {
echo "failed";
}}
																							echo '<strong>SENIORheweston<button type="submit" class ="btn"name="button20">Delete</button></strong>';
																							$query= "SELECT `username` FROM `seniorheweston`";
																						  $query_run = mysqli_query($conn,$query);
																							if (mysqli_num_rows($query_run)==0) {
																									echo ":   No Registered Candidates".'<br>'.'<br>';
																								}else {

																								}
																						  while ($fetch=mysqli_fetch_assoc($query_run)) {
																							$candidate_name = $fetch['username'];
																							echo $candidate_name.'<br>';
																						    }




																								//junior heweston
																								if (isset($_POST['button19'])) {
																									$query_delete="DELETE FROM `juniorheweston` WHERE `juniorheweston`.`id`";

																									$query_run_delete=mysqli_query($conn,$query_delete);
																									//drop the id column
																									  $query_drop_id="alter table `juniorheweston` drop `id`";
																										$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																								if ($query_run_delete) {
																								echo "Successfully deleted all junior heweston candidates".'<br>';
																								}
																								else {
																								echo "failed";
																								}}

																								echo '<strong>JUNIORheweston<button type="submit" class ="btn"name="button19">Delete</button></strong>';
																								$query= "SELECT `username` FROM `juniorheweston`";
																							  $query_run = mysqli_query($conn,$query);

																								if (mysqli_num_rows($query_run)==0) {
																										echo ":   No Registered Candidates".'<br>'.'<br>';
																									}else {

																									}
																							  while ($fetch=mysqli_fetch_assoc($query_run)) {
																								$candidate_name = $fetch['username'];
																								echo $candidate_name.'<br>';
																							    }



																									//campling
																									if (isset($_POST['button21'])) {
																										$query_delete="DELETE FROM `seniorcampling` WHERE `seniorcampling`.`id`";

																										$query_run_delete=mysqli_query($conn,$query_delete);
																										//drop the id column
																										  $query_drop_id="alter table `seniorcampling` drop `id`";
																											$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																									if ($query_run_delete) {
																									echo "Successfully deleted all seniorcampling candidates".'<br>';
																									}
																									else {
																									echo "failed";
																									}}
																									echo '<strong>SENIORCAMPLING<button type="submit" class ="btn"name="button21">Delete</button></strong>';
																									$query= "SELECT `username` FROM `seniorcampling`";
																								  $query_run = mysqli_query($conn,$query);
																									if (mysqli_num_rows($query_run)==0) {
																											echo ":   No Registered Candidates".'<br>'.'<br>';
																										}else {

																										}
																								  while ($fetch=mysqli_fetch_assoc($query_run)) {
																									$candidate_name = $fetch['username'];
																									echo $candidate_name.'<br>';
																								    }



																										//junior campling
																										if (isset($_POST['button22'])) {
																											$query_delete="DELETE FROM `juniorcampling` WHERE `juniorcampling`.`id`";

																											$query_run_delete=mysqli_query($conn,$query_delete);
																											//drop the id column
																											  $query_drop_id="alter table `juniorcampling` drop `id`";
																												$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																										if ($query_run_delete) {
																										echo "Successfully deleted all juniorcampling candidates".'<br>';
																										}
																										else {
																										echo "failed";
																										}}
																										echo '<strong>JUNIORCAMPLING<button type="submit" class ="btn"name="button22">Delete</button></strong>';
																										$query= "SELECT `username` FROM `juniorcampling`";
																									  $query_run = mysqli_query($conn,$query);
																										if (mysqli_num_rows($query_run)==0) {
																												echo ":   No Registered Candidates".'<br>'.'<br>';
																											}else {

																											}
																									  while ($fetch=mysqli_fetch_assoc($query_run)) {
																										$candidate_name = $fetch['username'];
																										echo $candidate_name.'<br>';
																									    }


																											//hanlon
																											if (isset($_POST['button23'])) {
																												$query_delete="DELETE FROM `seniorhanlon` WHERE `seniorhanlon`.`id`";

																												$query_run_delete=mysqli_query($conn,$query_delete);
																												//drop the id column
																												  $query_drop_id="alter table `seniorhanlon` drop `id`";
																													$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																											if ($query_run_delete) {
																											echo "Successfully deleted all seniorhanlon candidates".'<br>';
																											}
																											else {
																											echo "failed";
																											}}
																											echo '<strong>SENIORHANLON<button type="submit" class ="btn"name="button23">Delete</button></strong>';
																											$query= "SELECT `username` FROM `seniorhanlon`";
																										  $query_run = mysqli_query($conn,$query);
																											if (mysqli_num_rows($query_run)==0) {
																													echo ":   No Registered Candidates".'<br>'.'<br>';
																												}else {

																												}
																										  while ($fetch=mysqli_fetch_assoc($query_run)) {
																											$candidate_name = $fetch['username'];
																											echo $candidate_name.'<br>';
																										    }



																																//jr hanlon
																												if (isset($_POST['button24'])) {
																													$query_delete="DELETE FROM `juniorhanlon` WHERE `juniorhanlon`.`id`";

																													$query_run_delete=mysqli_query($conn,$query_delete);
																													//drop the id column
																													  $query_drop_id="alter table `juniorhanlon` drop `id`";
																														$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																												if ($query_run_delete) {
																												echo "Successfully deleted all juniorhanlon candidates".'<br>';
																												}
																												else {
																												echo "failed";
																												}}



																												echo '<strong>JUNIORHANLON<button type="submit" class ="btn"name="button24">Delete</button></strong>';
																												$query= "SELECT `username` FROM `juniorhanlon`";
																											  $query_run = mysqli_query($conn,$query);
																												if (mysqli_num_rows($query_run)==0) {
																														echo ":   No Registered Candidates".'<br>'.'<br>';
																													}else {

																													}
																											  while ($fetch=mysqli_fetch_assoc($query_run)) {
																												$candidate_name = $fetch['username'];
																												echo $candidate_name.'<br>';
																											    }



																													//kiwanuka
																													if (isset($_POST['button25'])) {
																														$query_delete="DELETE FROM `seniorkiwanuka` WHERE `seniorkiwanuka`.`id`";

																														$query_run_delete=mysqli_query($conn,$query_delete);
																														//drop the id column
																														  $query_drop_id="alter table `seniorkiwanuka` drop `id`";
																															$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																													if ($query_run_delete) {
																													echo "Successfully deleted all seniorkiwanuka candidates".'<br>';
																													}
																													else {
																													echo "failed";
																													}}
																													echo '<strong>SENIORKIWANUKA<button type="submit" class ="btn"name="button25">Delete</button></strong>';
																													$query= "SELECT `username` FROM `seniorkiwanuka`";
																												  $query_run = mysqli_query($conn,$query);
																													if (mysqli_num_rows($query_run)==0) {
																															echo ":   No Registered Candidates".'<br>'.'<br>';
																														}else {

																														}
																												  while ($fetch=mysqli_fetch_assoc($query_run)) {
																													$candidate_name = $fetch['username'];
																													echo $candidate_name.'<br>';
																												    }



//junior kiwanuka
																																																												if (isset($_POST['button26'])) {
																															$query_delete="DELETE FROM `juniorkiwanuka` WHERE `juniorkiwanuka`.`id`";

																															$query_run_delete=mysqli_query($conn,$query_delete);
																															//drop the id column
																															  $query_drop_id="alter table `juniorkiwanuka` drop `id`";
																																$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																														if ($query_run_delete) {
																														echo "Successfully deleted all juniorkiwanuka candidates".'<br>';
																														}
																														else {
																														echo "failed";
																														}}
																														echo '<strong>JUNIORKIWANUKA<button type="submit" class ="btn"name="button26">Delete</button></strong>';
																														$query= "SELECT `username` FROM `juniorkiwanuka`";
																													  $query_run = mysqli_query($conn,$query);
																														if (mysqli_num_rows($query_run)==0) {
																																echo ":   No Registered Candidates".'<br>'.'<br>';
																															}else {

																															}
																													  while ($fetch=mysqli_fetch_assoc($query_run)) {
																														$candidate_name = $fetch['username'];
																														echo $candidate_name.'<br>';
																													    }



																															//seniorreesinck
																															if (isset($_POST['button27'])) {
																																$query_delete="DELETE FROM `seniorreesinck` WHERE `seniorreesinck`.`id`";

																																$query_run_delete=mysqli_query($conn,$query_delete);
																																//drop the id column
																																  $query_drop_id="alter table `seniorreesinck` drop `id`";
																																	$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																															if ($query_run_delete) {
																															echo "Successfully deleted all seniorreesinck candidates".'<br>';
																															}
																															else {
																															echo "failed";
																															}}
																															echo '<strong>SENIORreesinck<button type="submit" class ="btn"name="button27">Delete</button></strong>';
																															$query= "SELECT `username` FROM `seniorreesinck`";
																														  $query_run = mysqli_query($conn,$query);
																															if (mysqli_num_rows($query_run)==0) {
																																	echo ":   No Registered Candidates".'<br>'.'<br>';
																																}else {

																																}
																														  while ($fetch=mysqli_fetch_assoc($query_run)) {
																															$candidate_name = $fetch['username'];
																															echo $candidate_name.'<br>';
																														    }


																																//junior reesinck
																																if (isset($_POST['button28'])) {
																																	$query_delete="DELETE FROM `juniorreesinck` WHERE `juniorreesinck`.`id`";

																																	$query_run_delete=mysqli_query($conn,$query_delete);
																																	//drop the id column
																																	  $query_drop_id="alter table `juniorreesinck` drop `id`";
																																		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																if ($query_run_delete) {
																																echo "Successfully deleted all juniorreesinck candidates".'<br>';
																																}
																																else {
																																echo "failed";
																																}}
																																echo '<strong>JUNIORreesinck<button type="submit" class ="btn"name="button28">Delete</button></strong>';
																																$query= "SELECT `username` FROM `juniorreesinck`";
																															  $query_run = mysqli_query($conn,$query);
																																if (mysqli_num_rows($query_run)==0) {
																																		echo ":   No Registered Candidates".'<br>'.'<br>';
																																	}else {

																																	}
																															  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																$candidate_name = $fetch['username'];
																																echo $candidate_name.'<br>';
																															    }



																																	//senior mckee
																																	if (isset($_POST['button29'])) {
																																		$query_delete="DELETE FROM `seniormckee` WHERE `seniormckee`.`id`";

																																		$query_run_delete=mysqli_query($conn,$query_delete);
																																		//drop the id column
																																		  $query_drop_id="alter table `seniormckee` drop `id`";
																																			$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																	if ($query_run_delete) {
																																	echo "Successfully deleted all seniormckee candidates".'<br>';
																																	}
																																	else {
																																	echo "failed";
																																	}}
																																	echo '<strong>SENIORmckee<button type="submit" class ="btn"name="button29">Delete</button></strong>';
																																	$query= "SELECT `username` FROM `seniormckee`";
																																  $query_run = mysqli_query($conn,$query);
																																	if (mysqli_num_rows($query_run)==0) {
																																			echo ":   No Registered Candidates".'<br>'.'<br>';
																																		}else {

																																		}
																																  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																	$candidate_name = $fetch['username'];
																																	echo $candidate_name.'<br>';
																																    }


																																		//junior mckee
																																		if (isset($_POST['button30'])) {
																																			$query_delete="DELETE FROM `juniormckee` WHERE `juniormckee`.`id`";

																																			$query_run_delete=mysqli_query($conn,$query_delete);
																																			//drop the id column
																																			  $query_drop_id="alter table `juniormckee` drop `id`";
																																				$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																		if ($query_run_delete) {
																																		echo "Successfully deleted all juniormckee candidates".'<br>';
																																		}
																																		else {
																																		echo "failed";
																																		}}
																																		echo '<strong>JUNIORmckee<button type="submit" class ="btn"name="button30">Delete</button></strong>';
																																		$query= "SELECT `username` FROM `juniormckee`";
																																	  $query_run = mysqli_query($conn,$query);
																																		if (mysqli_num_rows($query_run)==0) {
																																				echo ":   No Registered Candidates".'<br>'.'<br>';
																																			}else {

																																			}
																																	  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																		$candidate_name = $fetch['username'];
																																		echo $candidate_name.'<br>';
																																	    }



																																			//charlselwanga
																																			if (isset($_POST['button31'])) {
																																				$query_delete="DELETE FROM `seniorcharlselwanga` WHERE `seniorcharlselwanga`.`id`";

																																				$query_run_delete=mysqli_query($conn,$query_delete);
																																				//drop the id column
																																				  $query_drop_id="alter table `seniorcharlselwanga` drop `id`";
																																					$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																			if ($query_run_delete) {
																																			echo "Successfully deleted all seniorcharlselwanga candidates".'<br>';
																																			}
																																			else {
																																			echo "failed";
																																			}}
																																			echo '<strong>SENIORCHARLSELWANGA<button type="submit" class ="btn"name="button31">Delete</button></strong>';
																																			$query= "SELECT `username` FROM `seniorcharlselwanga`";
																																		  $query_run = mysqli_query($conn,$query);
																																			if (mysqli_num_rows($query_run)==0) {
																																					echo ":   No Registered Candidates".'<br>'.'<br>';
																																				}else {

																																				}
																																		  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																			$candidate_name = $fetch['username'];
																																			echo $candidate_name.'<br>';
																																		}




																																		//juniorcharlselwanga
																																		if (isset($_POST['button32'])) {
																																			$query_delete="DELETE FROM `juniorcharlselwanga` WHERE `juniorcharlselwanga`.`id`";

																																			$query_run_delete=mysqli_query($conn,$query_delete);
																																			//drop the id column
																																			  $query_drop_id="alter table `juniorcharlselwanga` drop `id`";
																																				$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																		if ($query_run_delete) {
																																		echo "Successfully deleted all juniorcharlselwanga candidates".'<br>';
																																		}
																																		else {
																																		echo "failed";
																																		}}
																																			echo '<strong>JUNIORCHARLSELWANGA<button type="submit" class ="btn"name="button32">Delete</button></strong>';
																																					$query= "SELECT `username` FROM `juniorcharlselwanga`";
																																				  $query_run = mysqli_query($conn,$query);
																																					if (mysqli_num_rows($query_run)==0) {
																																							echo ":   No Registered Candidates".'<br>'.'<br>';
																																						}else {

																																						}
																																				  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																					$candidate_name = $fetch['username'];
																																					echo $candidate_name.'<br>';
																																				}

																																				//senior mukasa
																																				if (isset($_POST['button33'])) {
																																					$query_delete="DELETE FROM `seniormukasa` WHERE `seniormukasa`.`id`";

																																					$query_run_delete=mysqli_query($conn,$query_delete);
																																					//drop the id column
																																					  $query_drop_id="alter table `seniormukasa` drop `id`";
																																						$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																				if ($query_run_delete) {
																																				echo "Successfully deleted all seniormukasa candidates".'<br>';
																																				}
																																				else {
																																				echo "failed";
																																				}}
																																				echo '<strong>SENIORMUKASA<button type="submit" class ="btn"name="button33">Delete</button></strong>';
																																							$query= "SELECT `username` FROM `seniormukasa`";
																																						  $query_run = mysqli_query($conn,$query);
																																							if (mysqli_num_rows($query_run)==0) {
																																									echo ":   No Registered Candidates".'<br>'.'<br>';
																																								}else {

																																								}
																																						  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																							$candidate_name = $fetch['username'];
																																							echo $candidate_name.'<br>';
																																						}



																																						//junior mukasa
																																						if (isset($_POST['button34'])) {
																																							$query_delete="DELETE FROM `juniormukasa` WHERE `juniormukasa`.`id`";

																																							$query_run_delete=mysqli_query($conn,$query_delete);
																																							//drop the id column
																																							  $query_drop_id="alter table `juniormukasa` drop `id`";
																																								$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																						if ($query_run_delete) {
																																						echo "Successfully deleted all juniormukasa candidates".'<br>';
																																						}
																																						else {
																																						echo "failed";
																																						}}
																																							echo '<strong>JUNIORMUKASA<button type="submit" class ="btn"name="button34">Delete</button></strong>';
																																									$query= "SELECT `username` FROM `juniormukasa`";
																																								  $query_run = mysqli_query($conn,$query);
																																									if (mysqli_num_rows($query_run)==0) {
																																											echo ":   No Registered Candidates".'<br>'.'<br>';
																																										}else {

																																										}
																																								  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																									$candidate_name = $fetch['username'];
																																									echo $candidate_name.'<br>';
																																								}


																																								//senior kuipers
																																								if (isset($_POST['button35'])) {
																																									$query_delete="DELETE FROM `seniorkuipers` WHERE `seniorkuipers`.`id`";

																																									$query_run_delete=mysqli_query($conn,$query_delete);
																																									//drop the id column
																																									  $query_drop_id="alter table `seniorkuipers` drop `id`";
																																										$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																								if ($query_run_delete) {
																																								echo "Successfully deleted all seniorkuipers candidates".'<br>';
																																								}
																																								else {
																																								echo "failed";
																																								}}
																																									echo '<strong>SENIORKUIPERS<button type="submit" class ="btn"name="button35">Delete</button></strong>';
																																											$query= "SELECT `username` FROM `seniorkuipers`";
																																										  $query_run = mysqli_query($conn,$query);
																																											if (mysqli_num_rows($query_run)==0) {
																																													echo ":   No Registered Candidates".'<br>'.'<br>';
																																												}else {

																																												}
																																										  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																											$candidate_name = $fetch['username'];
																																											echo $candidate_name.'<br>';
																																										}



																																										//junior kuipers
																																										if (isset($_POST['button36'])) {
																																											$query_delete="DELETE FROM `juniorkuipers` WHERE `juniorkuipers`.`id`";

																																											$query_run_delete=mysqli_query($conn,$query_delete);
																																											//drop the id column
																																											  $query_drop_id="alter table `juniorkuipers` drop `id`";
																																												$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																										if ($query_run_delete) {
																																										echo "Successfully deleted juniorkuipers candidates".'<br>';
																																										}
																																										else {
																																										echo "failed";
																																										}}
																																										echo '<strong>JUNIORKUIPERS<button type="submit" class ="btn"name="button36">Delete</button></strong>';
																																													$query= "SELECT `username` FROM `juniorkuipers`";
																																												  $query_run = mysqli_query($conn,$query);
																																													if (mysqli_num_rows($query_run)==0) {
																																															echo ":   No Registered Candidates".'<br>'.'<br>';
																																														}else {

																																														}
																																												  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																													$candidate_name = $fetch['username'];
																																													echo $candidate_name.'<br>';
																																												}



																																												//senior biermans
																																												if (isset($_POST['button37'])) {
																																													$query_delete="DELETE FROM `seniorbiermans` WHERE `seniorbiermans`.`id`";

																																													$query_run_delete=mysqli_query($conn,$query_delete);
																																													//drop the id column
																																													  $query_drop_id="alter table `seniorbiermans` drop `id`";
																																														$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																												if ($query_run_delete) {
																																												echo "Successfully deleted all seniorbiermans candidates".'<br>';
																																												}
																																												else {
																																												echo "failed";
																																												}}
																																													echo '<strong>SENIORbiermans<button type="submit" class ="btn"name="button37">Delete</button></strong>';
																																															$query= "SELECT `username` FROM `seniorbiermans`";
																																														  $query_run = mysqli_query($conn,$query);
																																															if (mysqli_num_rows($query_run)==0) {
																																																	echo ":   No Registered Candidates".'<br>'.'<br>';
																																																}else {

																																																}
																																														  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																															$candidate_name = $fetch['username'];
																																															echo $candidate_name.'<br>';
																																														}

																																														//junior biermans
																																														if (isset($_POST['button38'])) {
																																															$query_delete="DELETE FROM `juniorbiermans` WHERE `juniorbiermans`.`id`";

																																															$query_run_delete=mysqli_query($conn,$query_delete);
																																															//drop the id column
																																															  $query_drop_id="alter table `juniorbiermans` drop `id`";
																																																$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																														if ($query_run_delete) {
																																														echo "Successfully deleted all junior biermans candidates".'<br>';
																																														}
																																														else {
																																														echo "failed";
																																														}}
																																															echo '<strong>JUNIORbiermans<button type="submit" class ="btn"name="button38">Delete</button></strong>';
																																																	$query= "SELECT `username` FROM `juniorbiermans`";
																																																  $query_run = mysqli_query($conn,$query);
																																																	if (mysqli_num_rows($query_run)==0) {
																																																			echo ":   No Registered Candidates".'<br>'.'<br>';
																																																		}else {

																																																		}
																																																  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																																	$candidate_name = $fetch['username'];
																																																	echo $candidate_name.'<br>';
																																																}


																																																//seniorbillington
																																																if (isset($_POST['button39'])) {
																																																	$query_delete="DELETE FROM `seniorbillington` WHERE `seniorbillington`.`id`";

																																																	$query_run_delete=mysqli_query($conn,$query_delete);
																																																	//drop the id column
																																																	  $query_drop_id="alter table `seniorbillington` drop `id`";
																																																		$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																																if ($query_run_delete) {
																																																echo "Successfully deleted all seniorbillington candidates".'<br>';
																																																}
																																																else {
																																																echo "failed";
																																																}}
																																																echo '<strong>SENIORBILLINGTON<button type="submit" class ="btn"name="button39">Delete</button></strong>';
																																																			$query= "SELECT `username` FROM `seniorbillington`";
																																																		  $query_run = mysqli_query($conn,$query);
																																																			if (mysqli_num_rows($query_run)==0) {
																																																					echo ":   No Registered Candidates".'<br>'.'<br>';
																																																				}else {

																																																				}
																																																		  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																																			$candidate_name = $fetch['username'];
																																																			echo $candidate_name.'<br>';
																																																		}



																																																		//juniorbillington
																																																		if (isset($_POST['button40'])) {
																																																			$query_delete="DELETE FROM `juniorbillington` WHERE `juniorbillington`.`id`";

																																																			$query_run_delete=mysqli_query($conn,$query_delete);
																																																			//drop the id column
																																																			  $query_drop_id="alter table `juniorbillington` drop `id`";
																																																				$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																																																		if ($query_run_delete) {
																																																		echo "Successfully deleted all juniorbillington candidates".'<br>';
																																																		}
																																																		else {
																																																		echo "failed";
																																																		}}
																																																		echo '<strong>JUNIORBILLINGTON<button type="submit" class ="btn"name="button40">Delete</button></strong>';
																																																					$query= "SELECT `username` FROM `juniorbillington`";
																																																				  $query_run = mysqli_query($conn,$query);
																																																					if (mysqli_num_rows($query_run)==0) {
																																																							echo ":   No Registered Candidates".'<br>'.'<br>';
																																																						}else {

																																																						}
																																																				  while ($fetch=mysqli_fetch_assoc($query_run)) {
																																																					$candidate_name = $fetch['username'];
																																																					echo $candidate_name.'<br>';
																																														    }


if (isset($_POST['button41'])) {
	//delete usernames and votes
	$query_delete="DELETE FROM `chairman` WHERE `chairman`.`id`";
	$query_run_delete=mysqli_query($conn,$query_delete);
//drop the id column
  $query_drop_id="alter table `chairman` drop `id`";
	$query_drop_id_run = mysqli_query($conn,$query_drop_id);

if ($query_run_delete) {
echo "Successfully deleted all chairman candidates".'<br>';
}
else {
echo "failed";
}}
	echo '<strong>CHAIRMAN <button type="submit" class ="btn"name="button41">Delete</button></strong>';

	$query= "SELECT `username` FROM `chairman`";
  $query_run = mysqli_query($conn,$query);
	if (mysqli_num_rows($query_run)==0) {
			echo ":   No Registered Candidates".'<br>'.'<br>';
		}else {

		}
  while ($fetch=mysqli_fetch_assoc($query_run)) {
	$candidate_name = $fetch['username'];
	echo $candidate_name.'<br>';
    }


		if (isset($_POST['button42'])) {
			//delete usernames and votes
			$query_delete="DELETE FROM `seniortreasurer` WHERE `seniortreasurer`.`id`";
			$query_run_delete=mysqli_query($conn,$query_delete);
		//drop the id column
		  $query_drop_id="alter table `seniortreasurer` drop `id`";
			$query_drop_id_run = mysqli_query($conn,$query_drop_id);

		if ($query_run_delete) {
		echo "Successfully deleted all seniortreasurer candidates".'<br>';
		}
		else {
		echo "failed";
		}}
			echo '<strong>seniortreasurer <button type="submit" class ="btn"name="button42">Delete</button></strong>';

			$query= "SELECT `username` FROM `seniortreasurer`";
		  $query_run = mysqli_query($conn,$query);
			if (mysqli_num_rows($query_run)==0) {
					echo ":   No Registered Candidates".'<br>'.'<br>';
				}else {

				}
		  while ($fetch=mysqli_fetch_assoc($query_run)) {
			$candidate_name = $fetch['username'];
			echo $candidate_name.'<br>';
		    }

				if (isset($_POST['button43'])) {
					//delete usernames and votes
					$query_delete="DELETE FROM `seniorspeaker` WHERE `seniorspeaker`.`id`";
					$query_run_delete=mysqli_query($conn,$query_delete);
				//drop the id column
				  $query_drop_id="alter table `seniorspeaker` drop `id`";
					$query_drop_id_run = mysqli_query($conn,$query_drop_id);

				if ($query_run_delete) {
				echo "Successfully deleted all seniorspeaker candidates".'<br>';
				}
				else {
				echo "failed";
				}}
					echo '<strong>seniorspeaker <button type="submit" class ="btn"name="button43">Delete</button></strong>';

					$query= "SELECT `username` FROM `seniorspeaker`";
				  $query_run = mysqli_query($conn,$query);
					if (mysqli_num_rows($query_run)==0) {
							echo ":   No Registered Candidates".'<br>'.'<br>';
						}else {

						}
				  while ($fetch=mysqli_fetch_assoc($query_run)) {
					$candidate_name = $fetch['username'];
					echo $candidate_name.'<br>';
				    }


						if (isset($_POST['button44'])) {
							//delete usernames and votes
							$query_delete="DELETE FROM `seniorgeneralsecretary` WHERE `seniorgeneralsecretary`.`id`";
							$query_run_delete=mysqli_query($conn,$query_delete);
						//drop the id column
						  $query_drop_id="alter table `seniorgeneralsecretary` drop `id`";
							$query_drop_id_run = mysqli_query($conn,$query_drop_id);

						if ($query_run_delete) {
						echo "Successfully deleted all seniorgeneralsecretary candidates".'<br>';
						}
						else {
						echo "failed";
						}}
							echo '<strong>seniorgeneralsecretary <button type="submit" class ="btn"name="button44">Delete</button></strong>';

							$query= "SELECT `username` FROM `seniorgeneralsecretary`";
						  $query_run = mysqli_query($conn,$query);
							if (mysqli_num_rows($query_run)==0) {
									echo ":   No Registered Candidates".'<br>'.'<br>';
								}else {

								}
						  while ($fetch=mysqli_fetch_assoc($query_run)) {
							$candidate_name = $fetch['username'];
							echo $candidate_name.'<br>';
						    }


								if (isset($_POST['button45'])) {
									//delete usernames and votes
									$query_delete="DELETE FROM `seniorlegaladvisor` WHERE `seniorlegaladvisor`.`id`";
									$query_run_delete=mysqli_query($conn,$query_delete);
								//drop the id column
								  $query_drop_id="alter table `seniorlegaladvisor` drop `id`";
									$query_drop_id_run = mysqli_query($conn,$query_drop_id);

								if ($query_run_delete) {
								echo "Successfully deleted all seniorlegaladvisor candidates".'<br>';
								}
								else {
								echo "failed";
								}}
									echo '<strong>seniorlegaladvisor<button type="submit" class ="btn"name="button45">Delete</button></strong>';

									$query= "SELECT `username` FROM `seniorlegaladvisor`";
								  $query_run = mysqli_query($conn,$query);
									if (mysqli_num_rows($query_run)==0) {
											echo ":   No Registered Candidates".'<br>'.'<br>';
										}else {

										}
								  while ($fetch=mysqli_fetch_assoc($query_run)) {
									$candidate_name = $fetch['username'];
									echo $candidate_name.'<br>';
								}

								if (isset($_POST['button46'])) {
											//delete usernames and votes
											$query_delete="DELETE FROM `seniorpublicitysecretary` WHERE `seniorpublicitysecretary`.`id`";
											$query_run_delete=mysqli_query($conn,$query_delete);
										//drop the id column
										  $query_drop_id="alter table `seniorpublicitysecretary` drop `id`";
											$query_drop_id_run = mysqli_query($conn,$query_drop_id);

										if ($query_run_delete) {
										echo "Successfully deleted all seniorpublicitysecretary candidates".'<br>';
										}
										else {
										echo "failed";
										}}
											echo '<strong>seniorpublicitysecretary <button type="submit" class ="btn"name="button46">Delete</button></strong>';

											$query= "SELECT `username` FROM `seniorpublicitysecretary`";
										  $query_run = mysqli_query($conn,$query);
											if (mysqli_num_rows($query_run)==0) {
													echo ":   No Registered Candidates".'<br>'.'<br>';
												}else {

												}
										  while ($fetch=mysqli_fetch_assoc($query_run)) {
											$candidate_name = $fetch['username'];
											echo $candidate_name.'<br>';
										}

										if (isset($_POST['button47'])) {
													//delete usernames and votes
													$query_delete="DELETE FROM `vicechairman` WHERE `vicechairman`.`id`";
													$query_run_delete=mysqli_query($conn,$query_delete);
												//drop the id column
												  $query_drop_id="alter table `vicechairman` drop `id`";
													$query_drop_id_run = mysqli_query($conn,$query_drop_id);

												if ($query_run_delete) {
												echo "Successfully deleted all vicechairman candidates".'<br>';
												}
												else {
												echo "failed";
												}}
													echo '<strong>vicechairman<button type="submit" class ="btn"name="button47">Delete</button></strong>';

													$query= "SELECT `username` FROM `vicechairman`";
												  $query_run = mysqli_query($conn,$query);
													if (mysqli_num_rows($query_run)==0) {
															echo ":   No Registered Candidates".'<br>'.'<br>';
														}else {

														}
												  while ($fetch=mysqli_fetch_assoc($query_run)) {
													$candidate_name = $fetch['username'];
													echo $candidate_name.'<br>';
												}if (isset($_POST['button48'])) {
															//delete usernames and votes
															$query_delete="DELETE FROM `juniortreasurer` WHERE `juniortreasurer`.`id`";
															$query_run_delete=mysqli_query($conn,$query_delete);
														//drop the id column
														  $query_drop_id="alter table `juniortreasurer` drop `id`";
															$query_drop_id_run = mysqli_query($conn,$query_drop_id);

														if ($query_run_delete) {
														echo "Successfully deleted all juniortreasurer candidates".'<br>';
														}
														else {
														echo "failed";
														}}
															echo '<strong>juniortreasurer<button type="submit" class ="btn"name="button48">Delete</button></strong>';

															$query= "SELECT `username` FROM `juniortreasurer`";
														  $query_run = mysqli_query($conn,$query);
															if (mysqli_num_rows($query_run)==0) {
																	echo ":   No Registered Candidates".'<br>'.'<br>';
																}else {

																}
														  while ($fetch=mysqli_fetch_assoc($query_run)) {
															$candidate_name = $fetch['username'];
															echo $candidate_name.'<br>';
														    }

																if (isset($_POST['button49'])) {
																	//delete usernames and votes
																	$query_delete="DELETE FROM `juniorspeaker` WHERE `juniorspeaker`.`id`";
																	$query_run_delete=mysqli_query($conn,$query_delete);
																//drop the id column
																  $query_drop_id="alter table `juniorspeaker` drop `id`";
																	$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																if ($query_run_delete) {
																echo "Successfully deleted all juniorspeaker candidates".'<br>';
																}
																else {
																echo "failed";
																}}
																	echo '<strong>juniorspeaker <button type="submit" class ="btn"name="button49">Delete</button></strong>';

																	$query= "SELECT `username` FROM `juniorspeaker`";
																  $query_run = mysqli_query($conn,$query);
																	if (mysqli_num_rows($query_run)==0) {
																			echo ":   No Registered Candidates".'<br>'.'<br>';
																		}else {

																		}
																  while ($fetch=mysqli_fetch_assoc($query_run)) {
																	$candidate_name = $fetch['username'];
																	echo $candidate_name.'<br>';
																}if (isset($_POST['button50'])) {
																			//delete usernames and votes
																			$query_delete="DELETE FROM `juniorgeneralsecretary` WHERE `juniorgeneralsecretary`.`id`";
																			$query_run_delete=mysqli_query($conn,$query_delete);
																		//drop the id column
																		  $query_drop_id="alter table `juniorgeneralsecretary` drop `id`";
																			$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																		if ($query_run_delete) {
																		echo "Successfully deleted all juniorgeneralsecretary candidates".'<br>';
																		}
																		else {
																		echo "failed";
																		}}
																			echo '<strong>juniorgeneralsecretary<button type="submit" class ="btn"name="button50">Delete</button></strong>';

																			$query= "SELECT `username` FROM `juniorgeneralsecretary`";
																		  $query_run = mysqli_query($conn,$query);
																			if (mysqli_num_rows($query_run)==0) {
																					echo ":   No Registered Candidates".'<br>'.'<br>';
																				}else {

																				}
																		  while ($fetch=mysqli_fetch_assoc($query_run)) {
																			$candidate_name = $fetch['username'];
																			echo $candidate_name.'<br>';
																		}
																		if (isset($_POST['button51'])) {
																					//delete usernames and votes
																					$query_delete="DELETE FROM `juniordeputyacademics` WHERE `juniordeputyacademics`.`id`";
																					$query_run_delete=mysqli_query($conn,$query_delete);
																				//drop the id column
																				  $query_drop_id="alter table `juniordeputyacademics` drop `id`";
																					$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																				if ($query_run_delete) {
																				echo "Successfully deleted all juniordeputyacademics candidates".'<br>';
																				}
																				else {
																				echo "failed";
																				}}
																					echo '<strong>juniordeputyacademics<button type="submit" class ="btn"name="button51">Delete</button></strong>';

																					$query= "SELECT `username` FROM `juniordeputyacademics`";
																				  $query_run = mysqli_query($conn,$query);
																					if (mysqli_num_rows($query_run)==0) {
																							echo ":   No Registered Candidates".'<br>'.'<br>';
																						}else {

																						}
																				  while ($fetch=mysqli_fetch_assoc($query_run)) {
																					$candidate_name = $fetch['username'];
																					echo $candidate_name.'<br>';
																				}if (isset($_POST['button52'])) {
																							//delete usernames and votes
																							$query_delete="DELETE FROM `juniorpublicitysecretary` WHERE `juniorpublicitysecretary`.`id`";
																							$query_run_delete=mysqli_query($conn,$query_delete);
																						//drop the id column
																						  $query_drop_id="alter table `juniorpublicitysecretary` drop `id`";
																							$query_drop_id_run = mysqli_query($conn,$query_drop_id);

																						if ($query_run_delete) {
																						echo "Successfully deleted all juniorpublicitysecretary candidates".'<br>';
																						}
																						else {
																						echo "failed";
																						}}
																							echo '<strong>juniorpublicitysecretary <button type="submit" class ="btn"name="button52">Delete</button></strong>';

																							$query= "SELECT `username` FROM `juniorpublicitysecretary`";
																						  $query_run = mysqli_query($conn,$query);
																							if (mysqli_num_rows($query_run)==0) {
																									echo ":   No Registered Candidates".'<br>'.'<br>';
																								}else {

																								}
																						  while ($fetch=mysqli_fetch_assoc($query_run)) {
																							$candidate_name = $fetch['username'];
																							echo $candidate_name.'<br>';
																						    }



	  ?>
		</form>
</div>

</div>
<div class="row2">
	<strong>Edit View and Delete Polls</strong>


<strong>View Add and delete houses</strong>

<br> <strong>Edit Houses </strong><br>
! Individual student accounts for houses cannot be editted you can only add an excel spreadsheet representing a particular house with its students.
<br>THe names listed in the excel spreadsheet is what students will use to login
<br>
<div class="showcase">
	<img src="showcase.jpg" alt="">

</div>
<form class="" action="polls.php" method="post" enctype="multipart/form-data">
	<strong>Doyle house</strong> view <button type="submit" class ="btn"name="viewdoyle">view doyle</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletedoyle">delete doyle</button>File Upload
	<input type="file" name="uploadfile" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatedoyle">generate password</button><br>


<br>	<strong>heweston house</strong> view <button type="submit" class ="btn"name="viewheweston">view heweston</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deleteheweston">delete heweston</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile2" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile2" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generateheweston">generate password</button><br><br>


<br>	<strong>Campling house</strong> view <button type="submit" class ="btn"name="viewcampling">view campling</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletecampling">delete campling</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile3" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile3" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatecampling">generate password</button><br>


<br>	<strong>Hanlon house</strong> view <button type="submit" class ="btn"name="viewhanlon">view hanlon</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletehanlon">delete hanlon</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile4" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile4" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatehanlon">generate password</button><br>


<br>	<strong>Kiwanuka house</strong> view <button type="submit" class ="btn"name="viewkiwanuka">view kiwanuka</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletekiwanuka">delete kiwanuka</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile5" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile5" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatekiwanuka">generate password</button><br>


<br>	<strong>reesinck house</strong> view <button type="submit" class ="btn"name="viewreesinck">view reesinck</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletereesinck">delete reesinck</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile6" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile6" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatereesinck">generate password</button><br>


<br>	<strong>mckee house</strong> view <button type="submit" class ="btn"name="viewmckee">view mckee</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletemckee">delete mckee</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile7" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile7" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatemckee">generate password</button><br>


<br>	<strong>CharlseLwanga house</strong> view <button type="submit" class ="btn"name="viewcharlselwanga">view charlselwanga</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletecharlselwanga">delete CharlseLwanga</button>
<input type="file" name="uploadfile8" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile8" value="import">Upload</button>

  GENERATE</strong><button type="submit" class ="btn"name="generatecharlselwanga">generate password</button><br>


<br>	<strong>Mukasa house</strong> view <button type="submit" class ="btn"name="viewmukasa">view mukasa</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletemukasa">delete mukasa</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile9" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile9" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatemukasa">generate password</button>
<br>

<br>	<strong>kuipers house</strong> view <button type="submit" class ="btn"name="viewkuipers">view kuipers</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletekuipers">delete kuipers</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile10" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile10" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatekuipers">generate password</button><br>


<br>	<strong>biermans house</strong> view <button type="submit" class ="btn"name="viewbiermans">view biermans</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletebiermans">delete biermans</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile11" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile11" value="import">Upload</button>
  GENERATE</strong><button type="submit" class ="btn"name="generatebiermans">generate password</button><br>


<br>	<strong>billington house</strong> view <button type="submit" class ="btn"name="viewbillington">view billington</button>&nbsp&nbsp&nbsp&nbsp
DELETE <button type="submit" class ="btn"name="deletebillington">delete billington</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
ADD &nbsp&nbsp&nbsp&nbsp
<input type="file" name="uploadfile12" size="150"></input>
<button type="submit" class="btn btn-info" name="uploadfile12" value="import">Upload</button>
  GENERATE</strong><button type="submit " class ="btn"name="generatebillington">generate password</button><br>

	<br>	<strong>The Students Council</strong> &nbsp view <button type="submit" class ="btn"name="viewstudentscouncil"> viewstudentscouncil</button>&nbsp&nbsp&nbsp&nbsp
	DELETE <button type="submit" class ="btn"name="deletestudentscouncil">delete students council</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	ADD &nbsp&nbsp&nbsp&nbsp

	  GENERATE</strong><button type="submit " class ="btn"name="generatestudentscouncil">generate password</button><br>

<br>



<?php
/*
include "xlsx.php";
$output = '';
if(isset($_POST["import"]))
{
	$filename = SimpleXLSX::parse($_FILES["excel"]["name"]);
	$tmp = explode(".", $filename);
 $extension = end($tmp); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = SimpleXLSX::parse($filename); // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel library in this code

  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $email = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $query = "INSERT INTO `doyle` (`id`, `username`, `password`, `hostel`, `vote`)VALUES (NULL,'".$name."','','','')";
    mysqli_query($conn, $query);
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '</tr>';
   }
  }
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
*/


if (isset($_POST['uploadfile'])) {
	//checking where usernames are blank before submitting uploaded data
	$query = "SELECT `username` FROM `doyle` where `username` LIKE '%a%'";
	$query_run = mysqli_query($conn,$query);
	if (mysqli_num_rows($query_run)>=1) {

	}
	else {
					$uploadfile=$_FILES['uploadfile']['tmp_name'];

					require 'Classes/PHPExcel.php';
					require_once 'Classes/PHPExcel/IOFactory.php';

					$objExcel=PHPExcel_IOFactory::load($uploadfile);
					foreach($objExcel->getWorksheetIterator() as $worksheet){
						$highestrow=$worksheet->getHighestRow();

						for($row=0;$row<=$highestrow;$row++)
						{
							$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
							$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

							if($name!='')
							{
								$insertqry="INSERT INTO `doyle` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
								$insertres=mysqli_query($conn,$insertqry);
							}
						}
					}
				}

}

if (isset($_POST['uploadfile2'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `heweston` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

							$uploadfile=$_FILES['uploadfile2']['tmp_name'];

							require 'Classes/PHPExcel.php';
							require_once 'Classes/PHPExcel/IOFactory.php';

							$objExcel=PHPExcel_IOFactory::load($uploadfile);
							foreach($objExcel->getWorksheetIterator() as $worksheet){
								$highestrow=$worksheet->getHighestRow();

								for($row=0;$row<=$highestrow;$row++)
								{
									$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
									$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

									if($name!='')
									{
										$insertqry="INSERT INTO `heweston` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
										$insertres=mysqli_query($conn,$insertqry);
									}
								}
							}
			}
}if (isset($_POST['uploadfile3'])) {
		//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `campling` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {


$uploadfile=$_FILES['uploadfile3']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `campling` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}}
}
if (isset($_POST['uploadfile4'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `hanlon` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {


$uploadfile=$_FILES['uploadfile4']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `hanlon` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile5'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `kiwanuka` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

$uploadfile=$_FILES['uploadfile5']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `kiwanuka` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile6'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `reesinck` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

$uploadfile=$_FILES['uploadfile6']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `reesinck` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile7'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `mckee` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {


$uploadfile=$_FILES['uploadfile7']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `mckee` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile8'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `charlselwanga` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

$uploadfile=$_FILES['uploadfile8']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `charlselwanga` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile9'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `mukasa` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

$uploadfile=$_FILES['uploadfile9']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `mukasa` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile10'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `kuipers` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {


$uploadfile=$_FILES['uploadfile10']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `kuipers` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile11'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `biermans` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

$uploadfile=$_FILES['uploadfile11']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `biermans` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}if (isset($_POST['uploadfile12'])) {
	//checking where usernames are blank before submitting uploaded data
				$query = "SELECT `username` FROM `billington` where `username` LIKE '%a%'";
				$query_run = mysqli_query($conn,$query);
				if (mysqli_num_rows($query_run)>=1) {

				}
				else {

$uploadfile=$_FILES['uploadfile12']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet){
	$highestrow=$worksheet->getHighestRow();

	for($row=0;$row<=$highestrow;$row++)
	{
		$name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

		if($name!='')
		{
			$insertqry="INSERT INTO `billington` (`id`, `username`, `password`, `hostel`, `vote`) VALUES (NULL, '$name', '', '', '')";
			$insertres=mysqli_query($conn,$insertqry);
		}
	}
}
}}
?>






<?php

if (isset($_POST['generatedoyle'])) {
	$query= "SELECT `password` FROM `doyle` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>doyle </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {


	//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
	//$query_run_check=mysqli_query($conn,$query_check_password);

	$query_check_id = "SELECT `id`,`password` FROM `doyle` where `password`=''";
	$query_run_check2=mysqli_query($conn,$query_check_id);




while ($query_run_check2){
		// code...
		$query_check_id = "SELECT `id`,`password` FROM `doyle` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);

		if (mysqli_num_rows($query_run_check2)==0) {
break;
		}else {


		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];

$query_check_id2 = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `doyle` set `password` = '$randomstring' WHERE `id`='$id'";
$query_run = mysqli_query($conn,$query);
}
}
}
}

}
if (isset($_POST['deletedoyle'])) {
	//delete every column data
	$query_delete ="DELETE FROM `doyle` WHERE `doyle`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `doyle` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `doyle` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewdoyle'])) {
	$query_view = "SELECT `username`,`password` FROM `doyle`";
	$query_run = mysqli_query($conn,$query_view);
	echo "Doyle User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}




if (isset($_POST['generateheweston'])) {
	$query= "SELECT `password` FROM `heweston` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>heweston</strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `heweston` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `heweston` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `heweston` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `heweston` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deleteheweston'])) {
	//delete every column data
	$query_delete ="DELETE FROM `heweston` WHERE `heweston`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `heweston` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `heweston` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewheweston'])) {
	$query_view = "SELECT `username`,`password` FROM `heweston`";
	$query_run = mysqli_query($conn,$query_view);
	echo "heweston User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatecampling'])) {
	$query= "SELECT `password` FROM `campling` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>campling </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...



//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `campling` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `campling` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `campling` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `campling` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletecampling'])) {
	//delete every column data
	$query_delete ="DELETE FROM `campling` WHERE `campling`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `campling` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `campling` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewcampling'])) {
	$query_view = "SELECT `username`,`password` FROM `campling`";
	$query_run = mysqli_query($conn,$query_view);
	echo "Campling User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatehanlon'])) {
	$query= "SELECT `password` FROM `hanlon` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>hanlon </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `hanlon` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `hanlon` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);


$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `hanlon` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `hanlon` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletehanlon'])) {
	//delete every column data
	$query_delete ="DELETE FROM `hanlon` WHERE `hanlon`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `hanlon` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `hanlon` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewhanlon'])) {
	$query_view = "SELECT `username`,`password` FROM `hanlon`";
	$query_run = mysqli_query($conn,$query_view);
	echo "Hanlon User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatekiwanuka'])) {
	$query= "SELECT `password` FROM `kiwanuka` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>kiwanuka </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `kiwanuka` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `kiwanuka` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `kiwanuka` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `kiwanuka` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletekiwanuka'])) {
	//delete every column data
	$query_delete ="DELETE FROM `kiwanuka` WHERE `kiwanuka`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `kiwanuka` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `kiwanuka` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewkiwanuka'])) {
	$query_view = "SELECT `username`,`password` FROM `kiwanuka`";
	$query_run = mysqli_query($conn,$query_view);
	echo "kiwanuka User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatereesinck'])) {
	$query= "SELECT `password` FROM `reesinck` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>reesinck </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...



//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `reesinck` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);



while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `reesinck` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `reesinck` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `reesinck` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletereesinck'])) {
	//delete every column data
	$query_delete ="DELETE FROM `reesinck` WHERE `reesinck`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `reesinck` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `reesinck` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewreesinck'])) {
	$query_view = "SELECT `username`,`password` FROM `reesinck`";
	$query_run = mysqli_query($conn,$query_view);
	echo "reesinck User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatemckee'])) {
	$query= "SELECT `password` FROM `mckee` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>mckee </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
		// code...


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `mckee` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `mckee` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `mckee` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `mckee` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletemckee'])) {
	//delete every column data
	$query_delete ="DELETE FROM `mckee` WHERE `mckee`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `mckee` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `mckee` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewmckee'])) {
	$query_view = "SELECT `username`,`password` FROM `mckee`";
	$query_run = mysqli_query($conn,$query_view);
	echo "mckee User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatecharlselwanga'])) {
	$query= "SELECT `password` FROM `charlselwanga` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>charlselwanga </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...

//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `charlselwanga` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `charlselwanga` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `charlselwanga` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `charlselwanga` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);

}
}
}
}
}
if (isset($_POST['deletecharlselwanga'])) {
	//delete every column data
	$query_delete ="DELETE FROM `charlselwanga` WHERE `charlselwanga`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `charlselwanga` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `charlselwanga` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewcharlselwanga'])) {
	$query_view = "SELECT `username`,`password` FROM `charlselwanga`";
	$query_run = mysqli_query($conn,$query_view);
	echo "charlselwanga User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatemukasa'])) {
	$query= "SELECT `password` FROM `mukasa` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>mukasa </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `mukasa` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `mukasa` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `mukasa` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `mukasa` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletemukasa'])) {
	//delete every column data
	$query_delete ="DELETE FROM `mukasa` WHERE `mukasa`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `mukasa` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `mukasa` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewmukasa'])) {
	$query_view = "SELECT `username`,`password` FROM `mukasa`";
	$query_run = mysqli_query($conn,$query_view);
	echo "mukasa User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatekuipers'])) {
	$query= "SELECT `password` FROM `kuipers` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>kuipers </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...



//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `kuipers` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `kuipers` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `kuipers` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `kuipers` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletekuipers'])) {
	//delete every column data
	$query_delete ="DELETE FROM `kuipers` WHERE `kuipers`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `kuipers` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `kuipers` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewkuipers'])) {
	$query_view = "SELECT `username`,`password` FROM `kuipers`";
	$query_run = mysqli_query($conn,$query_view);
	echo "kuipers User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatebiermans'])) {
	$query= "SELECT `password` FROM `biermans` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>beirmans </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...



//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `biermans` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `biermans` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `biermans` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `biermans` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletebiermans'])) {
	//delete every column data
	$query_delete ="DELETE FROM `biermans` WHERE `biermans`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `biermans` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `biermans` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewbiermans'])) {
	$query_view = "SELECT `username`,`password` FROM `biermans`";
	$query_run = mysqli_query($conn,$query_view);
	echo "biermans User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






if (isset($_POST['generatebillington'])) {
	$query= "SELECT `password` FROM `billington` WHERE `password` LIKE '%1%'";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>billington </strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `billington` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `billington` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `billington` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `billington` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletebillington'])) {
	//delete every column data
	$query_delete ="DELETE FROM `billington` WHERE `billington`.`id`";
	$query_run=mysqli_query($conn,$query_delete);
	//drop the auto increment id and add a new one
  $query_drop_id = "ALTER TABLE `billington` DROP `ID`";
	$query_run2 = mysqli_query($conn,$query_drop_id);
	//add Auto Increment //
	$query_add_id = "ALTER TABLE `billington` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
  $query_run3 = mysqli_query($conn,$query_add_id);
}
if (isset($_POST['viewbillington'])) {
	$query_view = "SELECT `username`,`password` FROM `billington`";
	$query_run = mysqli_query($conn,$query_view);
	echo "billington User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}







if (isset($_POST['generatestudentscouncil'])) {
	$query= "SELECT `password` FROM `studentscouncil` WHERE `password`!=''";
	$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run)!==0) {
	echo "There are passwords already for <strong>studentscouncil</strong>Please <strong>delete</strong> first to re generate them and <strong>view later</strong>";

}else {
	// code...


//$query_check_password = "SELECT `password` FROM `doyle` where `password`='$randomstring'";
//$query_run_check=mysqli_query($conn,$query_check_password);

$query_check_id = "SELECT `id`,`username`,`password` FROM `studentscouncil` where `password`='' AND `username`!='' limit 300";
$query_run_check2=mysqli_query($conn,$query_check_id);


while ($query_run_check2){
		$query_check_id = "SELECT `id`,`password` FROM `studentscouncil` where `password`=''";
		$query_run_check2=mysqli_query($conn,$query_check_id);
		if (mysqli_num_rows($query_run_check2)==0) {
break;

		}else {
		$length=4;
		$string="1234abcdefghijklmnopqrstuvwxyz";
		$randomstring= substr(str_shuffle($string), 0, $length);

$fetch = mysqli_fetch_assoc($query_run_check2);
$id = $fetch['id'];
$query_check_id2 = "SELECT `password` FROM `studentscouncil` where `password`='$randomstring'";
$query_run_check3=mysqli_query($conn,$query_check_id2);
if (mysqli_num_rows($query_run_check3)==0) {


$query = "UPDATE `studentscouncil` set `password` = '$randomstring' WHERE `id`='$id' limit 300";
$query_run = mysqli_query($conn,$query);


}
}
}
}
}
if (isset($_POST['deletestudentscouncil'])) {
	//delete vote column
	$query_delete1 ="ALTER TABLE `studentscouncil` DROP COLUMN `vote`;";
	$query_run2=mysqli_query($conn,$query_delete1);
	//add vote column
	$query_add1 = "ALTER TABLE `studentscouncil` ADD `vote` VARCHAR(32) NOT NULL after `username`;";
	$query_run_add2= mysqli_query($conn,$query_add1);

	//delete password column
	$query_delete ="ALTER TABLE `studentscouncil` DROP COLUMN `password`;";
	$query_run=mysqli_query($conn,$query_delete);
	//add password column
	$query_add = "ALTER TABLE `studentscouncil` ADD `password` VARCHAR(32) NOT NULL AFTER `vote`;";
	$query_run_add= mysqli_query($conn,$query_add);



//
}
if (isset($_POST['viewstudentscouncil'])) {
	$query_view = "SELECT `username`,`password` FROM `studentscouncil`";
	$query_run = mysqli_query($conn,$query_view);
	echo "The studentscouncil User Accounts Are".'<br>';
	while($fetch = mysqli_fetch_assoc($query_run)){
	$names = $fetch['username'];
	$passwords = $fetch['password'];

	echo $names.'&nbsp'.'<span class="span1">'.$passwords.'</span>'.'<br>';
}}






 ?>



</form>

</div>
 		</div>

 	</body>
 </html>
