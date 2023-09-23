<div class="breadcrumb">
	<span class="breadcrumb-title">Ordem de Serviço</span>
	<span class="breadcrumb-btns">
		<span>
			<a href="<?php echo BASE_URL; ?>workorder/create" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Novo</a>
		</span>
	</span>
</div>

<div class="forms">
	<form class="form-search-right" action="<?php echo BASE_URL; ?>workorder/search" method="post">
		<span class="mb-2 w-full flex">
			<input type="text" class="w-full" name="search" id="search" placeholder="Pesquisar Ordem de Serviço por Cliente, Placa, Chassi, Marca ou Modelo">
			<button class="hidden" type="submit">Enviar Pesquisa</button>
		</span>
	</form>
</div>

<?php if ($order_list) : ?>
	<div class="table-header">
		<div class="w-3/12">Cliente</div>
		<div class="w-1/12">Marca</div>
		<div class="w-1/12">Modelo</div>
		<div class="w-1/12">Ano</div>
		<div class="w-1/12">Placa</div>
		<div class="w-1/12">Transmissão</div>
		<div class="w-1/12">Combustível</div>
		<div class="w-1/12">Potência</div>
		<div class="w-1/12">Status</div>
		<div class="w-1/12 text-center">Ação</div>
	</div>

	<?php foreach ($order_list as $order) : ?>
		<div class="table-data hover:bg-slate-200">
			<div class="w-3/12"><?php echo $order['customer']; ?></div>
			<div class="w-1/12"><?php echo $order['brand']; ?></div>
			<div class="w-1/12"><?php echo $order['model']; ?></div>
			<div class="w-1/12"><?php echo $order['year']; ?></div>
			<div class="w-1/12"><?php echo $order['license_plate']; ?></div>
			<div class="w-1/12"><?php echo $order['transmission']; ?></div>
			<div class="w-1/12"><?php echo $order['fuel']; ?></div>
			<div class="w-1/12"><?php echo $order['power']; ?></div>
			<div class="w-1/12"><?php echo ($order['status'] == 1) ? 'Concluído' : 'Pendente'; ?></div>
			<div class="w-1/12 text-center">
				<a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $order['id']; ?>">
					<i class="fa-solid fa-up-right-from-square fa-lg"></i>
				</a>
			</div>
		</div>

	<?php endforeach; ?>

	<?php if ($p_count > 1) { ?>
		<div class="pagination">
			<a class="pagination-item" href="<?php echo BASE_URL; ?>workorder?p=1">Primeira</a>
			<?php
			for ($q = $p - 5; $q <= $p - 1; $q++) {
				if ($q >= 1) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>workorder?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			} ?>
			<div class="pagination-item pg-active"><?php echo "$q"; ?></div>
			<?php for ($q = $p + 1; $q <= $p + 5; $q++) {
				if ($q <= $p_count) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>workorder?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			}
			?>
			<a class="pagination-item" href="<?php echo BASE_URL; ?>workorder?p=<?php echo $p_count; ?>">Última</a>
		</div>

	<?php } ?>

<?php else : ?>
	<div class="input-line justify-center items-center py-5">
		<span>
			<i class="fas fa-exclamation-circle fa-2x mr-2"></i>
		</span>
		<span>Nenhum registro encontrado!</span>
	</div>
<?php endif; ?>