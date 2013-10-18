<?php

class UsersController extends Controller{

	function login(){
		global $template;
		$sql = "select uname from users where uid='" . $_GET['id'] . "';";
		$result = $this->User->query($sql,1);
		$template->set('name', $result['User']['uname']);
	}

}
