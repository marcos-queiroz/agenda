<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <title><?= $title ?></title>
</head>
<body class="dv-flex">
  
  <header>
    <?= $menu ?>
  </header>
  
  <div class="my-5">
    <div class="container py-5">
      <?php if(isset($msg) && !empty($msg)) {?>
        <script>alert('<?= $msg ?>')</script>
      <?php } ?>

      <?= $conteudo ?>
    </div>
  </div>

  <footer class="footer fixed-bottom mt-auto py-3 bg-dark">
    <div class="container">
      <span class="text-muted">Versão <?= $versao ?></span>
    </div>
  </footer>
  
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>