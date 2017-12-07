<?php 
include 'config.php';
function validateInput($str, $check)
{
    foreach($check as $checkvalue)
    {
            
        if (strpos($str, $checkvalue) !== false)
        {
            return false;
        }
    }
    return true;
}

function allUsers()
{
    $dbString = file_get_contents(DATABASE);
    $users = json_decode($dbString, True);
    return $users['users'];
}

function user($id)
{
    $users = allUsers();
    foreach($users as $userData)
    {
        if($userData['id']===$id)
        return $userData;
    }
    return false;
}

function logIn(&$error)
{
    $users = allUsers();
    $userRef = $_POST['validationName'] ?? '';
    $password = $_POST['validationPassword'] ?? '';

    foreach ($users as $idx => $userData)
    {
        if ($userData['email'] === $userRef || $userData['username'] === $userRef)
        {
            $userIdx = $idx;
            $userId = $userData['id'];
            break;
        }
    }

    if (isset($userId))
    {   
        if ($users[$userIdx]['password'] === $password)
        {
            $error = false;
            return $userId;
        }

        else
        {
            $error = 'pwd false';
        }
    }
    else
    {
        $error = 'no such name';
    }

    return false;

}

function logOut()
{
    unset($_SESSION['user']);
    session_destroy();
}


?>