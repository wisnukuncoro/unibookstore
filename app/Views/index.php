<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Unibook Store</title>
    <link rel="icon" type="image/x-icon" href="public/assets/favicon.ico">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">UNIBOOK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#about">Admin</a></li>
            <li class="nav-item"><a class="nav-link" href="#pengadaan">Pengadaan</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
          <div class="text-center">
            <h1 class="mx-auto my-0 text-uppercase">UNIBOOK</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Online bookstore that provides various types of books from the best authors in the country</h2>
            <a class="btn btn-primary" href="#about">Display Book Data</a>
          </div>
        </div>
      </div>
    </header>

    <!-- About-->
    <section class="about-section text-center" id="about">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-12">
            <h2 class="text-white mb-4">Book List</h2>
            <table class="table table-dark table-striped table-borderless">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Buku</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Nama Buku</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Penerbit</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($data_buku_search as $data):
                ?>
                <tr class="align-middle">
                  <th scope="row"><?= $no ?></th>
                  <td><?= $data['id_buku'] ?></td>
                  <td><?= $data['kategori'] ?></td>
                  <td><?= $data['nama_buku'] ?></td>
                  <td><?= $data['harga'] ?></td>
                  <td><?= $data['stok'] ?></td>
                  <td><?= $data['penerbit'] ?></td>
                </tr>
                <?php
                  $no++;
                  endforeach;
                ?>
              </tbody>
            </table>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#search">Cari Buku</button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>

    <!-- Pengadaan -->
    <section class="about-section text-center" id="buku">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-12">
            <h2 class="text-white mb-4">Book List</h2>
            <table class="table table-dark table-striped table-borderless">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Buku</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Nama Buku</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Penerbit</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($data_buku as $data):
                ?>
                <tr class="align-middle">
                  <th scope="row"><?= $no ?></th>
                  <td><?= $data['id_buku'] ?></td>
                  <td><?= $data['kategori'] ?></td>
                  <td><?= $data['nama_buku'] ?></td>
                  <td><?= $data['harga'] ?></td>
                  <td><?= $data['stok'] ?></td>
                  <td><?= $data['penerbit'] ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm btn-flat" data-bs-toggle="modal" data-bs-target="#update<?= $data['id_buku']; ?>"><i class="fas fa-pencil-alt"></i></button>
                  </td>
                  <td>
                    <button class="btn btn-danger btn-sm btn-flat" data-bs-toggle="modal" data-bs-target="#delete<?= $data['id_buku']; ?>"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <?php
                  $no++;
                  endforeach;
                ?>
              </tbody>
            </table>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Tambah Data Buku</button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>

    <section class="about-section text-center" id="penerbit">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-12">
            <h2 class="text-white mb-4">Publisher List</h2>
            <table class="table table-dark table-striped table-borderless">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Penerbit</th>
                  <th scope="col">Nama Penerbit</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kota</th>
                  <th scope="col">Telepon</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($data_penerbit as $data):
                ?>
                <tr class="align-middle">
                  <th scope="row"><?= $no ?></th>
                  <td><?= $data['id_penerbit'] ?></td>
                  <td><?= $data['nama_penerbit'] ?></td>
                  <td><?= $data['alamat'] ?></td>
                  <td><?= $data['kota'] ?></td>
                  <td><?= $data['telepon'] ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm btn-flat" data-bs-toggle="modal" data-bs-target="#update<?= $data['id_penerbit']; ?>"><i class="fas fa-pencil-alt"></i></button>
                  </td>
                  <td>
                    <button class="btn btn-danger btn-sm btn-flat" data-bs-toggle="modal" data-bs-target="#delete<?= $data['id_penerbit']; ?>"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <?php
                  $no++;
                  endforeach;
                ?>
              </tbody>
            </table>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPublisher">Tambah Data Penerbit</button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>

    <section class="about-section text-center" id="pengadaan">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-12">
            <h2 class="text-white mb-4">List of books that must be purchased immediately</h2>
            <table class="table table-dark table-striped table-borderless">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Penerbit</th>
                  <th scope="col">Nama Penerbit</th>
                  <th scope="col">Nama Buku</th>
                  <th scope="col">Stok</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($data_buku as $data):
                    if ($data['stok'] > 20):
                      continue;
                    endif;
                ?>
                <tr class="align-middle">
                  <th scope="row"><?= $no ?></th>
                  <td><?= $data['id_buku'] ?></td>
                  <td><?= $data['nama_buku'] ?></td>
                  <td><?= $data['penerbit'] ?></td>
                  <td><?= $data['stok'] ?></td>
                </tr>
                <?php
                  $no++;
                  endforeach;
                ?>
              </tbody>
            </table>
            <br>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>

    <!-- Signup-->
    <section class="signup-section" id="signup">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
              <!-- Email address input-->
              <div class="row input-group-newsletter">
                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
              </div>
              <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
              <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
              <!-- Submit success message-->
              <!---->
              <!-- This is what your users will see when the form-->
              <!-- has successfully submitted-->
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3 mt-2 text-white">
                  <div class="fw-bolder">Form submission successful!</div>
                  To activate this form, sign up at
                  <br />
                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
              </div>
              <!-- Submit error message-->
              <!---->
              <!-- This is what your users will see when there is-->
              <!-- an error submitting the form-->
              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4 mx-auto" />
                <div class="small text-black-50">Dago Pojok, Coblong, Bandung 40135</div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4 mx-auto" />
                <div class="small text-black-50"><a href="#!">team@unibook.com</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4 mx-auto" />
                <div class="small text-black-50">+62 (21) 902-8832</div>
              </div>
            </div>
          </div>
        </div>
        <div class="social d-flex justify-content-center">
          <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
          <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
          <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
      <div class="container px-4 px-lg-5">Copyright &copy; Unibook 2023</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>


