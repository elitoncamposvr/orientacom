<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $workorder_id; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Suspensão</span>
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

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/suspension_store/<?php echo $workorder_id; ?>" method="post">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-7/12">Itens</div>
            <div class="w-1/12">Avaliação</div>
            <div class="w-4/12">Observações</div>
        </div>
        <div class="input-line">
            <div class="w-7/12 font-semibold">Amortecedor dianteiro</div>
            <div class="w-1/12">
                <select name="front_shock_absorber" id="front_shock_absorber">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="front_shock_absorber_obs" id="front_shock_absorber_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Amortecedor traseiro</div>
            <div class="w-1/12">
                <select name="rear_shock_absorber" id="rear_shock_absorber">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="rear_shock_absorber_obs" id="rear_shock_absorber_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Buchas da Suspensão</div>
            <div class="w-1/12">
                <select name="bushings" id="bushings">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="bushings_obs" id="bushings_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Coxins da Suspensão</div>
            <div class="w-1/12">
                <select name="suspension_pads" id="suspension_pads">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="suspension_pads_obs" id="suspension_pads_obs" class="w-full">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Bandejas e braços</div>
            <div class="w-1/12">
                <select name="tray_arm" id="tray_arm">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="tray_arm_obs" id="tray_arm_obs" class="w-full">
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