<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
  protected $table = 'tabel_buku';
  protected $primarykey = 'id_buku';

  public function create($data)
  {
    $this->db->table('tabel_buku')->insert($data);
  }

  public function updateData($data)
  {
    $this->db->table('tabel_buku')->where('id_buku', $data['id_buku'])->update($data);
  }

  public function deleteData($data)
  {
    $this->db->table('tabel_buku')->where('id_buku', $data['id_buku'])->delete($data);
  }

  public function search($kunci) {
  	return $this->table('tabel_buku')->like('nama_buku', $kunci);
  }
}
