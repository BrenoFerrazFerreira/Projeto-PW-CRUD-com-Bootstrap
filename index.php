<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1 style="margin-top:10px">Dashboard</h1>
<hr />

<?php if ($db) : ?>

	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="customers/add.php" class="btn btn-secondary" style="width:150px; height:130px">
				<div class="row">
					<div class="col-xs-12 text-center" style="margin-top:15px">
						<i class="fas fa-plus-circle fa-4x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Novo Cliente</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2" style="margin-bottom:20px">
			<a href="customers" class="btn btn-light" style="width:150px; height:130px">
				<div class="row">
					<div class="col-xs-12 text-center" style="margin-top:15px">
						<i class="fa fa-user fa-4x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Clientes</p>
					</div>
				</div>
			</a>
		</div>
		<hr>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="produtos/add.php" class="btn btn-secondary" style="width:150px; height:130px">
				<div class="row">
					<div class="col-xs-12 text-center" style="margin-top:15px">
						<i class="fas fa-people-carry fa-4x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Novo Produto</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="produtos" class="btn btn-light" style="width:150px; height:130px">
				<div class="row">
					<div class="col-xs-12 text-center" style="margin-top:15px">
						<i class="fas fa-box fa-4x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Produtos</p>
					</div>
				</div>
			</a>
		</div>
	</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>