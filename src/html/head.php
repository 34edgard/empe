<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Bootstrap CSS -->
    <?php foreach($styles as $estyle): ?>
   <link href="src/css/<?= $estyle ?>.css" rel="stylesheet">
    <?php endforeach; ?>
</head>
<body class="body bg-white text-secondary ">
