<?php

	// check if Admin Panel was already installed
	if(!file_exists("inc/config.inc.php")){
		header("location: install.php");
		exit;
	}
    
	session_start();
    
	//--------------------------------------------------------------------------
	// *** remote file inclusion, check for strange characters in $_GET keys
	// *** all keys with "/", "\", ":" or "%-0-0" are blocked, so it becomes virtually impossible
	// *** to inject other pages or websites
    foreach($_GET as $get_key => $get_value){
        if(is_string($get_value) && ((preg_match("/\//", $get_value)) || (preg_match("/\[\\\]/", $get_value)) || (preg_match("/:/", $get_value)) || (preg_match("/%00/", $get_value)))){
            if(isset($_GET[$get_key])) unset($_GET[$get_key]);
			die("A hacking attempt has been detected. For security reasons, we're blocking any code execution.");
		}
	}

    require_once("inc/config.inc.php");
    require_once("inc/settings.inc.php");
    
    $log = (isset($_REQUEST['log'])) ? "out" : "";
    $msg = (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : "";
    
    $adm_logged = (isset($_SESSION['adm_logged'])) ? $_SESSION['adm_logged'] : false;
    

    if($adm_logged == true){
		$left_menu_page = "left_menu.php";
		$content_page = "home.php";
    }else{	
		$left_menu_page = "left_menu_empty.php";
		$content_page = "login.php";
    }

  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
    <meta name="description" content="Website Back-End management script ." />
    <meta name="author" content="localhost">
    <meta name="generator" content="AdminPanel">
    <title><?php echo $SETTINGS['site_name']; ?> :: Admin Panel</title>

    <!-- Meta tags -->    
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">

    <!-- CSS style files -->
    <link href="css/style_<?php echo $SETTINGS['css_style']; ?>.css" type="text/css" rel="stylesheet">

    <!-- JavaScript files -->
    <script type="text/JavaScript" src="js/functions.js"></script>         
</head>

<frameset rows="90px,*" FRAMEBORDER="no" FRAMESPACING="0" BORDER="0">
     <frame src="header.php" name="header" scrolling="no">
     <frameset cols="170px,*"  FRAMEBORDER="no" FRAMESPACING="0" BORDER="0">
          <frame src="<?php echo $left_menu_page; ?>" name="left_menu" scrolling="no">
          <frame src="<?php echo $content_page; ?>" name="frameMain">
     </frameset>
</frameset>

</html>