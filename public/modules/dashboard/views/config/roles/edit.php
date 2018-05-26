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
								Edit Role
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>

								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<div class="tabbable">

  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('dashboard/roles/action')?>">
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role name </label>

      <div class="col-sm-9">
        <input type="text" autocomplete="off"  value="<?php echo $q->roles_name ?>" name="nama" required="true" class="col-xs-10 col-sm-5"/>
      </div>
    </div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Description </label>

			<div class="col-sm-9">
				<textarea name="desc" class="col-xs-10 col-sm-5"/><?php echo $q->roles_desc ?></textarea>

			</div>
		</div>
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Module </label>

      <div class="col-sm-9">
        <input type="text" value="<?php echo $q->roles_module ?>" placeholder="Modules" name="module" class="col-xs-10 col-sm-5" autocomplete="off" />
      </div>
    </div>
		<div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Method </label>

      <div class="col-sm-9">
        <input type="text" value="<?php echo $q->roles_method ?>" placeholder="Method" name="method" class="col-xs-10 col-sm-5" autocomplete="off" />
      </div>
    </div>
		<input type="hidden" value="<?php echo base64_decode($this->uri->segment(4)) ?>" name="id" />

    <div class="space-4"></div>

    <div class="clearfix form-actions">
      <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit" name="update">
          <i class="ace-icon fa fa-save bigger-110"></i>
          Update
        </button>

        &nbsp; &nbsp; &nbsp;
        <a href="javascript:history.back()" class="btn btn-grey">
          <i class="ace-icon fa fa-arrow-left"></i>
          Go Back
        </a>
      </div>
    </div>
</form>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
