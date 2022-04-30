<?php

include 'processing.php';

if (!isset($_SESSION['user_id'])) {
	header('Location: Index.php');
}


 ?>

<?php
//CHAIRMAN


if (isset($_POST["S1"])) {

	$name=  $_SESSION['user_id'];

	$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%ch%'";
	$query_run = mysqli_query($conn,$query);
		if (mysqli_num_rows($query_run)==1) {
			echo "You already voted this category";
		}else {


			//run the vote code bel

// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted1'])OR isset($_SESSION['voted2'])OR isset($_SESSION['voted3']) OR isset($_SESSION['voted4']) OR isset($_SESSION['voted5'])) {
 echo "You already voted this category";
}else {
	//increamenting the vote
		 	 $query2 = "UPDATE `chairman` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ch,';

$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";
$querry_run2=mysqli_query($conn,$querry2);
//setting the session

$name=  $_SESSION['user_id'];



//setting the session
		if ($run_query2) {
$_SESSION['voted1']="voted";


}else{
	echo "failed to execute vote request";
}

}}}}

if (isset($_POST["S2"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%ch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted1'])OR isset($_SESSION['voted2'])OR isset($_SESSION['voted3']) OR isset($_SESSION['voted4']) OR isset($_SESSION['voted5'])) {
 echo "You already voted this category";
}else {
		 	 $query2 = "UPDATE `chairman` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ch,';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted2']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S3"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%ch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted1'])OR isset($_SESSION['voted2'])OR isset($_SESSION['voted3']) OR isset($_SESSION['voted4']) OR isset($_SESSION['voted5'])) {
 echo "You already voted this category";
}else {
		 	 $query2 = "UPDATE `chairman` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ch,';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted3']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S4"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%ch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted1'])OR isset($_SESSION['voted2'])OR isset($_SESSION['voted3']) OR isset($_SESSION['voted4']) OR isset($_SESSION['voted5'])) {
 echo "You already voted this category";
}else {
		 	 $query2 = "UPDATE `chairman` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ch,';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted4']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S5"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%ch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted1'])OR isset($_SESSION['voted2'])OR isset($_SESSION['voted3']) OR isset($_SESSION['voted4']) OR isset($_SESSION['voted5'])) {
 echo "You already voted this category";
}else {
		 	 $query2 = "UPDATE `chairman` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ch,';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted5']="voted";
}}else{
	echo "failed to execute vote request";
}

}
}}



//SENIOR treaurer



