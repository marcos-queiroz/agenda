<div class="card my-2">
  <div class="card-header">
    <h1 class="card-title"><?= $contato['id'] ? 'Editar' : 'Novo' ?> Contato</h1>
  </div>

  <form action="<?= base_url('gravar') ?>" method="post">
    <input type="hidden" name="id" value="<?= $contato['id'] ?>">

    <div class="card-boby container py-4">

      <?php if(isset($erros) && !empty($erros)) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <ul>
            <?php foreach ($erros as $field => $error) { ?>
              <li><?= "{$field}: {$error}" ?></li>
            <?php } ?>
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>
      
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
      </div>
    </div>

    <div class="card-footer">
      <div class="row">
        <div class="col-6">
          <?php if(previous_url() !== current_url()) { ?>
            <a class="btn btn-info text-white" href="<?= base_url(previous_url()) ?>">
              <i class="far fa-caret-square-left"></i>
            </a>
          <?php } ?>
        </div>
        <div class="col-6">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">
              <i class="far fa-save"></i> Gravar
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>