<h1>Registrasi</h1>
<form class="" action="<?= MAINURL ?>/register/addUser" method="post">
  <ul>
    <li>
      <label for="name" class="form-label">Name</label>
      <input class="form-control" type="name" name="name" id="name">
    </li>
    <li>
      <label for="phone_number" class="form-label">Telephone</label>
      <input class="form-control" type="number" name="phone_number" id="phone_number">
    </li>
    <li>
      <label for="email" class="form-label">Email</label>
      <input class="form-control" type="email" name="email" id="email">
    </li>
    <li>
      <label for="password" class="form-label">Password</label>
      <input class="form-control" type="password" name="password" id="password">
    </li>
    <li>
      <label for="photo_user" class="form-label">Photo</label>
      <input class="form-control" type="file" id="photo_user" name="photo_user">
    </li>
    <!-- <li>
      <label for="password2">Konfirmasi Password</label>
      <input type="password" name="password2" id="password2">
    </li> -->
    <button type="submit" name="register">Registrasi</button>
  </ul>
</form>
