<?PHP
	class user{
		private  $id = null;
		private  $username = null;
		private  $email = null;
		private  $password = null;
		
		
		function __construct(string $username, string $email,  string $password ){
			
			$this->username=$username;
			$this->email=$email;
			$this->password=$password;
		
		}
		
		function getid(): int{
			return $this->id;
		}
		function getusername(): string{
			return $this->username;
		}
		function getemail(): string {
			return $this->email;
		}
		function getpassword(): string{
			return $this->password;
		}
		function getImageuser(): string{
			return $this->Imageuser;
		}
		
		function setusername(string $username): void{
			$this->username=$username;
		}
		function setemail(string $email): void{
			$this->email=$email;
		}
		function setpassword(string $password): void{
			$this->password=$password;
		}
		
		
	}

?>