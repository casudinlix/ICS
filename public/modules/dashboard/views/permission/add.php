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

								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>

														<a href="javascript:history.back()">
															<i class="ace-icon fa fa-arrow-left"></i>
															Go Back
														</a>
								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
	 <div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

<div class="tabbable">
 <table id="datatables" class="table table-bordered table-hover">
										<thead>
											<tr>
												<th class="">
													No
												</th>



<th class="hidden-480"><i class="ace-icon glyphicon glyphicon-barcode hidden-480"></i>Users Nip</th>

<th><i class="ace-icon glyphicon glyphicon-user hidden-480"></i>Users Name</th>
												<th>
<i class="ace-icon fa fa-users bigger-110 hidden-480"></i>
						Group Name
												</th>

												<th>Ops</th>
											</tr>
										</thead>

										<tbody>
											<tr>
	 <?php $no=1;
	 foreach ($userlist as $key): ?>
<td colspan=""><?php  echo $no++ ?></td>
<td colspan=""><?php  echo $key->user_nip ?></td>
<td colspan=""><?php  echo $key->username ?></td>
<td colspan=""><?php  echo $key->group_name ?></td>

<?php if ($module==TRUE): ?>

<td colspan="">
	<div class="hidden-sm hidden-xs action-buttons">

  <a href="<?php echo site_url('dashboard/utility/menu/add/').str_replace(array('=', '.', '='),array('', '%', '_'),base64_encode($key->id)).'/'.str_replace('=','',base64_encode($key->group_id))?>"  class=" tooltip-warning" data-rel="tooltip" data-placement="right" title="Add menu Permission">
  <button class="btn btn-white btn-info btn-bold">
  <i class="ace-icon fa fa-unlock align-top bigger-125 blue"></i>

       </button></a>


</td>
<?php else:?>
<td colspan=""></td>
<?php endif; ?>
</tr>
											<?php endforeach; ?>
										</tbody>
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
