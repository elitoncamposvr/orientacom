<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $interior['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Visual Interior</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $interior['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/interior_update/<?php echo $interior['id']; ?>" method="post">
<input type="hidden" name="workorder_id" value="<?php echo $interior['workorder_id'];?>">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-7/12">Itens</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        <div class="input-line">
            <div class="w-7/12 font-semibold">Travas de segurança das fechaduras das portas das crianças</div>
            <div class="w-1/12">
                <select name="safety_lock" id="safety_lock">
                    <option value="1" <?php echo ($interior['safety_lock'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['safety_lock'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['safety_lock'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="safety_lock_obs" id="safety_lock_obs" class="w-full" value="<?php echo $interior['safety_lock_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Controles remotos</div>
            <div class="w-1/12">
                <select name="remote_controls" id="remote_controls">
                    <option value="1" <?php echo ($interior['remote_controls'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['remote_controls'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['remote_controls'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="remote_controls_obs" id="remote_controls_obs" class="w-full" value="<?php echo $interior['remote_controls_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Imobilizador e sistema de chave</div>
            <div class="w-1/12">
                <select name="immobilizer" id="immobilizer">
                    <option value="1" <?php echo ($interior['immobilizer'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['immobilizer'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['immobilizer'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="immobilizer_obs" id="immobilizer_obs" class="w-full" value="<?php echo $interior['immobilizer_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ignição / chave de ignição/ direção sem chave</div>
            <div class="w-1/12">
                <select name="ignition" id="ignition">
                    <option value="1" <?php echo ($interior['ignition'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['ignition'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['ignition'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="ignition_obs" id="ignition_obs" class="w-full" value="<?php echo $interior['ignition_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Trava de volante</div>
            <div class="w-1/12">
                <select name="steering_whell_lock" id="steering_whell_lock">
                    <option value="1" <?php echo ($interior['steering_whell_lock'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['steering_whell_lock'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['steering_whell_lock'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="steering_whell_lock_obs" id="steering_whell_lock_obs" class="w-full" value="<?php echo $interior['steering_whell_lock_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Buzina</div>
            <div class="w-1/12">
                <select name="horn" id="horn">
                    <option value="1" <?php echo ($interior['horn'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['horn'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['horn'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="horn_obs" id="horn_obs" class="w-full" value="<?php echo $interior['horn_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Painel de instrumentos (c/ veículo parado)</div>
            <div class="w-1/12">
                <select name="instrument_panel" id="instrument_panel">
                    <option value="1" <?php echo ($interior['instrument_panel'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['instrument_panel'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['instrument_panel'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="instrument_panel_obs" id="instrument_panel_obs" class="w-full" value="<?php echo $interior['instrument_panel_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Volante Multifunções</div>
            <div class="w-1/12">
                <select name="multifunction_steering_whell" id="multifunction_steering_whell">
                    <option value="1" <?php echo ($interior['multifunction_steering_whell'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['multifunction_steering_whell'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['multifunction_steering_whell'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="multifunction_steering_whell_obs" id="multifunction_steering_whell_obs" class="w-full" value="<?php echo $interior['multifunction_steering_whell_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ajuste da coluna da direção</div>
            <div class="w-1/12">
                <select name="column_adjustment" id="column_adjustment">
                    <option value="1" <?php echo ($interior['column_adjustment'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['column_adjustment'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['column_adjustment'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="column_adjustment_obs" id="column_adjustment_obs" class="w-full" value="<?php echo $interior['column_adjustment_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sistema de Air Bag (desativação para crianças)</div>
            <div class="w-1/12">
                <select name="airbag" id="airbag">
                    <option value="1" <?php echo ($interior['airbag'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['airbag'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['airbag'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="airbag_obs" id="airbag_obs" class="w-full" value="<?php echo $interior['airbag_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Verificar Diagnóstico Eletrônico da Central do Veículo</div>
            <div class="w-1/12">
                <select name="central_diagnostics" id="central_diagnostics">
                    <option value="1" <?php echo ($interior['central_diagnostics'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['central_diagnostics'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['central_diagnostics'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="central_diagnostics_obs" id="central_diagnostics_obs" class="w-full" value="<?php echo $interior['central_diagnostics_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Verificar sistema de abertura do capô e porta mala</div>
            <div class="w-1/12">
                <select name="hood_opening" id="hood_opening">
                    <option value="1" <?php echo ($interior['hood_opening'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['hood_opening'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['hood_opening'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="hood_opening_obs" id="hood_opening_obs" class="w-full" value="<?php echo $interior['hood_opening_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Funcionamento de comandos no painel</div>
            <div class="w-1/12">
                <select name="panel_controls" id="panel_controls">
                    <option value="1" <?php echo ($interior['panel_controls'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['panel_controls'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['panel_controls'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="panel_controls_obs" id="panel_controls_obs" class="w-full" value="<?php echo $interior['panel_controls_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Relógio de bordo</div>
            <div class="w-1/12">
                <select name="onboard_clock" id="onboard_clock">
                    <option value="1" <?php echo ($interior['onboard_clock'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['onboard_clock'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['onboard_clock'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="onboard_clock_obs" id="onboard_clock_obs" class="w-full" value="<?php echo $interior['onboard_clock_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">PCM (rádio, telefone, aparelho de CD, Sist. de navegação)</div>
            <div class="w-1/12">
                <select name="pcm" id="pcm">
                    <option value="1" <?php echo ($interior['pcm'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['pcm'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['pcm'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="pcm_obs" id="pcm_obs" class="w-full" value="<?php echo $interior['pcm_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sistema de Áudio (Rádio, CD, DVD, alto falantes)</div>
            <div class="w-1/12">
                <select name="audio" id="audio">
                    <option value="1" <?php echo ($interior['audio'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['audio'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['audio'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="audio_obs" id="audio_obs" class="w-full" value="<?php echo $interior['audio_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Aquecimento de bancos e ventilação de bancos</div>
            <div class="w-1/12">
                <select name="seat_heating" id="seat_heating">
                    <option value="1" <?php echo ($interior['seat_heating'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['seat_heating'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['seat_heating'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="seat_heating_obs" id="seat_heating_obs" class="w-full" value="<?php echo $interior['seat_heating_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Aquecimento do volante</div>
            <div class="w-1/12">
                <select name="steering_whell_heating" id="steering_whell_heating">
                    <option value="1" <?php echo ($interior['steering_whell_heating'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['steering_whell_heating'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['steering_whell_heating'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="steering_whell_heating_obs" id="steering_whell_heating_obs" class="w-full" value="<?php echo $interior['steering_whell_heating_obs'];?>"> 
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Memória de ajuste do banco</div>
            <div class="w-1/12">
                <select name="seat_memory" id="seat_memory">
                    <option value="1" <?php echo ($interior['seat_memory'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['seat_memory'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['seat_memory'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="seat_memory_obs" id="seat_memory_obs" class="w-full" value="<?php echo $interior['seat_memory_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Porta copos</div>
            <div class="w-1/12">
                <select name="cup_holder" id="cup_holder">
                    <option value="1" <?php echo ($interior['cup_holder'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['cup_holder'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['cup_holder'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cup_holder_obs" id="cup_holder_obs" class="w-full" value="<?php echo $interior['cup_holder_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Porta Luvas</div>
            <div class="w-1/12">
                <select name="glove_compartment" id="glove_compartment">
                    <option value="1" <?php echo ($interior['glove_compartment'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['glove_compartment'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['glove_compartment'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="glove_compartment_obs" id="glove_compartment_obs" class="w-full" value="<?php echo $interior['glove_compartment_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ajuste do cinto de segurança</div>
            <div class="w-1/12">
                <select name="belt_adjustment" id="belt_adjustment">
                    <option value="1" <?php echo ($interior['belt_adjustment'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['belt_adjustment'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['belt_adjustment'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="belt_adjustment_obs" id="belt_adjustment_obs" class="w-full" value="<?php echo $interior['belt_adjustment_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Acionamento do teto móvel</div>
            <div class="w-1/12">
                <select name="movable_roof" id="movable_roof">
                    <option value="1" <?php echo ($interior['movable_roof'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['movable_roof'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['movable_roof'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="movable_roof_obs" id="movable_roof_obs" class="w-full" value="<?php echo $interior['movable_roof_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Funcionamento do Ar Condicionado</div>
            <div class="w-1/12">
                <select name="air_conditioning" id="air_conditioning">
                    <option value="1" <?php echo ($interior['air_conditioning'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['air_conditioning'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['air_conditioning'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="air_conditioning_obs" id="air_conditioning_obs" class="w-full" value="<?php echo $interior['air_conditioning_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Cabriolet defletor de ar</div>
            <div class="w-1/12">
                <select name="cabriolet" id="cabriolet">
                    <option value="1" <?php echo ($interior['cabriolet'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['cabriolet'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['cabriolet'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cabriolet_obs" id="cabriolet_obs" class="w-full" value="<?php echo $interior['cabriolet_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Travamento de todas as tampas (dianteira/traseira)</div>
            <div class="w-1/12">
                <select name="locking_lids" id="locking_lids">
                    <option value="1" <?php echo ($interior['locking_lids'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['locking_lids'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['locking_lids'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="locking_lids_obs" id="locking_lids_obs" class="w-full" value="<?php echo $interior['locking_lids_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Revestimento do teto</div>
            <div class="w-1/12">
                <select name="ceiling_cladding" id="ceiling_cladding">
                    <option value="1" <?php echo ($interior['ceiling_cladding'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($interior['ceiling_cladding'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($interior['ceiling_cladding'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="ceiling_cladding_obs" id="ceiling_cladding_obs" class="w-full" value="<?php echo $interior['ceiling_cladding_obs'];?>">
            </div>
        </div>

    </div>


    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $interior['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>