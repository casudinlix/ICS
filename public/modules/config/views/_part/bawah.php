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

		<script type="text/javascript">
				var table;
				$(document).ready(function() {

						//datatables
						table = $('#usergroup').DataTable({

								"processing": true,
								"serverSide": true,
								"order": [],

								"ajax": {
										"url": "<?php echo site_url('tables/getusergroup/')?>",
										"type": "POST"
								},


								"columnDefs": [
								{
										"targets": [ 0 ],
										"orderable": false,
								},
								],

						});

				});

		</script>
		<script>
        $(document).ready(function() {
            // Untuk sunting
            $('#editgroup').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#group_name').attr("value",div.data('group_name'));
                modal.find('#group_desc').val(div.data('group_desc'));



            });

            $('#propict').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#product_name').attr("value",div.data('product_name'));
                });

								$('#addgroup').on('show.bs.modal', function (event) {
		                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		                var modal          = $(this)
		                });
                //select2
                $("#category").select2({
                 placeholder: 'Choose a Category...',
                 allowClear: true
                });
                $("#brand").select2({
                 placeholder: 'Choose a Brand...',
                 allowClear: true
                });

        });
    </script>
	</body>
</html>
