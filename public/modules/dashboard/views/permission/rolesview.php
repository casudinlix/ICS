<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">



						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">

						</div><!-- /.nav-search -->
					</div>
					<div class="page-header">
												<h1>
													List Roles <?php echo $user->username?></h1>
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														<a href="javascript:history.back()">
															<i class="ace-icon fa fa-arrow-left"></i>
															Go Back
														</a>
													</small>
													<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Select Roles</h4>

													<span class="widget-toolbar">


														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>

														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>


													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															 
<form action="<?php echo site_url('dashboard/utility/roles/actionadd')?>" method="POST">
	 <select class="form-control" id="select" required="true" name="roles_id">
 <option value=""></option>

	 <?php foreach ($list as $key): ?>
<option value="<?php echo $key->id ?>"><?php echo $key->id.". ".$key->roles_name ?></option>
<?php endforeach; ?>
</select>
</div>
<input type="hidden" name="user_id" value="<?php echo base64_decode( $this->uri->segment(5))?>">
<input type="hidden" name="user_nip" value="<?php echo base64_decode( $this->uri->segment(6))?>">
<button type="submit" class="btn btn-info">Add</button>
<div class="checkbox">
	<label>
	<input name="view" type="checkbox" class="ace" value="1" />
<span class="lbl">View</span>
</label>
<label>
	<input name="create" type="checkbox" class="ace" value="1" />
<span class="lbl">Create</span>
</label>
<label>
<input name="update" type="checkbox" class="ace" value="1" />
<span class="lbl">Update </span>
</label>
<label>
<input name="delete" type="checkbox" class="ace" value="1" />
<span class="lbl">Delete</span>
</label>
</div>
 
 
<hr />
</form>
												 
											</div><!-- /.page-header -->
										</div>
									</div>
								</div>

	<div class="row">
		<div class="tabbable">

	 <div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<h4 class="pink">


	</h4>

<div class="tabbable">
 <table id="datatables" class="table table-bordered table-hover">
										<thead>
											<tr>
												<th class="">
													No
												</th>



<th>Roles Name</th>


												<th>Ops</th>
											</tr>
										</thead>

										<tbody>
											<tr>
 <?php if ($roles==true): ?>
													<?php
$no=1;
foreach ($roles as $key): ?>
<td colspan=""><?php echo $no++ ?></td>
<td colspan=""><?php echo $key->roles_name ?></td>
<?php if ($module==TRUE): ?>

<td colspan="">
<div class="hidden-sm hidden-xs action-buttons">
<button class="btn btn-white tooltip-warning btn-danger btn-bold" onclick="hapusrolesdetil('<?php echo base64_encode($key->id)?>')" data-rel="tooltip" data-placement="right" title="Hapus">
<i class="ace-icon fa fa-trash align-top bigger-125 blue"></i>

</button>


</td>
<?php else:?>
<td colspan=""></td>
<?php endif; ?>
</tr>
	<?php endforeach; ?>
												<?php else: ?>
												<td colspan=""></td>
												<td colspan=""></td>
												<td colspan=""></td>
											<?php endif; ?>
											</tr>

									</table>

															</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
