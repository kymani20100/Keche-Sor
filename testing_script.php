<?php 
// REQUIRE THE DB CLASS
require_once 'core/init.php';
if(isset(GET['id']) && GET['id'] != ''){
	$id = preg_replace('#[^0-9]#', '', $_GET['id']);
	$users = DB::getInstance()->query("SELECT * FROM student WHERE id = '$id' LIMIT 1");
	$all = $user->counts();
	$output = '';
	
	//////////////////////////////////////////////////////////////////////////////////////
	// EVERYTHING ECHOED IN A CLASS FORM LOOKS LIKE THIS {$fullname} --# WITHOUT ECHO :(
	// HOW DO I WRITE A CLASS TO USE THE CODE I ALREADY KNOW BUT WITH A FANCY TOUCH :)
	//////////////////////////////////////////////////////////////////////////////////////
 ?>
 
 <body>
 
	<div>
		<?php if (all) { ?>
		<ul>
			<?php foreach($users as $user) { ?>
				<li><?= $user->firstName ?></li>
			<?php } ?>
		</ul>
		<?php } else { ?>
			No user registered
		<?php } ?>
	</div>	
 </body>
 
 <?php

	class Student {
		public static $tableName = "student";
		public function __construct($firstName, $lastName) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}
		
		public function setFirstName($firstName) {
			$this->firstName = $firstName;
		}
		
		public function save(){
			$result = $db->query("insert into $tableName (firstName, lastName) values ('".$this->firstName."','".$this->lastName."')");
			if($result) {
				return true;
			}
			return false;
		}
		
		public static find($db, $id) {
			$result = $db->query("select * from $tableName where id='$id' limit 1"); 
			if ($result) {
				return new Student($result['firstName'], $result['lastName']);
			}
			return null;
		}
	}
 
	$obj = Student::find(1);
	$obj->setFirstName("Guy");
	$obj->save();
 ?>