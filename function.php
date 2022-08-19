<?php
class User{
	private $login;
	private $password;
	private $re_password;
	private $name;
	private $e_mail;
	private $cookie;

	public function setInfo(){
		$this->login = $_POST['login'];
		$this->name = $_POST['name'];
		$this->e_mail = $_POST['e_mail'];
	}
	public function hashing(){
		$this->password = md5($_POST['user_pass']);
		$this->re_password = md5($_POST['re_pass']);
		if($this->password != $this->re_password){
			echo("<a href='http://localhost/index.php'>Назад</a>");
			echo("<script>alert('Error password!')</script>");	
				
			
			
		}
		else{
			$this->cookie = setcookie("user_name",$this->name);
			header("Location:http://localhost/login.php");
			
		}
	}
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
    echo "Вы успешно зарегистрированы!";
} else{
    echo "Îøèáêà: " . $db->error;
}
$db->close();
	}

	
}
$db = new DB();
$db->dbconnect();
$users = new User();
$users->setInfo();
$users->hashing();
$users->isCookie();



?>
