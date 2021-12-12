<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2 style="margin-top:10px">Clientes</h2>
		</div>
		<div style="margin-top:10px" class="col-sm-6 text-right h2">
			<a class="btn btn-light" href="add.php" style="margin-left:250px"><i class="fa fa-user-plus"></i> Novo Cliente</a>
			<a class="btn btn-secondary" href="index.php"><i class="fa fa-sync-alt"></i> Atualizar</a>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th style="width:30%">Nome</th>
			<th>CPF/CNPJ</th>
			<th>Telefone</th>
			<th>Atualizado em</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($customers) : ?>
			<?php foreach ($customers as $customer) : ?>
				<tr>
					<td><?php echo $customer['id']; ?></td>
					<td><?php echo $customer['name']; ?></td>
					<td><?php $tel = substr($customer['cpf_cnpj'], 0, 3) . "." . substr($customer['cpf_cnpj'], 3, 3) . "." . substr($customer['cpf_cnpj'], 6, 3) . "-" . substr($customer['cpf_cnpj'], 9, 2);
      echo $tel; ?></td>
					<td><?php
      $tel = "(" . substr($customer['phone'], 0, 2) . ")" . substr($customer['phone'], 2, 5) . "-" . substr($customer['phone'], 7, 11);
      echo $tel; ?></td>
					<td><?php echo date_format (date_create ($customer['modified'], new DateTimeZone("America/Sao_Paulo")), "d/m/Y - H:i:s"); ?></td>
					<td class="actions text-right">
						<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-eye"></i> Visualizar</a>
						<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-user-edit"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else : ?>
			<tr>
				<td colspan="6">Nenhum registro encontrado.</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>