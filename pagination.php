<?php 
require_once 'core/init.php';
$record_per_page = 3;
$page = '';
$output = '';

if(isset($_POST["page"]))
{
	$page = $_POST["page"];
}else{
	$page = 1;
}

$start_from = ($page - 1) * $record_per_page;
$q = DB::getInstance()->query("SELECT * FROM students ORDER BY id DESC LIMIT $start_from,$record_per_page");
$output .= ' <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
					<thead>
						<tr>   
							<th width="5%"><input type="checkbox" name="checkall"/></th>
							<th width="5%">PHOTO</th>
							<th width="5%">ID</th>
							<th width="25%">Username</th>
							<th width="30%">Fullname</th>
							<th width="10%">Gender</th> 
							<th width="15%">Gender</th>							
							<th width="5%">UPDATE</th> 
						</tr>
					</thead>
				<tbody>';
foreach($q->results() as $value){
	$output .= '<tr id="'.$value->id.'">   
					<td><input type="checkbox" name="student_id[]" class="delete_student" value="'.$value->id.'"/></td>
					<td><img src="uploads/moana.jpg" width="60px" height="60px" /></td>
					<td>'.$value->id.'</td>
					<td>'.$value->username.'</td>
					<td>'.$value->fullname.'</td>
					<td>'.$value->gender.'</td> 
					<td>'.$value->contact.'</td> 
					<td><button id="submit" class="btn btn-info">Edit</button></td>
				</tr>';
}

$output .= ' </tbody></table>';
$totals = DB::getInstance()->query("SELECT * FROM students ORDER BY id DESC");
$total_records = $totals->counts();
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<$total_pages; $i++)
{
	$output .= "<button class='btn btn-default pagination_link' id='".$i."' type='button'>".$i."</button>";
}
echo $output;
exit();
?>