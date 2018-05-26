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
<script src="<?php echo tema()?>js/jquery.bootstrap-duallistbox.min.js"></script>
		<!-- page specific plugin scripts -->
 <script src="<?php echo tema();?>auto/js/jquery-ui.min.js"></script>
 <script src="<?php echo tema();?>auto/js/jquery.lookupbox.js"></script>
 <script src="<?php echo tema();?>auto/js/jquery.autocomplete.js"></script>
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
		 <script src="<?php echo tema()?>alert/sweetalert.min.js"></script>
      <script src="<?php echo tema()?>js/select2.min.js"></script>
    <!-- ace scripts -->
<script>
	jQuery(function($) {
		$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});

	});

</script>

<script>
function angka(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))

	return false;
	return true;
}


</script>

		<script type="text/javascript">
				var table;
				var bas_url="<?php echo site_url()?>"
				$(document).ready(function() {

						//datatables
						$('#datatables').DataTable({
							"processing": true,
						});


				});


		</script>
		<?php if ($this->session->flashdata('susscess')): ?>
			<script>
				swal("Data Has ben success Saved!", "Clicked the button!", "success")
			</script>
		<?php endif; ?>

		<script>
		</script>
		<?php if ($this->session->flashdata('error')): ?>
			<script>
				swal(":( Not Allowed!", "you do not have permission to enforce this action!!", "error")
			</script>
		<?php endif; ?>

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

            $('#editusers').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#username').attr("value",div.data('username'));
                });

								$('#addgroup').on('show.bs.modal', function (event) {
		                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		                var modal          = $(this)
		                });




                //select2
                $("#parent").select2({
                 placeholder: 'Choose a Parent...',
                 allowClear: true
                });

                $("#user").select2({
                 placeholder: 'Choose a Group...',
                 allowClear: true
                });
				$("#select").select2({
                 placeholder: '...',
                 allowClear: true
                });


        });
    </script>
		<script type="text/javascript">
		function hapusmenup($d) {
		var id = $d;

		  swal({
		title: "Are you sure?",
		text: "You will not be able to recover this !"+id,
		type: "warning",
		showCancelButton: true,
		closeOnConfirm: false,
		showLoaderOnConfirm: true
		},


		 function (isConfirm) {



		    var url1= "<?php echo site_url('dashboard/utility/menu/delete/') ?>";

		      if (!isConfirm) return;
		      $.ajax({
		          url: url1+id,
		          type: "POST",

		          dataType: "HTML",
		          success: function () {
		              setTimeout(function () {
		                  swal(" request finished!");
		                  window.location.reload();
		        }, 4000);


		          },
		          error: function (xhr, ajaxOptions, thrownError) {
		              swal("Error Deleted!", "Please try again", "error");
		          }

		      });

		});
		}

		</script>
		<script type="text/javascript">
		function hapusrolesdetil($d) {
		var id = $d;

		  swal({
		title: "Are you sure?",
		text: "You will not be able to recover this !"+id,
		type: "warning",
		showCancelButton: true,
		closeOnConfirm: false,
		showLoaderOnConfirm: true
		},


		 function (isConfirm) {



		    var url1= "<?php echo site_url('dashboard/utility/roles/delete/') ?>";

		      if (!isConfirm) return;
		      $.ajax({
		          url: url1+id,
		          type: "POST",

		          dataType: "HTML",
		          success: function () {
		              setTimeout(function () {
		                  swal(" request finished!");
		                  window.location.reload();
		        }, 4000);


		          },
		          error: function (xhr, ajaxOptions, thrownError) {
		              swal("Error Deleted!", "Please try again", "error");
		          }

		      });

		});
		}

		</script>
		<script type="text/javascript">
		function hapusroles_per($d) {
		var id = $d;

		  swal({
		title: "Are you sure?",
		text: "You will not be able to recover this !"+id,
		type: "warning",
		showCancelButton: true,
		closeOnConfirm: false,
		showLoaderOnConfirm: true
		},


		 function (isConfirm) {



		    var url1= "<?php echo site_url('dashboard/utility/roles/delete/') ?>";

		      if (!isConfirm) return;
		      $.ajax({
		          url: url1+id,
		          type: "POST",

		          dataType: "HTML",
		          success: function () {
		              setTimeout(function () {
		                  swal(" request finished!");
		                  window.location.reload();
		        }, 4000);


		          },
		          error: function (xhr, ajaxOptions, thrownError) {
		              swal("Error Deleted!", "Please try again", "error");
		          }

		      });

		});
		}

		</script>
		<?php if ($this->session->flashdata("403")): ?>
			<script>
			swal("Error!", "you do not have permission to enforce this action!", "error")

			</script>
		<?php endif; ?>
		<script>
		    $(document).ready(function () {
		      var site = "<?php echo site_url();?>";
		      $("#searchusers").lookupbox({
		        title: 'Search Users',
		        url: site+'dashboard/getusersall/',
		        imgLoader: 'Loading...',
		        width: 500,
		        onItemSelected: function(data){
		          $('input[name=nip]').val(data.user_nip);
		          $('input[name=username]').val(data.username);
							$('input[name=dataid]').val(data.id);
							$('input[name=groupid]').val(data.group_id);

		        },
		        tableHeader: ['ID','Nip', 'User Name','Group','Group ID']
		      });
		    });
		    </script>
	</body>
</html>
