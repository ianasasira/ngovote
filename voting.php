%j&i%<?php


include 'processing.php';
include $_SESSION['house'];
if (!isset($_SESSION['user_id'])) {
	header('Location: Index.php');
}


//seniorheweston

if (isset($_POST["C1"])) {

	$name=  $_SESSION['user_id'];
	$house = $_SESSION['user_house'];
	$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%she%'";
	$query_run = mysqli_query($conn,$query);
		if (mysqli_num_rows($query_run)==1) {
			echo "the DB says you have voted the category";
		}else {


			//run the vote code bel

// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted1'])OR isset($_SESSION['voted2'])OR isset($_SESSION['voted3']) OR isset($_SESSION['voted4']) OR isset($_SESSION['voted5'])) {
 echo "You already voted this category";
}else {
	//increamenting the vote
		 	 $query2 = "UPDATE `seniorheweston` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',she,';

$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";
$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		$run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];


//setting the session
		if ($run_query2) {
$_SESSION['voted1']="voted";


}else{
	echo "failed to execute vote request";
}

}}}}

if (isset($_POST["C2"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%she%'";
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
		 	 $query2 = "UPDATE `seniorheweston` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',she,';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted2']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C3"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%she%'";
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
		 	 $query2 = "UPDATE `seniorheweston` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',she,';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted3']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C4"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%she%'";
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
		 	 $query2 = "UPDATE `seniorheweston` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',she,';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted4']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C5"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%she%'";
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
		 	 $query2 = "UPDATE `seniorheweston` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',she,';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted5']="voted";
}}else{
	echo "failed to execute vote request";
}

}
}}



//juniorheweston



