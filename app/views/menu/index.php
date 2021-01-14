<div>
  <?php Flasher::flash(); ?>
</div>

<div>
  <form action="<?= BASEURL; ?>/menu/cari" method="post" >
    <input type="text" name="keyword" autocomplete="off">
    <button type="submit" id="tombolCari">Cari</button>
</form>
</div>

<button id="myBtn"><h3>Tambah Data Menu</h3></button>

<h3>Daftar Menu</h3>
<ul class="list_group">
    <?php foreach ($data['mn'] as $mn) : ?>
    <li><?= $mn['nama']; ?>
      <a href="<?= BASEURL; ?>/menu/hapus/<?= $mn['id'];?>" style="float:right; margin-left: 7px;" onclick="return confirm('yakin?');">hapus</a>
      <a href="<?= BASEURL; ?>/menu/ubah/<?= $mn['id'];?>" class="editBtn tampilModalUbah" style="float:right; margin-left: 7px;" data-id="<?= $mn['id']; ?>">ubah</a>
      <a href="<?= BASEURL; ?>/menu/detail/<?= $mn['id'];?>" style="float:right; margin-left: 7px;">detail</a>
    </li>
    <?php endforeach; ?>
</ul>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
      <!-- <h3>Tambah Data Menu</h3> -->

<div>
  <form id="formModal" action="<?= BASEURL; ?>/menu/tambah" method="post" >
    <!-- ////////////////////////// -->
    <input type="hidden" name="id" id="id">
    <!-- ////////////////////////// -->
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" >

    <label for="harga">Harga</label>
    <input type="number" id="harga" name="harga" >

    <input type="submit" value="Submit">
    </form>
    </div>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var editBtn = document.getElementsByClassName("editBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

for (var i = 0; i < editBtn.length; i++) {
  // When the user clicks the button, open the modal 
  editBtn[i].onclick = function(event) {
    event.preventDefault();
    modal.style.display = "block";
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>