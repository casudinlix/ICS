<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">



					</div>
<div class="page-header">
							<h1>
								Select Warehouse
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									frequently asked questions using tabs and accordions
								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" role="form" method="post" action="home/getwh">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

		 <div class="col-sm-5">
 <select class="form-control" id="wh" data-placeholder="Choose a Warehouse..." required="" name="wh">
<option value=""></option>
<?php foreach ($wh as $key): ?>
<option value="<?php echo $key->wh_id?>"><?php echo $key->wh_name?></option>
<?php endforeach; ?>


</select>
<br/>

</br/>
<button class="btn btn-info" type="submit">
	<i class="ace-icon fa fa-check bigger-110"></i>
	GO..!
</button>
										</div>
									</div>
</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
