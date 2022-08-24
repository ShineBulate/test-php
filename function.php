<?php
Class Users{
	protected $id;
	protected $username;
	protected $e_mail;
	protected $password;
	protected $repass;
	protected $login;
	protected $passIn;
	
	public function getInfo(){
		$this->username = $_POST['username'];
		$this->email = $_POST['e_mail'];
		$this->password = md5(($_POST['password']));
		$this->repass = md5(($_POST['repass']));
		
	}



	
	
	
}
Class DB extends Users{
	protected $connect;
	public function __construct(){
	$connect = new mysqli('localhost','root','rootroot','profiles');
	if($connect->connect_error){
		die('Connection error'.$connect->connect_errno);
	}
	}
	public function newProfile(){
		$connect = new mysqli('localhost','root','rootroot','profiles');
		$sql = "INSERT INTO users (`login`, `email`, `password`)
		VALUES ('$this->username', '$this->email', '$this->password')";
		
		if ($connect->query($sql) === TRUE) {
			setcookie("success","Вы успешно зарегистрированы!",time() + 1);
			header('Location:http://php.lc/login.php');
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $connect->error;
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
$db->getInfo();
$db->newProfile();
$newuser = new Users();
$newuser->getInfo();
$db->check();


?>