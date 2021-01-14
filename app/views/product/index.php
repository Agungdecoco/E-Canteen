<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#forModal">
        Tambah Barang
      </button>
      <br><br>
      <h3>Daftar Produk</h3>
        <ul class="list-group">
          <?php foreach ($data['produk'] as $produk) : ?>
          <li class="list-group-item">
            <?= $produk['product']  ?>
            <a href="<?= MAINURL ?>/product/deleteItem/<?= $produk['id'] ?>" class="badge bg-danger float-end ms-1">hapus</a>
            <a href="<?= MAINURL ?>/product/detail/<?= $produk['id'] ?>" class="badge bg-primary float-end ms-1">detail</a>
          </li>
          <?php endforeach; ?>
        </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Tambah Data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= MAINURL ?>/product/addItem" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price">
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Foto Barang</label>
            <input class="form-control" type="file" id="photo" name="photo">
          </div>
          <!-- <div class="form-group">
            <label for="type">Jenis Barang</label>
            <select class="form-select" id="type" name="type" aria-label="Default select example">
              <option selected>Jenis Barang</option>
              <option value="Makanan">Makanan</option>
              <option value="Minuman">Minuman</option>
            </select>
          </div> --> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
