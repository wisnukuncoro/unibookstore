<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPenerbit;

class Penerbit extends BaseController
{
  public function __construct()
  {
    $this->ModelPenerbit = new ModelPenerbit();
  }
    
  public function create()
  {
    $data = [
      'id_penerbit' => $this->request->getPost('id_penerbit'),
      'nama_penerbit' => $this->request->getPost('nama_penerbit'),
      'alamat' => $this->request->getPost('alamat'),
      'kota' => $this->request->getPost('kota'),
      'telepon' => $this->request->getPost('telepon'),
    ];
    $this->ModelPenerbit->create($data);
    return redirect()->to('#penerbit');
  }

  public function update($id_penerbit)
  {
    $data = [
      'id_penerbit' => $id_penerbit,
      'nama_penerbit' => $this->request->getPost('nama_penerbit'),
      'alamat' => $this->request->getPost('alamat'),
      'kota' => $this->request->getPost('kota'),
      'telepon' => $this->request->getPost('telepon'),
    ];
    $this->ModelPenerbit->updateData($data);
    return redirect()->to('#penerbit');
  }

  public function delete($id_penerbit)
  {
    $data = [
      'id_penerbit' => $id_penerbit,
    ];
    $this->ModelPenerbit->deleteData($data);
    return redirect()->to('#penerbit');
  }
}
