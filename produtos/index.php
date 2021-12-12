<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2 style="margin-top:10px">Produtos</h2>
		</div>
		<div style="margin-top:10px" class="col-sm-6 text-right h2">
			<a class="btn btn-light" href="add.php" style="margin-left:270px"><i class="fas fa-people-carry"></i> Novo Produto</a>
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
			<th style="width:60px">ID</th>
			<th style="width:200px">Nome</th>
			<th style="width:300px">Descrição</th>
			<th style="width:140px">Quantidade</th>
			<th style="width:140px">Preço Unitário</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($produtos) : ?>
			<?php foreach ($produtos as $produto) : ?>
				<tr>
					<td><?php echo $produto['id']; ?></td>
					<td><?php echo $produto['nome']; ?></td>
					<td><?php echo $produto['descricao']; ?></td>
					<td><?php echo $produto['quantidade']; ?></td>
					<td><?php $tel = "R$" . $produto['precounit']; echo $tel; ?></td>
					<td class="actions text-right">
						<a href="view.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-eye"></i> Visualizar</a>
						<a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#delete-modal" data-customer="<?php echo $produto['id']; ?>">
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