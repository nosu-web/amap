<div class="container my-5">
    <form class="form-add mx-auto" action="add.php" method="post">
        <?=$formError?>
        <div class="mb-3">
            <label for="polygonName" class="form-label">Название учатска</label>
            <input type="text" name="polygonName" class="form-control" id="polygonName">
        </div>
        <div class="mb-3">
            <label for="polygonDensity" class="form-label">Плотность произрастания амброзии</label>
            <br>
            <input type="range" name="polygonDensity" id="polygonDensity">
        </div>
        <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
    </form>
</div>