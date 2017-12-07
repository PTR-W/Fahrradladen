<?php if(isset($_POST['pwd'])&&isset($_POST['pwd2'])&&($_POST['pwd2']!==$_POST['pwd']))
$error="The passwords don't match";

include_once 'functions.php';
include_once 'config.php';
const _DB = './data/db.json';

/* BEGIN: sending data after button click*/
if(isset($_POST['submitRegister']))
{   
    
    $uname = htmlspecialchars($_POST['uname']);
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $pwd = ($_POST['pwd']);
    $pwd2 = ($_POST['pwd2']);
    $email = htmlspecialchars($_POST['email']);

    $check= ['#', '>', '<', '^', '*', '%', '$', '&', '/'];

    /*checks if the input data is free from special characters*/
    if(validateInput($uname,$check)&&validateInput($email,$check)&&validateInput($fname,$check)&&validateInput($lname,$check))    
    {   /*checks if the passwords match*/
        if($pwd === $pwd2)
        {   
            
            /*write the data in the file*/

            #1 get a string of the db
            #2 convert it to array
            #3 add row of new data
            #4 reconvert to string
            #write to file
            
            $json = ['users' =>allUsers()];
            $newData= array("id"=> "0001","firstName"=> "$fname","lastName"=> "$lname","email"=> "$email","username"=> "$uname","password"=> "$pwd");
            $json += $newData;
            $json = json_encode($json, True);
            $file = fopen(_DB,'w');
            fwrite($file, $json);
            fclose($file);
        }

        /*throws error if the grade is greater than 5 and not in percent*/
        else $error = "The passwords don't match";
    }
    else
    {   
        /*throws an error if special characters have been used*/
        $error = 'Ihre eingaben dürfen keine der folgenden Sonderzeichen beinhaleten:<br>';
        foreach($check as $checkvalue)
        {
            $error .= ',' . $checkvalue . ' ';
        }
    }

    
}

?>