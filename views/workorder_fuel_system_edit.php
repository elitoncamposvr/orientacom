<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $fuel_info['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Sistema de Combustível</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $fuel_info['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/fuelsystem_update/<?php echo $fuel_info['id']; ?>" method="post">
<input type="hidden" name="workorder_id" id="workorder_id" value="<?php echo $fuel_info['workorder_id'];?>">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-7/12">Itens</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        <div class="input-line">
            <div class="w-7/12 font-semibold">Sist. de combustível: bombas e conexões (vazamentos)</div>
            <div class="w-1/12">
                <select name="pumps_connections" id="pumps_connections">
                    <option value="1" <?php echo ($fuel_info['pumps_connections'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($fuel_info['pumps_connections'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($fuel_info['pumps_connections'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="pumps_connections_obs" id="pumps_connections_obs" class="w-full" value="<?php echo $fuel_info['pumps_connections_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sist. de combustível: Tanque, mangueiras e conexões (vazamentos)</div>
            <div class="w-1/12">
                <select name="tank_hoses" id="tank_hoses">
                    <option value="1" <?php echo ($fuel_info['tank_hoses'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($fuel_info['tank_hoses'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($fuel_info['tank_hoses'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="tank_hoses_obs" id="tank_hoses_obs" class="w-full" value="<?php echo $fuel_info['tank_hoses_obs'];?>">
            </div>
        </div>

    </div>


    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $fuel_info['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>