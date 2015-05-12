<?php
   define('ERR_NO_NAME', 'no_name');
   define('ERR_NO_FILE', 'no_file');
   define('ERR_NO_ACCESS_TO_FILE', 'no_access');
   define('ERR_NO_SAVE', 'no_save');
   define('DATA_SAVED', 'data_saved');
	
	
	function GetSurveyFromRequest()
	{
	    $survey = array
		(
		    'first_name' => GetParam('first_name'),
			'last_name' => GetParam('last_name'),
			'email' => GetParam('email'),
			'age' => GetParam('age')
		);
		return $survey; 
	}
	
	function GetSurveyFilePath($filename)
	{
	    return 'data/'.$filename.'.txt';
	}
	
	function SaveSurveyToFile($survey)
	{
	    $filename = $survey['email'];
		$filePath = GetSurveyFilePath($filename);
		if (!empty($filename))
		{
		    $datasaved = file_put_contents($filePath, serialize($survey));
			if ($datasaved == false)
			{
			  return ERR_NO_SAVE;
			}
			else
			{
			  return DATA_SAVED;
			}
		}
		else
  		{
		    return ERR_NO_NAME;
		}
	}
	
	function GetSurveyFilename($filename)
    {
     return GetParam($filename);
    }

    function GetSurveyFromFile($filename, &$errorCode)
    {
      $filePath = GetSurveyFilePath($filename);
      $survey = array();
      if (file_exists($filePath)) 
	  {
	    if (file_get_contents($filePath))
		{
		  $survey = file_get_contents($filePath);
		}
		else
		{
		  $errorCode = ERR_NO_ACCESS_TO_FILE;
		}
	  }
	  else
	  {
	    $errorCode = ERR_NO_FILE;
	  }
	}