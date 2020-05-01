<?= $this->extend('default_layout') ?>
<?= $this->section('content') ?>
<div class="ace-settings-container" id="ace-settings-container">
	<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
		<i class="ace-icon fa fa-cog bigger-130"></i>
	</div>

	<div class="ace-settings-box clearfix" id="ace-settings-box">
		<div class="pull-left width-50">
			<div class="ace-settings-item">
				<div class="pull-left">
					<select id="skin-colorpicker" class="hide">
						<option data-skin="no-skin" value="#438EB9">#438EB9</option>
						<option data-skin="skin-1" value="#222A2D">#222A2D</option>
						<option data-skin="skin-2" value="#C6487E">#C6487E</option>
						<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
					</select>
				</div>
				<span>&nbsp; Choose Skin</span>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
				<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
				<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
				<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
				<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
				<label class="lbl" for="ace-settings-add-container">
					Inside
					<b>.container</b>
				</label>
			</div>
		</div><!-- /.pull-left -->

		<div class="pull-left width-50">
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
				<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
				<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
				<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
			</div>
		</div><!-- /.pull-left -->
	</div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Admin</a>
		</li>
		<li class="active">Produk</li>
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
<div class="row">
	<div class="page-header">
		<h1>Produk</h1>
	</div><!-- /.page-header -->

	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-xs-8">
				<button class="btn btn-app btn-success btn-xs" onclick="add_produk()">
					<i class="ace-icon fa fa-plus align-top bigger-125"></i>
					Tambah
			</div>
			</button>

		</div>

		<div class="row">
			<div class="col-xs-12">
				<table id="simple-table" class="table  table-bordered table-hover">
					<thead>
						<tr>
							<!-- <th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th> -->
							<th style="width:3px">No</th>
							<th style="width:3px">Kode Produk</th>
							<th>Nama Produk</th>
							<th style="width:3px">Harga Eceran</th>
							<th style="width:3px">Harga Grosir</th>
							<th style="width:3px">Minimum Grosir</th>
							<th width="10%">Tanggal Buat</th>
							<th>Keterangan</th>
							<th style="width:100px">
								<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
								Action
							</th>
							<!-- <th class="hidden-480">Status</th> -->
						</tr>
					</thead>

					<tbody>
						<?php if ($produk) : ?>
							<?php
							$no = 1;
							foreach ($produk as $mbeli) : ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $mbeli->kd_produk; ?></td>
									<td><?php echo $mbeli->nama_produk; ?></td>
									<td><?php echo $mbeli->harga_eceran; ?></td>
									<td><?php echo $mbeli->harga_grosir; ?></td>
									<td><?php echo $mbeli->batas_grosir; ?></td>
									<td><?php echo date("d-m-Y", strtotime($mbeli->created_date)); ?></td>
									<td><?php echo $mbeli->keterangan; ?></td>
									<td></td>
								</tr>
							<?php
								$no++;
							endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
				<div class="row">
					<div class="col-xs-12">
						<div class="row">
							<?php if ($pager) : ?>
								<?php $pagi_path = 'pos_beta/produk'; ?>
								<?php $pager->setPath($pagi_path); ?>
								<?= $pager->links() ?>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div><!-- /.span -->
		</div><!-- /.row -->

		<div class="hr hr-18 dotted hr-double"></div>


		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->
<!-- inline scripts related to this page -->
<!-- Bootstrap modal -->

<div class="modal fade " id="modal_addproduk" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Tambah Produk Baru</h3>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" value="" name="id" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Kode Barcode</label>
							<div class="col-md-9">
								<input name="add_kodeproduk_barcode" id="add_kodeproduk_barcode" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Kode Produk</label>
							<div class="col-md-9">
								<input name="add_kodeproduk" id="add_kodeproduk" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Nama Produk</label>
							<div class="col-md-9">
								<input name="add_produk" id="add_produk" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Harga Eceran</label>
							<div class="col-md-9">
								<input name="add_harga" id="add_harga" class="form-control" type="number">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Harga Grosir</label>
							<div class="col-md-9">
								<input name="add_harga_grosir" id="add_harga_grosir" class="form-control" type="number">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Minimal Qty Grosir</label>
							<div class="col-md-9">
								<input name="add_qtymin_grosir" id="add_qtymin_grosir" class="form-control" type="number">
								<span class="help-block"></span>
							</div>
						</div>

					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save_newproduk()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- End Bootstrap modal -->

<?= $this->endSection() ?>
<? $this->section('jscript') ?>

<script src="<?= base_url("resources/assets/js/jquery-ui.custom.min.js") ?>"></script>
<script src="<?= base_url("resources/assets/js/jquery.ui.touch-punch.min.js") ?>"></script>
<script src="<?= base_url("resources/assets/js/chosen.jquery.min.js") ?>"></script>
<script type="text/javascript">
	var save_method; //for save method string
	var nota_pembelian;
	jQuery(function($) {
		nota_pembelian = $("#nota_pembelian").val();
		$("#no_nota").html("<h4>No Nota : " + nota_pembelian + "</h4>");
		// if (!ace.vars['touch']) {

		$('.chosen-select').chosen({
			allow_single_deselect: true,
			width: "75%"
		});

	});

	function add_person() {
		save_method = 'add';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		$('#modal_form').modal('show'); // show bootstrap modal
		$('.modal-title').text('Transaksi Pembelian'); // Set Title to Bootstrap modal title
	}

	function add_produk() {
		$('#modal_addproduk').modal('show');
	}

	function showBarang(str) {
		if (str == "") {
			$('#nama_barang').val('');
			$('#harga_barang').val('');
			$('#qty').val('');
			$('#reset').hide();
			return;
		} else {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					$("#data_produk").html(xmlhttp.responseText);
					// alert(xmlhttp.responseText);
				}
			}
			xmlhttp.open("GET", "<?= base_url('pembelian/getProduk') ?>/" + str, true);
			xmlhttp.send();
		}
	}

	function delete_person(id) {
		if (confirm('Apakah anda yakin untuk menghapusnya?')) {
			// ajax delete data to database
			$.ajax({
				url: "<?php echo site_url('person/ajax_delete') ?>/" + id,
				type: "POST",
				dataType: "JSON",
				success: function(data) {
					//if success reload ajax table
					$('#modal_form').modal('hide');
					reload_table();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert('Error deleting data');
				}
			});

		}
	}
</script>
<?= $this->endSection() ?>