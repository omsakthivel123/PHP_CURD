
<?php
include("database.php");

     if(isset($_POST['submit']) )
    {
    $name = $_POST['name'];
    $Email =$_POST['email'];
    $MOB =$_POST['mn'];
   // print_r($MOB); exit;
    $dpart =$_POST['dpart'];
    $pass = $_POST['pass'];
    //$id= $_POST['id'];

//fectch data in mysql
    $sql ="INSERT INTO Student_details 
    (`NAME`,`Mobile_number`,`Email_id`,`Department`,`Password`)
    VALUES('$name','$MOB','$Email','$dpart','$pass')";
    $result = $conn->query($sql);
    header("Location: Adddata.php");
    die();
    
     }

?>


<!--register page data store section -->
<?php
     if(isset($_POST['register']) )
    {   
      $name = $_POST["name"] ;
      $MOB =$_POST['mn'];
      $Email =$_POST['email'];
     
      // echo"$MOB"; 
     // print_r($MOB); exit;
      $dpart =$_POST['dpart'];
      $pass = $_POST['pass'];
      $cpass =$_POST['pass1'];
      //echo"$name"; exit;
    
      if($name = $_POST["name"]==null)
      {  
         $nameerr = "name should npot be empty";
         header("Location: Register.php?nameerr=.'$nameerr'");
         die();  
      }elseif($MOB = ($_POST["mn"] ==NULL)){
         $mblerr = "mbl number should npot be empty";
         header("Location: Register.php?mblerr=.'$mblerr'");
         die();
      }elseif($Email = ($_POST["email"] ==NULL)){

         $emlerr = "Email should npot be empty";
         header("Location: Register.php?emlerr=.'$emlerr'");
         die();
      }elseif($dpart = ($_POST["dpart"] ==NULL)){
         $derr = "Dpartment box is empty please Check!";
         header("Location: Register.php?derr=.'$derr'");
         die();
      }elseif($pass = ($_POST["pass"] ==NULL)){
         $perr = "password Box is empty please Check";
         header("Location: Register.php?perr=.'$perr'");
         die();
      }elseif($pass1 = ($_POST["pass1"] ==NULL)){
         $perr1 = "Check password";
         header("Location: Register.php?perr1=.'$perr1'");
         die();
      }
      $name = $_POST["name"] ;
      $MOB =$_POST['mn'];
      $Email =$_POST['email'];
     
      // echo"$MOB"; 
     // print_r($MOB); exit;
      $dpart =$_POST['dpart'];
      $pass = $_POST['pass'];
     

      

      // if( )S
      // 
      //    if (preg_match("/[0-9]/", $MOB))
      //    {
      //        $MOB = $_POST["mn"];
      //    }
      //    else
      //    {
      //        $MOBErr = 'Only Numbers allowed';
      //        header("location: Register.php?MOBErr=.'$MOBErr' ");
      //        die();
      //    }
     



      //    }
    
            


      //       $name = $_POST["name"];
      //       // name check section
      //     if($name == null ); 
      //      { 
            
      //           $nameErr= "Only letters and white space allowed";
      //           header("Location: Register.php?nameErr=.'$nameErr' ");
      //           die();
      //        }
           
      //   // mobile number check section              
         // if( $MOB = ($_POST["mn"]))
         // {
         //    if (preg_match("/[0-9]/", $MOB))
         //    {
         //        $MOB = $_POST["mn"];
         //    }
         //    else
         //    {
         //        $MOBErr = 'Only Numbers allowed';
         //        header("location: Register.php?MOBErr=.'$MOBErr' ");
         //        die();
         //    }
      //    }
        
        // email check section 
         // if( $Email = ($_POST['email']))
         // { 
         //    if (preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $Email))  
         //    {
         //        $Email = $_POST['email'];
         //    }
         //    else
         //    {
         //        $emailErr = "Check Email Format";
         //        header("location: Register.php?emailErr=.'$emailErr' ");
         //        die();
         //    }
         // }
        
      //   department check section 
      //   if($dpart = ($_POST["dpart"])); 
      //      { 
      //       if (preg_match("/^[a-zA-Z ]*$/", $dpart))
      //        {
      //           $dpart = $_POST["dpart"];
      //        }
      //        else{
      //           $d= "Only letters and white space allowed";
      //           header("Location: Register.php?d=.'$d' ");
      //           die();
      //        }
      //       }
         

        // password check  section
         // if($pass =($_POST["pass"])) 
         // { 
         //    $uppercase = preg_match('@[A-Z]@', $pass);
         //    $lowercase = preg_match('@[a-z]@', $pass);
         //    $number    = preg_match('@[0-9]@', $pass);
         //    $specialChars = preg_match('@[^\w]@', $pass);
         //    if($uppercase && $lowercase && $number && $specialChars && strlen($pass) <4)
         //    {
         //        $pass = $_POST["pass"];
         //    }
         //    else
         //    {
         //      $passR= "Strong password.";
         //      header("Location: Register.php?passR=.'$passR' ");
         //    }
         // }
         //    if( $password1 =$_POST['pass1']== $password)
         //    {
         //        $password1 =$_POST['pass1'];
         //    }
         //    else
         //    {
         //         $samepass = "Check password";
         //         header("location: Register.php?samepass=.'$samepass' ");
                

         //    // }


        
         
  
     $sql1 ="INSERT INTO student_details(`NAME`,`Mobile_number`,`Email_id`,`Department`,`Password`)
     VALUES('$name','$MOB','$Email','$dpart','$pass')";
     $result = $conn->query($sql1);
    //  session_start();
    //  $_SESSION["nameErr"] = $nameErr;
    // $nameErr = "pleaswe enter the  name ";
    // $GLOBALS["nameerr"] = $nameErr;
    header("Location: Success.php");
            
         }
     
    
?>


<?php
//Dalete dection

   include("database.php");
    
    if(isset($_POST['update']))
    {
        $id = $_POST['upid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mob = $_POST['mn'];
        $dpart = $_POST['dpart'];

        $sql123 = "update Student_details set NAME = '$name', Mobile_number = '$mob', Email_id = '$email', Department = '$dpart'   where id= '$id'";
        $result1 = $conn->query($sql123);
        if($result1== true){
          header("Location: Adddata.php");
        } 
       
     }
    

// Login Section

     
     if (isset($_POST["login"]))
     {  
    $Email = $_POST['email'];
    print_r($Email);
    $Password = $_POST['password'];
    include("database.php");
    $sql666 ="select Email_id from Student_details where Email_id= '$Email' ";
    $sql ="select Password from Student_details where Password= '$Password' ";
    $result = $conn->query($sql666);
    $result1 = $conn->query($sql);
    print_r($result);
    $row =$result->fetch_assoc() ;
    $row1 =$result1->fetch_assoc() ;
    $vemail = $row["Email_id"];
    $passv = $row1["Password"];

   echo $vemail;
   echo $passv;

  

    if($vemail== $Email){
      header("Location: Adddata.php");
      
    }
    else{
      $emailEr = "your Email Address Not Found!...";
      header("Location: Login.php?emailEr=.' $emailEr'");
      die();

    }

    if($passv== $Password){
      header("Location: Adddata.php");
      
   }
   else{
      $passEr = "your Password Not Mached Not Found!...";
      header("Location: Login.php?passEr=.'$passEr'");
      die();

   }


}

?>
