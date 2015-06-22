<?php 
// process the email
if (array_key_exists('send', $_POST)) {
  $to = 'pioneer903@gmail.com'; // use your own email address
  $subject = 'Contact from WebBuha site';
  
  // list expected fields
  $expected = array('name', 'email', 'comments');
  // set required fields
  $required = array('name', 'email', 'comments');
  // create empty array for any missing fields
  $missing = array();
  
  // assume that there is nothing suspect
  $suspect = false;
  // create a pattern to locate suspect phrases
  $pattern = '/Content-Type:|Bcc:|Cc:/i';
  
  // function to check for suspect phrases
  function isSuspect($val, $pattern, &$suspect) {
    // if the variable is an array, loop through each element
	// and pass it recursively back to the same function
	if (is_array($val)) {
      foreach ($val as $item) {
	    isSuspect($item, $pattern, $suspect);
	    }
	  }
    else {
      // if one of the suspect phrases is found, set Boolean to true
	  if (preg_match($pattern, $val)) {
        $suspect = true;
	    }
	  }
    }
  
  // check the $_POST array and any sub-arrays for suspect content
  isSuspect($_POST, $pattern, $suspect);
  
  if ($suspect) {
    $mailSent = false;
	unset($missing);
	}
  else {
    // process the $_POST variables
    foreach ($_POST as $key => $value) {
      // assign to temporary variable and strip whitespace if not an array
      $temp = is_array($value) ? $value : trim($value);
	  // if empty and required, add to $missing array
	  if (empty($temp) && in_array($key, $required)) {
	    array_push($missing, $key);
	    }
	  // otherwise, assign to a variable of the same name as $key
	  elseif (in_array($key, $expected)) {
	    ${$key} = $temp;
	    }
	  }
	}
 
  // go ahead only if not suspect and all required fields OK
  if (!$suspect && empty($missing)) {
    // build the message
    $message = "Name: $name\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Comments: $comments";

    // limit line length to 70 characters
    $message = wordwrap($message, 70);
  
     // send it  
    $mailSent = mail($to, $subject, $message);
	if ($mailSent) {
	  // $missing is no longer needed if the email is sent, so unset it
	  unset($missing);
	  // redirect the page with a fully qualified URL
	  header('Location: http://www.webbuha.com/webbuha_blue_2012/thanks.php');
				exit;
	  }
    }
  }
  ?>