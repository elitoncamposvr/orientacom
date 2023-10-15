<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $general_info['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Mecânica Geral</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $general_info['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/general_update/<?php echo $general_info['id']; ?>" method="post">
<input type="hidden" name="workorder_id" id="workorder_id" value="<?php echo $general_info['workorder_id'];?>">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-7/12">Itens</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        <div class="input-line">
            <div class="w-7/12 font-semibold">Ar cond.: compressor, mangueiras, conexões (ruídos e vazamentos)</div>
            <div class="w-1/12">
                <select name="air_conditioning" id="air_conditioning">
                    <option value="1" <?php echo ($general_info['air_conditioning'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['air_conditioning'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['air_conditioning'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="air_conditioning_obs" id="air_conditioning_obs" class="w-full" value="<?php echo $general_info['air_conditioning_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Nível reservatório limpeza para-brisa</div>
            <div class="w-1/12">
                <select name="windshield_reservoir_level" id="windshield_reservoir_level">
                    <option value="1" <?php echo ($general_info['windshield_reservoir_level'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['windshield_reservoir_level'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['windshield_reservoir_level'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="windshield_reservoir_level_obs" id="windshield_reservoir_level_obs" class="w-full" value="<?php echo $general_info['windshield_reservoir_level_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Funcionamento da aspersão no para-brisas e ou faróis</div>
            <div class="w-1/12">
                <select name="windscreen_spray" id="windscreen_spray">
                    <option value="1" <?php echo ($general_info['windscreen_spray'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['windscreen_spray'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['windscreen_spray'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="windscreen_spray_obs" id="windscreen_spray_obs" class="w-full" value="<?php echo $general_info['windscreen_spray_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Estado das palhetas</div>
            <div class="w-1/12">
                <select name="vanes" id="vanes">
                    <option value="1" <?php echo ($general_info['vanes'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['vanes'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['vanes'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="vanes_obs" id="vanes_obs" class="w-full" value="<?php echo $general_info['vanes_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Bateria: (anexar manual garantia do fabricante)</div>
            <div class="w-1/12">
                <select name="battery" id="battery">
                    <option value="1" <?php echo ($general_info['battery'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['battery'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['battery'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="battery_obs" id="battery_obs" class="w-full" value="<?php echo $general_info['battery_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Alma do para-choque</div>
            <div class="w-1/12">
                <select name="bumper_core" id="bumper_core">
                    <option value="1" <?php echo ($general_info['bumper_core'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['bumper_core'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['bumper_core'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="bumper_core_obs" id="bumper_core_obs" class="w-full" value="<?php echo $general_info['bumper_core_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Caixa de Ar</div>
            <div class="w-1/12">
                <select name="airbox" id="airbox">
                    <option value="1" <?php echo ($general_info['airbox'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['airbox'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['airbox'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="airbox_obs" id="airbox_obs" class="w-full" value="<?php echo $general_info['airbox_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sistema escapamento: (Vazamento; ferrugem)</div>
            <div class="w-1/12">
                <select name="exhaust" id="exhaust">
                    <option value="1" <?php echo ($general_info['exhaust'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['exhaust'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['exhaust'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="exhaust_obs" id="exhaust_obs" class="w-full" value="<?php echo $general_info['exhaust_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Olhais e sistema de fixação de cabos, fios, dutos e mangueiras</div>
            <div class="w-1/12">
                <select name="fixing_cables_wires" id="fixing_cables_wires">
                    <option value="1" <?php echo ($general_info['fixing_cables_wires'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['fixing_cables_wires'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['fixing_cables_wires'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="fixing_cables_wires_obs" id="fixing_cables_wires_obs" class="w-full" value="<?php echo $general_info['fixing_cables_wires_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Diagnóstico eletrônico via porta OBD2</div>
            <div class="w-1/12">
                <select name="electronic_diagnostics" id="electronic_diagnostics">
                    <option value="1" <?php echo ($general_info['electronic_diagnostics'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($general_info['electronic_diagnostics'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($general_info['electronic_diagnostics'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="electronic_diagnostics_obs" id="electronic_diagnostics_obs" class="w-full" value="<?php echo $general_info['electronic_diagnostics_obs'];?>">
            </div>
        </div>
    </div>

    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $general_info['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>