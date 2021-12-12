<?php
require_once('functions.php');
view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $produto['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
  <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
  <dt>Nome:</dt>
  <dd><?php echo $produto['nome']; ?></dd>

  <dt>Descrição:</dt>
  <dd><?php echo $produto['descricao']; ?></dd>

  <dt>Quantidade:</dt>
  <dd><?php echo $produto['quantidade']; ?></dd>

  <dt>Preço Unitário:</dt>
  <dd><?php
      $tel = "R$" . $produto['precounit'];
      echo $tel; ?></dd>
</dl>

<div id="actions" class="row">
  <div class="col-md-12">
  <button type="submit" class="btn btn-secondary"><i class="fas fa-user-edit"></i> Editar</button>
      <a href="index.php" class="btn btn-light"><i class="fas fa-hand-point-left"></i> Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>