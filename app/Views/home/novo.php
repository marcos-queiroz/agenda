<header class="my-2">
  <h1>Novo Contato</h1>
  <hr>
</header>

<?php if(isset($erros) && !empty($erros)) { ?>
  <ul>
    <?php foreach ($erros as $field => $error) { ?>
      <li><?= "{$field}: {$error}" ?></li>
    <?php } ?>
  </ul>
<?php } ?>

<form action="<?= base_url('gravar') ?>" method="post">
  
  <input type="hidden" name="id" value="<?= $contato['id'] ?>">

  <div class="row">

    <div class="col-md-2">
      <label for="tipo">Tipo</label>
      <select name="tipo_contato_id" id="tipo" class="form-control">
        <option value="">Selecione...</option>
        <?php foreach ($tipos as $tipo) { ?>
          <option value="<?= $tipo['id'] ?>" <?= $tipo['id'] == $contato['tipo_contato_id'] ? 'selected' : '' ?> ><?= $tipo['nome'] ?></option>
        <?php } ?>
      </select>
    </div>
    
    <div class="col-md-3">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="<?= $contato['nome'] ?>" class="form-control">
    </div>
    
    <div class="col-md-2">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" id="telefone" value="<?= $contato['telefone'] ?>" class="form-control">
    </div>
    
    <div class="col-md-2">
      <label for="celular">Celular</label>
      <input type="text" name="celular" id="celular" value="<?= $contato['celular'] ?>" class="form-control">
    </div>
    
    <div class="col-md-3">
      <label for="email">e-mail</label>
      <input type="mail" name="email" id="email" value="<?= $contato['email'] ?>" class="form-control">
    </div>

    <div class="col-12 py-3">
      <button type="submit" class="btn btn-primary">Gravar</button>
    </div>
    
  </div>
</form>