<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#"><?php echo $this->uri->segment(1)?></a>
								<i class="ace-icon  arrow fa fa-angle-right"></i>
								<a href="#"><?php echo $this->uri->segment(2)?></a>
                <i class="ace-icon  arrow fa fa-angle-right"></i>
								<a href="#"><?php echo $this->uri->segment(3)?></a>
							</li>


						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">

						</div><!-- /.nav-search -->
					</div>
<div class="page-header">
							<h1>

								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								<?php if ($add==TRUE): ?>
								<a href="<?php echo site_url('dashboard/utility/roles/add')?>">	<button class="btn btn-white btn-info btn-bold" data-rel="tooltip" data-placement="right" title="New Permission">
				 												<i class="ace-icon fa fa-plus align-top bigger-125 blue" ></i>
				 												New
				 											</button></a>


								<?php endif; ?>
								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
	 <div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

<div class="tabbable">
	<div>

 <table id="datatables" class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
										<thead>
											<tr>
												<th class="">
													No
												</th>



<th class="hidden-480"><i class="ace-icon glyphicon glyphicon-barcode hidden-480"></i>Users Nip</th>

<th><i class="ace-icon glyphicon glyphicon-user hidden-480"></i>Users Name</th>
												<th>
<i class="ace-icon fa fa-users bigger-110 hidden-480"></i>
						Roles name
												</th>
<th>Create</th>
<th>View</th>
<th>Update</th>
<th>Delete</th>
												<th>Ops</th>
											</tr>
										</thead>

										<tbody>
											<tr>
	 <?php $no=1;
	 foreach ($list as $key): ?>
<td colspan=""><?php  echo $no++ ?></td>
<td colspan=""><?php  echo $key->user_nip ?></td>
<td colspan=""><?php  echo $key->username ?></td>
<td colspan=""><?php  echo $key->roles_name ?></td>

<?php if ($key->a_create=='1'): ?>
<td colspan=""><i class="fa fa-check-square-o "></i></td>
<?php else: ?>
  <td colspan=""><i class="glyphicon glyphicon-remove"></i></td>
<?php endif; ?>

<?php if ($key->a_read=='1'): ?>
<td colspan=""><i class="fa fa-check-square-o "></i></td>
<?php else: ?>
  <td colspan=""><i class="glyphicon glyphicon-remove"></i></td>
<?php endif; ?>
<?php if ($key->a_update=='1'): ?>
<td colspan=""><i class="fa fa-check-square-o "></i></td>
<?php else: ?>
  <td colspan=""><i class="glyphicon glyphicon-remove"></i></td>
<?php endif; ?>
<?php if ($key->a_delete=='1'): ?>
<td colspan=""><i class="fa fa-check-square-o "></i></td>
<?php else: ?>
  <td colspan=""><i class="glyphicon glyphicon-remove"></i></td>
<?php endif; ?>

<?php if ($module==TRUE): ?>

<td class="warning">

	<div class="hidden-sm hidden-xs action-buttons">
<button class="btn btn-white btn-danger btn-bold" onclick="hapusroles_per('<?php echo base64_encode($key->id)?>')" class=" tooltip-warning" data-rel="tooltip" data-placement="right" title="Delete"><i class="ace-icon fa fa-trash align-top bigger-125 blue"></i></button>

</td>


<?php else: ?>
<td>

</td>
<?php endif;?>
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