if (isset($_POST["C6"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhe%'";
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
		 	 $query2 = "UPDATE `juniorheweston` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhe';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted6']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C7"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhe%'";
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
		 	 $query2 = "UPDATE `juniorheweston` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhe';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted7']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C8"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhe%'";
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
		 	 $query2 = "UPDATE `juniorheweston` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhe';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted8']="voted";
}else{


	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C9"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhe%'";
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
		 	 $query2 = "UPDATE `juniorheweston` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.'jhe';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted9']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["C10"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhe%'";
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
		 	 $query2 = "UPDATE `juniorheweston` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhe';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted10']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//HEADPREFECT



if (isset($_POST["C11"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hp%'";
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
		 	 $query2 = "UPDATE `headprefect` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hp';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted11']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C12"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hp%'";
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
		 	 $query2 = "UPDATE `headprefect` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.'hp';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted12']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C13"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hp%'";
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
		 	 $query2 = "UPDATE `headprefect` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hp';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted13']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C14"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hp%'";
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
		 	 $query2 = "UPDATE `headprefect` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hp';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted14']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C15"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hp%'";
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
		 	 $query2 = "UPDATE `headprefect` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hp';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted15']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//headboy




if (isset($_POST["C16"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hd%'";
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
		 	 $query2 = "UPDATE `headboy` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hd';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted16']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C17"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hd%'";
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
		 	 $query2 = "UPDATE `headboy` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hd';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted17']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C18"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hd%'";
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
		 	 $query2 = "UPDATE `headboy` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hd';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted18']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C19"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hd%'";
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
		 	 $query2 = "UPDATE `headboy` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hd';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted19']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C20"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hd%'";
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
		 	 $query2 = "UPDATE `headboy` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hd';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted20']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//seniorliturgy





if (isset($_POST["C21"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sl%'";
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
		 	 $query2 = "UPDATE `seniorliturgy` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted21']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["C22"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sl%'";
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
		 	 $query2 = "UPDATE `seniorliturgy` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted22']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C23"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sl%'";
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
		 	 $query2 = "UPDATE `seniorliturgy` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted23']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C24"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sl%'";
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
		 	 $query2 = "UPDATE `seniorliturgy` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted24']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C25"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sl%'";
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
		 	 $query2 = "UPDATE `seniorliturgy` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted25']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}




//junior LITURGY





if (isset($_POST["C26"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jl%'";
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
		 	 $query2 = "UPDATE `juniorliturgy` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted26']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C27"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jl%'";
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
		 	 $query2 = "UPDATE `juniorliturgy` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted27']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C28"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jl%'";
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
		 	 $query2 = "UPDATE `juniorliturgy` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted28']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C29"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jl%'";
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
		 	 $query2 = "UPDATE `juniorliturgy` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted29']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C30"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jl%'";
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
		 	 $query2 = "UPDATE `juniorliturgy` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jl';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted30']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//hostelchairman



if (isset($_POST["C31"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hc%'";
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
		 	 $query2 = "UPDATE `hostelchairman` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted31']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C32"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hc%'";
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
		 	 $query2 = "UPDATE `hostelchairman` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted32']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C33"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hc%'";
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
		 	 $query2 = "UPDATE `hostelchairman` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted33']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C34"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hc%'";
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
		 	 $query2 = "UPDATE `hostelchairman` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted34']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C35"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%hc%'";
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
		 	 $query2 = "UPDATE `hostelchairman` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',hc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted35']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//senioracademics





if (isset($_POST["C36"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sa%'";
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
		 	 $query2 = "UPDATE `senioracademics` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sa';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";
$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted36']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C37"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sa%'";
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
		 	 $query2 = "UPDATE `senioracademics` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sa';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted37']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C38"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sa%'";
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
		 	 $query2 = "UPDATE `senioracademics` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sa';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted38']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C39"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sa%'";
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
		 	 $query2 = "UPDATE `senioracademics` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sa';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted39']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C40"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sa%'";
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
		 	 $query2 = "UPDATE `senioracademics` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sa';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted40']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//junioracademics




if (isset($_POST["C41"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ja%'";
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
		 	 $query2 = "UPDATE `junioracademics` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ja';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted41']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C42"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ja%'";
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
		 	 $query2 = "UPDATE `junioracademics` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ja';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted42']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C43"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ja%'";
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
		 	 $query2 = "UPDATE `junioracademics` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ja';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted43']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C44"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ja%'";
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
		 	 $query2 = "UPDATE `junioracademics` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ja';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted44']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["C45"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ja%'";
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
		 	 $query2 = "UPDATE `junioracademics` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ja';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted45']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//seniormailandlib



if (isset($_POST["C46"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s^ml%'";
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
		 	 $query2 = "UPDATE `seniormailandlib` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted46']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C47"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s^ml%'";
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
		 	 $query2 = "UPDATE `seniormailandlib` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted47']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C48"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s^ml%'";
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
		 	 $query2 = "UPDATE `seniormailandlib` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted48']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C49"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s^ml%'";
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
		 	 $query2 = "UPDATE `seniormailandlib` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted49']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C50a"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s^ml%'";
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
		 	 $query2 = "UPDATE `seniormailandlib` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted50a']="voted";
}else{
	echo "failed to execute vote request";
}

}

}}}


//juniormailandlib



if (isset($_POST["C49a"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j^ml%'";
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
		 	 $query2 = "UPDATE `juniormailandlib` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted49a']="voted";
}else{
	echo "failed to execute vote request";
}

}}}}
if (isset($_POST["C50"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j^ml%'";
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
		 	 $query2 = "UPDATE `juniormailandlib` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted50']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C51"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j^ml%'";
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
		 	 $query2 = "UPDATE `juniormailandlib` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted51']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C52"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j^ml%'";
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
		 	 $query2 = "UPDATE `juniormailandlib` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted52']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C53"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j^ml%'";
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
		 	 $query2 = "UPDATE `juniormailandlib` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jm';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted53']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//seniorsports






if (isset($_POST["C54"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ss%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted54'])OR isset($_SESSION['voted55'])OR isset($_SESSION['voted56']) OR isset($_SESSION['voted57']) OR isset($_SESSION['voted58'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorsports` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ss';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C55"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ss%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted54'])OR isset($_SESSION['voted55'])OR isset($_SESSION['voted56']) OR isset($_SESSION['voted57']) OR isset($_SESSION['voted58'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorsports` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ss';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C56"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ss%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted54'])OR isset($_SESSION['voted55'])OR isset($_SESSION['voted56']) OR isset($_SESSION['voted57']) OR isset($_SESSION['voted58'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorsports` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ss';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C57"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ss%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted54'])OR isset($_SESSION['voted55'])OR isset($_SESSION['voted56']) OR isset($_SESSION['voted57']) OR isset($_SESSION['voted58'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorsports` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ss';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C58"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ss%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted54'])OR isset($_SESSION['voted55'])OR isset($_SESSION['voted56']) OR isset($_SESSION['voted57']) OR isset($_SESSION['voted58'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorsports` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ss';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}



//juniorsports




if (isset($_POST["C59"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted59'])OR isset($_SESSION['voted60'])OR isset($_SESSION['voted61']) OR isset($_SESSION['voted62']) OR isset($_SESSION['voted63'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorsports` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted59']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C60"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted59'])OR isset($_SESSION['voted60'])OR isset($_SESSION['voted61']) OR isset($_SESSION['voted62']) OR isset($_SESSION['voted63'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorsports` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted60']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C61"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted59'])OR isset($_SESSION['voted60'])OR isset($_SESSION['voted61']) OR isset($_SESSION['voted62']) OR isset($_SESSION['voted63'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorsports` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted61']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C62"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted59'])OR isset($_SESSION['voted60'])OR isset($_SESSION['voted61']) OR isset($_SESSION['voted62']) OR isset($_SESSION['voted63'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorsports` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted62']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C63"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%js%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted59'])OR isset($_SESSION['voted60'])OR isset($_SESSION['voted61']) OR isset($_SESSION['voted62']) OR isset($_SESSION['voted63'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorsports` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',js';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted63']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}



//seniordinning





if (isset($_POST["C64"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted64'])OR isset($_SESSION['voted65'])OR isset($_SESSION['voted66']) OR isset($_SESSION['voted67']) OR isset($_SESSION['voted68'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordinning` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted64']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C65"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted64'])OR isset($_SESSION['voted65'])OR isset($_SESSION['voted66']) OR isset($_SESSION['voted67']) OR isset($_SESSION['voted68'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordinning` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted65']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C66"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted64'])OR isset($_SESSION['voted65'])OR isset($_SESSION['voted66']) OR isset($_SESSION['voted67']) OR isset($_SESSION['voted68'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordinning` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted66']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C67"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted64'])OR isset($_SESSION['voted65'])OR isset($_SESSION['voted66']) OR isset($_SESSION['voted67']) OR isset($_SESSION['voted68'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordinning` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted67']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C68"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted64'])OR isset($_SESSION['voted65'])OR isset($_SESSION['voted66']) OR isset($_SESSION['voted67']) OR isset($_SESSION['voted68'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordinning` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted68']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
//juniordinning



if (isset($_POST["C69"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted69'])OR isset($_SESSION['voted70'])OR isset($_SESSION['voted71']) OR isset($_SESSION['voted72']) OR isset($_SESSION['voted73'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordinning` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',j&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted69']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C70"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted69'])OR isset($_SESSION['voted70'])OR isset($_SESSION['voted71']) OR isset($_SESSION['voted72']) OR isset($_SESSION['voted73'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordinning` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',j&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted70']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C71"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted69'])OR isset($_SESSION['voted70'])OR isset($_SESSION['voted71']) OR isset($_SESSION['voted72']) OR isset($_SESSION['voted73'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordinning` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',j&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted71']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C72"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%j&i%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted69'])OR isset($_SESSION['voted70'])OR isset($_SESSION['voted71']) OR isset($_SESSION['voted72']) OR isset($_SESSION['voted73'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordinning` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',j&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted72']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C73"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jd%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted69'])OR isset($_SESSION['voted70'])OR isset($_SESSION['voted71']) OR isset($_SESSION['voted72']) OR isset($_SESSION['voted73'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordinning` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',j&i';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted73']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}



//senioruniform




if (isset($_POST["C74"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%su%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted74'])OR isset($_SESSION['voted75'])OR isset($_SESSION['voted76']) OR isset($_SESSION['voted77']) OR isset($_SESSION['voted78'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `senioruniform` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',su';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted74']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C75"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%su%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted74'])OR isset($_SESSION['voted75'])OR isset($_SESSION['voted76']) OR isset($_SESSION['voted77']) OR isset($_SESSION['voted78'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `senioruniform` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',su';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted75']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C76"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%su%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted74'])OR isset($_SESSION['voted75'])OR isset($_SESSION['voted76']) OR isset($_SESSION['voted77']) OR isset($_SESSION['voted78'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `senioruniform` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',su';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted76']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C77"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%su%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted74'])OR isset($_SESSION['voted75'])OR isset($_SESSION['voted76']) OR isset($_SESSION['voted77']) OR isset($_SESSION['voted78'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `senioruniform` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',su';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted77']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_SESSION['C78'])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%su%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted74'])OR isset($_SESSION['voted75'])OR isset($_SESSION['voted76']) OR isset($_SESSION['voted77']) OR isset($_SESSION['voted78'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `senioruniform` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',su';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted78']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//junioruniform




if (isset($_POST["C79"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ju%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted79'])OR isset($_SESSION['voted80'])OR isset($_SESSION['voted81']) OR isset($_SESSION['voted82']) OR isset($_SESSION['voted83'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `junioruniform` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ju';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted79']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C80"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ju%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted79'])OR isset($_SESSION['voted80'])OR isset($_SESSION['voted81']) OR isset($_SESSION['voted82']) OR isset($_SESSION['voted83'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `junioruniform` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ju';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted80']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C81"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ju%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted79'])OR isset($_SESSION['voted80'])OR isset($_SESSION['voted81']) OR isset($_SESSION['voted82']) OR isset($_SESSION['voted83'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `junioruniform` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ju';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted81']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C82"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ju%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted79'])OR isset($_SESSION['voted80'])OR isset($_SESSION['voted81']) OR isset($_SESSION['voted82']) OR isset($_SESSION['voted83'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `junioruniform` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ju';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted82']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C83"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%ju%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted79'])OR isset($_SESSION['voted80'])OR isset($_SESSION['voted81']) OR isset($_SESSION['voted82']) OR isset($_SESSION['voted83'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `junioruniform` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',ju';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted83']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//senior ENTERTAINMENT







if (isset($_POST["C84"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%se%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted84'])OR isset($_SESSION['voted85'])OR isset($_SESSION['voted86']) OR isset($_SESSION['voted87']) OR isset($_SESSION['voted88'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorentertainment` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',se';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted84']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C85"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%se%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted84'])OR isset($_SESSION['voted85'])OR isset($_SESSION['voted86']) OR isset($_SESSION['voted87']) OR isset($_SESSION['voted88'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorentertainment` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',se';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted85']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C86"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%se%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted84'])OR isset($_SESSION['voted85'])OR isset($_SESSION['voted86']) OR isset($_SESSION['voted87']) OR isset($_SESSION['voted88'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorentertainment` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',se';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted86']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C87"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%se%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted84'])OR isset($_SESSION['voted85'])OR isset($_SESSION['voted86']) OR isset($_SESSION['voted87']) OR isset($_SESSION['voted88'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorentertainment` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',se';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted87']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C88"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%se%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted84'])OR isset($_SESSION['voted85'])OR isset($_SESSION['voted86']) OR isset($_SESSION['voted87']) OR isset($_SESSION['voted88'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorentertainment` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',se';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted88']="voted";
}else{
	echo "failed to execute vote request";
}

}}
}}

//junior ENTERTAINMENT





if (isset($_POST["C89"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%je%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted89'])OR isset($_SESSION['voted90'])OR isset($_SESSION['voted91']) OR isset($_SESSION['voted92']) OR isset($_SESSION['voted93'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorentertainment` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',je';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted89']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C90"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%je%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted89'])OR isset($_SESSION['voted90'])OR isset($_SESSION['voted91']) OR isset($_SESSION['voted92']) OR isset($_SESSION['voted93'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorentertainment` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',je';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted90']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C91"])) {

$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%je%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted89'])OR isset($_SESSION['voted90'])OR isset($_SESSION['voted91']) OR isset($_SESSION['voted92']) OR isset($_SESSION['voted93'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorentertainment` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',je';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted91']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C92"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%je%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted89'])OR isset($_SESSION['voted90'])OR isset($_SESSION['voted91']) OR isset($_SESSION['voted92']) OR isset($_SESSION['voted93'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorentertainment` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',je';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted92']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C93"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%je%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB


if (isset($_SESSION['voted89'])OR isset($_SESSION['voted90'])OR isset($_SESSION['voted91']) OR isset($_SESSION['voted92']) OR isset($_SESSION['voted93'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorentertainment` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',je';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted93']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}
}



//seniorbiermans





if (isset($_POST["C94"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted94'])OR isset($_SESSION['voted95'])OR isset($_SESSION['voted96']) OR isset($_SESSION['voted97']) OR isset($_SESSION['voted98'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbiermans` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted94']="voted";
}else{
	echo "failed to execute vote request";
}

}}
}}
if (isset($_POST["C95"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted94'])OR isset($_SESSION['voted95'])OR isset($_SESSION['voted96']) OR isset($_SESSION['voted97']) OR isset($_SESSION['voted98'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbiermans` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted95']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C96"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted94'])OR isset($_SESSION['voted95'])OR isset($_SESSION['voted96']) OR isset($_SESSION['voted97']) OR isset($_SESSION['voted98'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbiermans` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted96']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C96a"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted94'])OR isset($_SESSION['voted95'])OR isset($_SESSION['voted96']) OR isset($_SESSION['voted97']) OR isset($_SESSION['voted98'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbiermans` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted96a']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C97"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted94'])OR isset($_SESSION['voted95'])OR isset($_SESSION['voted96']) OR isset($_SESSION['voted97']) OR isset($_SESSION['voted98'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbiermans` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted97']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniorbiermans

if (isset($_POST["C98"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted98'])OR isset($_SESSION['voted99'])OR isset($_SESSION['voted100']) OR isset($_SESSION['voted101']) OR isset($_SESSION['voted102'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbiermans` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted98']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C99"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted98'])OR isset($_SESSION['voted99'])OR isset($_SESSION['voted100']) OR isset($_SESSION['voted101']) OR isset($_SESSION['voted102'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbiermans` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted99']="voted";
}else{
	echo "failed to execute vote request";
}

}}
}}
if (isset($_POST["C100"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted98'])OR isset($_SESSION['voted99'])OR isset($_SESSION['voted100']) OR isset($_SESSION['voted101']) OR isset($_SESSION['voted102'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbiermans` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted100']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C101"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted98'])OR isset($_SESSION['voted99'])OR isset($_SESSION['voted100']) OR isset($_SESSION['voted101']) OR isset($_SESSION['voted102'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbiermans` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted101']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C102"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jb%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted98'])OR isset($_SESSION['voted99'])OR isset($_SESSION['voted100']) OR isset($_SESSION['voted101']) OR isset($_SESSION['voted102'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbiermans` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jb';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted102']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}



//BILLINGTON


//seniorbillington



if (isset($_POST["C103"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s*bi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted103'])OR isset($_SESSION['voted104'])OR isset($_SESSION['voted105']) OR isset($_SESSION['voted106']) OR isset($_SESSION['voted107'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbillington` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s*bi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted103']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C104"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s*bi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted103'])OR isset($_SESSION['voted104'])OR isset($_SESSION['voted105']) OR isset($_SESSION['voted106']) OR isset($_SESSION['voted107'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbillington` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s*bi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted104']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C105"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s*bi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted103'])OR isset($_SESSION['voted104'])OR isset($_SESSION['voted105']) OR isset($_SESSION['voted106']) OR isset($_SESSION['voted107'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbillington` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s*bi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted105']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C106"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s*bi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted103'])OR isset($_SESSION['voted104'])OR isset($_SESSION['voted105']) OR isset($_SESSION['voted106']) OR isset($_SESSION['voted107'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbillington` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s*bi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted106']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C107"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%s*bi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted103'])OR isset($_SESSION['voted104'])OR isset($_SESSION['voted105']) OR isset($_SESSION['voted106']) OR isset($_SESSION['voted107'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorbillington` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',s*bi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted107']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}



//juniorbillington



if (isset($_POST["C108"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jbi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted108'])OR isset($_SESSION['voted109'])OR isset($_SESSION['voted110a']) OR isset($_SESSION['voted110']) OR isset($_SESSION['voted111'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbillington` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jbi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted108']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C109"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jbi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted108'])OR isset($_SESSION['voted109'])OR isset($_SESSION['voted110a']) OR isset($_SESSION['voted110']) OR isset($_SESSION['voted111'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbillington` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jbi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted109']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C110a"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jbi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted108'])OR isset($_SESSION['voted109'])OR isset($_SESSION['voted110a']) OR isset($_SESSION['voted110']) OR isset($_SESSION['voted111'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbillington` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jbi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted110a']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C110"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jbi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted108'])OR isset($_SESSION['voted109'])OR isset($_SESSION['voted110a']) OR isset($_SESSION['voted110']) OR isset($_SESSION['voted111'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbillington` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jbi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted110']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C111"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jbi%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted108'])OR isset($_SESSION['voted109'])OR isset($_SESSION['voted110a']) OR isset($_SESSION['voted110']) OR isset($_SESSION['voted111'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorbillington` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jbi';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted111']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}



//seniorcampling


if (isset($_POST["C112"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted112'])OR isset($_SESSION['voted113'])OR isset($_SESSION['voted114']) OR isset($_SESSION['voted115']) OR isset($_SESSION['voted116'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcampling` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted112']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C113"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted112'])OR isset($_SESSION['voted113'])OR isset($_SESSION['voted114']) OR isset($_SESSION['voted115']) OR isset($_SESSION['voted116'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcampling` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted113']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C114"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted112'])OR isset($_SESSION['voted113'])OR isset($_SESSION['voted114']) OR isset($_SESSION['voted115']) OR isset($_SESSION['voted116'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcampling` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted114']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C115"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted112'])OR isset($_SESSION['voted113'])OR isset($_SESSION['voted114']) OR isset($_SESSION['voted115']) OR isset($_SESSION['voted116'])) {
echo "already voted";
 }else {
		 	 $query2 = "UPDATE `seniorcampling` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted115']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C116"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted112'])OR isset($_SESSION['voted113'])OR isset($_SESSION['voted114']) OR isset($_SESSION['voted115']) OR isset($_SESSION['voted116'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcampling` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted116']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//juniorcampling






if (isset($_POST["C117"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted117'])OR isset($_SESSION['voted118'])OR isset($_SESSION['voted119']) OR isset($_SESSION['voted120']) OR isset($_SESSION['voted121'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcampling` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted117']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C118"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted117'])OR isset($_SESSION['voted118'])OR isset($_SESSION['voted119']) OR isset($_SESSION['voted120']) OR isset($_SESSION['voted121'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcampling` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted118']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C119"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted117'])OR isset($_SESSION['voted118'])OR isset($_SESSION['voted119']) OR isset($_SESSION['voted120']) OR isset($_SESSION['voted121'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcampling` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted119']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C120"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted117'])OR isset($_SESSION['voted118'])OR isset($_SESSION['voted119']) OR isset($_SESSION['voted120']) OR isset($_SESSION['voted121'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcampling` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted120']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C121"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted117'])OR isset($_SESSION['voted118'])OR isset($_SESSION['voted119']) OR isset($_SESSION['voted120']) OR isset($_SESSION['voted121'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcampling` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted121']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}




//seniorcharlselwanga




if (isset($_POST["C122"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted122'])OR isset($_SESSION['voted123'])OR isset($_SESSION['voted124']) OR isset($_SESSION['voted125']) OR isset($_SESSION['voted126'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sch';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted122']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C123"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted122'])OR isset($_SESSION['voted123'])OR isset($_SESSION['voted124']) OR isset($_SESSION['voted125']) OR isset($_SESSION['voted126'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sch';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted123']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C124"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted122'])OR isset($_SESSION['voted123'])OR isset($_SESSION['voted124']) OR isset($_SESSION['voted125']) OR isset($_SESSION['voted126'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sch';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted124']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C125"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted122'])OR isset($_SESSION['voted123'])OR isset($_SESSION['voted124']) OR isset($_SESSION['voted125']) OR isset($_SESSION['voted126'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sch';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted125']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C126"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sch%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted122'])OR isset($_SESSION['voted123'])OR isset($_SESSION['voted124']) OR isset($_SESSION['voted125']) OR isset($_SESSION['voted126'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sch';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted126']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniorcharlselwanga


if (isset($_POST["C127"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted127'])OR isset($_SESSION['voted128'])OR isset($_SESSION['voted129']) OR isset($_SESSION['voted130']) OR isset($_SESSION['voted131'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted127']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C128"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted127'])OR isset($_SESSION['voted128'])OR isset($_SESSION['voted129']) OR isset($_SESSION['voted130']) OR isset($_SESSION['voted131'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted128']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C129"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted127'])OR isset($_SESSION['voted128'])OR isset($_SESSION['voted129']) OR isset($_SESSION['voted130']) OR isset($_SESSION['voted131'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted129']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C130"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted127'])OR isset($_SESSION['voted128'])OR isset($_SESSION['voted129']) OR isset($_SESSION['voted130']) OR isset($_SESSION['voted131'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted130']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C131"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jhc%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted127'])OR isset($_SESSION['voted128'])OR isset($_SESSION['voted129']) OR isset($_SESSION['voted130']) OR isset($_SESSION['voted131'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jhc';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted131']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}




//seniordoyle



if (isset($_POST["C132"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted132'])OR isset($_SESSION['voted133'])OR isset($_SESSION['voted134']) OR isset($_SESSION['voted135']) OR isset($_SESSION['voted136'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordoyle` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted132']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C133"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted132'])OR isset($_SESSION['voted133'])OR isset($_SESSION['voted134']) OR isset($_SESSION['voted135']) OR isset($_SESSION['voted136'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordoyle` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted133']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C134"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted132'])OR isset($_SESSION['voted133'])OR isset($_SESSION['voted134']) OR isset($_SESSION['voted135']) OR isset($_SESSION['voted136'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordoyle` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted134']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C135"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted132'])OR isset($_SESSION['voted133'])OR isset($_SESSION['voted134']) OR isset($_SESSION['voted135']) OR isset($_SESSION['voted136'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordoyle` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted135']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C136"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted132'])OR isset($_SESSION['voted133'])OR isset($_SESSION['voted134']) OR isset($_SESSION['voted135']) OR isset($_SESSION['voted136'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniordoyle` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted136']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniordoyle



if (isset($_POST["C137"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted137'])OR isset($_SESSION['voted138'])OR isset($_SESSION['voted139']) OR isset($_SESSION['voted140']) OR isset($_SESSION['voted141'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordoyle` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted137']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C138"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted137'])OR isset($_SESSION['voted138'])OR isset($_SESSION['voted139']) OR isset($_SESSION['voted140']) OR isset($_SESSION['voted141'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordoyle` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted138']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C139"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted137'])OR isset($_SESSION['voted138'])OR isset($_SESSION['voted139']) OR isset($_SESSION['voted140']) OR isset($_SESSION['voted141'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorcharlselwanga` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted139']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C140"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted137'])OR isset($_SESSION['voted138'])OR isset($_SESSION['voted139']) OR isset($_SESSION['voted140']) OR isset($_SESSION['voted141'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordoyle` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted140']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C141"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jdo%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted137'])OR isset($_SESSION['voted138'])OR isset($_SESSION['voted139']) OR isset($_SESSION['voted140']) OR isset($_SESSION['voted141'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniordoyle` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jdo';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted141']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}



//seniorhanlon





if (isset($_POST["C142"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted142'])OR isset($_SESSION['voted143'])OR isset($_SESSION['voted144']) OR isset($_SESSION['voted145']) OR isset($_SESSION['voted146'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorhanlon` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted142']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C143"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted142'])OR isset($_SESSION['voted143'])OR isset($_SESSION['voted144']) OR isset($_SESSION['voted145']) OR isset($_SESSION['voted146'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorhanlon` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted143']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C144"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted142'])OR isset($_SESSION['voted143'])OR isset($_SESSION['voted144']) OR isset($_SESSION['voted145']) OR isset($_SESSION['voted146'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorhanlon` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted144']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C145"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted142'])OR isset($_SESSION['voted143'])OR isset($_SESSION['voted144']) OR isset($_SESSION['voted145']) OR isset($_SESSION['voted146'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorhanlon` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted145']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C146"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted142'])OR isset($_SESSION['voted143'])OR isset($_SESSION['voted144']) OR isset($_SESSION['voted145']) OR isset($_SESSION['voted146'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorhanlon` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted146']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//juniorhanlon



if (isset($_POST["C147"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted147'])OR isset($_SESSION['voted148'])OR isset($_SESSION['voted149']) OR isset($_SESSION['voted150']) OR isset($_SESSION['voted151'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorhanlon` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted147']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C148"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted147'])OR isset($_SESSION['voted148'])OR isset($_SESSION['voted149']) OR isset($_SESSION['voted150']) OR isset($_SESSION['voted151'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorhanlon` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted148']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C149"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted147'])OR isset($_SESSION['voted148'])OR isset($_SESSION['voted149']) OR isset($_SESSION['voted150']) OR isset($_SESSION['voted151'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorhanlon` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted149']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C150"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted147'])OR isset($_SESSION['voted148'])OR isset($_SESSION['voted149']) OR isset($_SESSION['voted150']) OR isset($_SESSION['voted151'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorhanlon` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted150']="voted";
}else{
	echo "failed to execute vote request";
}}}

}
}
if (isset($_POST["C151"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jha%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted147'])OR isset($_SESSION['voted148'])OR isset($_SESSION['voted149']) OR isset($_SESSION['voted150']) OR isset($_SESSION['voted151'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorhanlon` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jha';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted151']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}


//seniorkiwanuka





if (isset($_POST["C152"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted152'])OR isset($_SESSION['voted153'])OR isset($_SESSION['voted154']) OR isset($_SESSION['voted155']) OR isset($_SESSION['voted156'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted152']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C153"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted152'])OR isset($_SESSION['voted153'])OR isset($_SESSION['voted154']) OR isset($_SESSION['voted155']) OR isset($_SESSION['voted156'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted153']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C154"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted152'])OR isset($_SESSION['voted153'])OR isset($_SESSION['voted154']) OR isset($_SESSION['voted155']) OR isset($_SESSION['voted156'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted154']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C155"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted152'])OR isset($_SESSION['voted153'])OR isset($_SESSION['voted154']) OR isset($_SESSION['voted155']) OR isset($_SESSION['voted156'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted155']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C156"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted152'])OR isset($_SESSION['voted153'])OR isset($_SESSION['voted154']) OR isset($_SESSION['voted155']) OR isset($_SESSION['voted156'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted156']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}

//juniorkiwanuka





if (isset($_POST["C157"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted157'])OR isset($_SESSION['voted158'])OR isset($_SESSION['voted159']) OR isset($_SESSION['voted160']) OR isset($_SESSION['voted161'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted157']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C158"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted157'])OR isset($_SESSION['voted158'])OR isset($_SESSION['voted159']) OR isset($_SESSION['voted160']) OR isset($_SESSION['voted161'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted158']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C159"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted157'])OR isset($_SESSION['voted158'])OR isset($_SESSION['voted159']) OR isset($_SESSION['voted160']) OR isset($_SESSION['voted161'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted159']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C160"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted157'])OR isset($_SESSION['voted158'])OR isset($_SESSION['voted159']) OR isset($_SESSION['voted160']) OR isset($_SESSION['voted161'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted160']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C161"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jk%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted157'])OR isset($_SESSION['voted158'])OR isset($_SESSION['voted159']) OR isset($_SESSION['voted160']) OR isset($_SESSION['voted161'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkiwanuka` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jk';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted161']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}



//seniorkuipers



if (isset($_POST["C162"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted162'])OR isset($_SESSION['voted163'])OR isset($_SESSION['voted164']) OR isset($_SESSION['voted165']) OR isset($_SESSION['voted166'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkuipers` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted162']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C163"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted162'])OR isset($_SESSION['voted163'])OR isset($_SESSION['voted164']) OR isset($_SESSION['voted165']) OR isset($_SESSION['voted166'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkuipers` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted163']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C164"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted162'])OR isset($_SESSION['voted163'])OR isset($_SESSION['voted164']) OR isset($_SESSION['voted165']) OR isset($_SESSION['voted166'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkuipers` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted164']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C165"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted162'])OR isset($_SESSION['voted163'])OR isset($_SESSION['voted164']) OR isset($_SESSION['voted165']) OR isset($_SESSION['voted166'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkuipers` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted165']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C166"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted162'])OR isset($_SESSION['voted163'])OR isset($_SESSION['voted164']) OR isset($_SESSION['voted165']) OR isset($_SESSION['voted166'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorkuipers` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted166']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniorkiwanuka





if (isset($_POST["C167"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted167'])OR isset($_SESSION['voted168'])OR isset($_SESSION['voted169']) OR isset($_SESSION['voted170']) OR isset($_SESSION['voted171'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkuipers` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted167']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C168"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted167'])OR isset($_SESSION['voted168'])OR isset($_SESSION['voted169']) OR isset($_SESSION['voted170']) OR isset($_SESSION['voted171'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkuipers` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted168']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C169"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted167'])OR isset($_SESSION['voted168'])OR isset($_SESSION['voted169']) OR isset($_SESSION['voted170']) OR isset($_SESSION['voted171'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkuipers` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted169']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C170"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted167'])OR isset($_SESSION['voted168'])OR isset($_SESSION['voted169']) OR isset($_SESSION['voted170']) OR isset($_SESSION['voted171'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkuipers` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted170']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C171"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jku%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted167'])OR isset($_SESSION['voted168'])OR isset($_SESSION['voted169']) OR isset($_SESSION['voted170']) OR isset($_SESSION['voted171'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorkuipers` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jku';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted171']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}



//seniormckee



if (isset($_POST["C172"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted172'])OR isset($_SESSION['voted173'])OR isset($_SESSION['voted174']) OR isset($_SESSION['voted175']) OR isset($_SESSION['voted176'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormckee` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted172']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C173"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted172'])OR isset($_SESSION['voted173'])OR isset($_SESSION['voted174']) OR isset($_SESSION['voted175']) OR isset($_SESSION['voted176'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormckee` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted173']="voted";
}else{
	echo "failed to execute vote request";
}
}
}}}
if (isset($_POST["C174"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted172'])OR isset($_SESSION['voted173'])OR isset($_SESSION['voted174']) OR isset($_SESSION['voted175']) OR isset($_SESSION['voted176'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormckee` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted174']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C175"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted172'])OR isset($_SESSION['voted173'])OR isset($_SESSION['voted174']) OR isset($_SESSION['voted175']) OR isset($_SESSION['voted176'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormckee` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted175']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C176"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted172'])OR isset($_SESSION['voted173'])OR isset($_SESSION['voted174']) OR isset($_SESSION['voted175']) OR isset($_SESSION['voted176'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormckee` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted176']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniormckee




if (isset($_POST["C177"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted177'])OR isset($_SESSION['voted178'])OR isset($_SESSION['voted179']) OR isset($_SESSION['voted180']) OR isset($_SESSION['voted181'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormckee` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted177']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C178"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted177'])OR isset($_SESSION['voted178'])OR isset($_SESSION['voted179']) OR isset($_SESSION['voted180']) OR isset($_SESSION['voted181'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormckee` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted178']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C179"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted177'])OR isset($_SESSION['voted178'])OR isset($_SESSION['voted179']) OR isset($_SESSION['voted180']) OR isset($_SESSION['voted181'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormckee` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted179']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C180"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted177'])OR isset($_SESSION['voted178'])OR isset($_SESSION['voted179']) OR isset($_SESSION['voted180']) OR isset($_SESSION['voted181'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormckee` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted180']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C181"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jma%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted177'])OR isset($_SESSION['voted178'])OR isset($_SESSION['voted179']) OR isset($_SESSION['voted180']) OR isset($_SESSION['voted181'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormckee` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jma';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted181']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}



//seniormukasa




if (isset($_POST["C182"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%smu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted182'])OR isset($_SESSION['voted183'])OR isset($_SESSION['voted184']) OR isset($_SESSION['voted185']) OR isset($_SESSION['voted186'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormukasa` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',smu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted183']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C183"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%smu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted182'])OR isset($_SESSION['voted183'])OR isset($_SESSION['voted184']) OR isset($_SESSION['voted185']) OR isset($_SESSION['voted186'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormukasa` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',smu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted183']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C184"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%smu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted182'])OR isset($_SESSION['voted183'])OR isset($_SESSION['voted184']) OR isset($_SESSION['voted185']) OR isset($_SESSION['voted186'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormukasa` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',smu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted184']="voted";
}else{
	echo "failed to execute vote request";
}

}}}}

if (isset($_POST["C185"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%smu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted182'])OR isset($_SESSION['voted183'])OR isset($_SESSION['voted184']) OR isset($_SESSION['voted185']) OR isset($_SESSION['voted186'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormukasa` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',smu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted185']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C186"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%smu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted182'])OR isset($_SESSION['voted183'])OR isset($_SESSION['voted184']) OR isset($_SESSION['voted185']) OR isset($_SESSION['voted186'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniormukasa` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',smu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted186']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniormukasa



if (isset($_POST["C187"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jmu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted187'])OR isset($_SESSION['voted188'])OR isset($_SESSION['voted189']) OR isset($_SESSION['voted190']) OR isset($_SESSION['voted191'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormukasa` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jmu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted187']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C188"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jmu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted187'])OR isset($_SESSION['voted188'])OR isset($_SESSION['voted189']) OR isset($_SESSION['voted190']) OR isset($_SESSION['voted191'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormukasa` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jmu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted188']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C189"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jmu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted187'])OR isset($_SESSION['voted188'])OR isset($_SESSION['voted189']) OR isset($_SESSION['voted190']) OR isset($_SESSION['voted191'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormukasa` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jmu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted189']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C190"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jmu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted187'])OR isset($_SESSION['voted188'])OR isset($_SESSION['voted189']) OR isset($_SESSION['voted190']) OR isset($_SESSION['voted191'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormukasa` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jmu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted190']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C191"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jmu%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted187'])OR isset($_SESSION['voted188'])OR isset($_SESSION['voted189']) OR isset($_SESSION['voted190']) OR isset($_SESSION['voted191'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniormukasa` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jmu';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted191']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}




//seniorreesinck




if (isset($_POST["C192"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted192'])OR isset($_SESSION['voted193'])OR isset($_SESSION['voted194']) OR isset($_SESSION['voted195']) OR isset($_SESSION['voted196'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorreesinck` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted192']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C193"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted192'])OR isset($_SESSION['voted193'])OR isset($_SESSION['voted194']) OR isset($_SESSION['voted195']) OR isset($_SESSION['voted196'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorreesinck'` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted193']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C194"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted192'])OR isset($_SESSION['voted193'])OR isset($_SESSION['voted194']) OR isset($_SESSION['voted195']) OR isset($_SESSION['voted196'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorreesinck` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted194']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C195"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted192'])OR isset($_SESSION['voted193'])OR isset($_SESSION['voted194']) OR isset($_SESSION['voted195']) OR isset($_SESSION['voted196'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorreesinck` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted195']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

if (isset($_POST["C196"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%sr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted192'])OR isset($_SESSION['voted193'])OR isset($_SESSION['voted194']) OR isset($_SESSION['voted195']) OR isset($_SESSION['voted196'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `seniorreesinck` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',sr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted196']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}

//juniorreesinck



if (isset($_POST["C197"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted197'])OR isset($_SESSION['voted198'])OR isset($_SESSION['voted199']) OR isset($_SESSION['voted200']) OR isset($_SESSION['voted201'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorreesinck` SET `votes` = `votes`+1 WHERE `id`=1";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted197']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C198"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted197'])OR isset($_SESSION['voted198'])OR isset($_SESSION['voted199']) OR isset($_SESSION['voted200']) OR isset($_SESSION['voted201'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorreesinck` SET `votes` = `votes`+1 WHERE `id`=2";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted198']="voted";
}else{
	echo "failed to execute vote request";
}

}
}}}
if (isset($_POST["C199"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted197'])OR isset($_SESSION['voted198'])OR isset($_SESSION['voted199']) OR isset($_SESSION['voted200']) OR isset($_SESSION['voted201'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorreesinck` SET `votes` = `votes`+1 WHERE `id`=3";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted199']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C200"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%v%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted197'])OR isset($_SESSION['voted198'])OR isset($_SESSION['voted199']) OR isset($_SESSION['voted200']) OR isset($_SESSION['voted201'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorreesinck` SET `votes` = `votes`+1 WHERE `id`=4";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri"
;
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted200']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}
if (isset($_POST["C201"])) {
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$query = "SELECT `vote` FROM `$house` WHERE `username`='$name' AND `vote` LIKE '%jr%'";
$query_run = mysqli_query($conn,$query);
  if (mysqli_num_rows($query_run)==1) {
    echo "you have voted the category";
  }else {
// WE CAN USE COOKIES BUT YET TO RESEARCH
// WE CAN ALSO DISABLE JAVASCRIPT button
// WE CAN ALSO ADD A VOTE ID TO THE DB

if (isset($_SESSION['voted197'])OR isset($_SESSION['voted198'])OR isset($_SESSION['voted199']) OR isset($_SESSION['voted200']) OR isset($_SESSION['voted201'])) {
echo "already voted";
}else {
		 	 $query2 = "UPDATE `juniorreesinck` SET `votes` = `votes`+1 WHERE `id`=5";
//	  $query = "UPDATE votes set votes=votes+1 where username=sierra capri";
	  $run_query2 = mysqli_query ($conn,$query2);
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];

//assigning the voter_id
$queryy= "SELECT `vote` FROM `$house` WHERE `username`='$name'";
$querry_run = mysqli_query($conn,$queryy);
if ($fetch=mysqli_fetch_assoc($querry_run)) {
  $voter_id = $fetch['vote'];
  $new_voter_id = $voter_id.',jr';
$name=  $_SESSION['user_id'];
$house = $_SESSION['user_house'];
$querry2 = "UPDATE `$house` set `vote` ='$new_voter_id' WHERE `username`='$name'";$querry_run2=mysqli_query($conn,$querry2);

//setting the session
		if ($run_query2) {
$_SESSION['voted201']="voted";
}else{
	echo "failed to execute vote request";
}

}}}
}

 ?>
