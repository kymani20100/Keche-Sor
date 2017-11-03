<?php 
	require_once 'core/init.php';
	/* $user = DB::getInstance()->insert('students', array(
		'username' => 'Edem Tsalah',
		'fullname' => 'Kymani Kojo Emmanuel',
		'gender'   => 'Male',
		'contact'  => '05468438383'
	));

	if($user){
		echo '<div class="alert alert-success fade in">
				<button data-dismiss="alert" class="close close-sm" type="button">
				<i class="fa fa-times"></i></button>
				<strong>Well done!</strong> Data inserted Successfully</div>';
	}else{
		
		echo '<div class="alert alert-success fade in">
				<button data-dismiss="alert" class="close close-sm" type="button">
				<i class="fa fa-times"></i></button>
				<strong>Well done!</strong> Go home</div>';
	} */
	
	//////////////////////////////////////////////
	
	if(isset($_POST['insert'])){	
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' => array(
				'required' => true,
				'min' => 5,
				'max' => 20
			),
			'fullname' => array(
				'required' => true,
				'max' => 20
			),
			'gender' => array(
				'required' => true,
				'max' => 20
			),
			/* 'password' => array(
				'required' => true,
				'min' => 6
			),
			'password_again' => array(
				'required' => true,
				'matches' => 'password'
			), */
			'contact' => array(
				'required' => true,
				'max' => 10
			)
		));
		
		if($validation->passed()){
			
			$user = DB::getInstance()->insert('students', array(
				'username' => $_POST['username'],
				'fullname' => $_POST['fullname'],
				'gender'   => $_POST['gender'],
				'contact'  => $_POST['contact']
			));

			if($user){
				echo '<div class="alert alert-success fade in">
						<button data-dismiss="alert" class="close close-sm" type="button">
						<i class="fa fa-times"></i></button>
						<strong>Well done!</strong> Data inserted Successfully</div>';
			}else{
				
				echo '<div class="alert alert-success fade in">
						<button data-dismiss="alert" class="close close-sm" type="button">
						<i class="fa fa-times"></i></button>
						<strong>Well done!</strong> Go home</div>';
			}
			
		}else{
			foreach($validation->errors() as $error){
				echo '<div class="alert alert-success fade in">
						<button data-dismiss="alert" class="close close-sm" type="button">
						<i class="fa fa-times"></i></button>
						<strong>Well done!</strong> '.ucfirst($error).'</div>';
			}
		} 
	}
	
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>Aquarius - responsive admin panel</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />  
    <!--[if lt IE 8]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->            
    <link rel='stylesheet' type='text/css' href='css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.2.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='js/plugins/pnotify/jquery.pnotify.min.js'></script>
    <script type='text/javascript' src='js/plugins/ibutton/jquery.ibutton.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/scrollup/jquery.scrollUp.min.js'></script>
    
    <script type='text/javascript' src='js/cookies.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
    
