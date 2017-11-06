<?php 
	require_once 'core/init.php';	
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
            <a class="logo" href="index.php"><img src="img/logo.png" alt="Jumrock -  Skills of Jumrock" title="Jumrock -  Skills of Jumrock"/></a>
            <ul class="header_menu">
                
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

            </div>

            <div class="workplace">
				<div class="row">
					<form id="user_form" method="POST">
                    <div class="col-md-6">
                        <div class="head clearfix">
                            <div class="isw-documents"></div>
                            <h1>INSERT FORM</h1>
                        </div>
                        <div class="block-fluid">                        

                            <div class="row-form clearfix">
                                <div class="col-md-3">Firstname:</div>
                                <div class="col-md-9"><input type="text" id="firstname" name="firstname" placeholder="enter firstname..."/></div>
                            </div>

							 <div class="row-form clearfix">
                                <div class="col-md-3">Lastname:</div>
                                <div class="col-md-9"><input type="text" id="lastname" name="lastname" placeholder="enter lastname..."/></div>
                            </div>
							
							 <div class="row-form clearfix">
                                <div class="col-md-3">Username:</div>
                                <div class="col-md-9"><input type="text" id="username" name="username" placeholder="enter Username..."/></div>
                            </div>
							
							 <div class="row-form clearfix">
                                <div class="col-md-3">Password:</div>
                                <div class="col-md-9"><input type="password" id="password" name="password" placeholder="enter password..."/></div>
                            </div>
							
							 <div class="row-form clearfix">
                                <div class="col-md-3">Con. Password:</div>
                                <div class="col-md-9"><input type="password" id="cpassword" name="cpassword" placeholder="enter password..."/></div>
                            </div>
                           
                        </div>

                    </div>
					
					 <div class="col-md-6">
                        <div class="head clearfix">
                            <div class="isw-documents"></div>
                            <h1>INSERT FORM</h1>
                        </div>
                        <div class="block-fluid">                        

                            <div class="row-form clearfix">
                                <div class="col-md-3">Picture:</div>
                                <div class="col-md-9"><input type="file" id="avatar" name="avatar" /></div>
                            </div>

							<div class="row-form clearfix">
                                <div class="col-md-3">Gender:</div>
                                <div class="col-md-9">
									<select id="gender" name="gender">
                                            <option value="">choose a option...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                    </select>
								</div>
                            </div>
							
							<div class="row-form clearfix">
                                <div class="col-md-3">Region:</div>
                                <div class="col-md-9">
									<select id="region" name="region">
                                            <option value="">choose an option...</option>
                                            <option value="Greater Accra">Greater Accra</option>
                                            <option value="Volta">Volta</option>
                                            <option value="Western">Western</option>
                                            <option value="Eastern">Eastern</option>
                                    </select>
								</div>
                            </div>
							
							 <div class="row-form clearfix">
                                <div class="col-md-3">About Me:</div>
                                <div class="col-md-9">
									<textarea id="about" name="about" placeholder="Tell us a little about yourself..."></textarea>
								</div>
                            </div> 

                            <div class="footer tar">
                                <button type="submit" class="btn btn-info" id="registerbTn" name="REGISTER" value="REGISTER">REGISTER</button>
                            </div>                            
                        </div>

                    </div>
					</form>
					
					<!-- Bootrstrap modal -->
					<div class="modal fade" id="bModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>                        
									<h4>Actions</h4>
								</div>
								<div class="modal-body">
									<p id="pop_message"></p>
								</div>   
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">OK</button>            
								</div>
							</div>
						</div>
					</div>  
					
                </div>
            </div>

        </div>   
    </div>
</body>
<script>
	$(document).ready(function(){
		
	$('#user_form').on('submit', function(){
			event.preventDefault();
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var username = $('#username').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();
			var gender = $('#gender').val();
			var region = $('#region').val();
			var about = $('#about').val(); 
			var extension = $('#avatar').val().split('.').pop().toLowerCase();
			if(extension != '')
			{
				if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
				{
					$('#avatar').val('');
					alert('Invalid image file');
					return false;
				}
			}
			if(firstname != '' && lastname != '' && username != '' && password != '' && gender != '' && region != '' && about != '')
			{
				$.ajax({
					url: "action.php",
					method:"POST",
					data:new FormData(this),
					contentType:false,
					processData:false,
					success:function(data)
					{
						$('#pop_message').text(data);
						$('#bModal').modal('show');
						$('#user_form')[0].reset();
					}
				})
			}else{
				$('#pop_message').html('<b style="color:red;">ALL FIELDS REQUIRED</b>');
				$('#bModal').modal('show');
			}
		
	});
		
	});
</script>
</html>
