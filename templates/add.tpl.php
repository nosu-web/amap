<div class="container my-5">
  <form class="form-add mx-auto" action="add.php" method="post">
    <?= $formError ?>
    <div id="map_draw" class="mb-3"></div>
    <div class="mb-3">
      <label for="polygonDescription" class="form-label">Описание</label>
      <input type="text" name="polygonDescription" class="form-control" id="polygonDescription">
    </div>
    <div class="mb-3">
      <label for="polygonDensity" class="form-label">Плотность кустов (шт/м2)</label>
      <br>
      <input type="range" name="polygonDensity" id="polygonDensity" value="1" min="1" max="10" oninput="this.nextElementSibling.value = this.value">
      <output class="badge rounded-pill bg-primary">1</output>
    </div>
    <div class="mb-3">
      <select class="form-select" name="polygonStatus" id="polygonStatus"><?= $statusOptions ?></select>
    </div>
    <input type="hidden" name="polygonPoints" id="polygonPoints">
    <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
  </form>
</div>