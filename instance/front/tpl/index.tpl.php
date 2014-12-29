<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Endless Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php print _MEDIA_URL ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="<?php print _MEDIA_URL ?>css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Color box -->
	<link href="<?php print _MEDIA_URL ?>css/colorbox/colorbox.css" rel="stylesheet">

	<!-- Morris -->
	<link href="<?php print _MEDIA_URL ?>css/morris.css" rel="stylesheet"/>	
	
	<!-- Endless -->
	<link href="<?php print _MEDIA_URL ?>css/endless.css" rel="stylesheet">
	<link href="<?php print _MEDIA_URL ?>css/endless-skin.css" rel="stylesheet">
	
  </head>

  <body class="overflow-hidden">
	<!-- Overlay Div -->
	<div id="">
		<div class="overlay-inner">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG">
				</div>
				<div id="followingBallsG_2" class="followingBallsG">
				</div>
				<div id="followingBallsG_3" class="followingBallsG">
				</div>
				<div id="followingBallsG_4" class="followingBallsG">
				</div>
			</div>
		</div>
	</div>
	
	<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Skin Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
		</div>
	</div><!-- /theme-setting -->

	<div id="wrapper" class="preload">
		<div id="top-nav" class="skin-2 fixed">
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav-notification clearfix">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="notification-label">7</span>
					</a>
					<ul class="dropdown-menu message dropdown-1">
						<li><a>You have 4 new unread messages</a></li>					  
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Jane Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Bill Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Baby Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
								</div>
							</a>	
						</li>
						<li><a href="#">View all messages</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks fa-lg"></i>
						<span class="notification-label">12</span>
					</a>
					<ul class="dropdown-menu task dropdown-2">
						<li><a href="#">You have 4 tasks to complete</a></li>					  
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Bug Fixes</span>
									<small class="pull-right text-muted">78%</small>
								</div>
								<div class="progress">
									<div class="progress-bar" style="width:78%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Software Updating</span>
									<small class="pull-right text-muted">54%</small>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" style="width:54%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Database Migration</span>
									<small class="pull-right text-muted">23%</small>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" style="width:23%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<small class="pull-right text-muted">92%</small>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger " style="width:92%"></div>
								</div>
							</a>
						</li>
						<li><a href="#">View all tasks</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-lg"></i>
						<span class="notification-label">5</span>
					</a>
					<ul class="dropdown-menu notification dropdown-3">
						<li><a href="#">You have 5 new notifications</a></li>					  
						<li>
							<a href="#">
								<span class="notification-icon bg-warning">
									<i class="fa fa-warning"></i>
								</span>
								<span class="m-left-xs">Server #2 not responding.</span>
								<span class="time text-muted">Just now</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">2m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-danger">
									<i class="fa fa-bolt"></i>
								</span>
								<span class="m-left-xs">Application error.</span>
								<span class="time text-muted">5m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-usd"></i>
								</span>
								<span class="m-left-xs">2 items sold.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li><a href="#">View all notifications</a></li>					  
					</ul>
				</li>
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<strong>John Doe</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="grey">John_Doe@email.com</p> 
								</div>
							</a>
						</li>
						<li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
						<li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
						<li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="login.html" class="main-link"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav-->
		
		<aside class="skin-2 fixed">
			<div class="brand">
				<span>Endless</span>
				<span class="text-toggle"> Admin</span>
			</div><!-- /brand -->					
			<div class="sidebar-inner">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="btn btn-sm pull-right" href="login.html">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					<img src="img/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong>John Doe</strong><span class="badge badge-danger m-left-xs">4</span>
						<ul class="list-inline">
							<li><a href="profile.html">Profile</a></li>
							<li><a href="inbox.html" class="no-margin">Inbox</a></li>
						</ul>
					</div>
				</div><!-- /user-block -->
				<div class="search-block">
					<div class="input-group">
						<input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /search-block -->
				<div class="main-menu">
					<ul>
						<li class="active">
							<a href="index.html">
								<span class="menu-icon">
									<i class="fa fa-desktop fa-lg"></i> 
								</span>
								<span class="text">
									Dashboard
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="menu-icon">
									<i class="fa fa-tag fa-lg"></i> 
								</span>
								<span class="text">
									Component
								</span>
								<span class="badge pull-right">9</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="ui_element.html">
										UI Features
									</a>
								</li>
								<li>
									<a href="button.html">
										Button & Icons
									</a>
								</li>
								<li>
									<a href="tab.html">
										Tab
									</a>
								</li>
								<li>
									<a href="nestable_list.html">
										Nestable List
									</a>
								</li>
								<li>
									<a href="calendar.html">
										Calendar
									</a>
								</li>
								<li>
									<a href="table.html">
										Table
									</a>
								</li>
								<li>
									<a href="widget.html">
										Widget
									</a>
								</li>
								<li>
									<a href="form_element.html">
										Form Element
									</a>
								</li>
								<li>
									<a href="form_wizard.html">
										Form Wizard
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-file-text fa-lg"></i> 
								</span>
								<span class="text">
									Page
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="login.html">
										Sign in
									</a>
								</li>
								<li>
									<a href="register.html">
										Sign up
									</a>
								</li>
								<li>
									<a href="profile.html">
										Profile
									</a>
								</li>
								<li>
									<a href="blog.html">
										Blog
									</a>
								</li>
								<li>
									<a href="single_post.html">
										Single Post
									</a>
								</li>
								<li>
									<a href="landing.html">
										Landing
									</a>
								</li>
								<li>
									<a href="pricing.html">
										Priciing table
									</a>
								</li>
								<li>
									<a href="invoice.html">
										Invoice
									</a>
								</li>
								<li>
									<a href="error404.html">
										Error 404
									</a>
								</li>
								<li>
									<a href="blank.html">
										Blank
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="timeline.html">
								<span class="menu-icon">
									<i class="fa fa-clock-o fa-lg"></i> 
								</span>
								<span class="text">
									Timeline
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="gallery.html">
								<span class="menu-icon">
									<i class="fa fa-picture-o fa-lg"></i> 
								</span>
								<span class="text">
									Gallery
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="inbox.html">
								<span class="menu-icon">
									<i class="fa fa-envelope fa-lg"></i> 
								</span>
								<span class="text">
									Inbox
								</span>
								<span class="badge badge-danger pull-right">4</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="contact.html">
								<span class="menu-icon">
									<i class="fa fa-phone fa-lg"></i> 
								</span>
								<span class="text">
									Contact
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
					</ul>
					
					<div class="alert alert-info">
						Welcome to Endless Admin. Do not forget to check all my pages. 
					</div>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside>

		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
					 <li class="active">Dashboard</li>	 
				</ul>
			</div><!-- /breadcrumb-->
			<div class="main-header clearfix">
				<div class="page-title">
					<h3 class="no-margin">Dashboard</h3>
					<span>Welcome back Mr.John Doe</span>
				</div><!-- /page-title -->
				
				<ul class="page-stats">
			    	<li>
			    		<div class="value">
			    			<span>New visits</span>
			    			<h4>4256</h4>
			    		</div>
						<span id="visits" class="sparkline"></span>
			    	</li>
			    	<li>
			    		<div class="value">
			    			<span>My balance</span>
			    			<h4>$32153</h4>
			    		</div>
			    		<span id="balances" class="sparkline"></span>
			    	</li>
			    </ul><!-- /page-stats -->
			</div><!-- /main-header -->
			
			<div class="grey-container shortcut-wrapper">
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-bar-chart-o"></i>
					</span>
					<span class="text">Statistic</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-envelope-o"></i>
						<span class="shortcut-alert">
							5
						</span>	
					</span>
					<span class="text">Messages</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-user"></i>
					</span>
					<span class="text">New Users</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-globe"></i>
						<span class="shortcut-alert">
							7
						</span>	
					</span>
					<span class="text">Notification</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-list"></i>
					</span>
					<span class="text">Activity</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-cog"></i></span>
					<span class="text">Setting</span>
				</a>
			</div><!-- /grey-container -->
			
			<div class="padding-md">
				<div class="row">
					<div class="col-lg-8">
						<div class="panel panel-default">
							<div class="panel-body p-top-sm">
								<div class="inline-block m-top-xs">
									<span class="badge badge-danger">4321</span><strong class="m-left-xs m-right-sm"> Visits</strong>
								</div>
								<div class="inline-block m-top-xs">
									<span class="badge badge-success">5190</span><strong class="m-left-xs m-right-sm"> Sales</strong>
								</div>
								<div class="inline-block m-top-xs">
									<span class="badge badge-info">8123</span><strong class="m-left-xs m-right-sm"> Orders</strong>
								</div>
								<div class="inline-block m-top-xs">
									<span class="badge badge-warning">2351</span><strong class="m-left-xs m-right-sm"> Users</strong>
								</div>
							</div>
						</div><!-- /panel -->
									
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-bar-chart-o fa-lg"></i> Website Traffic
							</div>
							<div class="panel-body">
								<div id="overviewChart" style="height: 250px;"></div>
							</div>
						</div><!-- /panel -->
								
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat1 bg-success">
									<div class="panel-body">
										<div class="value">99</div>
										<div class="title">
											<i class="fa fa-usd"></i>
											<span class="m-left-xs">Sales</span>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat2 bg-warning">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-bar-chart-o"></i>
										</span>
										<div class="pull-right text-right">
											<div class="value">58</div>
											<div class="title">New Visits</div>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat2 bg-info">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-envelope"></i>
										</span>
										<div class="pull-right text-right">
											<div class="value">41</div>
											<div class="title">Emails</div>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel panel-default">
							<div class="panel-heading">
								Work Progress
								<span class="badge badge-info pull-right">	
									4 left
								</span>
							</div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Task</th>
										<th>Progress</th>
										<th></th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bug Fixes</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</td>
										<td>45%</td>
										<td><span class="badge badge-info">2hr</span></td>
									</tr>
									<tr>
										<td>Mobile Development</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-success" style="width: 61%">
													<span class="sr-only">61% Complete</span>
												</div>
											</div>
										</td>
										<td>61%</td>
										<td><span class="badge badge-info">1hr</span></td>
									</tr>
									<tr>
										<td>Unit Testing</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-danger" style="width: 97%">
													<span class="sr-only">97% Complete</span>
												</div>
											</div>
										</td>
										<td>97%</td>
										<td><span class="badge badge-info">5m</span></td>
									</tr>
									<tr>
										<td>New frontend layout</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-warning" style="width: 18%">
													<span class="sr-only">18% Complete</span>
												</div>
											</div>
										</td>
										<td>18%</td>
										<td><span class="badge badge-info">12hr</span></td>
									</tr>
								</tbody>
							</table>
						</div><!-- /panel -->
								
						<div class="section-header">
							<hr class="left visible-lg">
							<span>
								Timeline
							</span>
							<hr class="right visible-lg">
						</div>
								
						<div class="timeline-wrapper">
							<div class="timeline-start">
								<div class="panel">
									<div class="panel-body">
										<a href="#" class="pull-left avatar"> 
											<img src="img/user.jpg" class="img-circle" alt="User Avatar"> 
										</a>
										<div class="pull-left m-left-sm">
											<strong class="font-14">
												John Doe
											</strong><br/>
											<small class="text-muted">John_Doe@email.com</small>
											<div class="seperator"></div>
											<a href="profile.html" class="btn btn-xs btn-primary">View Profile</a>
											<a href="#" class="btn btn-xs btn-success">Chat</a>
										</div>
									</div>
								</div><!-- /panel -->
							</div>
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-grey">
										<i class="fa fa-file-text-o"></i>
									</div>
									<div class="time">
										06:50 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										John Doe created a new article
										<span class="pull-right">
											<i class="fa fa-clock-o"></i> 5m ago
										</span>
									</div>
									<div class="panel-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.
										</p>
										<a class="btn btn-xs btn-default">Read more</a>
										<a class="btn btn-xs btn-default"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-grey">
										<i class="fa fa-picture-o"></i>
									</div>
									<div class="time">
										07:15 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										John Doe Added photos to the album <a href="#">NewPhoto</a>
									</div>
									<div class="panel-body">
										<a class="timeline-img" href="img/gallery2.jpg">
											<img src="img/gallery2.jpg" alt="Timeline Photo">
										</a>
										<a class="timeline-img" href="img/gallery7.jpg">
											<img src="img/gallery7.jpg" alt="Timeline Photo">
										</a>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-warning">
										<i class="fa fa-briefcase"></i>
									</div>
									<div class="time">
										08:30 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										Meeting 
										<span class="label label-danger m-left-xs">IMPORTANT</span>
									</div>
									<div class="panel-body">
										<h4>My office</h4> 
										<span>08:30 Am</span>
										<div class="seperator"></div>
										<div class="seperator"></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-success">
										<i class="fa fa-comment"></i>
									</div>
									<div class="time">
										10:49 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										<span class="label label-success m-right-xs">NEW</span> John Doe comments on your post <a href="#">#1211</a>
									</div>
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus.</p>
										<div class="seperator"></div>
										<a class="btn btn-xs btn-info">Reply</a>
										<a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
									
							<div class="timeline-date">
								3 Oct 2013
							</div>
							
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-warning">
										<i class="fa fa-plane"></i>
									</div>
									<div class="time">
										3:05 Pm
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										Fly to <strong class="font-14">London</strong>
									</div>
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus.</p>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item clearfix">
								<div class="timeline-info">
									<div class="timeline-icon bg-grey">
										<i class="fa fa-pencil"></i>
									</div>
								</div>
							</div><!-- /timeline-item -->
						</div><!-- /timeline-wrapper-->
					</div><!-- /.col -->
					<div class="col-lg-4">
						<div class="panel bg-info">
							<div class="panel-body">
								<div id="lineChart" style="height: 150px;"></div>
								<div class="pull-right text-right">
									<strong class="font-14">Balance $3210</strong><br/>
									<span><i class="fa fa-shopping-cart"></i> Total Sales 867</span>
									<div class="seperator"></div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-4">
										Sales in June
										<strong class="font=14 block">$664</strong>
									</div><!-- /.col -->
									<div class="col-xs-4">
										Sales in July
										<strong class="font=14 block">$731</strong>
									</div><!-- /.col -->
									<div class="col-xs-4">
										Sales in August
										<strong class="font=14 block">$912</strong>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
								
						<div class="panel bg-success">
							<div class="panel-body">
								<div id="barChart" style="height: 150px;"></div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
										<h4 class="no-margin">Total Earnings</h4>
									</div><!-- /.col -->
									<div class="col-xs-6 text-right">
										<h4 class="no-margin">$17,531</h4>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
								
						<div class="panel bg-danger">
							<div class="panel-body">
								<h4>Database Migration</h4>
								<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
									<div class="progress-bar progress-bar-danger" style="width: 65%">
										<span class="sr-only">65% Complete</span>
									</div>
								</div>
								<strong class="pull-left m-top-xs">65% Complete</strong>
								<strong class="pull-right m-top-xs">1hr left</strong>
							</div>
						</div><!-- /panel -->
						<div class="panel panel-default">
							<div class="panel-heading">To Do List <span class="text-success m-left-xs"><i class="fa fa-check"></i></span></div>
							<ul class="list-group task-list">
								<li class="list-group-item selected">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish" checked>
										 <span class="custom-checkbox"></span>
									</label>
									SEO Optimisation
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Unit Testing
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Mobile Development 
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
									<span class="badge badge-success m-right-xs">3</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Database Migration
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									New Frontend Layout <span class="label label-warning m-left-xs">PENDING</span>
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Bug Fixes <span class="label label-danger m-left-xs">IMPORTANT</span>
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
							</ul><!-- /list-group -->
						</div><!-- /panel -->
								
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" class="pull-left avatar"> 
									<img src="img/user.jpg" class="img-circle" alt="User Avatar"> 
								</a>
								<div class="pull-left" style="margin-left:15px;">
									<strong class="font-16">John Doe</strong><br/>
									<span class="grey">John@email.com</span>
								</div>
							</div>
							<div class="list-group">
								<a class="list-group-item">
									<i class="fa fa-bar-chart-o fa-lg grey"></i>
									<span class="m-left-xs">Overview</span>
									<span class="badge badge-warning">3</span>
								</a>
								<a class="list-group-item">
									<i class="fa fa-shopping-cart fa-lg grey"></i>
									<span class="m-left-xs">Sales</span>
									<span class="badge badge-danger">14</span>
								</a>
								<a class="list-group-item">
									<i class="fa fa-envelope fa-lg"></i>
									<span class="m-left-xs">Inbox</span>
									<span class="badge badge-info">7</span>
								</a>
								<a class="list-group-item">
									<i class="fa fa-usd fa-lg"></i>	
									<span class="m-left-xs">Balance</span>
									<span class="badge">$3216</span>	
								</a>
							</div><!-- /list-group -->
						</div><!-- /panel -->
						<div class="panel panel-default">
							<div class="panel-body">
								<div id="donutChart" style="height: 250px;"></div>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													IN-STORE Sales
													<span class="badge badge-success pull-right">75%</span>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="panel-body">
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
											</div>
										</div>
									</div><!-- panel -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													DOWMLOAD Sales
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
											</div>
										</div>
									</div><!-- panel -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													MAIL-ORDER Sales 
													<span class="badge badge-danger pull-right"><i class="fa fa-arrow-down"></i> 3%</span>
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
											</div>
										</div>
									</div><!-- panel -->
								</div><!-- panel-group -->
							</div>
						</div><!-- /panel -->
						<div class="panel panel-default">	
							<div class="panel-heading">
								Feeds
								<ul class="panel-toolbar">
									<li>
										<a href="#"><i class="fa fa-refresh"></i></a>
									</li>
								</ul>
							</div>
									
							<ul class="list-group">
								<li class="list-group-item clearfix">
									<div class="activity-icon small">
										<i class="fa fa-camera"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>John Doe Add a new photo.</span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 2m ago</small>
									</div>
								</li>
								<li class="list-group-item clearfix">
									<div class="activity-icon bg-success small">
										<i class="fa fa-usd"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>2 items sold.</span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 30m ago</small>
									</div>	
								</li>
								<li class="list-group-item clearfix">
									<div class="activity-icon bg-info small">
										<i class="fa fa-comment"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>John Doe commented on <a href="#">This Article</a></span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 1hr ago</small>
									</div>
								</li>
								<li class="list-group-item clearfix">
									<div class="activity-icon bg-success small">
										<i class="fa fa-usd"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>3 items sold.</span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 2days ago</small>
									</div>	
								</li>
							</ul><!-- /list-group -->	
							<div class="panel-footer text-right">										
								<a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> View more</a>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
		<!-- Footer
		================================================== -->
		<footer>
			<div class="row">
				<div class="col-sm-6">
					<span class="footer-brand">
						<strong class="text-danger">Endless</strong> Admin
					</span>
					<p class="no-margin">
						&copy; 2013 <strong>Endless Admin</strong>. ALL Rights Reserved. 
					</p>
				</div><!-- /.col -->
			</div><!-- /.row-->
		</footer>
		
		
		<!--Modal-->
		<div class="modal fade" id="newFolder">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Create new folder</h4>
      				</div>
				    <div class="modal-body">
				        <form>
							<div class="form-group">
								<label for="folderName">Folder Name</label>
								<input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
							</div>
						</form>
				    </div>
				    <div class="modal-footer">
				        <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
						<a href="#" class="btn btn-danger btn-sm">Save changes</a>
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div><!-- /wrapper -->

	<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Jquery -->
	<script src="<?php print _MEDIA_URL ?>js/jquery-1.10.2.min.js"></script>

	<!-- Bootstrap -->
    <script src="<?php print _MEDIA_URL ?>bootstrap/js/bootstrap.js"></script>
   
	<!-- Morris -->
	<script src='<?php print _MEDIA_URL ?>js/rapheal.min.js'></script>	
	<script src='<?php print _MEDIA_URL ?>js/morris.min.js'></script>	
	
	<!-- Colorbox -->
	<script src='<?php print _MEDIA_URL ?>js/jquery.colorbox.min.js'></script>	

	<!-- Sparkline -->
	<script src='<?php print _MEDIA_URL ?>js/jquery.sparkline.min.js'></script>

	<!-- Cookie -->
	<script src='<?php print _MEDIA_URL ?>js/jquery.cookie.min.js'></script>
	
	<!-- Endless -->
	<script src="<?php print _MEDIA_URL ?>js/endless/endless_dashboard.js"></script>
	<script src="<?php print _MEDIA_URL ?>js/endless/endless.js"></script>
	
  </body>
</html>
