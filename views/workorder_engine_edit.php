<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $engine_info['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Motor</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $engine_info['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/engine_update/<?php echo $engine_info['id']; ?>" method="post">
<input type="hidden" name="workorder_id" id="workorder_id" value="<?php echo $engine_info['workorder_id']; ?>">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-7/12">Itens</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        <div class="input-line">
            <div class="w-7/12 font-semibold">Correia total: (estado e folga)</div>
            <div class="w-1/12">
                <select name="straps" id="straps">
                    <option value="1" <?php echo ($engine_info['straps'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['straps'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['straps'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="straps_obs" id="straps_obs" class="w-full" value="<?php echo $engine_info['straps_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Nível de óleo do motor; filtro de óleo (vazamentos).</div>
            <div class="w-1/12">
                <select name="oil_level" id="oil_level">
                    <option value="1" <?php echo ($engine_info['oil_level'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['oil_level'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['oil_level'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="oil_level_obs" id="oil_level_obs" class="w-full" value="<?php echo $engine_info['oil_level_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sistema de arrefecimento (funcionamento geral e vazamentos)</div>
            <div class="w-1/12">
                <select name="cooling" id="cooling">
                    <option value="1" <?php echo ($engine_info['cooling'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['cooling'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['cooling'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cooling_obs" id="cooling_obs" class="w-full" value="<?php echo $engine_info['cooling_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Nível do líquido do reservatório de expansão</div>
            <div class="w-1/12">
                <select name="tank_liquid_level" id="tank_liquid_level">
                    <option value="1" <?php echo ($engine_info['tank_liquid_level'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['tank_liquid_level'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['tank_liquid_level'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="tank_liquid_level_obs" id="tank_liquid_level_obs" class="w-full" value="<?php echo $engine_info['tank_liquid_level_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Estado visual do líquido de arrefecimento: (ecológico/ ferrugem...)</div>
            <div class="w-1/12">
                <select name="coolant_status" id="coolant_status">
                    <option value="1" <?php echo ($engine_info['coolant_status'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['coolant_status'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['coolant_status'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="coolant_status_obs" id="coolant_status_obs" class="w-full" value="<?php echo $engine_info['coolant_status_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Mangueiras, flexíveis, conexões e dutos do circuito arrefecimento</div>
            <div class="w-1/12">
                <select name="hoses_coolant" id="hoses_coolant">
                    <option value="1" <?php echo ($engine_info['hoses_coolant'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['hoses_coolant'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['hoses_coolant'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="hoses_coolant_obs" id="hoses_coolant_obs" class="w-full" value="<?php echo $engine_info['hoses_coolant_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Radiadores (estado geral, amassamentos, vazamentos)</div>
            <div class="w-1/12">
                <select name="radiator" id="radiator">
                    <option value="1" <?php echo ($engine_info['radiator'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['radiator'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['radiator'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="radiator_obs" id="radiator_obs" class="w-full" value="<?php echo $engine_info['radiator_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ventoinhas do circuito de arrefecimento (ruído e funcionamento)</div>
            <div class="w-1/12">
                <select name="fan_coolant" id="fan_coolant">
                    <option value="1" <?php echo ($engine_info['fan_coolant'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['fan_coolant'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['fan_coolant'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="fan_coolant_obs" id="fan_coolant_obs" class="w-full" value="<?php echo $engine_info['fan_coolant_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Bomba d'água (ruído e vazamentos)</div>
            <div class="w-1/12">
                <select name="water_pump" id="water_pump">
                    <option value="1" <?php echo ($engine_info['water_pump'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['water_pump'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['water_pump'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="water_pump_obs" id="water_pump_obs" class="w-full" value="<?php echo $engine_info['water_pump_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Cabos de velas e bobinas:</div>
            <div class="w-1/12">
                <select name="cables_plugs" id="cables_plugs">
                    <option value="1" <?php echo ($engine_info['cables_plugs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['cables_plugs'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['cables_plugs'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cables_plugs_obs" id="cables_plugs_obs" class="w-full" value="<?php echo $engine_info['cables_plugs_obs'];?>">
            </div>
        </div>
        
        <div class="input-line">
            <div class="w-6/12 font-semibold">Sistema de Transmissão</div>
            <div class="w-1/12">
                <select name="transmission_system_type" id="transmission_system_type">
                    <option value="1" <?php echo ($engine_info['transmission_system_type'] == 1) ? 'selected="selected"' : '';?>>4x2</option>
                    <option value="2" <?php echo ($engine_info['transmission_system_type'] == 2) ? 'selected="selected"' : '';?>>4x4</option>
                </select>
            </div>
            <div class="w-1/12">
                <select name="transmission_system" id="transmission_system">
                    <option value="1" <?php echo ($engine_info['transmission_system_type'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['transmission_system_type'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['transmission_system_type'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="transmission_system_obs" id="transmission_system_obs" class="w-full" value="<?php echo $engine_info['transmission_system_obs'];?>">
            </div>
        </div>
        
        <div class="input-line">
            <div class="w-7/12 font-semibold">Nível do óleo do Câmbio</div>
            <div class="w-1/12">
                <select name="gearbox_oil" id="gearbox_oil">
                    <option value="1" <?php echo ($engine_info['gearbox_oil'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['gearbox_oil'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['gearbox_oil'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="gearbox_oil_obs" id="gearbox_oil_obs" class="w-full" value="<?php echo $engine_info['gearbox_oil_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Estado das Coifas: Vazamentos</div>
            <div class="w-1/12">
                <select name="hoods" id="hoods">
                    <option value="1" <?php echo ($engine_info['hoods'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($engine_info['hoods'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($engine_info['hoods'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="hoods_obs" id="hoods_obs" class="w-full" value="<?php echo $engine_info['hoods_obs'];?>">
            </div>
        </div>

    </div>


    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $engine_info['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>