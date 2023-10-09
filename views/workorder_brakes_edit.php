<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $brakes_info['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Freios</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $brakes_info['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/brakes_update/<?php echo $brakes_info['id']; ?>" method="post">
<input type="hidden" name="workorder_id" id="workorder_id" value="<?php echo $brakes_info['workorder_id'];?>">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-7/12">Itens</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        <div class="input-line">
            <div class="w-7/12 font-semibold">Nível do óleo de freio: (Teste de Resistividade)</div>
            <div class="w-1/12">
                <select name="oil_level" id="oil_level">
                    <option value="1" <?php echo ($brakes_info['oil_level'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['oil_level'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['oil_level'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="oil_level_obs" id="oil_level_obs" class="w-full" value="<?php echo $brakes_info['oil_level_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Mangueiras, flexíveis, conexões e dutos: (estado geral e vazamentos)</div>
            <div class="w-1/12">
                <select name="hose_flexible" id="hose_flexible">
                    <option value="1" <?php echo ($brakes_info['hose_flexible'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['hose_flexible'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['hose_flexible'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="hose_flexible_obs" id="hose_flexible_obs" class="w-full" value="<?php echo $brakes_info['hose_flexible_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-6/12 font-semibold">Pastilhas: (Estimativa de espessura)</div>
            <div class="w-1/12">
                <select name="brake_pads_estimated" id="brake_pads_estimated">
                    <option value="100" <?php echo ($brakes_info['brake_pads_estimated'] == 100) ? 'selected="selected"' : '';?>>100%</option>
                    <option value="90" <?php echo ($brakes_info['brake_pads_estimated'] == 90) ? 'selected="selected"' : '';?>>90%</option>
                    <option value="80" <?php echo ($brakes_info['brake_pads_estimated'] == 80) ? 'selected="selected"' : '';?>>80%</option>
                    <option value="70" <?php echo ($brakes_info['brake_pads_estimated'] == 70) ? 'selected="selected"' : '';?>>70%</option>
                    <option value="60" <?php echo ($brakes_info['brake_pads_estimated'] == 60) ? 'selected="selected"' : '';?>>60%</option>
                    <option value="50" <?php echo ($brakes_info['brake_pads_estimated'] == 50) ? 'selected="selected"' : '';?>>50%</option>
                    <option value="40" <?php echo ($brakes_info['brake_pads_estimated'] == 40) ? 'selected="selected"' : '';?>>40%</option>
                    <option value="30" <?php echo ($brakes_info['brake_pads_estimated'] == 30) ? 'selected="selected"' : '';?>>30%</option>
                    <option value="20" <?php echo ($brakes_info['brake_pads_estimated'] == 20) ? 'selected="selected"' : '';?>>20%</option>
                    <option value="10" <?php echo ($brakes_info['brake_pads_estimated'] == 10) ? 'selected="selected"' : '';?>>10%</option>
                    <option value="0" <?php echo ($brakes_info['brake_pads_estimated'] == 0) ? 'selected="selected"' : '';?>>0%</option>
                </select>
            </div>
            <div class="w-1/12">
                <select name="brake_pads" id="brake_pads">
                    <option value="1" <?php echo ($brakes_info['brake_pads'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['brake_pads'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['brake_pads'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="brake_pads_obs" id="brake_pads_obs" class="w-full" value="<?php echo $brakes_info['brake_pads_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-6/12 font-semibold">Discos: (Estimativa de espessura)</div>
            <div class="w-1/12">
                <select name="brake_discs_estimated" id="brake_discs_estimated">
                <option value="100" <?php echo ($brakes_info['brake_discs_estimated'] == 100) ? 'selected="selected"' : '';?>>100%</option>
                    <option value="90" <?php echo ($brakes_info['brake_discs_estimated'] == 90) ? 'selected="selected"' : '';?>>90%</option>
                    <option value="80" <?php echo ($brakes_info['brake_discs_estimated'] == 80) ? 'selected="selected"' : '';?>>80%</option>
                    <option value="70" <?php echo ($brakes_info['brake_discs_estimated'] == 70) ? 'selected="selected"' : '';?>>70%</option>
                    <option value="60" <?php echo ($brakes_info['brake_discs_estimated'] == 60) ? 'selected="selected"' : '';?>>60%</option>
                    <option value="50" <?php echo ($brakes_info['brake_discs_estimated'] == 50) ? 'selected="selected"' : '';?>>50%</option>
                    <option value="40" <?php echo ($brakes_info['brake_discs_estimated'] == 40) ? 'selected="selected"' : '';?>>40%</option>
                    <option value="30" <?php echo ($brakes_info['brake_discs_estimated'] == 30) ? 'selected="selected"' : '';?>>30%</option>
                    <option value="20" <?php echo ($brakes_info['brake_discs_estimated'] == 20) ? 'selected="selected"' : '';?>>20%</option>
                    <option value="10" <?php echo ($brakes_info['brake_discs_estimated'] == 10) ? 'selected="selected"' : '';?>>10%</option>
                    <option value="0" <?php echo ($brakes_info['brake_discs_estimated'] == 0) ? 'selected="selected"' : '';?>>0%</option>
                </select>
            </div>
            <div class="w-1/12">
                <select name="brake_discs" id="brake_discs">
                    <option value="1" <?php echo ($brakes_info['brake_discs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['brake_discs'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['brake_discs'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="brake_discs_obs" id="brake_discs_obs" class="w-full" value="<?php echo $brakes_info['brake_discs_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Pinças do freio</div>
            <div class="w-1/12">
                <select name="brake_calipers" id="brake_calipers">
                    <option value="1" <?php echo ($brakes_info['brake_calipers'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['brake_calipers'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['brake_calipers'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="brake_calipers_obs" id="brake_calipers_obs" class="w-full" value="<?php echo $brakes_info['brake_calipers_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Placas de cobertura</div>
            <div class="w-1/12">
                <select name="cover_plates" id="cover_plates">
                    <option value="1" <?php echo ($brakes_info['cover_plates'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['cover_plates'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['cover_plates'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cover_plates_obs" id="cover_plates_obs" class="w-full" value="<?php echo $brakes_info['cover_plates_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Condição do penal e regulagem do freio de estacionamento</div>
            <div class="w-1/12">
                <select name="pedal_condition" id="pedal_condition">
                    <option value="1" <?php echo ($brakes_info['pedal_condition'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($brakes_info['pedal_condition'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($brakes_info['pedal_condition'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="pedal_condition_obs" id="pedal_condition_obs" class="w-full" value="<?php echo $brakes_info['pedal_condition_obs'];?>">
            </div>
        </div>
    </div>

    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $brakes_info['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>