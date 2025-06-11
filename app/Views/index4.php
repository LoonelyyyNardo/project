<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Přihlášení</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h2 class="mb-4">🔐 Přihlášení</h2>

    <?php if (session()->getFlashdata('chyba')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('chyba') ?>
        </div>
    <?php endif; ?>

    <form action="/login" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="email" class="form-label">Emailová adresa</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label for="heslo" class="form-label">Heslo</label>
            <input type="password" name="heslo" id="heslo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Přihlásit se</button>
    </form>
</div>

</body>
</html>
<?php echo $this->endSection();