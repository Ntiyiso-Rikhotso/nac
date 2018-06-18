<!DOCTYPE html>
<html>
   <head>
      <title>NAC Admin | <?php echo $page_title; ?> </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
      <!-- Bootstrap -->
      <link href="<?php echo base_url('assets/backend/'); ?>bs3/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url('assets/backend/'); ?>css/style-responsive.css" rel="stylesheet">
      <link href="<?php echo base_url('assets/backend/'); ?>css/atom-style.css" rel="stylesheet">
      <link href="<?php echo base_url('assets/backend/'); ?>css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url('assets/backend/'); ?>plugins/kalendar/kalendar.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      <link href="<?php echo base_url('assets/backend/'); ?>css/animate.css" rel="stylesheet">
      <link href="<?php echo base_url('assets/backend/'); ?>plugins/scroll/nanoscroller.css" rel="stylesheet">
	  <link href="<?php echo base_url('assets/backend/'); ?>plugins/form-wizard/styles/smart_wizard.css" rel="stylesheet">
	  <link href="<?php echo base_url('assets/backend/'); ?>plugins/dropzone/css/dropzone.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!--layout-container start-->
      <div id="layout-container">
         <!--Left navbar start-->
         <div id="nav">
            <!--logo start-->
            <div class="profile">
               <div class="logo"><a href="#"><img width="100%" height="45px" src="<?php echo base_url('assets/frontend/aircraft/');?>images/logo/logo.png" alt=""></a></div>
            </div>
            <!--logo end--> 
            <!--navigation start-->
            <ul class="navigation">
               <li><a class="active" href="<?php echo base_url('admin/'); ?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
               <li class="sub">
                  <a href="#"><i class="fa fa-money"></i><span>Sales</span></a>
                  <ul class="navigation-sub">
                     <li><a href="<?php echo base_url('admin/create_item/'); ?>"><i class="fa fa-plane"></i><span>Create new</span></a></li>
                     <li><a href="<?php echo base_url('admin/aircrafts/'); ?>"><i class="fa fa-list"></i><span>List aircrafts</span></a></li>
                  </ul>
               </li>
               <li class="sub">
                  <a href="#"><i class="fa fa-list"></i><span>Aircraft</span></a>
                  <ul class="navigation-sub">
                     <li><a href="<?php echo base_url('admin/service/charter'); ?>"><i class="fa fa-plane"></i><span>Charter</span></a></li>
                     <li><a href="<?php echo base_url('admin/service/sales'); ?>"><i class="fa fa-money"></i><span>Sales</span></a></li>
                  </ul>
               </li>
               <li class="sub">
                  <a href="#"><i class="fa fa-envilope"></i><span>News</span></a>
                  <ul class="navigation-sub">
                     <li><a href="<?php echo base_url('admin/service/charter'); ?>"><i class="fa fa-plane"></i><span>Create Article</span></a></li>
                     <li><a href="<?php echo base_url('admin/service/sales'); ?>"><i class="fa fa-money"></i><span>List articles</span></a></li>
                  </ul>
               </li>
            </ul>
            <!--navigation end--> 
         </div>
         <!--Left navbar end--> 
         <!--main start-->
         <div id="main">
            <div class="head-title">
               <div class="menu-switch"><i class="fa fa-bars"></i></div>
               <!--row start-->
               <div class="row">
                  <!--col-md-12 start-->
                  <div class="col-md-12">
                     <!--profile dropdown start-->
                     <ul class="user-info pull-right fadeInLeftBig animated">
                        <li class="hidden-xs">
                           <input type="text" placeholder=" Search" class="form-control page-search">
                        </li>
                        <li class="profile-info dropdown">
                           <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <img class="img-circle" alt="" src="images/avatar.jpg">Scott henderson </a>
                           <ul class="dropdown-menu">
                              <li class="caret"></li>
                              <li> <a href="edit-profile.html"> <i class="fa fa-user"></i> Edit Profile </a> </li>
                              <li> <a href="mail.html"> <i class="fa fa-inbox"></i> Inbox </a> </li>
                              <li> <a href="fullcalendar.html"> <i class="fa fa-calendar"></i> Calendar </a> </li>
                              <li> <a href="login.html"> <i class="fa fa-clipboard"></i> Log Out </a> </li>
                           </ul>
                        </li>
                        <li class="hidden-xs"><a class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch" href="javascript:;"><i class="fa fa-bars"></i></a></li>
                     </ul>
                     <!--profile dropdown end--> 
                     <!--top nav start-->
                     <ul class="nav top-menu hidden-xs notify-row fadeInRightBig animated">
                        <!--task start-->
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-tasks"></i> <span class="badge bg-success">6</span> </a>
                           <ul class="dropdown-menu extended tasks-bar">
                              <div class="notify-arrow notify-arrow-red"></div>
                              <li>
                                 <p class="red">You have 4 pending tasks</p>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="task-info">
                                       <div class="desc">Dashboard v1.3</div>
                                       <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                       <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">40% Complete</span> </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="task-info">
                                       <div class="desc">Database Update</div>
                                       <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                       <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning"> <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="task-info">
                                       <div class="desc">Iphone Development</div>
                                       <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                       <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info"> <span class="sr-only">87% Complete</span> </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="task-info">
                                       <div class="desc">Mobile App</div>
                                       <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                       <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">33% Complete (danger)</span> </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="task-info">
                                       <div class="desc">Dashboard v1.3</div>
                                       <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                       <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar"> <span class="sr-only">45% Complete</span> </div>
                                    </div>
                                 </a>
                              </li>
                              <li class="external"> <a href="#">See All Tasks</a> </li>
                           </ul>
                        </li>
                        <!--task end--> 
                        <!--message start-->
                        <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="badge bg-important">5</span> </a>
                           <ul class="dropdown-menu extended inbox">
                              <div class="notify-arrow notify-arrow-red"></div>
                              <li>
                                 <p class="red">You have 7 new messages</p>
                              </li>
                              <li> <a href="#"> <span class="photo"><img src="images/avatar2.jpg" alt="avatar"></span> <span class="subject"> <span class="from">Jonathan Smith</span> <span class="time">Just now</span> </span> <span class="message"> consectetur adipiscing elit </span> </a> </li>
                              <li> <a href="#"> <span class="photo"><img src="images/avatar2.jpg" alt="avatar"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">20 mins</span> </span> <span class="message">consectetur adipiscing elit </span> </a> </li>
                              <li> <a href="#"> <span class="photo"><img src="images/avatar2.jpg" alt="avatar"></span> <span class="subject"> <span class="from">Jonathan Smith</span> <span class="time">5 hrs</span> </span> <span class="message"> This is awesome dashboard. </span> </a> </li>
                              <li> <a href="#"> <span class="photo"><img src="images/avatar2.jpg" alt="avatar"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">Just now</span> </span> <span class="message"> consectetur adipiscing elit </span> </a> </li>
                              <li class="external"> <a href="#">See all messages</a> </li>
                           </ul>
                        </li>
                        <!--message end--> 
                        <!--notification start-->
                        <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="badge bg-warning">7</span> </a>
                           <ul class="dropdown-menu extended notification">
                              <div class="notify-arrow notify-arrow-red"></div>
                              <li>
                                 <p class="red">You have 3 new notifications</p>
                              </li>
                              <li> <a href="#"> <span class="label label-danger"><i class="fa fa-bolt"></i></span> Server #3 overloaded. <span class="small italic">34 mins</span> </a> </li>
                              <li> <a href="#"> <span class="label label-warning"><i class="fa fa-bell"></i></span> Server #10 not respoding. <span class="small italic">1 Hours</span> </a> </li>
                              <li> <a href="#"> <span class="label label-danger"><i class="fa fa-bolt"></i></span> Database overloaded 24%. <span class="small italic">4 hrs</span> </a> </li>
                              <li> <a href="#"> <span class="label label-success"><i class="fa fa-plus"></i></span> New user registered. <span class="small italic">Just now</span> </a> </li>
                              <li> <a href="#"> <span class="label label-info"><i class="fa fa-bullhorn"></i></span> Application error. <span class="small italic">10 mins</span> </a> </li>
                              <li class="external"> <a href="#">See all notifications</a> </li>
                           </ul>
                        </li>
                        <!--notification end-->
                     </ul>
                     <!--top nav end--> 
                  </div>
                  <!--col-md-12 end--> 
               </div>
               <!--row end--> 
            </div>
            <!--margin-container start-->
            <div class="margin-container">
               <!--scrollable wrapper start-->
               <div class="scrollable wrapper">
			   <div class="row">
				  <div class="col-md-12">
					<div class="page-heading">
					  <h1><?php echo $page_title; ?></h1>
					</div>
				  </div>
				</div>
                  <!--row start-->
                  
					<?php include  $page_name . '.php';?>
                  
                  <!--row end--> 
               </div>
               <!--scrollable wrapper end--> 
            </div>
            <!--margin-container end--> 
         </div>
         <!--main end-->
         <!-- sidebar chats -->
         <nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
            <div class="header">
               <input type="text" class="form-control chat-search" placeholder=" Search">
            </div>
            <div href="#" class="sub-header">
               <div class="icon"><i class="fa fa-user"></i></div>
               <p>Online (4)</p>
            </div>
            <div class="content">
               <p class="title">Family</p>
               <ul class="nav nav-pills nav-stacked contacts">
                  <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
                  <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
                  <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
                  <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
               </ul>
               <p class="title">Friends</p>
               <ul class="nav nav-pills nav-stacked contacts">
                  <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
                  <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
               </ul>
               <p class="title">Work</p>
               <ul class="nav nav-pills nav-stacked contacts">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
               </ul>
            </div>
            <div id="chat-box">
               <div class="header">
                  <span>Richard Avedon</span>
                  <a class="close"><i class="fa fa-times"></i></a>
               </div>
               <div class="messages nano nscroller has-scrollbar">
                  <div class="content" tabindex="0" style="right: -17px;">
                     <ul class="conversation">
                        <li class="odd">
                           <p>Hi John, how are you?</p>
                        </li>
                        <li class="text-right">
                           <p>Hello I am also fine</p>
                        </li>
                        <li class="odd">
                           <p>Tell me what about you?</p>
                        </li>
                        <li class="text-right">
                           <p>Sorry, I'm late... see you</p>
                        </li>
                        <li class="odd unread">
                           <p>OK, call me later...</p>
                        </li>
                     </ul>
                  </div>
                  <div class="pane" style="display: none;">
                     <div class="slider" style="height: 20px; top: 0px;"></div>
                  </div>
               </div>
               <div class="chat-input">
                  <div class="input-group">
                     <input type="text" placeholder="Enter a message..." class="form-control">
                     <span class="input-group-btn">
                     <button class="btn btn-danger" type="button">Send</button>
                     </span>
                  </div>
               </div>
            </div>
         </nav>
         <!-- /sidebar chats -->   
      </div>
		<!--layout-container end--> 
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/jquery-1.10.2.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/jquery-ui-1.9.1.js"></script> 
		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="<?php echo base_url('assets/backend/'); ?>bs3/js/bootstrap.min.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/smooth-sliding-menu.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/console-numbering.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/to-do-admin.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/jquery.sparkline.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/sparkline-chart.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/select-checkbox.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/jPushMenu.js"></script> 
		<script src="<?php echo base_url('assets/backend/'); ?>js/side-chats.js"></script> 
    <script src="<?php echo base_url('assets/backend/'); ?>plugins/scroll/jquery.nanoscroller.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/aircraft/css/jquery.Jcrop.min.css">
    <script src="<?php echo base_url(); ?>assets/frontend/aircraft/js/jquery.Jcrop.min.js"></script>
    
    <script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Example 1 - Simple case
			$("#jcrop-1").Jcrop({}, function()
			{
				this.setSelect([580, 310, 320, 140]);
			});
			
			// Example 2 - Coordinates Fetch
			$("#jcrop-2").Jcrop({
				onSelect: showCoords,
				onChange: showCoords
			});
			
			function showCoords(c)
			{
				$('#jc2-x1').val(c.x);
				$('#jc2-y1').val(c.y);
				$('#jc2-x2').val(c.x2);
				$('#jc2-y2').val(c.y2);
				$('#jc2-w').val(c.w);
				$('#jc2-h').val(c.h);
			}
			
			
			// Example 3 - crop the thumbnail
			var img_3_w = $("#jcrop-3").width(),
				img_3_h = $("#jcrop-3").height();
			
			$('#jcrop-3').Jcrop({
				onChange: showPreview,
				onSelect: showPreview,
				aspectRatio: 1
			}, function()
			{
				this.setSelect([200, 200, 120, 40]);
			});
			function showPreview(coords)
			{
				var rx = 150 / coords.w;
				var ry = 150 / coords.h;
			
				$('#preview').css({
					width: Math.round(rx * img_3_w) + 'px',
					height: Math.round(ry * img_3_h) + 'px',
					marginLeft: '-' + Math.round(rx * coords.x) + 'px',
					marginTop: '-' + Math.round(ry * coords.y) + 'px'
				});
			}
			
			// Example 4 - Live Crop
			$('#jcrop-4').Jcrop({
		      //aspectRatio: 1,
		      onSelect: updateCoords,
		      boxWidth: 1080,
		      boxHeight: 450
		    });
		    
			function updateCoords(c)
			{
				$('#x').val(c.x);
				$('#y').val(c.y);
				$('#w').val(c.w);
				$('#h').val(c.h);
			};
		});
		</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->  
		
		<script src="<?php echo base_url('assets/backend/'); ?>plugins/dropzone/js/dropzone.js"></script>
		<!--<script src="<?php echo base_url('assets/backend/'); ?>js/scripts.js"></script>-->	

   </body>
</html>