</head>
<body>
    <div class="wrapper"> 
            
        <div class="header">
            <a class="logo" href="index.html"><img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/></a>
            <ul class="header_menu">
                <li class="list_icon"><a href="#">&nbsp;</a></li>
                <li class="settings_icon">
                    <a href="#" class="link_themeSettings">&nbsp;</a>
                    
                    <div id="themeSettings" class="popup">
                        <div class="head clearfix">
                            <div class="arrow"></div>
                            <span class="isw-settings"></span>
                            <span class="name">Theme settings</span>
                        </div>
                        <div class="body settings">
                            <div class="row">
                                <div class="col-md-3"><strong>Style:</strong></div>
                                <div class="col-md-9">
                                    <a class="styleExample tip active" title="Default style" data-style="">&nbsp;</a>                                    
                                    <a class="styleExample silver tip" title="Silver style" data-style="silver">&nbsp;</a>
                                    <a class="styleExample dark tip" title="Dark style" data-style="dark">&nbsp;</a>
                                    <a class="styleExample marble tip" title="Marble style" data-style="marble">&nbsp;</a>
                                    <a class="styleExample red tip" title="Red style" data-style="red">&nbsp;</a>                                    
                                    <a class="styleExample green tip" title="Green style" data-style="green">&nbsp;</a>
                                    <a class="styleExample lime tip" title="Lime style" data-style="lime">&nbsp;</a>
                                    <a class="styleExample purple tip" title="Purple style" data-style="purple">&nbsp;</a>                                    
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-md-3"><strong>Background:</strong></div>
                                <div class="col-md-9">
                                    <a class="bgExample tip active" title="Default" data-style="">&nbsp;</a>
                                    <a class="bgExample bgCube tip" title="Cubes" data-style="cube">&nbsp;</a>
                                    <a class="bgExample bghLine tip" title="Horizontal line" data-style="hline">&nbsp;</a>
                                    <a class="bgExample bgvLine tip" title="Vertical line" data-style="vline">&nbsp;</a>
                                    <a class="bgExample bgDots tip" title="Dots" data-style="dots">&nbsp;</a>
                                    <a class="bgExample bgCrosshatch tip" title="Crosshatch" data-style="crosshatch">&nbsp;</a>
                                    <a class="bgExample bgbCrosshatch tip" title="Big crosshatch" data-style="bcrosshatch">&nbsp;</a>
                                    <a class="bgExample bgGrid tip" title="Grid" data-style="grid">&nbsp;</a>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-md-3"><strong>Fixed layout:</strong></div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="settings_fixed" value="1"/>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-3"><strong>Hide menu:</strong></div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="settings_menu" value="1"/>
                                </div>                                           
                            </div>                            
                        </div>
                        <div class="footer">                            
                            <button class="btn btn-default link_themeSettings" type="button">Close</button>
                        </div>
                    </div>                    
                    
                </li>
            </ul>    
        </div>

        <?php 
			include("includes/menu.php");
		?>

        <div class="content">


            <div class="breadLine">

                <ul class="breadcrumb">
                    <li><a href="#">Simple Admin</a> <span class="divider">></span></li>                
                    <li class="active">Dashboard</li>
                </ul>

                <ul class="buttons">
                    <li>
                        <a href="#" class="link_bcPopupList"><span class="glyphicon glyphicon-user"></span><span class="text">Users list</span></a>

                        <div id="bcPopupList" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-users"></span>
                                <span class="name">List users</span>
                            </div>
                            <div class="body-fluid users">

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/aqvatarius_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Aqvatarius</a>                                    
                                        <span>online</span>
                                    </div>
                                </div>

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/olga_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Olga</a>                                
                                        <span>online</span>
                                    </div>
                                </div>                        

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/alexey_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexey</a>  
                                        <span>online</span>
                                    </div>
                                </div>                              

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/dmitry_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Dmitry</a>                                    
                                        <span>online</span>
                                    </div>
                                </div>                         

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/helen_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Helen</a>                                                                        
                                    </div>
                                </div>                                  

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/alexander_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexander</a>                                                                        
                                    </div>
                                </div>                                  

                            </div>
                            <div class="footer">
                                <button class="btn btn-default" type="button">Add new</button>
                                <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                            </div>
                        </div>                    

                    </li>                
                    <li>
                        <a href="#" class="link_bcPopupSearch"><span class="glyphicon glyphicon-search"></span><span class="text">Search</span></a>

                        <div id="bcPopupSearch" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-zoom"></span>
                                <span class="name">Search</span>
                            </div>
                            <div class="body search">
                                <input type="text" placeholder="Some text for search..." name="search"/>
                            </div>
                            <div class="footer">
                                <button class="btn btn-default" type="button">Search</button>
                                <button class="btn btn-danger link_bcPopupSearch" type="button">Close</button>
                            </div>
                        </div>                
                    </li>
                </ul>

            </div>

            <div class="workplace">

                <div class="row">
                    <div class="col-md-12">

                        <div class="widgetButtons">                        
                            <div class="bb"><a href="#" class="tipb" title="Edit"><span class="ibw-edit"></span></a></div>
                            <div class="bb">
                                <a href="#" class="tipb" title="Upload"><span class="ibw-folder"></span></a>
                                <div class="caption red">31</div>
                            </div>
                            <div class="bb"><a href="#" class="tipb" title="Add new"><span class="ibw-plus"></span></a></div>
                            <div class="bb"><a href="#" class="tipb" title="Add to favorite"><span class="ibw-favorite"></span></a></div>
                            <div class="bb">
                                <a href="#" class="tipb" title="Send mail"><span class="ibw-mail"></span></a>
                                <div class="caption green">31</div>
                            </div>
                            <div class="bb"><a href="#" class="tipb" title="Settings"><span class="ibw-settings"></span></a></div>
                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">                    

                        <div class="wBlock red clearfix">                        
                            <div class="dSpace">
                                <h3>Invoices statistics</h3>
                                <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--130,190,260,230,290,400,340,360,390--></span>
                                <span class="number">60%</span>                    
                            </div>
                            <div class="rSpace">
                                <span>$1,530 <b>amount paid</b></span>
                                <span>$2,102 <b>in queue</b></span>
                                <span>$11,100 <b>total taxes</b></span>
                            </div>                          
                        </div>                     

                    </div>                

                    <div class="col-md-4">                    

                        <div class="wBlock green clearfix">                        
                            <div class="dSpace">
                                <h3>Users</h3>
                                <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--5,10,15,20,23,21,25,20,15,10,25,20,10--></span>
                                <span class="number">2,513</span>                    
                            </div>
                            <div class="rSpace">
                                <span>351 <b>active</b></span>
                                <span>2102 <b>passive</b></span>
                                <span>100 <b>removed</b></span>
                            </div>                          
                        </div>                                                            

                    </div>

                    <div class="col-md-4">                    

                        <div class="wBlock blue clearfix">
                            <div class="dSpace">
                                <h3>Last visits</h3>
                                <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--240,234,150,290,310,240,210,400,320,198,250,222,111,240,221,340,250,190--></span>
                                <span class="number">6,302</span>
                            </div>
                            <div class="rSpace">                                                                           
                                <span>65% <b>New</b></span>
                                <span>35% <b>Returning</b></span>
                                <span>00:05:12 <b>Average time on site</b></span>                                                        
                            </div>
                        </div>                      

                    </div>                
                </div>            

                <div class="dr"><span></span></div> 

                <div class="row">

                    <div class="col-md-4">
                        <div class="head clearfix">
                            <div class="isw-archive"></div>
                            <h1>Orders</h1>
                            <ul class="buttons">                            
                                <li>
                                    <a href="#" class="isw-settings"></a>
                                    <ul class="dd-list">
                                        <li><a href="#"><span class="isw-list"></span> Show all</a></li>
                                        <li><a href="#"><span class="isw-ok"></span> Approved</a></li>
                                        <li><a href="#"><span class="isw-minus"></span> Unapproved</a></li>
                                        <li><a href="#"><span class="isw-refresh"></span> Refresh</a></li>
                                    </ul>
                                </li>
                            </ul>                         
                        </div>
                        <div class="block-fluid accordion">

                            <h3>November 2012</h3>
                            <div>
                                <table cellpadding="0" cellspacing="0" width="100%" class="sOrders">
                                    <thead>
                                        <tr>
                                            <th width="60">Date</th><th>User</th><th width="60">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="date">Nov 6</span><span class="time">12:35</span></td>
                                            <td><a href="#">Aqvatarius</a></td>
                                            <td><span class="price">$1366.12</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="date">Nov 8</span><span class="time">18:42</span></td>
                                            <td><a href="#">Olga</a></td>
                                            <td><span class="price">$146.00</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="date">Nov 15</span><span class="time">8:21</span></td>
                                            <td><a href="#">Alex</a></td>
                                            <td><span class="price">$879.24</span></td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right"><button class="btn btn-default btn-sm">More...</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>                        

                            <h3>October 2012</h3>
                            <div>
                                <table cellpadding="0" cellspacing="0" width="100%" class="sOrders">
                                    <thead>
                                        <tr>
                                            <th width="60">Date</th><th>User</th><th width="60">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="date">Oct 6</span><span class="time">12:35</span></td>
                                            <td><a href="#">Aqvatarius</a></td>
                                            <td><span class="price">$1366.12</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="date">Oct 8</span><span class="time">18:42</span></td>
                                            <td><a href="#">Olga</a></td>
                                            <td><span class="price">$146.00</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="date">Oct 15</span><span class="time">8:21</span></td>
                                            <td><a href="#">Alex</a></td>
                                            <td><span class="price">$879.24</span></td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right"><button class="btn btn-default btn-sm">More...</button></td>
                                        </tr>
                                    </tfoot>                                
                                </table>                           
                            </div>

                            <h3>September 2012</h3>
                            <div>
                                <table cellpadding="0" cellspacing="0" width="100%" class="sOrders">
                                    <thead>
                                        <tr>
                                            <th width="60">Date</th><th>User</th><th width="60">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="date">Sep 6</span><span class="time">12:35</span></td>
                                            <td><a href="#">Aqvatarius</a></td>
                                            <td><span class="price">$1366.12</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="date">Sep 8</span><span class="time">18:42</span></td>
                                            <td><a href="#">Olga</a></td>
                                            <td><span class="price">$146.00</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="date">Sep 15</span><span class="time">8:21</span></td>
                                            <td><a href="#">Alex</a></td>
                                            <td><span class="price">$879.24</span></td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right"><button class="btn btn-default btn-sm">More...</button></td>
                                        </tr>
                                    </tfoot>                                
                                </table>                              
                            </div>                        

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="head clearfix">
                            <div class="isw-edit"></div>
                            <h1>Latest news</h1>
                            <ul class="buttons">                            
                                <li>
                                    <a href="#" class="isw-text_document"></a>
                                </li>                            
                                <li>
                                    <a href="#" class="isw-settings"></a>
                                    <ul class="dd-list">
                                        <li><a href="#"><span class="isw-list"></span> Show all</a></li>
                                        <li><a href="#"><span class="isw-edit"></span> Add new</a></li>
                                        <li><a href="#"><span class="isw-refresh"></span> Refresh</a></li>
                                    </ul>
                                </li>
                            </ul>                        
                        </div>
                        <div class="block news scrollBox">

                            <div class="scroll" style="height: 270px;">

                                <div class="item">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <p>Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus.</p>
                                    <span class="date">02.11.2012 14:23</span>
                                    <div class="controls">                                    
                                        <a href="#" class="glyphicon glyphicon-pencil tip" title="Edit"></a>
                                        <a href="#" class="glyphicon glyphicon-trash tip" title="Remove"></a>
                                    </div>
                                </div>

                                <div class="item">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <p>Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus.</p>
                                    <span class="date">02.11.2012 14:23</span>
                                    <div class="controls">                                    
                                        <a href="#" class="glyphicon glyphicon-pencil tip" title="Edit"></a>
                                        <a href="#" class="glyphicon glyphicon-trash tip" title="Remove"></a>
                                    </div>                                
                                </div>

                                <div class="item">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <p>Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus.</p>
                                    <span class="date">02.11.2012 14:23</span>
                                    <div class="controls">                                    
                                        <a href="#" class="glyphicon glyphicon-pencil tip" title="Edit"></a>
                                        <a href="#" class="glyphicon glyphicon-trash tip" title="Remove"></a>
                                    </div>                                
                                </div>                            

                                <div class="item">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <p>Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus.</p>
                                    <span class="date">02.11.2012 14:23</span>
                                    <div class="controls">                                    
                                        <a href="#" class="glyphicon glyphicon-pencil tip" title="Edit"></a>
                                        <a href="#" class="glyphicon glyphicon-trash tip" title="Remove"></a>
                                    </div>                                
                                </div>

                                <div class="item">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <p>Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus.</p>
                                    <span class="date">02.11.2012 14:23</span>
                                    <div class="controls">                                    
                                        <a href="#" class="glyphicon glyphicon-pencil tip" title="Edit"></a>
                                        <a href="#" class="glyphicon glyphicon-trash tip" title="Remove"></a>
                                    </div>                                
                                </div>

                                <div class="item">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <p>Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus.</p>
                                    <span class="date">02.11.2012 14:23</span>
                                    <div class="controls">                                    
                                        <a href="#" class="glyphicon glyphicon-pencil tip" title="Edit"></a>
                                        <a href="#" class="glyphicon glyphicon-trash tip" title="Remove"></a>
                                    </div>                                
                                </div>                            

                            </div>

                        </div>
                    </div>                               

                    <div class="col-md-4">
                        <div class="head clearfix">
                            <div class="isw-cloud"></div>
                            <h1>Registrations</h1>
                            <ul class="buttons">        
                                <li>
                                    <a href="#" class="isw-users"></a>
                                </li>
                                <li>
                                    <a href="#" class="isw-settings"></a>
                                    <ul class="dd-list">
                                        <li><a href="#"><span class="isw-list"></span> Show all</a></li>
                                        <li><a href="#"><span class="isw-mail"></span> Send mail</a></li>
                                        <li><a href="#"><span class="isw-refresh"></span> Refresh</a></li>
                                    </ul>
                                </li>
                                <li class="toggle"><a href="#"></a></li>
                            </ul> 
                        </div>
                        <div class="block users scrollBox">

                            <div class="scroll" style="height: 270px;">

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/aqvatarius_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Aqvatarius</a>                                                                    
                                        <div class="controls">                                    
                                            <a href="#" class="glyphicon glyphicon-ok"></a>
                                            <a href="#" class="glyphicon glyphicon-remove"></a>
                                        </div>                                                                    
                                    </div>
                                </div>

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/olga_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Olga</a>                                                                
                                        <div class="controls">                                    
                                            <a href="#" class="glyphicon glyphicon-ok"></a>
                                            <a href="#" class="glyphicon glyphicon-remove"></a>
                                        </div>                                                            
                                    </div>
                                </div>                        

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/alexey_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexey</a>    
                                        <div class="controls">                                    
                                            <a href="#" class="glyphicon glyphicon-ok"></a>
                                            <a href="#" class="glyphicon glyphicon-remove"></a>
                                        </div>                                                            
                                    </div>
                                </div>                              

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/dmitry_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Dmitry</a>                                    
                                        <span>approved</span>
                                    </div>
                                </div>                         

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/helen_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Helen</a>                                                                        
                                        <span>approved</span>
                                    </div>                          
                                </div>                                  

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/alexander_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexander</a>                                                                        
                                        <span>approved</span>
                                    </div>
                                </div>                        

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/aqvatarius_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Aqvatarius</a>                                                                    
                                        <span>approved</span>
                                    </div>
                                </div>

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/olga_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Olga</a>                                                                
                                        <span>approved</span>
                                    </div>
                                </div>                        

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/alexey_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexey</a>
                                        <span>approved</span>
                                    </div>
                                </div>                              

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/dmitry_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Dmitry</a>                                    
                                        <span>approved</span>
                                    </div>
                                </div>                         

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/helen_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Helen</a>                                                                        
                                        <span>approved</span>
                                    </div>
                                </div>                                  

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="img/users/alexander_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexander</a>                                                                        
                                        <span>approved</span>
                                    </div>
                                </div>                        

                            </div>

                        </div>
                    </div>                


                </div>

                <div class="dr"><span></span></div>            

                <div class="row">

                    <div class="col-md-12">
                        <div class="head clearfix">
                            <div class="isw-graph"></div>
                            <h1>Chart</h1>
                        </div>
                        <div class="block">
                            <div id="chart-1" style="height: 300px; margin-top: 10px;">

                            </div>
                        </div>
                    </div>

                </div>

                <div class="dr"><span></span></div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="head clearfix">
                            <div class="isw-chats"></div>
                            <h1>Messaging</h1>
                            <ul class="buttons">
                                <li>
                                    <a href="#" class="isw-attachment"></a>                            
                                </li>                            
                                <li>
                                    <a href="#" class="isw-settings"></a>
                                    <ul class="dd-list">
                                        <li><a href="#"><span class="isw-plus"></span> New document</a></li>
                                        <li><a href="#"><span class="isw-edit"></span> Edit</a></li>
                                        <li><a href="#"><span class="isw-delete"></span> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="block messaging">

                            <div class="itemIn">
                                <a href="#" class="image"><img src="img/users/olga.jpg" class="img-thumbnail"/></a>
                                <div class="text">
                                    <div class="info clearfix">
                                        <span class="name">Olga</span>
                                        <span class="date">10 min ago</span>
                                    </div>  
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut diam quis dolor mollis tristique. Suspendisse vestibulum convallis felis vitae facilisis. Praesent eu nisi vestibulum erat lacinia sollicitudin. Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus. Maecenas nulla felis, commodo et adipiscing vel, accumsan eget augue. Morbi volutpat iaculis molestie.
                                </div>
                            </div>

                            <div class="itemOut">
                                <a href="#" class="image"><img src="img/users/aqvatarius.jpg" class="img-thumbnail"/></a>
                                <div class="text">
                                    <div class="info clearfix">
                                        <span class="name">Aqvatarius</span>
                                        <span class="date">7 min ago</span>
                                    </div>                                
                                    In id adipiscing diam. Sed lobortis dui ut odio tempor blandit. Suspendisse scelerisque mi nec nunc gravida quis mollis lacus dignissim.
                                </div>
                            </div>

                            <div class="itemIn">
                                <a href="#" class="image"><img src="img/users/olga.jpg" class="img-thumbnail"/></a>
                                <div class="text">
                                    <div class="info clearfix">
                                        <span class="name">Olga</span>
                                        <span class="date">15 sec ago</span>
                                    </div>  
                                    Cras nec risus dolor, ut tristique neque. Donec mauris sapien, pellentesque at porta id, varius eu tellus. Maecenas nulla felis, commodo et adipiscing vel, accumsan eget augue morbi volutpat.
                                </div>
                            </div>                                                                        

                            <div class="controls">
                                <div class="control">
                                    <textarea name="textarea" placeholder="Your message..." style="height: 70px; width: 100%;"></textarea>
                                </div>
                                <button class="btn btn-default">Send message</button>
                            </div>                        
                        </div>
                    </div>                

                    <div class="col-md-6">
                        <div class="head clearfix">
                            <div class="isw-calendar"></div>
                            <h1>Calendar</h1>
                        </div>
                        <div class="block-fluid">
                            <div id="calendar" class="fc"></div>
                        </div>
                    </div>

                </div>            

                <div class="row">

                    <div class="col-md-12">                    
                        <div class="head clearfix">
                            <div class="isw-grid"></div>
                            <h1>Simple table</h1>      
                            <ul class="buttons">
                                <li><a href="#" class="isw-download"></a></li>                                                        
                                <li><a href="#" class="isw-attachment"></a></li>
                                <li>
                                    <a href="#" class="isw-settings"></a>
                                    <ul class="dd-list">
                                        <li><a href="#"><span class="isw-plus"></span> New document</a></li>
                                        <li><a href="#"><span class="isw-edit"></span> Edit</a></li>
                                        <li><a href="#"><span class="isw-delete"></span> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>                        
                        </div>
                        <div class="block-fluid">
                            <table cellpadding="0" cellspacing="0" width="100%" class="table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="checkall"/></th>                                        
                                        <th width="25%">Name</th>
                                        <th width="25%">E-mail</th>
                                        <th width="25%">Phone</th>                       
                                        <th width="25%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox"/></td>                                        
                                        <td>Dmitry</td>
                                        <td>dmitry@domain.com</td>
                                        <td>+98(765) 432-10-98</td>                      
                                        <td><span class="label label-success">aviable</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox"/></td>                                        
                                        <td>Alex</td>
                                        <td>alex@domain.com</td>
                                        <td>+98(765) 432-10-99</td>                      
                                        <td><span class="label label-success">aviable</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox"/></td>
                                        <td>John</td>
                                        <td>john@domain.com</td>
                                        <td>+98(765) 432-10-97</td>                      
                                        <td><span class="label label-warning">away</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox"/></td>                                        
                                        <td>Angelina</td>
                                        <td>angelina@domain.com</td>
                                        <td>+98(765) 432-10-90</td>                      
                                        <td><span class="label label-warning">away</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox"/></td>
                                        <td>Tom</td>
                                        <td>tom@domain.com</td>
                                        <td>+98(765) 432-10-92</td>                      
                                        <td><span class="label label-default">offline</span></td>                                        
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>                                

                </div>


                <div class="dr"><span></span></div>

            </div>

        </div>   
    </div>
</body>
</html>
