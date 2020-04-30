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
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar"
					autocomplete="off" />
				<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar"
					autocomplete="off" />
				<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs"
					autocomplete="off" />
				<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
				<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container"
					autocomplete="off" />
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
<?= print_r($nota_pembelian); ?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>

		<li>
			<a href="#">UI &amp; Elements</a>
		</li>

		<li>
			<a href="#">Layouts</a>
		</li>
		<li class="active">Default Mobile Menu</li>
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
					autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
<div class="row">
	<div class="page-header">
		<h1>Pembelian</h1>
	</div><!-- /.page-header -->

	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-xs-8">
				<button class="btn btn-app btn-success btn-xs" onclick="add_person()">
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
							<th style="width:100px">No Nota</th>
							<th>Total Nota</th>
							<th>Tanggal</th>
							<th style="width:100px">
								<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
								Action
							</th>
							<!-- <th class="hidden-480">Status</th> -->
						</tr>
					</thead>

					<tbody>
						<?php if($m_pembelian): ?>
						<?php 
							$no=1;
							foreach($m_pembelian as $mbeli): ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $mbeli['kd_trx_pembelian']; ?></td>
							<td><?php echo $mbeli['total_pembelian']; ?></td>
							<td><?php echo date("d-m-Y", strtotime($mbeli['created_date'])); ?></td>
							<td>
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
							<?php if ($pager) :?>
							<?php $pagi_path='pos_beta/public/pembelian'; ?>
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
<div class="modal fade " id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Person Form</h3>
			</div>
			<div class="modal-body form">
				<h4>Nomor Nota :</h4>
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" value="" name="id" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Nama Produk</label>
							<div class="col-md-9">
								<input name="firstName" placeholder="First Name" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Kategori</label>
							<div class="col-md-9">
								<input name="lastName" placeholder="Last Name" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Harga</label>
							<div class="col-md-9">
								<input name="harga" disabled id="harga" class="form-control" type="number">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Qty</label>
							<div class="col-md-9">
								<input name="qty" id="qty" class="form-control" type="number">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Potongan</label>
							<div class="col-md-9">
								<input name="diskon" id="diskon" class="form-control" type="number">
								<span class="help-block"></span>
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="control-label col-md-3">Gender</label>
							<div class="col-md-9">
								<select name="gender" class="form-control">
									<option value="">--Select Gender--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
								<span class="help-block"></span>
							</div>
						</div> -->
						<div class="form-group">
							<label class="control-label col-md-3">Keterangan</label>
							<div class="col-md-9">
								<textarea name="address" placeholder="Address" class="form-control"></textarea>
								<span class="help-block"></span>
							</div>
						</div>
					
						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th style="width:3px">No</th>
									<th>Kode Produk</th>
									<th>Nama Produk</th>
									<th>Harga</th>
									<th>Qty</th>
									<th>Sub Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>

							<!-- <tfoot>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Date of Birth</th>
									<th>Action</th>
								</tr>
							</tfoot> -->
						</table>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<?= $this->endSection() ?>
<? $this->section('jscript') ?>
<script type="text/javascript">
	var save_method; //for save method string
	jQuery(function ($) {

	});

	function add_person() {
		save_method = 'add';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		$('#modal_form').modal('show'); // show bootstrap modal
		$('.modal-title').text('Tambah Produk'); // Set Title to Bootstrap modal title
	}
	function delete_person(id)
{
    if(confirm('Apakah anda yakin untuk menghapusnya?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}
</script>
<?= $this->endSection() ?>