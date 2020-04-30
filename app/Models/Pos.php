<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
 
class Pos extends Model
{
    function getLastNotaPenjualan()
    {
        $builder->db->table('master_penjualan');
        $builder->select('*');
        $builder->orderBy('kd_trx_penjualan','DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query;
    }

    function getDataProdukBySearch($search = null){

    }

    function addDataPembelianTemp(){

    }
}