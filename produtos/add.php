<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 id="actions">Novo Produto</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="name"><b>Nome</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[nome]">
    </div>

    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="campo2"><b>Descrição</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[descricao]">
    </div>

    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="campo3"><b>Quantidade</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[quantidade]">
    </div>
    
    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="campo1"><b>Preço Unitário</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[precounit]">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-secondary"><i class="fas fa-download"></i> Salvar</button>
      <a href="index.php" class="btn btn-light"><i class="fas fa-times"></i> Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>