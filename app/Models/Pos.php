<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class Pos extends Model
{
    protected $db;
    protected $table = 'master_penjualan';

    function __construct()
    {
        parent::__construct();
        $db      = \Config\Database::connect();
        // $this->tmdb = new Tmdb(); // declare Tmdb as a new object
    }
    function getLastNotaPenjualan()
    {
        $builder = $this->db->table('master_pembelian');
        $builder->select('*');
        $builder->orderBy('kd_trx_penjualan','DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query;
    }

    function getListProduk(){
        $builder = $this->db->table('master_produk');
        $builder->select('*');
        $query = $builder->get(); 
        return $query;
    }

    
    /**
     * Search produk 
     * return nama,stok,harga eceran ,harga grosir
     */
    function getDataProdukBySearch($search = null){
        $builder = $this->db->table('master_produk');
        $builder->select('*');
        $builder->where('kd_produk',$search);
        $builder->orWhere('kd_barcode',$search); 
        $query = $builder->get(); 
        return $query;
    }

    function addDataPembelianTemp(){

    }
}