if (isset($_POST["S6"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%SSP%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted6'])OR isset($_SESSION['voted7'])OR isset($_SESSION['voted8']) OR isset($_SESSION['voted9']) OR isset($_SESSION['voted10'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniortreasurer` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',SSP';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted6']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S7"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%SSP%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted6'])OR isset($_SESSION['voted7'])OR isset($_SESSION['voted8']) OR isset($_SESSION['voted9']) OR isset($_SESSION['voted10'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniortreasurer` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',SSP';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted7']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S8"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%SSP%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted6'])OR isset($_SESSION['voted7'])OR isset($_SESSION['voted8']) OR isset($_SESSION['voted9']) OR isset($_SESSION['voted10'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniortreasurer` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',SSP';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted8']="voted";
}else{


	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S9"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%SSP%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted6'])OR isset($_SESSION['voted7'])OR isset($_SESSION['voted8']) OR isset($_SESSION['voted9']) OR isset($_SESSION['voted10'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniortreasurer` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.'jhe';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted9']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["S10"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%SSP%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted6'])OR isset($_SESSION['voted7'])OR isset($_SESSION['voted8']) OR isset($_SESSION['voted9']) OR isset($_SESSION['voted10'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniortreasurer` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',SSP';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted10']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//seniorspeaker

if (isset($_POST["S11a"])) {
  $name=  $_SESSION['user_id'];

  $query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%spe%'";
  $query_run = mysqli_query($conn,$query);
    if (mysqli_num_rows($query_run)==1) {
      echo "you have voted the category";
    }else {
  // WE CAN USE COOKIES BUT YET TO RESEARCH
  // WE CAN ALSO DISABLE JAVASCRIPT button
  // WE CAN ALSO ADD A VOTE ID TO THE DB

  if (isset($_SESSION['voted11a'])OR isset($_SESSION['voted12b'])OR isset($_SESSION['voted13c']) OR isset($_SESSION['voted14d']) OR isset($_SESSION['voted15e'])) {
  echo "already voted";
  }else {
          $query2 = "UPDATE `seniorspeaker` SET `votes` = `votes`+1 WHERE `id`=1";
  //	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
      $run_query2 = mysqli_query ($conn,$query2);
  $name=  $_SESSION['user_id'];


  //assigning the voter_id
  $queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
  $querry_run = mysqli_query($conn,$queryy);
  if ($fetch=mysqli_fetch_assoc($querry_run)) {
    $voter_id = $fetch['vote'];
    $new_voter_id = $voter_id.',spe';
  $name=  $_SESSION['user_id'];

  $querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

  //setting the session
      if ($run_query2) {
  $_SESSION['voted11a']="voted";
  }else{
    echo "failed to execute vote request";
  }

  }
  }}}
  if (isset($_POST["S12b"])) {
  $name=  $_SESSION['user_id'];

  $query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%spe%'";
  $query_run = mysqli_query($conn,$query);
    if (mysqli_num_rows($query_run)==1) {
      echo "you have voted the category";
    }else {
  // WE CAN USE COOKIES BUT YET TO RESEARCH
  // WE CAN ALSO DISABLE JAVASCRIPT button
  // WE CAN ALSO ADD A VOTE ID TO THE DB

  if (isset($_SESSION['voted11a'])OR isset($_SESSION['voted12b'])OR isset($_SESSION['voted13c']) OR isset($_SESSION['voted14d']) OR isset($_SESSION['voted15e'])) {
  echo "already voted";
  }else {
          $query2 = "UPDATE `seniorspeaker` SET `votes` = `votes`+1 WHERE `id`=2";
  //	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
      $run_query2 = mysqli_query ($conn,$query2);
  $name=  $_SESSION['user_id'];


  //assigning the voter_id
  $queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
  $querry_run = mysqli_query($conn,$queryy);
  if ($fetch=mysqli_fetch_assoc($querry_run)) {
    $voter_id = $fetch['vote'];
    $new_voter_id = $voter_id.',spe';
  $name=  $_SESSION['user_id'];

  $querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

  //setting the session
      if ($run_query2) {
  $_SESSION['voted12b']="voted";
  }else{
    echo "failed to execute vote request";
  }

  }
  }}}
  if (isset($_POST["S13c"])) {
  $name=  $_SESSION['user_id'];

  $query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%spe%'";
  $query_run = mysqli_query($conn,$query);
    if (mysqli_num_rows($query_run)==1) {
      echo "you have voted the category";
    }else {
  // WE CAN USE COOKIES BUT YET TO RESEARCH
  // WE CAN ALSO DISABLE JAVASCRIPT button
  // WE CAN ALSO ADD A VOTE ID TO THE DB

  if (isset($_SESSION['voted11a'])OR isset($_SESSION['voted12b'])OR isset($_SESSION['voted13c']) OR isset($_SESSION['voted14d']) OR isset($_SESSION['voted15e'])) {
  echo "already voted";
  }else {
          $query2 = "UPDATE `seniorspeaker` SET `votes` = `votes`+1 WHERE `id`=3";
  //	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
      $run_query2 = mysqli_query ($conn,$query2);
  $name=  $_SESSION['user_id'];


  //assigning the voter_id
  $queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
  $querry_run = mysqli_query($conn,$queryy);
  if ($fetch=mysqli_fetch_assoc($querry_run)) {
    $voter_id = $fetch['vote'];
    $new_voter_id = $voter_id.',spe';
  $name=  $_SESSION['user_id'];

  $querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

  //setting the session
      if ($run_query2) {
  $_SESSION['voted13c']="voted";
  }else{
    echo "failed to execute vote request";
  }

  }
  }}}
  if (isset($_POST["S14d"])) {
  $name=  $_SESSION['user_id'];

  $query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%spe%'";
  $query_run = mysqli_query($conn,$query);
    if (mysqli_num_rows($query_run)==1) {
      echo "you have voted the category";
    }else {
  // WE CAN USE COOKIES BUT YET TO RESEARCH
  // WE CAN ALSO DISABLE JAVASCRIPT button
  // WE CAN ALSO ADD A VOTE ID TO THE DB

  if (isset($_SESSION['voted11a'])OR isset($_SESSION['voted12b'])OR isset($_SESSION['voted13c']) OR isset($_SESSION['voted14d']) OR isset($_SESSION['voted15e'])) {
  echo "already voted";
  }else {
          $query2 = "UPDATE `seniorspeaker` SET `votes` = `votes`+1 WHERE `id`=4";
  //	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
      $run_query2 = mysqli_query ($conn,$query2);
  $name=  $_SESSION['user_id'];


  //assigning the voter_id
  $queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
  $querry_run = mysqli_query($conn,$queryy);
  if ($fetch=mysqli_fetch_assoc($querry_run)) {
    $voter_id = $fetch['vote'];
    $new_voter_id = $voter_id.',spe';
  $name=  $_SESSION['user_id'];

  $querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

  //setting the session
      if ($run_query2) {
  $_SESSION['voted14d']="voted";
  }else{
    echo "failed to execute vote request";
  }

  }
  }}}
  if (isset($_POST["S15e"])) {
  $name=  $_SESSION['user_id'];

  $query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%spe%'";
  $query_run = mysqli_query($conn,$query);
    if (mysqli_num_rows($query_run)==1) {
      echo "you have voted the category";
    }else {
  // WE CAN USE COOKIES BUT YET TO RESEARCH
  // WE CAN ALSO DISABLE JAVASCRIPT button
  // WE CAN ALSO ADD A VOTE ID TO THE DB

  if (isset($_SESSION['voted11a'])OR isset($_SESSION['voted12b'])OR isset($_SESSION['voted13c']) OR isset($_SESSION['voted14d']) OR isset($_SESSION['voted15e'])) {
  echo "already voted";
  }else {
          $query2 = "UPDATE `seniorspeaker` SET `votes` = `votes`+1 WHERE `id`=5";
  //	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
      $run_query2 = mysqli_query ($conn,$query2);
  $name=  $_SESSION['user_id'];


  //assigning the voter_id
  $queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
  $querry_run = mysqli_query($conn,$queryy);
  if ($fetch=mysqli_fetch_assoc($querry_run)) {
    $voter_id = $fetch['vote'];
    $new_voter_id = $voter_id.',spe';
  $name=  $_SESSION['user_id'];

  $querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

  //setting the session
      if ($run_query2) {
  $_SESSION['voted15e']="voted";
  }else{
    echo "failed to execute vote request";
  }

  }
  }}}






//seniorgeneralsecretary


if (isset($_POST["S11"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted11'])OR isset($_SESSION['voted12'])OR isset($_SESSION['voted13']) OR isset($_SESSION['voted14']) OR isset($_SESSION['voted15'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted11']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S12"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted11'])OR isset($_SESSION['voted12'])OR isset($_SESSION['voted13']) OR isset($_SESSION['voted14']) OR isset($_SESSION['voted15'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted12']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S13"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted11'])OR isset($_SESSION['voted12'])OR isset($_SESSION['voted13']) OR isset($_SESSION['voted14']) OR isset($_SESSION['voted15'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted13']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S14"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted11'])OR isset($_SESSION['voted12'])OR isset($_SESSION['voted13']) OR isset($_SESSION['voted14']) OR isset($_SESSION['voted15'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted14']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S15"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted11'])OR isset($_SESSION['voted12'])OR isset($_SESSION['voted13']) OR isset($_SESSION['voted14']) OR isset($_SESSION['voted15'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted15']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//seniorlegaladvisor




if (isset($_POST["S16"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sla%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted16'])OR isset($_SESSION['voted17'])OR isset($_SESSION['voted18']) OR isset($_SESSION['voted19']) OR isset($_SESSION['voted20'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorlegaladvisor` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sla';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted16']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S17"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sla%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted16'])OR isset($_SESSION['voted17'])OR isset($_SESSION['voted18']) OR isset($_SESSION['voted19']) OR isset($_SESSION['voted20'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorlegaladvisor` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sla';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted17']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S18"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sla%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted16'])OR isset($_SESSION['voted17'])OR isset($_SESSION['voted18']) OR isset($_SESSION['voted19']) OR isset($_SESSION['voted20'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorlegaladvisor` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sla';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted18']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S19"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sla%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted16'])OR isset($_SESSION['voted17'])OR isset($_SESSION['voted18']) OR isset($_SESSION['voted19']) OR isset($_SESSION['voted20'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorlegaladvisor` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sla';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted19']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S20"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sla%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted16'])OR isset($_SESSION['voted17'])OR isset($_SESSION['voted18']) OR isset($_SESSION['voted19']) OR isset($_SESSION['voted20'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorlegaladvisor` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sla';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted20']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//seniorpublicitysecretary





if (isset($_POST["S21"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted21'])OR isset($_SESSION['voted22'])OR isset($_SESSION['voted233']) OR isset($_SESSION['voted24']) OR isset($_SESSION['voted25'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted21']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["S22"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted21'])OR isset($_SESSION['voted22'])OR isset($_SESSION['voted23']) OR isset($_SESSION['voted24']) OR isset($_SESSION['voted25'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted22']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S23"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted21'])OR isset($_SESSION['voted22'])OR isset($_SESSION['voted23']) OR isset($_SESSION['voted24']) OR isset($_SESSION['voted25'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted23']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S24"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted21'])OR isset($_SESSION['voted22'])OR isset($_SESSION['voted23']) OR isset($_SESSION['voted24']) OR isset($_SESSION['voted25'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted24']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S25"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%sps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted21'])OR isset($_SESSION['voted22'])OR isset($_SESSION['voted23']) OR isset($_SESSION['voted24']) OR isset($_SESSION['voted25'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted25']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}




//junior LITURGY





if (isset($_POST["S26"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%vc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted26'])OR isset($_SESSION['voted27'])OR isset($_SESSION['voted28']) OR isset($_SESSION['voted29']) OR isset($_SESSION['voted30'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `vicechairman` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',vc';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted26']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S27"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%vc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted26'])OR isset($_SESSION['voted27'])OR isset($_SESSION['voted28']) OR isset($_SESSION['voted29']) OR isset($_SESSION['voted30'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `vicechairman` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',vc';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted27']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S28"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%vc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted26'])OR isset($_SESSION['voted27'])OR isset($_SESSION['voted28']) OR isset($_SESSION['voted29']) OR isset($_SESSION['voted30'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `vicechairman` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',vc';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted28']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S29"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%vc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted26'])OR isset($_SESSION['voted27'])OR isset($_SESSION['voted28']) OR isset($_SESSION['voted29']) OR isset($_SESSION['voted30'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `vicechairman` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',vc';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted29']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S30"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%vc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted26'])OR isset($_SESSION['voted27'])OR isset($_SESSION['voted28']) OR isset($_SESSION['voted29']) OR isset($_SESSION['voted30'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `vicechairman` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',vc';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted30']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//juniortreasurer



if (isset($_POST["S31"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jt%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted31'])OR isset($_SESSION['voted32'])OR isset($_SESSION['voted33']) OR isset($_SESSION['voted34']) OR isset($_SESSION['voted35'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniortreasurer` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jt';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted31']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S32"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jt%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted31'])OR isset($_SESSION['voted32'])OR isset($_SESSION['voted33']) OR isset($_SESSION['voted34']) OR isset($_SESSION['voted35'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniortreasurer` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jt';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted32']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S33"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jt%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted31'])OR isset($_SESSION['voted32'])OR isset($_SESSION['voted33']) OR isset($_SESSION['voted34']) OR isset($_SESSION['voted35'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniortreasurer` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jt';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted33']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S34"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jt%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted31'])OR isset($_SESSION['voted32'])OR isset($_SESSION['voted33']) OR isset($_SESSION['voted34']) OR isset($_SESSION['voted35'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniortreasurer` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jt';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted34']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S35"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jt%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted31'])OR isset($_SESSION['voted32'])OR isset($_SESSION['voted33']) OR isset($_SESSION['voted34']) OR isset($_SESSION['voted35'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniortreasurer` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jt';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted35']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//juniorspeaker





if (isset($_POST["S36"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted36'])OR isset($_SESSION['voted37'])OR isset($_SESSION['voted38']) OR isset($_SESSION['voted39']) OR isset($_SESSION['voted40'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorspeaker` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";
$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted36']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S37"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted36'])OR isset($_SESSION['voted37'])OR isset($_SESSION['voted38']) OR isset($_SESSION['voted39']) OR isset($_SESSION['voted40'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorspeaker` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted37']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S38"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted36'])OR isset($_SESSION['voted37'])OR isset($_SESSION['voted38']) OR isset($_SESSION['voted39']) OR isset($_SESSION['voted40'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorspeaker` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted38']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S39"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted36'])OR isset($_SESSION['voted37'])OR isset($_SESSION['voted38']) OR isset($_SESSION['voted39']) OR isset($_SESSION['voted40'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorspeaker` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted39']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S40"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted36'])OR isset($_SESSION['voted37'])OR isset($_SESSION['voted38']) OR isset($_SESSION['voted39']) OR isset($_SESSION['voted40'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorspeaker` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted40']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniorgeneralsecretary




if (isset($_POST["S41"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted41'])OR isset($_SESSION['voted42'])OR isset($_SESSION['voted43']) OR isset($_SESSION['voted44']) OR isset($_SESSION['voted45'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted41']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S42"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted41'])OR isset($_SESSION['voted42'])OR isset($_SESSION['voted43']) OR isset($_SESSION['voted44']) OR isset($_SESSION['voted45'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted42']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S43"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted41'])OR isset($_SESSION['voted42'])OR isset($_SESSION['voted43']) OR isset($_SESSION['voted44']) OR isset($_SESSION['voted45'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted43']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S44"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted41'])OR isset($_SESSION['voted42'])OR isset($_SESSION['voted43']) OR isset($_SESSION['voted44']) OR isset($_SESSION['voted45'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted44']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["S45"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jgs%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted41'])OR isset($_SESSION['voted42'])OR isset($_SESSION['voted43']) OR isset($_SESSION['voted44']) OR isset($_SESSION['voted45'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorgeneralsecretary` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jgs';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted45']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//juniordeputyacademics



if (isset($_POST["S46"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE 'jda'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted46'])OR isset($_SESSION['voted47'])OR isset($_SESSION['voted48']) OR isset($_SESSION['voted49']) OR isset($_SESSION['voted50a'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordeputyacademics` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jda';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted46']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S47"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE 'jda'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted46'])OR isset($_SESSION['voted47'])OR isset($_SESSION['voted48']) OR isset($_SESSION['voted49']) OR isset($_SESSION['voted50a'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordeputyacademics` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jda';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted47']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S48"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE 'jda'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted46'])OR isset($_SESSION['voted47'])OR isset($_SESSION['voted48']) OR isset($_SESSION['voted49']) OR isset($_SESSION['voted50a'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordeputyacademics` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jda';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted48']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S49"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE 'jda'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted46'])OR isset($_SESSION['voted47'])OR isset($_SESSION['voted48']) OR isset($_SESSION['voted49']) OR isset($_SESSION['voted50a'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordeputyacademics` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jda';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted49']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S50a"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE 'jda'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted46'])OR isset($_SESSION['voted47'])OR isset($_SESSION['voted48']) OR isset($_SESSION['voted49']) OR isset($_SESSION['voted50a'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordeputyacademics` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jda';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted50a']="voted";
}else{
	echo "failed to execute vote request";
}

}

}}}


//juniorpublicitysecretary



if (isset($_POST["S49a"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted49a'])OR isset($_SESSION['voted50'])OR isset($_SESSION['voted51']) OR isset($_SESSION['voted52']) OR isset($_SESSION['voted53'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted49a']="voted";
}else{
	echo "failed to execute vote request";
}

}}}}
if (isset($_POST["S50"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jm'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted49a'])OR isset($_SESSION['voted50'])OR isset($_SESSION['voted51']) OR isset($_SESSION['voted52']) OR isset($_SESSION['voted53'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted50']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S51"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted49a'])OR isset($_SESSION['voted50'])OR isset($_SESSION['voted51']) OR isset($_SESSION['voted52']) OR isset($_SESSION['voted53'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted51']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S52"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted49a'])OR isset($_SESSION['voted50'])OR isset($_SESSION['voted51']) OR isset($_SESSION['voted52']) OR isset($_SESSION['voted53'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted52']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["S53"])) {
$name=  $_SESSION['user_id'];

$query = "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name' AND `vote` LIKE '%jps%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted49a'])OR isset($_SESSION['voted50'])OR isset($_SESSION['voted51']) OR isset($_SESSION['voted52']) OR isset($_SESSION['voted53'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorpublicitysecretary` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];


//assigning the voter_id
$queryy= "SELECT `vote` FROM `studentscouncil` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jps';
$name=  $_SESSION['user_id'];

$querry2 = "UPDATE `studentscouncil` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted53']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

 ?>
