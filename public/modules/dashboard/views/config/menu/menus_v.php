<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#"><?php echo $this->uri->segment(1)?></a>
								<i class="ace-icon  arrow fa fa-angle-right"></i>
								<a href="#"><?php echo $this->uri->segment(2)?></a>
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
								<a href="<?php echo site_url('dashboard/menus/add')?>">	<button class="btn btn-white btn-info btn-bold" data-rel="tooltip" data-placement="right" title="New menu">
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
 <table id="datatables" class="table table-bordered table-hover">
										<thead>
											<tr>
												<th class="">
													No
												</th>



<th class="hidden-480"><i class="ace-icon fa fa-barcode hidden-480"></i>Manu Name</th>

<th>Link</th>
												<th>
<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
						Icon
												</th>
												<th>Publish</th>
												<th>Ops</th>
											</tr>
										</thead>

										<tbody>
											<tr>
	 <?php $no=1;
	 foreach ($menulist as $key): ?>
<td colspan=""><?php  echo $no++ ?></td>
<td colspan=""><?php  echo $key->menu ?></td>
<td colspan=""><?php  echo $key->link ?></td>
<td colspan=""><i class="fa <?php  echo $key->icon ?>"></i></td>
<?php if ($key->is_publish=1): ?>
<td colspan="">YES</td>
<?php else: ?>
<td colspan="">NO</td>
<?php endif;?>
<?php if ($module==TRUE): ?>
<td colspan="">
	<div class="hidden-sm hidden-xs action-buttons">

		 <a href="<?php echo site_url('dashboard/menus/edit/').base64_encode($key->id)?>"  class=" tooltip-warning" data-rel="tooltip" data-placement="right" title="Edit Menu">
				 <button class="btn btn-white btn-info btn-bold">
												<i class="ace-icon fa fa-pencil align-top bigger-125 blue"></i>
												Edit
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