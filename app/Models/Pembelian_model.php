<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class Pembelian_model extends Model
{
    protected $table = 'master_pembelian';
 
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
        $builder->select('master_pembelian');
        $builder->orderby('kd_trx_pembelian','DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query;
    }

    function getDataProdukBySearch($search = null){

    }

    function addDataPembelianTemp(){

    }
}