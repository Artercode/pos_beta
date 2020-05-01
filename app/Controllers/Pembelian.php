<?php

namespace App\Controllers;

use App\Models\Pembelian_model;
use App\Models\Pos;

class Pembelian extends BaseController
{
	protected $request;
	function __construct()
	{
		$request = \Config\Services::request();
	}

	public function index()
	{

		$model = new Pembelian_model();
		$mpos= new Pos();
		helper('TimeHelper');
		helper('Umkm');

		// $model = new Pembelian_model();
		$data = [
			'nota_pembelian' => $this->getNotaPembelian(),
			'm_pembelian' => $model->paginate(10),
			'pager' => $model->pager,
			'produk' => $mpos->getListProduk()
		];
		// mantab();
		// print_r($umkm->getNotaPembelian());
		return view('admin/pembelian_view', $data);
	}

	public function getNotaPembelian()
	{
		$model = new Pembelian_model();
		return $model->getLastNotaPembelian()->getRow()->kd_trx_pembelian;
	}

	//--------------------------------------------------------------------
	/**
	 * Add Pembelian
	 */
	public function add()
	{
	}

	public function addTrx()
	{
	}

	public function delete()
	{
	}

	public function edit()
	{
	}

	/**
	 * Menampilkan produk sesuai pencarian
	 * return nama,harga beli terakhir 
	 */
	public function getProduk($searchby = null)
	{
		// $something = $this->request->getVar('foo');
		$model = new Pos();
		$dataProduk = $model->getDataProdukBySearch($searchby)->getRow();

		// print_r($something);
		echo '<div class="form-group">
		<label class="control-label col-md-3">Harga</label>
		<div class="col-md-9">
			<input name="harga" disabled id="harga" class="form-control" value="'.$dataProduk->harga_eceran.'" type="number">
			<span class="help-block"></span>
		</div>
		<div class="form-group">
		<label class="control-label col-md-3">Harga</label>
		<div class="col-md-9">
			<input name="stok" disabled id="stok" class="form-control" value="'.$dataProduk->stok.'" type="number">
			<span class="help-block"></span>
		</div>
	</div>';
	}
}
