<?php 
require_once 'core/init.php';
if(isset($_POST['firstname'])){	
	$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'firstname' => array(
				'required' => true,
				'min' => 5,
				'max' => 20
			),
			'lastname' => array(
				'required' => true,
				'min' => 5,
				'max' => 20
			),
			'username' => array(
				'required' => true,
				'min' => 5,
				'max' => 20
			),
			'password' => array(
				'required' => true,
				'min' => 6
			),
			'cpassword' => array(
				'required' => true,
				'matches' => 'password'
			),
			'about' => array(
				'required' => true,
				'min' => 10,
				'max' => 200
			)
		));
		
		if($validation->passed()){
			
			$file_name = $_FILES["avatar"]["name"]; //Filename into a Local Variable
			$file_Tmp_loc = $_FILES["avatar"]["tmp_name"]; //File Temp Location into a Local Variable
			$file_type = $_FILES["avatar"]["type"];	//File Type into a Local Variable
			$file_size = $_FILES["avatar"]["size"]; //File size into a Local Variable
			$file_error = $_FILES["avatar"]["error"]; //File Error into a Local Variable
			$move_image = move_uploaded_file($file_Tmp_loc, "uploads/$file_name");
			
			$user = DB::getInstance()->insert('users', array(
					'firstname' => $_POST['firstname'],
					'lastname' => $_POST['lastname'],
					'username'   => $_POST['username'],
					'password'  => $_POST['password'],
					'picture' => $file_name,
					'gender' => $_POST['gender'],
					'region'   => $_POST['region'],
					'about'  => $_POST['about']
				));

				if($user){
					echo 'success';
					exit();
				}else{
					echo 'nop';
					exit();
				}
		}else{
			foreach($validation->errors() as $error){
				echo '<p>'.ucfirst($error).'</p>';
			}
		} 


	
		
		
	}

?>