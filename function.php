<?php
Class Users{
	protected $id;
	protected $username;
	protected $e_mail;
	protected $password;
	protected $repass;
	
	protected $login;
	protected $passIn;
	
	public function __construct(){
		$this->username = $_POST['username'];
		$this->email = $_POST['e_mail'];
		$this->password = md5($_POST['password']);
		$this->repass = md5($_POST['repass']);
		
	}
	public function logIn(){
		$this->login = $_POST['login'];
		$this->passin = $_POST['passin'];
	
	}
	
	
	
}
Class DB extends Users{
	public function __construct(){
	$connect= new mysqli('localhost','root','rootroot','profiles');
	if($connect->connect_error){
		die('Connection error'.$connect->connect_errno);
	}
	}
	public function newProfile(){
		$sql = "INSERT INTO `user` (`username`,`email`,`password`,) VALUES ('$this->username','$this->e_mail','$this->password')";
		$connect->query($sql);
		if($connect->query($sql)){
			echo "You has been reg!";
			$connect->close();
		}
		else{
			$connect->error();
			$connect->close();
		}
	}
	
	
	public function check(){
		if($this->password != $this->repass){
			echo("<a href='http://localhost/index.php'>Назад</a><br> ");
			exit("Неверно повторили пароль!");
			
		}
	}
}
$db = new DB();
$db->check();
$db->newProfile();
$newuser = new Users();



?>