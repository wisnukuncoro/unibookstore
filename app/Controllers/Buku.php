<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;
use App\Models\ModelPenerbit;
use App\Models\ModelPengadaan;

class Buku extends BaseController
{
  public function __construct()
  {
    $this->ModelBuku = new ModelBuku();
    $this->ModelPenerbit = new ModelPenerbit();
    $this->ModelPengadaan = new ModelPengadaan();
  }

  // public function index(): string
  // {
  //   $data = [
  //     'data_buku' => $this->ModelBuku->findAll(),
  //   ];

  //   return view('index', $data);
  // }

  public function index()
  {
    $pager = \Config\Services::pager();
    $kunci = $this->request->getVar('cari');

    if ($kunci) {
      $queryBuku = $this->ModelBuku->search($kunci);
      $queryPenerbit = $this->ModelPenerbit;
      $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan " . $queryBuku->affectedRows() . " Data";
    } else {
      $queryBuku = $this->ModelBuku;
      $queryPenerbit = $this->ModelPenerbit;
      $jumlah = "";
    }

    $data['data_buku'] = $queryBuku->paginate(10);
    $data['data_penerbit'] = $queryPenerbit->paginate(10);
    $data['pager_buku'] = $this->ModelBuku->pager;
    $data['pager_penerbit'] = $this->ModelPenerbit->pager;
    $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
    $data['jumlah'] = $jumlah;

    echo view('index', $data);
  }

  public function create()
  {
    $data = [
      'id_buku' => $this->request->getPost('id_buku'),
      'kategori' => $this->request->getPost('kategori'),
      'nama_buku' => $this->request->getPost('nama_buku'),
      'harga' => $this->request->getPost('harga'),
      'stok' => $this->request->getPost('stok'),
      'penerbit' => $this->request->getPost('penerbit'),
    ];
    $this->ModelBuku->create($data);
    return redirect()->to('#about');
  }

  public function update($id_buku)
  {
    $data = [
      'id_buku' => $id_buku,
      'kategori' => $this->request->getPost('kategori'),
      'nama_buku' => $this->request->getPost('nama_buku'),
      'harga' => $this->request->getPost('harga'),
      'stok' => $this->request->getPost('stok'),
      'penerbit' => $this->request->getPost('penerbit'),
    ];
    $this->ModelBuku->updateData($data);
    return redirect()->to('#about');
  }

  public function delete($id_buku)
  {
    $data = [
      'id_buku' => $id_buku,
    ];
    $this->ModelBuku->deleteData($data);
    return redirect()->to('#about');
  }
}
