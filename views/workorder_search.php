<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço <i class="fa-solid fa-chevron-right px-2"></i> Resultado Pesquisa</span>
</div>

<div class="forms">
	<form class="form-search-right" action="<?php echo BASE_URL; ?>workorder/search" method="post">
		<span class="mb-2 w-full flex">
			<input type="text" class="w-full" name="search" id="search" placeholder="Pesquisar Ordem de Serviço por Cliente, Placa, Chassi, Marca ou Modelo">
			<button class="hidden" type="submit">Enviar Pesquisa</button>
		</span>
	</form>
</div>

<?php if (isset($error) && !empty($error)) : ?>
    <div class="warning"><?php echo $error; ?></div>
<?php endif; ?>

<?php if ($list_search) : ?>
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
		<div class="w-1/12">Ação</div>
    </div>

    <?php foreach ($list_search as $order) : ?>
        <div class="table-data hover:bg-slate-200">
			<div class="w-3/12"><?php echo $order['customer']; ?></div>
			<div class="w-1/12"><?php echo $order['brand']; ?></div>
			<div class="w-1/12"><?php echo $order['model']; ?></div>
			<div class="w-1/12"><?php echo $order['year']; ?></div>
			<div class="w-1/12"><?php echo $order['license_plate']; ?></div>
			<div class="w-1/12"><?php echo $order['transmission']; ?></div>
			<div class="w-1/12"><?php echo $order['fuel']; ?></div>
			<div class="w-1/12"><?php echo $order['power']; ?></div>
			<div class="w-1/12"><?php echo ($order['status'] == 1) ? 'Concluído' : 'Pendente';?></div>	
			<div class="w-1/12">
				<a href="<?php echo BASE_URL; ?>workorder/edit/<?php echo $order['id']; ?>">Ver</a>
			</div>
		</div>

    <?php endforeach; ?>


<?php else : ?>
    <div class="input-line justify-center items-center py-5">
        <span>
            <i class="fas fa-exclamation-circle fa-2x mr-2"></i>
        </span>
        <span>Nenhum registro encontrado!</span>
    </div>
<?php endif; ?>