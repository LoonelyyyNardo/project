<?php
echo $this->extend('layout');
echo $this->section('content');
?>
<html>
    <head>
        <style>
        body {
  background-color: #f5f5f5;
  font-family: 'Segoe UI', sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  margin: 20px;
}

.sidebar {
  width: 200px;
  margin-right: 30px;
  background-color: #fff;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
  height: fit-content;
  position: sticky;
  top: 20px;
}

.sidebar h3 {
  margin-top: 0;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar li {
  margin: 8px 0;
}

.sidebar a {
  text-decoration: none;
  color: #007BFF;
}

.sidebar a:hover {
  text-decoration: underline;
}

.content {
  flex: 1;
}

.film-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 40px;
}

.film-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  padding: 15px;
  width: 250px;
}

.film-card h3 {
  margin-top: 0;
  font-size: 18px;
}

.film-card p {
  margin: 5px 0;
}
</style>
    </head>
    <body>
<div class="container">
  <div class="sidebar">
    <h3>Žánry</h3>
    <ul>
      <?php foreach ($zanry as $zanr): ?>
        <li><a href="#zanr<?= $zanr->id ?>"><?= esc($zanr->nazev_zanru) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="content">
    <?php foreach ($zanry as $zanr): ?>
      <h2 id="zanr<?= $zanr->id ?>"><?= esc($zanr->nazev_zanru) ?></h2>
      <div class="film-grid">
        <?php foreach ($filmy as $film): ?>
          <?php if ($film->zanr_id == $zanr->id): ?>
            <div class="film-card">
              <h3><?= esc($film->nazev) ?> (<?= esc($film->rok_vydani) ?>)</h3>
              <p><strong>Hodnocení:</strong> <?= esc($film->hodnoceni) ?> ⭐</p>
              <p><strong>Délka:</strong> <?= esc($film->delka_filmu) ?> min</p>
              <p><strong>Režisér:</strong> <?= esc($film->reziser_jmeno) ?> <?= esc($film->reziser_prijmeni) ?></p>
              <p><strong>Herec:</strong> <?= esc($film->herec_jmeno) ?> <?= esc($film->herec_prijmeni) ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
<?php echo $this->endSection();