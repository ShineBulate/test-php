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
<<<<<<< HEAD
	
	
	
}
Class DB extends Users{
	public function __construct(){
	$connect= new mysqli('localhost','root','','profiles');
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
=======
	public function hashing(){
		$this->password = md5($_POST['user_pass']);
		$this->re_password = md5($_POST['re_pass']);
		if($this->password != $this->re_password){
			echo("<a href='http://localhost/index.php'>РќР°Р·Р°Рґ</a>");
			echo("<script>alert('Error password!')</script>");	
				
			
			
>>>>>>> eaa5a798703dcbab189f69f2b4407e70cba9897c
		}
		else{
			$connect->error();
			$connect->close();
		}
	}
	
	
	public function check(){
		if($this->password != $this->repass){
			echo("<a href='http://localhost/index.php'>Назад</a><br> ");
			exit("Пароли не совпадают!");
			
		}
	}
<<<<<<< HEAD
=======
		public function isCookie(){
	
		if(isset($this->cookie)){
			
			echo("Welcome ".$this->name);
			unset($this->cookie);
		}
		else{
			header("https://github.com/ShineBulate?tab=repositories");
		
		}
		
	}
	public function getInfo(){
		return $this->login."<br>".$this->password."<br>".$this->re_password."<br>".$this->name;
	}
	

	
}
class DB extends User{
	function dbconnect(){
$dbhost = '';
$dbuser = 'root'; 
$dbpass = ''; 
$dbname = 'profiles'; 

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($db->connect_errno)
{
	exit('Error MYSQLI: ' . $db->connect_error);
}
		$sql = "INSERT INTO `user` (`login`,`email`,`name`,`password`) VALUES ('$this->login','$this->e_mail','$this->name','$this->password')";
		if($db->query($sql)){
    echo "Р’С‹ СѓСЃРїРµС€РЅРѕ Р·Р°СЂРµРіРёСЃС‚СЂРёСЂРѕРІР°РЅС‹!";
} else{
    echo "ГЋГёГЁГЎГЄГ : " . $db->error;
}
$db->close();
	}

	
>>>>>>> eaa5a798703dcbab189f69f2b4407e70cba9897c
}
$db = new DB();
$db->check();
$db->newProfile();
$newuser = new Users();



?>
