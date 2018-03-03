<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo tema()?>js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo tema()?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo tema()?>js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
<script src="<?php echo tema()?>js/jquery-2.1.4.min.js"></script>
		<!-- ace scripts -->
		<script src="<?php echo tema()?>js/ace-elements.min.js"></script>
		<script src="<?php echo tema()?>js/ace.min.js"></script>
		<script src="<?php echo tema()?>js/bootstrap.min.js"></script>

    <script src="<?php echo tema()?>js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo tema()?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo tema()?>js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="<?php echo tema()?>js/dataTables.buttons.min.js"></script>
    <script src="<?php echo tema()?>js/buttons.flash.min.js"></script>
    <script src="<?php echo tema()?>js/buttons.html5.min.js"></script>
    <script src="<?php echo tema()?>js/buttons.print.min.js"></script>
    <script src="<?php echo tema()?>js/buttons.colVis.min.js"></script>
    <script src="<?php echo tema()?>js/dataTables.select.min.js"></script>
     <script src="<?php echo tema()?>alert/alertify.min.js"></script>
      <script src="<?php echo tema()?>js/select2.min.js"></script>
    <!-- ace scripts -->

<script>
$(document).ready(function() {
	$('#wh').select2();
});
</script>
		<!-- inline scripts related to this page -->


		<?php if ($this->session->flashdata('whe')): ?>
<script type="text/javascript">
		 alertify.error('Select Warehouse!!');
</script>
<?php endif; ?>
	</body>
</html>
