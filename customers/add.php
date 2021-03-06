<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 id="actions">Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name"><b>Nome / Razão Social</b></label>
      <input type="text" class="form-control" name="customer[name]">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2"><b>CNPJ / CPF</b></label>
      <input type="text" class="form-control" name="customer[cpf_cnpj]">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3"><b>Data de Nascimento</b></label>
      <input type="date" class="form-control" name="customer[birthdate]">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1"><b>Endereço</b></label>
      <input type="text" class="form-control" name="customer[address]">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2"><b>Bairro</b></label>
      <input type="text" class="form-control" name="customer[hood]">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3"><b>CEP</b></label>
      <input type="text" class="form-control" name="customer[zip_code]">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3"><b>Data de Cadastro</b></label>
      <input type="date" class="form-control" name="customer[created]" disabled>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1"><b>Município</b></label>
      <input type="text" class="form-control" name="customer[city]">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2"><b>Telefone</b></label>
      <input type="text" class="form-control" name="customer[phone]">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3"><b>Celular</b></label>
      <input type="text" class="form-control" name="customer[mobile]">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3"><b>UF</b></label>
      <input type="text" class="form-control" name="customer[state]">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3"><b>Inscrição Estadual</b></label>
      <input type="text" class="form-control" name="customer[ie]">
    </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-secondary"><i class="fas fa-download"></i> Salvar</button>
      <a href="index.php" class="btn btn-light"><i class="fas fa-times"></i> Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>