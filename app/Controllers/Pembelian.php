<?php namespace App\Controllers;
	  use App\Models\Pembelian_model;
class Pembelian extends BaseController
{
	public function index()
	{
		helper('TimeHelper');
		$model =new Pembelian_model();
		$data = [
            'm_pembelian' => $model->paginate(10),
            'pager' => $model->pager
        ];
		return view('admin/pembelian_view',$data);
	}

	//--------------------------------------------------------------------
	/**
	 * Add Pembelian
	 */
	public function add(){
		
	}

	public function delete(){

	}

	public function edit(){

	}

	/**
	 * Menampilkan produk sesuai pencarian
	 * return nama,harga beli terakhir 
	 */
	public function getProduk($searchby = null){

	}
}
