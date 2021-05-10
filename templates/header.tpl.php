<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
        <a class="navbar-brand" href="/"><?=SITE_NAME?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Показать меню">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Карта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">О проекте</a>
                </li>
                <?php if($_SESSION["name"]): ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Выход</a>
                </li>
                <? endif; ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-success" href="add.php" role="button">Добавить участок</a>
                </li>
            </ul>
        </div>
    </nav>
</header>