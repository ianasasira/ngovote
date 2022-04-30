<?php
require 'DB_conn.php';
// checking if post data for user login has been sent to the server
if (isset($_POST['username'])&&isset($_POST['password'])){
  if (!empty($_POST['username'])&&!empty($_POST['password'])) {
    $postusername = $_POST['username'];
    $postpassword = $_POST['password'];
    $posthostelcode = $_POST['hostelcode'];
$_SESSION['$posthostelcode']=$posthostelcode;

    //logging the user in
   /*  $query="SELECT * FROM doyle,heweston WHERE doyle.id = heweston.id AND `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";*/
     $query_doyle = "SELECT `id`,`username`,`password`,`hostel` from `doyle` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_heweston = "SELECT `id`,`username`,`password`,`hostel` from `heweston` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_campling="SELECT `id`,`username`,`password`,`hostel` from `campling` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_hanlon="SELECT `id`,`username`,`password`,`hostel` from `hanlon` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_kiwanuka="SELECT `id`,`username`,`password`,`hostel` from `kiwanuka` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_reesinck="SELECT `id`,`username`,`password`,`hostel` from `reesinck` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_mckee="SELECT `id`,`username`,`password`,`hostel` from `mckee` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_charlselwanga="SELECT `id`,`username`,`password`,`hostel` from `charlselwanga` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_mukasa="SELECT `id`,`username`,`password`,`hostel` from `mukasa` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_kuipers="SELECT `id`,`username`,`password`,`hostel` from `kuipers` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_biermans="SELECT `id`,`username`,`password`,`hostel`from `biermans` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_billington="SELECT `id`,`username`,`password`,`hostel`from `billington` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_council = "SELECT `id`,`username`,`password`from `studentscouncil` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_admin = "SELECT `id`,`username`,`password`from `admin` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";
     $query_public = "SELECT `id`,`username`,`password`from `public` WHERE `username`='".mysqli_real_escape_string($conn,$postusername)."' AND `password`='".mysqli_real_escape_string($conn,$postpassword)."'";



     $query_run_doyle =mysqli_query($conn,$query_doyle);
     $query_run_heweston = mysqli_query($conn,$query_heweston);
     $query_run_campling = mysqli_query($conn,$query_campling);
     $query_run_hanlon = mysqli_query($conn,$query_hanlon);
     $query_run_kiwanuka = mysqli_query($conn,$query_kiwanuka);
     $query_run_reesinck = mysqli_query($conn,$query_reesinck);
     $query_run_mckee = mysqli_query($conn,$query_mckee);
     $query_run_charlselwanga = mysqli_query($conn,$query_charlselwanga);
     $query_run_mukasa = mysqli_query($conn,$query_mukasa);
     $query_run_kuipers = mysqli_query($conn,$query_kuipers);
     $query_run_biermans = mysqli_query($conn,$query_biermans);
     $query_run_billington = mysqli_query($conn,$query_billington);
     $query_run_council = mysqli_query($conn,$query_council);
     $query_run_admin= mysqli_query($conn,$query_admin);
     $query_run_public= mysqli_query($conn,$query_public);

   /* $query_run = mysqli_query($conn,$query);*/
   if ($query_run_admin) {
     //check the table in the database if any row appears
         if (mysqli_num_rows($query_run_admin)==1) {
            if ($fetch_login_data=mysqli_fetch_assoc($query_run_admin)) {
              //storing the username in a variable
              $username = $fetch_login_data['username'];


              //creating a session name for the user

              $_SESSION['user_id_admin'] = $username;


              header ('Location: admin.php');
               }
                 else {
                   echo "failed to fetch user data/session";
                }
                exit();
            }else {
              header('Location:index.php');
            }}
            //This is for public students
            if ($query_run_public) {
              //check the table in the database if any row appears
                  if (mysqli_num_rows($query_run_public)==1) {
                     if ($fetch_login_data=mysqli_fetch_assoc($query_run_public)) {
                       //storing the username in a variable
                       $username = $fetch_login_data['username'];


                       //creating a session name for the user

                       $_SESSION['user_id_public'] = $username;


                       header ('Location: public.php');
                        }
                          else {
                            echo "failed to fetch user data/session";
                         }
                         exit();
                     }else {
                       header('Location:index.php');
                     }}

            if ($query_run_council) {
              //check the table in the database if any row appears
                  if (mysqli_num_rows($query_run_council)==1) {
                     if ($fetch_login_data=mysqli_fetch_assoc($query_run_council)) {
                       //storing the username in a variable
                       $username = $fetch_login_data['username'];


                       //creating a session name for the user
                       $_SESSION['house'] = 'council.php';
                       $_SESSION['user_id'] = $username;


                       header ('Location: council.php');
                        }
                          else {
                            echo "failed to fetch user data/session";
                         }
                     exit();
                     }else {
                       header('Location:index.php');
                     }}


     if ($query_run_doyle) {
       //check the table in the database if any row appears
           if (mysqli_num_rows($query_run_doyle)==1) {
              if ($fetch_login_data=mysqli_fetch_assoc($query_run_doyle)) {
                //storing the username in a variable
                $username = $fetch_login_data['username'];
                $hostel = $fetch_login_data['hostel'];

                //creating a session name for the user
                $_SESSION['user_hostel'] = $hostel;
                $_SESSION['user_id'] = $username;
                $_SESSION['user_house']='doyle';
                $_SESSION['house'] = 'doyle.php';
                header ('Location: doyle.php');
                 }
                   else {
                     echo "failed to fetch user data/session";
                  }
              exit();
            }else {
                header('Location:index.php');
              }}


              if ($query_run_heweston) {
               //check the table in the database if any row appears
                 if (mysqli_num_rows($query_run_heweston)==1) {
                    if ($fetch_login_data=mysqli_fetch_assoc($query_run_heweston)) {
                      //storing the usernaem in a variable
                      $username = $fetch_login_data['username'];
                      $hostel = $fetch_login_data['hostel'];

                      //creating a session name for the user
                  $_SESSION['user_hostel'] = $hostel;
                      //creating a session name for the user
                     $_SESSION['user_house']='heweston';

                     $_SESSION['house']='heweston.php';
                      $_SESSION['user_id']=$username;
                      //creating a session for hostel code


                      header ('Location: heweston.php');
                       }
                         else {
                           echo "failed to fetch user data/session";
                        }
                  exit();  }
                    else {
                      header('Location:index.php');
                    }
                   }

           if ($query_run_campling) {
                         //check the table in the database if any row appears
                           if (mysqli_num_rows($query_run_campling)==1) {
                              if ($fetch_login_data=mysqli_fetch_assoc($query_run_campling)) {
                                //storing the usernaem in a variable
                                $username = $fetch_login_data['username'];
                                $hostel = $fetch_login_data['hostel'];
                                //creating a session name for the user
                              $_SESSION['user_hostel'] = $hostel;
                                //creating a session name for the user
                     $_SESSION['user_house']='campling';
                                $_SESSION['user_id']=$username;
                        $_SESSION['house']='campling.php';
                                header ('Location: campling.php');
                                 }
                                   else {
                                     echo "failed to fetch user data/session";
                                  }
                            exit();  }

                              else {
                                header('Location:index.php');
                              }
           }
           if ($query_run_hanlon) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_hanlon)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_hanlon)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                $_SESSION['user_hostel'] = $hostel;
                     //creating a session name for the user
                     $_SESSION['user_house']='hanlon';
                     $_SESSION['user_id']=$username;
                        $_SESSION['house']='hanlon.php';
                     header ('Location: hanlon.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                  exit(); }
                   else {
                     header('Location:index.php');
                   }

           }
          if ($query_run_kiwanuka) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_kiwanuka)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_kiwanuka)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                $_SESSION['user_hostel'] = $hostel;
                     //creating a session name for the user
                     $_SESSION['user_house']='kiwanuka';
                     $_SESSION['user_id']=$username;
                        $_SESSION['house']='kiwanuka.php';
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                exit();   }
                   else {
                     header('Location:index.php');
                   }
           }
           if ($query_run_reesinck) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_reesinck)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_reesinck)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                $_SESSION['user_hostel'] = $hostel;
                     //creating a session name for the user
                     $_SESSION['user_house']='reesinck';
                     $_SESSION['user_id']=$username;
                        $_SESSION['house']='reesinck.php';
                     header ('Location: reesinck.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                  exit(); }

                   else {
                     header('Location:index.php');
                   }
           }
           if ($query_run_mckee) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_mckee)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_mckee)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                  $_SESSION['user_hostel'] = $hostel;
                     //creating a session name for the user
                     $_SESSION['user_house']='mckee';
                     $_SESSION['user_id']=$username;
                        $_SESSION['house']='mckee.php';
                     header ('Location: mckee.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                exit();   }
                   else {
                     header('Location:index.php');
                   }

           }
           if ($query_run_charlselwanga) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_charlselwanga)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_charlselwanga)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                  $_SESSION['user_hostel'] = $hostel;
                     //creating a session name for the user
                     $_SESSION['user_house']='charlselwanga';
                     $_SESSION['user_id']=$username;
                        $_SESSION['house']='charlselwanga.php';
                     header ('Location: charlselwanga.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                  exit(); }
                   else {
                     header('Location:index.php');
                   }
                  }

           if ($query_run_mukasa) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_mukasa)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_muaksa)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                        $_SESSION['house']='mukasa.php';
                     //creating a session name for the user
                   $_SESSION['user_hostel'] = $hostel;
                     //creating a session name for the user
                     $_SESSION['user_house']='mukasa';
                     $_SESSION['user_id']=$username;

                     header ('Location: mukasa.php');
                      }
                  exit(); }

                   else {
                     header('Location:index.php');
                   }
           }
           if ($query_run_kuipers) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_kuipers)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_kuipers)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                   $_SESSION['user_hostel'] = $hostel;
                   $_SESSION['house']='kuipers.php';
                     //creating a session name for the user
                     $_SESSION['user_house']='kuipers';
                     $_SESSION['user_id']=$username;

                     header ('Location: kuipers.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                exit();   }
                   else {
                     header('Location:index.php');
                   }
           }
           if ($query_run_biermans) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_biermans)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_biermans)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                   $_SESSION['user_hostel'] = $hostel;
                     $_SESSION['house']='biermans.php';
                     //creating a session name for the user
                     $_SESSION['user_house']='biermans';
                     $_SESSION['user_id']=$username;

                     header ('Location: biermans.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                  exit(); }

                   else {
                     header('Location:index.php');
                   }
           }
           if($query_run_billington) {

              //check the table in the database if any row appears
                if (mysqli_num_rows($query_run_billington)==1) {
                   if ($fetch_login_data=mysqli_fetch_assoc($query_run_billington)) {
                     //storing the usernaem in a variable
                     $username = $fetch_login_data['username'];
                     $hostel = $fetch_login_data['hostel'];
                     //creating a session name for the user
                  $_SESSION['user_hostel'] = $hostel;
                    $_SESSION['house']='billington.php';
                     //creating a session name for the user
                     $_SESSION['user_house']='billington';
                     $_SESSION['user_id']=$username;

                     header ('Location: billington.php');
                      }
                        else {
                          echo "failed to fetch user data/session";
                       }
                  exit(); }
                   else {
                     header('Location:index.php');
                   }
           }

      }

        else{
            echo"Please fill in your full names and given password";
        }

     }
?>
