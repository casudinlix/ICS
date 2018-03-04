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

								<small>

									<button data-toggle="modal" data-target="#addgroup"  class="btn btn-app btn-blue btn-xs"><i class="ace-icon glyphicon-plus"></i>
</button>
								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
	<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>

<div class="tabbable">
	<table id="usergroup" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th class="">
					No
				</th>



					<th class="hidden-480"><i class="ace-icon fa fa-barcode hidden-480"></i>Group Name</th>


				<th>
					<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
					Gropu Desc
				</th>
				<th>Ops</th>
			</tr>
		</thead>

		<tbody>

		</tbody>
	</table>

							</div>
							<!-- PAGE CONTENT ENDS -->
							<!-- /.col -->
						</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


			<div class="modal" id="editgroup" class="modal" tabindex="-1">
	      <div class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal">&times;</button>
	            <h4 class="blue bigger">Update User Group</h4>
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
	            <input type="hidden" class="col-xs-10 col-sm-5" required="true" name="id" id="id">

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
										<textarea class="col-xs-10 col-sm-5" required="true" name="desc" id="group_desc"></textarea>

											</div>
										</div>

	                <div class="clearfix form-actions">
	                  <div class="col-md-offset-3 col-md-9">
	                    <button class="btn btn-info" type="submit" name="update">
	                      <i class="ace-icon fa fa-check bigger-110"></i>
	                      Update
	                    </button>


	                  </div>
	                </div>
	              </div>

	              </form>

	            </div>

	          </div>
	        </div>
	      </div>


				<div class="modal" id="addgroup" class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="blue bigger">Add Group</h4>
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
