<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Moje ČSFD – Úvodní stránka</title>
    <link rel="stylesheet" href="<?= base_url('assets/home.css') ?>">

    <style>
    body {
    background: linear-gradient(to right, #2c3e50, #3498db);
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
    color: #fff;
}

.welcome-box {
    max-width: 700px;
    margin: 80px auto;
    background-color: rgba(0,0,0,0.6);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 0 30px rgba(0,0,0,0.3);
}

h1 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    line-height: 1.6;
}

ul {
    list-style: none;
    padding: 0;
}

ul li::before {
    content: "🎥 ";
    margin-right: 5px;
}

.footer {
    margin-top: 30px;
    text-align: center;
    font-size: 14px;
    color: #bbb;
}
</style>

</head>
<body>
    <div class="welcome-box">
        <h1> Vítej na Moje ČSFD!</h1>
        <p>Tento projekt je školní databáze filmů inspirovaná portálem ČSFD. Můžeš zde:</p>
        <ul>
            <li> Prohlížet seznam filmů</li>
            <li> Přidávat nové filmy</li>
            <li> Později psát recenze</li>
            <li> Spravovat herce, režiséry a žánry</li>
        </ul>
        <p>Celý projekt běží na PHP s frameworkem CodeIgniter a napojenou databází.</p>
    </div>
</body>
</html>

<?php echo $this->endSection();