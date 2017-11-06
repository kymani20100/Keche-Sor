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
$q = DB::getInstance()->query("SELECT * FROM users ORDER BY id DESC LIMIT $start_from,$record_per_page");
$output .= '<div class="head clearfix">
					<div class="isw-grid"></div>
					<h1>All User</h1>                               
				</div>
				<div class="block-fluid table-sorting clearfix">
					<table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkall"/></th>
								<th width="15%">PICTURE</th>
								<th width="20%">FIRSTNAME</th>
								<th width="20%">LASTNAME</th>
								<th width="20%">E-MAIL</th>
								<th width="20%">GENDER</th>   
								<th width="5%">EDIT</th>
							</tr>
						</thead>
						<tbody>';
foreach($q->results() as $value){
	$output .= '<tr id="'.$value->id.'">   
					<td><input type="checkbox" name="checkall" class="delete_student" value="'.$value->id.'"/></td>
					<td><img src="uploads/moana.jpg" width="60px" height="60px" /></td>
					<td>109</td>
					<td>Homer</td>
					<td>homer@domain.com</td>
					<td>+98(765)432-11-90</td>   
					<td><button id="submit" class="btn btn-info">Edit</button></td>
				</tr>';
}

$output .= '</tbody></table></div>';
$totals = DB::getInstance()->query("SELECT * FROM users ORDER BY id DESC");
$total_records = $totals->counts();
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<$total_pages; $i++)
{
	$output .= "<button class='btn btn-default pagination_link' id='".$i."' type='button'>".$i."</button>";
}
echo $output;
exit();
?>