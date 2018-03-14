<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#"><?php echo $wh->wh_name ?></a>
							</li>


						</ul><!-- /.breadcrumb -->


					</div>
<div class="page-header">
							<h1>
								FAQ
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php if ($a_add==null): ?>

									<?php else: ?>

									<button data-toggle="modal" data-target="#addusers"  class="btn btn-app btn-blue btn-xs"><i class="ace-icon glyphicon-plus"></i>
									</button>
									<?php endif;?>
								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
	<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="tabbable">
									<table id="users" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="">
													No
												</th>



<th class="hidden-480"><i class="ace-icon fa fa-barcode hidden-480"></i>User Nip</th>


												<th>
<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
						User Name
												</th>
												<th>Group</th>
												<th>Ops</th>
											</tr>
										</thead>

										<tbody>

										</tbody>
									</table>

															</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<div class="modal" id="addusers" class="modal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="blue bigger">Add Users</h4>
						</div>



						<div class="modal-body">
							<div class="row">
								<div class="col-xs-12 col-sm-5">
									<div class="space"></div>


								</div>
								<form class="form-horizontal" role="form" action="" method="post">




										<div class="space-4"></div>


										<div class="space-4"></div>
										<div class="form-group">

											<div class="col-sm-9">
							<input type="hidden" class="col-xs-10 col-sm-5" required="true" >

											</div>
										</div>
										<div class="space-4"></div>
										<div class="form-group">

											<div class="col-sm-9">
							<input type="hidden" class="col-xs-10 col-sm-5" required="true" name="id">

											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Group Name </label>

											<div class="col-sm-9">
										<input type="text" class="col-xs-10 col-sm-5" required="true" name="nama" id="group_name">

											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Group Desc </label>

											<div class="col-sm-9">
										<textarea class="col-xs-10 col-sm-5" required="true" name="desc"></textarea>

											</div>
										</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="save">
												<i class="ace-icon fa fa-floppy-o bigger-120"></i>
												Save
											</button>



										</div>
									</div>
								</div>

								</form>

							</div>

						</div>
					</div>
				</div>
