<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- footer start-->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 footer-copyright">
					<p class="mb-0">Copyright 2022 © Smart Village Lampung All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
</div>

	<script src="<?=base_url()?>assets/js/jquery-3.5.1.min.js"></script>
	<!-- feather icon js-->
	<script src="<?=base_url()?>assets/js/icons/feather-icon/feather.min.js"></script>
	<script src="<?=base_url()?>assets/js/icons/feather-icon/feather-icon.js"></script>
	<!-- Sidebar jquery-->
	<script src="<?=base_url()?>assets/js/sidebar-menu.js"></script>
	<script src="<?=base_url()?>assets/js/config.js"></script>
	<!-- Bootstrap js-->
	<script src="<?=base_url()?>assets/js/bootstrap/popper.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap/bootstrap.min.js"></script>
	<!-- Plugins JS start-->
	<script src="<?=base_url()?>assets/js/select2/select2.full.min.js"></script>
	<script src="<?=base_url()?>assets/js/select2/select2-custom.js"></script>
	<script src="<?=base_url()?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/js/datatable/datatables/datatable.custom.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

	<!-- Plugins JS Ends-->
	<!-- Theme js-->
	<script src="<?=base_url()?>assets/js/script.js"></script>
	<?php
	if(!empty($script)){
		$this->load->view($script);
	}
	?>

	</body>
</html>
