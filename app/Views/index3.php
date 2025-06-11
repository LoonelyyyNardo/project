<?php
echo $this->extend('layout');
echo $this->section('content');

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Režiséři</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h1 class="mb-4">🎬 Režiséři</h1>

    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jméno</th>
                <th>Příjmení</th>
                <th>Datum narození</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reziseri as $reziser): ?>
                <tr>
                    <td><?= esc($reziser['id']) ?></td>
                    <td><?= esc($reziser['jmeno']) ?></td>
                    <td><?= esc($reziser['prijmeni']) ?></td>
                    <td><?= esc($reziser['narozena']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php echo $this->endSection();