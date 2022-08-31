<?php 

class Insert{
	public $con;

	function __construct(){
		$this->con = new mysqli("localhost", "root", "", "batch04");
	}

	function validation($name, $email, $status){
		if($name == ""){
			echo '<span class="alert alert-danger">Name required!</span>';
			return 0;
		}else if($email == ""){
			echo '<span class="alert alert-danger">Email required!</span>';
			return 0;
		}
		return 1;
	}

	function save(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$status = $_POST['status'];

		$result = $this->con->query("INSERT INTO tbl_student (name, email, status) VALUES ('$name', '$email', '$status') ");

		if($result){
			echo '<span class="alert alert-success">Successful</span>';
		}else{
			echo '<span class="alert alert-danger">Failed</span>';
		}
	}


	function show(){
		$result = $this->con->query("SELECT * FROM tbl_student");

		if($result->num_rows > 0){
			return $result;
		}else{
			echo "No Data Found";
		}
		
	}


	function delete($id){
		$this->con->query("DELETE FROM tbl_student WHERE id=$id");

	}


	
}



 ?>