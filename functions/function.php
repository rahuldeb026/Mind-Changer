<?php session_start();

	require_once('config.php');

	date_default_timezone_set("Asia/Dhaka");


	function get_header()
	{
		require_once('includes/header.php');
	}


	function get_sidebar()
	{
		require_once('includes/sidebar.php');
	}

	function get_footer()
	{
		require_once('includes/footer.php');
	}

	function GetloggedID()
	{
		return $_SESSION['id']?true:false;
	}

	function needtologin()
	{
		$log=GetloggedID();

		if(!$log)
		{
			header('Location: login.php');
		}
	}

	function admin(){
		if($_SESSION['role_id']!='1'){
			header('Location: dashboard.php');
		}

	}

	function motivator(){
		if($_SESSION['role_id']!='2'){
			header('Location: dashboard.php');
		
		}	
	}

	function user(){
		if($_SESSION['role_id']!='3'){
			header('Location: dashboard.php');
		}	
	}

	
?>