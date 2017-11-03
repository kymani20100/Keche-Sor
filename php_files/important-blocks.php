<?php
	require_once '../core/init.php';
	if(isset($_POST['first'])){
		$feedback = '';
		
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'first' => array(
				'required' => true,
				'min' => 5,
				'max' => 20
			),
			'gender' => array(
				'required' => true,
				'max' => 20
			),
			'last' => array(
				'required' => true,
				'min' => 5,
				'max' => 20
			),
			'password' => array(
				'required' => true,
				'min' => 6
			),
			'about' => array(
				'required' => true,
				'min' => 15,
				'max' => 500
			)
		));
		
		if($validation->passed()){
			$user = DB::getInstance()->insert('student4', array(
				'firstname'  => preg_replace('#[^a-z ]#i', '', $_POST['first']),
				'gender'     => preg_replace('#[^a-z]#i', '', $_POST['gender']),
				'lastname'   => preg_replace('#[^a-z ]#i', '', $_POST['last']),
				'email'      => preg_replace('#[^a-z0-9-_@.]#i', '', $_POST['email']),
				'password'   => md5($_POST['password']),
				'about'      => preg_replace('#[^a-z 0-9]#i', '', $_POST['about'])
			));
		
			if($user){
				$feedback = '<div class="alert alert-success">                
							<h4>Success!</h4>
							Data inserted successfully...
						</div>';
				echo "success|$feedback";
				exit();
			}else{
				$feedback = '<div class="alert alert-danger">                
								<h4>Error!</h4>
								Hey, you have some error here... 
							</div> ';
				echo "failure|$feedback";
				exit();
				
			}
			
		}else{
			foreach($validation->errors() as $error){
				echo '<div class="alert alert-danger">                
								<h4>Error!</h4>
								Hey, '.ucfirst($error).'... 
					  </div>';
			}
		} 
		
		
	}
?>