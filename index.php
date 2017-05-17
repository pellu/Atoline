<?php
session_start();
$pagename="index";
include('header.php');
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<h1 class="breadcrumb" style="font-size: 
		"><a href="#myModal" style="font-size: 20px;" role="button" class="" data-toggle="modal">Chat Support</a>
	</h1>
</section>


<!-- Button HTML (to Trigger Modal) -->


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="box box-primary direct-chat direct-chat-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Direct Chat</h3>

						<div class="box-tools pull-right">
							<span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
								<i class="fa fa-comments"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<!-- Conversations are loaded here -->
							<div class="direct-chat-messages">
								<!-- Message. Default to the left -->
								<div class="direct-chat-msg">
									<div class="direct-chat-info clearfix">
										<span class="direct-chat-name pull-left">Alexander Pierce</span>
										<span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
									</div>
									<!-- /.direct-chat-info -->
									<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
									<div class="direct-chat-text">
										Is this template really for free? That's unbelievable!
									</div>
									<!-- /.direct-chat-text -->
								</div>
								<!-- /.direct-chat-msg -->

								<!-- Message to the right -->
								<div class="direct-chat-msg right">
									<div class="direct-chat-info clearfix">
										<span class="direct-chat-name pull-right">Magalie Bullock</span>
										<span class="direct-chat-timestamp pull-left">17 Mai 2:05 pm</span>
									</div>
									<!-- /.direct-chat-info -->
									<img class="direct-chat-img" src="img/moi.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
									<div class="direct-chat-text">
										You better believe it!
									</div>
									<!-- /.direct-chat-text -->
								</div>
								<!-- /.direct-chat-msg -->
							</div>
							<!--/.direct-chat-messages-->

							<!-- Contacts are loaded here -->
							<div class="direct-chat-contacts">
								<ul class="contacts-list">
									<li>
										<a href="#">
											<img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

											<div class="contacts-list-info">
												<span class="contacts-list-name">
													Alexander Pierce
													<small class="contacts-list-date pull-right">17/05/2017</small>
												</span>
												<span class="contacts-list-msg">How have you been? I was...</span>
											</div>
											<!-- /.contacts-list-info -->
										</a>
									</li>
									<!-- End Contact Item -->
								</ul>
								<!-- /.contatcts-list -->
							</div>
							<!-- /.direct-chat-pane -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<form action="#" method="post">
								<div class="input-group">
									<input type="text" name="message" placeholder="Type Message ..." class="form-control">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-primary btn-flat">Send</button>
									</span>
								</div>
							</form>
						</div>
						<!-- /.box-footer-->
					</div>
			</div>
		</div>
	</div>
</div>
<!-- Video / Generic Modal -->
<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<!-- content dynamically inserted -->
			</div>
		</div>
	</div>
</div>





<section class="content">
	<!-- Main row -->
	<div class="row">
		<!-- Left col -->
		<section class="col-lg-7 connectedSortable">
			<!-- Custom tabs (Charts with tabs)-->
			<div class="nav-tabs-custom">
				<!-- Tabs within a box -->
				<ul class="nav nav-tabs pull-right">
					<li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
					<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
					<li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
				</ul>
				<div class="tab-content no-padding">
					<!-- Morris chart - Sales -->
					<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
					<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
				</div>
			</div>
			<!-- /.nav-tabs-custom -->
			<!-- Calendar -->
			<div class="box box-solid bg-green-gradient">
				<div class="box-header">
					<i class="fa fa-calendar"></i>

					<h3 class="box-title">Calendar</h3>
					<!-- tools box -->
					<div class="pull-right box-tools">
						<!-- button with a dropdown -->
						<div class="btn-group">
							<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bars"></i></button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Add new event</a></li>
									<li><a href="#">Clear events</a></li>
									<li class="divider"></li>
									<li><a href="#">View calendar</a></li>
								</ul>
							</div>
							<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
							</button>
						</div>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<!--The calendar -->
						<div id="calendar" style="width: 100%"></div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-black">
						<div class="row">
							<div class="col-sm-6">
								<!-- Progress bars -->
								<div class="clearfix">
									<span class="pull-left">Task #1</span>
									<small class="pull-right">90%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 90%;">

									</div>
								</div>

								<div class="clearfix">
									<span class="pull-left">Task #2</span>
									<small class="pull-right">70%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 70%;">

									</div>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
								<div class="clearfix">
									<span class="pull-left">Task #3</span>
									<small class="pull-right">60%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 60%;">

									</div>
								</div>

								<div class="clearfix">
									<span class="pull-left">Task #4</span>
									<small class="pull-right">40%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 40%;">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				</section>
				<!-- /.Left col -->
				<!-- right col (We are only adding the ID to make the widgets sortable)-->
				<section class="col-lg-5 connectedSortable">

					<!-- Map box -->
					<div class="box box-solid bg-light-blue-gradient">
						<div class="box-header">
							<!-- tools box -->
							<div class="pull-right box-tools">
								<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
									<i class="fa fa-calendar"></i></button>
									<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
										<i class="fa fa-minus"></i></button>
									</div>
									<!-- /. tools -->

									<i class="fa fa-map-marker"></i>

									<h3 class="box-title">
										Visitors
									</h3>
								</div>
								<div class="box-body">
									<div id="world-map" style="height: 250px; width: 100%;"></div>
								</div>
								<!-- /.box-body-->
								<div class="box-footer no-border">
									<div class="row">
										<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
											<div id="sparkline-1"></div>
											<div class="knob-label">Visitors</div>
										</div>
										<!-- ./col -->
										<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
											<div id="sparkline-2"></div>
											<div class="knob-label">Online</div>
										</div>
										<!-- ./col -->
										<div class="col-xs-4 text-center">
											<div id="sparkline-3"></div>
											<div class="knob-label">Exists</div>
										</div>
										<!-- ./col -->
									</div>
									<!-- /.row -->
								</div>
							</div>
							<!-- /.box -->

							<!-- solid sales graph -->
							<div class="box box-solid bg-teal-gradient">
								<div class="box-header">
									<i class="fa fa-th"></i>

									<h3 class="box-title">Sales Graph</h3>

									<div class="box-tools pull-right">
										<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
										<button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
										</button>
									</div>
								</div>
								<div class="box-body border-radius-none">
									<div class="chart" id="line-chart" style="height: 250px;">

									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer no-border">
									<div class="row">
										<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
											<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

											<div class="knob-label">Mail-Orders
											</div>
										</div>
										<!-- ./col -->
										<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
											<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

											<div class="knob-label">Online
											</div>
										</div>
										<!-- ./col -->
										<div class="col-xs-4 text-center">
											<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

											<div class="knob-label">In-Store
											</div>
										</div>
										<!-- ./col -->
									</div>
									<!-- /.row -->
								</div>
								<!-- /.box-footer -->
							</div>
							<!-- /.box -->
						</section>
					</div>
				</section>
			</div>
			<?php include('footer.php'); ?>