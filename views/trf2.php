<div class="breadcrumb">
	<span class="breadcrumb-title">TRF2</span>
	<span class="breadcrumb-btns">
		<span class="px-2">
			<a href="<?php echo BASE_URL; ?>trf2/create" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Novo</a>
		</span>
	</span>
</div>

<div class="forms">
	<form class="form-search-right" action="<?php echo BASE_URL; ?>trf2/search" method="post">
		<span class="mb-2 w-full flex">
			<input type="text" class="w-2/12 mr-1" name="search_id" id="search_id" placeholder="ID">
			<input type="text" class="w-2/12 mr-1" name="search_numero" id="search_numero" placeholder="Número de Precatório">
			<input type="text" class="w-2/12 mr-1" name="search_credor" id="search_credor" placeholder="Requerentes">
			<input type="text" class="w-2/12 mr-1" name="search_cpf_cnpj" id="search_cpf_cnpj" placeholder="CPF/CNPJ">
			<input type="text" class="w-2/12 mr-1" name="search_ano_proposta" id="search_ano_proposta" placeholder="Ano Proposta">
			<input type="text" class="w-2/12" name="search_status" id="search_status" placeholder="Status">
			<button class="hidden" type="submit">Enviar Pesquisa</button>
		</span>
	</form>
</div>

<?php if ($trf2_list) : ?>
	<div class="table-header">
		<div class="w-1/12">#</div>
		<div class="w-1/12">Ano Proposta</div>
		<div class="w-1/12">N&deg;. Precatório</div>
		<div class="w-1/12">Credor</div>
		<div class="w-1/12">CPF/CNPJ</div>
		<div class="w-1/12">Advogado</div>
		<div class="w-1/12">OAB</div>
		<div class="w-1/12">Requerido</div>
		<div class="w-1/12">Valor</div>
		<div class="w-1/12">Oficio</div>
		<div class="w-1/12">Status</div>
		<div class="w-1/12">Ação</div>
	</div>

	<?php foreach ($trf2_list as $trf2) : ?>
		<div class="table-data hover:bg-slate-200">
			<div class="w-1/12"><span><?php echo $trf2['ID']; ?></div>
            <div class="w-1/12"><?php echo $trf2['ANO_PROPOSTA']; ?></div>
			<div class="w-1/12"><?php echo $trf2['NUMERO_DO_PRECATORIO']; ?></div>
			<div class="w-1/12"><?php echo $trf2['CREDOR']; ?></div>
			<div class="w-1/12"><?php echo $trf2['CPF_CNPJ']; ?></div>
			<div class="w-1/12"><?php echo $trf2['ADVOGADO']; ?></div>
			<div class="w-1/12"><?php echo $trf2['OAB']; ?></div>
			<div class="w-1/12"><?php echo $trf2['REQUERIDO']; ?></div>
			<div class="w-1/12"><?php echo $trf2['VALOR']; ?></div>
			<div class="w-1/12"><?php echo $trf2['OFICIO']; ?></div>
			<div class="w-1/12 text-red-500"><?php echo $trf2['STATUS']; ?></div>
			<div class="w-1/12">
				<a href="<?php echo BASE_URL; ?>trf2/edit/<?php echo $trf2['ID']; ?>">Ver</a>
			</div>
		</div>

	<?php endforeach; ?>

	<?php if ($p_count > 1) { ?>
		<div class="pagination">
			<a class="pagination-item" href="<?php echo BASE_URL; ?>trf2?p=1">Primeira</a>
			<?php
			for ($q = $p - 5; $q <= $p - 1; $q++) {
				if ($q >= 1) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>trf2?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			} ?>
			<div class="pagination-item pg-active"><?php echo "$q"; ?></div>
			<?php for ($q = $p + 1; $q <= $p + 5; $q++) {
				if ($q <= $p_count) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>trf2?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			}
			?>
			<a class="pagination-item" href="<?php echo BASE_URL; ?>trf2?p=<?php echo $p_count; ?>">Última</a>
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