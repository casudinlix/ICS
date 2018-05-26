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
								Add New User
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>

								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<div class="tabbable">

  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('dashboard/users/action')?>">
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Nip </label>

      <div class="col-sm-9">
        <input type="text" autocomplete="off" maxlength="6" placeholder="NIP" name="nip" required="true" class="col-xs-10 col-sm-5" onkeypress="return angka(event)" />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> User Name </label>

      <div class="col-sm-9">
        <input type="text"  placeholder="User Name" name="username" class="col-xs-10 col-sm-5" autocomplete="off" />
      </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> User Group </label>

      <div class="col-sm-9">
<select id="user"  class="col-xs-10 col-sm-5" name="group" required="">
  <option></option>
<option value=""></option>
<?php foreach ($list_group as $key): ?>
<option value="<?php echo $key->id?>"><?php echo $key->id." ".$key->group_name ?></option>
<?php endforeach; ?>
</select>

        </span>
      </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right">Password</label>

      <div class="col-sm-9">
        <span class="input-icon">
          <input type="password" id="form-field-icon-1" name="pass" />
          <i class="ace-icon fa fa-lock blue"></i>
        </span>

      </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
      <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit" name="add">
          <i class="ace-icon fa fa-check bigger-110"></i>
          Submit
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
