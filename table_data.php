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
				 <div class="row" >

                    <div class="col-md-12" id="pagination_data">  
					
                    </div>
                </div> 
            </div>

        </div>   
    </div>
</body>
<script>
 $(document).ready(function(){
	load_data();
	function load_data(page)
	{
		$.ajax({
			url:"pagination.php",
			method:"POST",
			data:{page:page},
			success:function(data){
				$('#pagination_data').html(data);
			}
		})
	}
	// CLICKABLE PAGINATION LINKS
	$(document).on('click', '.pagination_link', function(){
		var page = $(this).attr("id");
		load_data(page);
	});
 
 });
</script>
</html>
