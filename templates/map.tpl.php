<div class="row">
  <div class="col p-0">
    <div id="mapid"></div>
    <button type="button" class="toggle-btn btn btn-success py-1 position-absolute top-50 start-100 translate-middle">
      <i class="bi bi-gear"></i>
    </button>
  </div>
  <div class="sidebar p-4" id="sidebar-wrapper">
    <div class="mb-3">
      <label for="polygonDensity" class="form-label">Плотность кустов (шт/м2)</label>
      <br>
      <input type="range" name="polygonDensity" id="polygonDensity" value="1" min="1" max="10" oninput="this.nextElementSibling.value = this.value">
      <output class="badge rounded-pill bg-primary">1</output>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary" id="buttonFilter">Применить</button>
    </div>
  </div>
</div>