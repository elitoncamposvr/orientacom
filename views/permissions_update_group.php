<div class="breadcrumb ">
	<span class="breadcrumb-title">Usuários <i class="fa-solid fa-chevron-right px-2"></i> Editar Grupo de Permissões</span>
</div>



<form class="w-full flex flex-col" method="POST" action="<?php echo BASE_URL; ?>users/permissions_update_group/<?php echo $group_info['id']; ?>">
	<div class="input-line mb-2">
		<div class="w-1/2">
			<label for="name">Nome do grupo de permissões</label>
			<input class="w-full" type="text" name="name" id="name" value="<?php echo $group_info['name']; ?>" required>
		</div>
	</div>

	<div class="input-line">
		<?php foreach ($permissions_list as $p) : ?>
			<div class="bg-slate-200 mr-2 w-96 px-2.5 rounded-md mb-2 py-2">
				<label for="p_<?php echo $p['id']; ?>">
					<p class="font-semibold"><input type="checkbox" name="permissions[]" value="<?php echo $p['id']; ?>" id="p_<?php echo $p['id']; ?>" <?php echo (in_array($p['id'], $group_info['params'])) ? 'checked="checked"' : ''; ?> /> <?php echo $p['permission_title']; ?></p>
					<div class="rounded-md bg-slate-300 py-1.5 text-center"><?php echo $p['name']; ?></div>
				</label>
			</div>
		<?php endforeach; ?>
	</div>


	<div class="input-line justify-center">
		<button class="btn" type="submit">
			Editar Grupo Permissão
		</button>
	</div>
</form>