<?php
echo $this->extend('layout');
echo $this->section('content');
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Seznam filmů</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h1 class="mb-4">🎬 Seznam filmů</h1>

    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Název</th>
                <th>Rok</th>
                <th>Délka (min)</th>
                <th>Hodnocení</th>
                <th>Režisér ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmy as $film): ?>
                <tr>
                    <td><?= esc($film['id']) ?></td>
                    <td><?= esc($film['nazev']) ?></td>
                    <td><?= esc($film['rok_vydani']) ?></td>
                    <td><?= esc($film['delka_filmu']) ?></td>
                    <td><?= esc($film['hodnoceni']) ?></td>
                    <td><?= esc($film['reziser_id']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php echo $this->endSection();