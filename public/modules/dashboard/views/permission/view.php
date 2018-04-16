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
													List Menu <?php echo $user->username?>
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
													<h4 class="widget-title">Select Menu</h4>

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
															<label for="form-field-select-1">Default</label>
<form action="<?php echo site_url('dashboard/utility/menu/actionadd')?>" method="POST">
															<select class="form-control" id="select" required="true" name="menu_id">
																<option value=""></option>

																<?php foreach ($menulist as $key): ?>
																	<option value="<?php echo $key->id ?>"><?php echo $key->id.". ".$key->menu ?></option>
																<?php endforeach; ?>
															</select>
														</div>
														<input type="hidden" name="user_id" value="<?php echo base64_decode( $this->uri->segment(5))?>">
														<input type="hidden" name="user_group" value="<?php echo base64_decode( $this->uri->segment(6))?>">
<button type="submit" class="btn btn-info">Add</button>
														<hr />
</form>
												</h1>
											</div><!-- /.page-header -->

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



<th>Menu Name</th>


												<th>Ops</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<?php if ($userlist==true): ?>
													<?php
$no=1;
foreach ($userlist as $key): ?>
<td colspan=""><?php echo $no++ ?></td>
<td colspan=""><?php echo $key->menu ?></td>
<?php if ($module==TRUE): ?>

<td colspan="">
<div class="hidden-sm hidden-xs action-buttons">
<button class="btn btn-white tooltip-warning btn-danger btn-bold" onclick="hapusmenup('<?php echo base64_encode($key->id)?>')" data-rel="tooltip" data-placement="right" title="Hapus">
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
