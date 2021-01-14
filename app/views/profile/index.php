<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <h3>My Profile</h3>
        <ul class="list-group">
          <?php foreach ($data['name'] as $name) : ?>
          <li class="list-group-item">
            <?= $name['name']  ?>
          </li>
          <?php endforeach; ?>
        </ul>
    </div>
  </div>
</div>
