<?php
  require_once 'request.php';
  $email = GetParam('email');
  if (!empty($email))
  {
    define('OK', 'ok');
  }	
  require_once ('include/common.inc.php');
   
  header('Content-Type: text/plain');
  $filename = GetSurveyFilename('email');
  $error = OK;
  $surveyInfo = GetSurveyFromFile($filename, $error);
  if ($error == OK)
  {
    $fp = fopen("data/" . $email . ".txt", "r");
    $user_data = unserialize(fgets($fp));
    if (isset($user_data['first_name']))
    {
      echo nl2br("First name: " . $user_data['first_name'] . "\r\n");
    }
    if (isset($user_data['last_name']))
    {
      echo nl2br("Last name: " . $user_data['last_name'] . "\r\n");
    }
    if (isset($user_data['email']))
    {
      echo nl2br("Email: " . $user_data['email'] . "\r\n");
    }
    if (isset($user_data['age']))
    {
      echo nl2br("Age: " . $user_data['age'] . "\r\n");
   }
    fclose($fp); 
  }
  else
  {
    if ($error == ERR_NO_FILE)
    {
      echo 'File ' . $filename . '.txt not exist';
    }
    if ($error == ERR_NO_ACCESS_TO_FILE)
    {
      echo 'No access to file';
    }
  }
  
  
  
  