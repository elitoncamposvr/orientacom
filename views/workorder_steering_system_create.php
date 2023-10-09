<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $workorder_id; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Sistema de Direção</span>
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

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/steeringsystem_store/<?php echo $workorder_id; ?>" method="post">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-5/12">Itens</div>
            <div class="w-2/12 text-center">Tipo</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        
        <div class="input-line">
            <div class="w-5/12 font-semibold">Sist. de Direção:</div>
            <div class="w-2/12 text-center">
                <select name="steering_type" id="steering_type">
                    <option value="1">Elétrico</option>
                    <option value="2">Hidráulico</option>
                    <option value="3">Mecânico</option>
                </select>
            </div>
            <div class="w-1/12">
                <select name="steering_system" id="steering_system">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="steering_system_obs" id="steering_system_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Nível óleo da direção hidráulica</div>
            <div class="w-1/12">
                <select name="oil_level" id="oil_level">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="oil_level_obs" id="oil_level_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Caixa de Direção; Mangueiras e Conexões (Testar esterço)</div>
            <div class="w-1/12">
                <select name="hoses_fittings" id="hoses_fittings">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="hoses_fittings_obs" id="hoses_fittings_obs" class="w-full">
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