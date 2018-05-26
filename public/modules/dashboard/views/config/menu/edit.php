<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">



						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
<div class="page-header">
							<h1>
								Edit  Menu
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>

								</small>
							</h1>
						</div><!-- /.page-header -->

	<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<div class="tabbable">

  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('dashboard/menus/action')?>">
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Menu Name </label>

      <div class="col-sm-9">
        <input type="text" value="<?php echo $q->menu?>" placeholder="Name" name="menu" required="true" class="col-xs-10 col-sm-5" />
      </div>
    </div>
<input type="hidden" name="id" value="<?php echo base64_decode($this->uri->segment(4))?>">

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Link / URL </label>

      <div class="col-sm-9">
        <input type="text" value="<?php echo $q->link?>" name="link" class="col-xs-10 col-sm-5" />
      </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Parent </label>

      <div class="col-sm-9">
<select id="parent"  class="col-xs-10 col-sm-5" name="parent" required="">
	<?php if ($parent->parent=="0"): ?>
		<option value="0">No Parent/ Root Menu</option>
	<?php else: ?>
	<?php $parentname=$this->db->get_where('menus',['id'=>$parent->parent])->row();
	   ?>

  <option value="<?php echo $parent->parent?>"><?php echo $parent->parent." ".$parentname->menu?></option>
<?php endif;?>

<option value="0">No Parent/ Root Menu</option>
<?php foreach ($menulist as $key): ?>
<option value="<?php echo $key->id?>"><?php echo $key->id." ".$key->menu ?></option>
<?php endforeach; ?>
</select>

        </span>
      </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Menu Order </label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5"  name="order" value="<?php echo $q->menu_order?>" onkeypress="return angka(event)"/>
        <span class="help-inline col-xs-12 col-sm-7">
          <label class="middle">

          </label>
        </span>
      </div>
    </div>

    <div class="space-4"></div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Publish </label>

			<div class="col-sm-9">
				<select name="a" id="" class="col-xs-5 col-sm-5" required="">
					<?php if ($q->is_published==1): ?>
						<option value="<?php echo $q->is_published ?>">YES</option>

					<?php else: ?>
						<option value="<?php echo $q->is_published ?>">NO</option>

<?php endif;?>
<?php if ($q->is_published==0): ?>
	<option value="1">YES</option>
<?php else: ?>
<option value="0">NO</option>
<?php endif?>
				</select>
				<span class="help-inline col-xs-12 col-sm-7">
					<label class="middle">

					</label>
				</span>
			</div>
		</div>

    <div class="space-4"></div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right">Icon</label>

      <div class="col-sm-9">
        <span class="input-icon">
          <input type="text" value="<?php echo $q->icon?>" name="icon" />
          <i class="ace-icon fa fa-leaf blue"></i>
        </span>

      </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
      <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit" name="editmenu">
          <i class="ace-icon fa fa-check bigger-110"></i>
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
