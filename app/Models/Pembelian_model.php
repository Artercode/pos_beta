<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class Pembelian_model extends Model
{
    protected $table = 'master_pembelian';
    protected $db;

    function __construct()
    {
        parent::__construct();
        $db      = \Config\Database::connect();
        // $this->tmdb = new Tmdb(); // declare Tmdb as a new object
    }
   
    // protected $allowedFields = ['name', 'email'];
    function historyTrxPembelian()
    {
        return $this->findAll();
    }

    function getDetailTrxPembelian($nota_pembelian = null)
    {
        
    }

    function getLastNotaPembelian()
    {
        $builder = $this->db->table('master_pembelian');
        $builder->select('*');
        $builder->orderby('id_pembelian','DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query;
    }

    function getDataProdukBySearch($search = null){
        $builder = $this->db->table('master_pembelian');
        $builder->select('*');
        $builder->orderby('id_pembelian','DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query;
    }

    function getHargaBeliTerakhir($kd_produk = null){
        $builder = $this->db->table('trx_pembelian');
        $builder->select('*');
        $builder->where('kd_produk',$kd_produk);
        $builder->orderby('id_pembelian','DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query;
    }

    function addDataPembelianTemp(){

    }
}