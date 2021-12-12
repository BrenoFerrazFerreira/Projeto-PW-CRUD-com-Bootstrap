<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 id="actions">Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $produto['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name"><b>Nome</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[nome]" value="<?php echo $produto['nome']; ?>">
    </div>

    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="campo2"><b>Descrição</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[descricao]" value="<?php echo $produto['descricao']; ?>">
    </div>

    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="campo3"><b>Quantidade</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[quantidade]" value="<?php echo $produto['quantidade']; ?>">
    </div>
    
    <div class="form-group col-md-7" style="margin-top:10px">
      <label for="campo3"><b>Preço Unitário</b></label>
      <input style="margin-top:10px" type="text" class="form-control" name="produto[precounit]" value="<?php echo $produto['precounit']; ?>">
    </div>

    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-secondary"><i class="fas fa-download"></i> Salvar</button>
        <a href="index.php" class="btn btn-light"><i class="fas fa-times"></i> Cancelar</a>
      </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>