<!-- Modal -->

<!-- Create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Tambah Data Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open('Buku/create') ?>
      <div class="modal-body">
        <div class="mb-3">
          <label for="id_buku" class="col-form-label">ID Buku</label>
          <input type="text" class="form-control" id="id_buku" name="id_buku">
        </div>
        <div class="mb-3">
          <label for="kategori" class="col-form-label">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori">
        </div>
        <div class="mb-3">
          <label for="nama_buku" class="col-form-label">Nama Buku</label>
          <input type="text" class="form-control" id="nama_buku" name="nama_buku">
        </div>
        <div class="mb-3">
          <label for="harga" class="col-form-label">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div class="mb-3">
          <label for="stok" class="col-form-label">Stok</label>
          <input type="text" class="form-control" id="stok" name="stok">
        </div>
        <div class="mb-3">
          <label for="penerbit" class="col-form-label">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>

<!-- Create Publisher -->
<div class="modal fade" id="createPublisher" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Tambah Data Penerbit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open('Penerbit/create') ?>
      <div class="modal-body">
        <div class="mb-3">
          <label for="id_penerbit" class="col-form-label">ID Penerbit</label>
          <input type="text" class="form-control" id="id_penerbit" name="id_penerbit">
        </div>
        <div class="mb-3">
          <label for="nama_penerbit" class="col-form-label">Nama Penerbit</label>
          <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit">
        </div>
        <div class="mb-3">
          <label for="alamat" class="col-form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
          <label for="kota" class="col-form-label">Kota</label>
          <input type="text" class="form-control" id="kota" name="kota">
        </div>
        <div class="mb-3">
          <label for="telepon" class="col-form-label">Telepon</label>
          <input type="text" class="form-control" id="telepon" name="telepon">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>

<!-- Update -->
<?php foreach ($data_buku as $data): ?>
  <div class="modal fade" id="update<?= $data['id_buku']; ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Edit Data Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('Buku/update/' . $data['id_buku']) ?>
        <div class="modal-body">
          <div class="mb-3">
            <label for="id_buku" class="col-form-label">ID Buku</label>
            <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $data['id_buku']; ?>">
          </div>
          <div class="mb-3">
            <label for="kategori" class="col-form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $data['kategori']; ?>">
          </div>
          <div class="mb-3">
            <label for="nama_buku" class="col-form-label">Nama Buku</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?= $data['nama_buku']; ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="col-form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga']; ?>">
          </div>
          <div class="mb-3">
            <label for="stok" class="col-form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" value="<?= $data['stok']; ?>">
          </div>
          <div class="mb-3">
            <label for="penerbit" class="col-form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data['penerbit']; ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- Update Publisher -->
<?php foreach ($data_penerbit as $data): ?>
  <div class="modal fade" id="update<?= $data['id_penerbit']; ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Edit Data Penerbit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('Penerbit/update/' . $data['id_penerbit']) ?>
        <div class="modal-body">
          <div class="mb-3">
            <label for="id_penerbit" class="col-form-label">ID penerbit</label>
            <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?= $data['id_penerbit']; ?>">
          </div>
          <div class="mb-3">
            <label for="nama_penerbit" class="col-form-label">Nama Penerbit</label>
            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?= $data['nama_penerbit']; ?>">
          </div>
          <div class="mb-3">
            <label for="alamat" class="col-form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat']; ?>">
          </div>
          <div class="mb-3">
            <label for="kota" class="col-form-label">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" value="<?= $data['kota']; ?>">
          </div>
          <div class="mb-3">
            <label for="telepon" class="col-form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $data['telepon']; ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- Delete -->
<?php foreach ($data_buku as $data): ?>
  <div class="modal fade" id="delete<?= $data['id_buku']; ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Hapus Data Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin Untuk Menghapus Data Buku Dengan Judul: <?= $data['nama_buku']; ?>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="<?= 'Buku/delete/' . $data['id_buku'] ?>" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- Delete Publisher-->
<?php foreach ($data_penerbit as $data): ?>
  <div class="modal fade" id="delete<?= $data['id_penerbit']; ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Hapus Data Penerbit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin Untuk Menghapus Data Penerbit Dengan Nama: <?= $data['nama_penerbit']; ?>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="<?= 'penerbit/delete/' . $data['id_penerbit'] ?>" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- Cari Data -->
<form method="GET" action="" class="form-group">
<div class="modal fade" id="search" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Cari Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action=""></form>
      <div class="modal-body">
        <div class="mb-3">
          <label for="nama_buku" class="col-form-label">Nama Buku</label>
          <input type="text" class="form-control" id="nama_buku" name="cari">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Cari</button>
      </div>
    </div>
  </div>
</div>
</form>