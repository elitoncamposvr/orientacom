<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $workorder_id; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Visual Interior</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $workorder_id; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/interior_store/<?php echo $workorder_id; ?>" method="post">
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
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="safety_lock_obs" id="safety_lock_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Controles remotos</div>
            <div class="w-1/12">
                <select name="remote_controls" id="remote_controls">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="remote_controls_obs" id="remote_controls_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Imobilizador e sistema de chave</div>
            <div class="w-1/12">
                <select name="immobilizer" id="immobilizer">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="immobilizer_obs" id="immobilizer_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ignição / chave de ignição/ direção sem chave</div>
            <div class="w-1/12">
                <select name="ignition" id="ignition">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="ignition_obs" id="ignition_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Trava de volante</div>
            <div class="w-1/12">
                <select name="steering_whell_lock" id="steering_whell_lock">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="steering_whell_lock_obs" id="steering_whell_lock_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Buzina</div>
            <div class="w-1/12">
                <select name="horn" id="horn">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="horn_obs" id="horn_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Painel de instrumentos (c/ veículo parado)</div>
            <div class="w-1/12">
                <select name="instrument_panel" id="instrument_panel">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="instrument_panel_obs" id="instrument_panel_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Volante Multifunções</div>
            <div class="w-1/12">
                <select name="multifunction_steering_whell" id="multifunction_steering_whell">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="multifunction_steering_whell_obs" id="multifunction_steering_whell_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ajuste da coluna da direção</div>
            <div class="w-1/12">
                <select name="column_adjustment" id="column_adjustment">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="column_adjustment_obs" id="column_adjustment_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sistema de Air Bag (desativação para crianças)</div>
            <div class="w-1/12">
                <select name="airbag" id="airbag">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="airbag_obs" id="airbag_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Verificar Diagnóstico Eletrônico da Central do Veículo</div>
            <div class="w-1/12">
                <select name="central_diagnostics" id="central_diagnostics">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="central_diagnostics_obs" id="central_diagnostics_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Verificar sistema de abertura do capô e porta mala</div>
            <div class="w-1/12">
                <select name="hood_opening" id="hood_opening">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="hood_opening_obs" id="hood_opening_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Funcionamento de comandos no painel</div>
            <div class="w-1/12">
                <select name="panel_controls" id="panel_controls">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="panel_controls_obs" id="panel_controls_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Relógio de bordo</div>
            <div class="w-1/12">
                <select name="onboard_clock" id="onboard_clock">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="onboard_clock_obs" id="onboard_clock_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">PCM (rádio, telefone, aparelho de CD, Sist. de navegação)</div>
            <div class="w-1/12">
                <select name="pcm" id="pcm">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="pcm_obs" id="pcm_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Sistema de Áudio (Rádio, CD, DVD, alto falantes)</div>
            <div class="w-1/12">
                <select name="audio" id="audio">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="audio_obs" id="audio_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Aquecimento de bancos e ventilação de bancos</div>
            <div class="w-1/12">
                <select name="seat_heating" id="seat_heating">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="seat_heating_obs" id="seat_heating_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Aquecimento do volante</div>
            <div class="w-1/12">
                <select name="steering_whell_heating" id="steering_whell_heating">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="steering_whell_heating_obs" id="steering_whell_heating_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Memória de ajuste do banco</div>
            <div class="w-1/12">
                <select name="seat_memory" id="seat_memory">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="seat_memory_obs" id="seat_memory_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Porta copos</div>
            <div class="w-1/12">
                <select name="cup_holder" id="cup_holder">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cup_holder_obs" id="cup_holder_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Porta Luvas</div>
            <div class="w-1/12">
                <select name="glove_compartment" id="glove_compartment">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="glove_compartment_obs" id="glove_compartment_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Ajuste do cinto de segurança</div>
            <div class="w-1/12">
                <select name="belt_adjustment" id="belt_adjustment">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="belt_adjustment_obs" id="belt_adjustment_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Acionamento do teto móvel</div>
            <div class="w-1/12">
                <select name="movable_roof" id="movable_roof">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="movable_roof_obs" id="movable_roof_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Funcionamento do Ar Condicionado</div>
            <div class="w-1/12">
                <select name="air_conditioning" id="air_conditioning">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="air_conditioning_obs" id="air_conditioning_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Cabriolet defletor de ar</div>
            <div class="w-1/12">
                <select name="cabriolet" id="cabriolet">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="cabriolet_obs" id="cabriolet_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Travamento de todas as tampas (dianteira/traseira)</div>
            <div class="w-1/12">
                <select name="locking_lids" id="locking_lids">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="locking_lids_obs" id="locking_lids_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Revestimento do teto</div>
            <div class="w-1/12">
                <select name="ceiling_cladding" id="ceiling_cladding">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="ceiling_cladding_obs" id="ceiling_cladding_obs" class="w-full">
            </div>
        </div>

    </div>


    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>