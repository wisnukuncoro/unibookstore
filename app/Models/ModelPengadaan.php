<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengadaan extends Model
{
  protected $table = 'tabel_buku';
  protected $primarykey = 'id_buku';

  public function AllData()
  {
    return $this->db->table('tabel_buku')
      ->join('tabel_penerbit', 'tabel_penerbit.id_penerbit=tabel_buku.id_buku')
      ->get()->getResultArray();
  }
}
