<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenerbit extends Model
{
  protected $table = 'tabel_penerbit';
  protected $primarykey = 'id_penerbit';

  public function create($data)
  {
    $this->db->table('tabel_penerbit')->insert($data);
  }

  public function updateData($data)
  {
    $this->db->table('tabel_penerbit')->where('id_penerbit', $data['id_penerbit'])->update($data);
  }

  public function deleteData($data)
  {
    $this->db->table('tabel_penerbit')->where('id_penerbit', $data['id_penerbit'])->delete($data);
  }

  public function search($kunci) {
  	return $this->table('tabel_penerbit')->like('nama_penerbit', $kunci);
  }
}
