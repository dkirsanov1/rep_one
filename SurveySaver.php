<?php
    require_once 'request.php';
	$email = GetParam('email');
	if (!empty($email))
	{
	  require_once ('include/common.inc.php');
	  define('ERR_NO_NAME', 'no_name');
	  $surveyInfo = GetSurveyFromRequest();
	  $saver = SaveSurveyToFile($surveyInfo);
	}  
	else
	{
	  $saver = ERR_NO_NAME;
	}
	
	if ($saver == ERR_NO_NAME)
	{
	    $fp = fopen("data/".$email.".txt", "w");
		fwrite($fp, serialize($_GET));
		fclose($fp);
		echo nl2br("Data is succesfully saved!\nThere is no parameter email.");
	}
	
	if ($saver == ERR_NO_SAVE)
	{
	  echo 'Data was not saved';
	}
	
	if ($saver == DATA_SAVED)
	{
	  echo 'Data is succesfully saved!';
	}
	