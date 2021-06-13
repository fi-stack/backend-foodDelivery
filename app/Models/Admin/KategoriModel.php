<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';

    public function ajaxGetData($length, $start)
    {
        $result = $this->orderBy('id', 'desc')->findAll($length, $start);

        return $result;
    }

    public function ajaxGetDataSearch($search, $length, $start)
    {
        $result = $this->like('nama_kategori', $search)->orderBy('id', 'desc')->findAll($length, $start);

        return $result;
    }

    public function ajaxGetTotal()
    {
        $result = $this->countAll();

        if (isset($result)) {
            return $result;
        }

        return 0;
    }

    public function ajaxGetTotalSearch($search)
    {
        $result = $this->like('nama_kategori', $search)->countAllResult();

        return $result;
    }
}
