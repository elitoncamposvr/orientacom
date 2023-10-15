<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $suspension_info['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Suspensão</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $suspension_info['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>OK - Em condições de uso</span>
    <span>NC - Não conforme</span>
    <span>NA - Não se aplica</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/suspension_update/<?php echo $suspension_info['id']; ?>" method="post">
<input type="hidden" name="workorder_id" value="<?php echo $suspension_info['workorder_id'];?>">
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
                    <option value="1" <?php echo ($suspension_info['front_shock_absorber'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($suspension_info['front_shock_absorber'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($suspension_info['front_shock_absorber'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="front_shock_absorber_obs" id="front_shock_absorber_obs" class="w-full" value="<?php echo $suspension_info['front_shock_absorber_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Amortecedor traseiro</div>
            <div class="w-1/12">
                <select name="rear_shock_absorber" id="rear_shock_absorber">
                    <option value="1" <?php echo ($suspension_info['rear_shock_absorber'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($suspension_info['rear_shock_absorber'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($suspension_info['rear_shock_absorber'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="rear_shock_absorber_obs" id="rear_shock_absorber_obs" class="w-full" value="<?php echo $suspension_info['rear_shock_absorber_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Buchas da Suspensão</div>
            <div class="w-1/12">
                <select name="bushings" id="bushings">
                    <option value="1" <?php echo ($suspension_info['bushings'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($suspension_info['bushings'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($suspension_info['bushings'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="bushings_obs" id="bushings_obs" class="w-full" value="<?php echo $suspension_info['bushings_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Coxins da Suspensão</div>
            <div class="w-1/12">
                <select name="suspension_pads" id="suspension_pads">
                    <option value="1" <?php echo ($suspension_info['suspension_pads'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($suspension_info['suspension_pads'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($suspension_info['suspension_pads'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="suspension_pads_obs" id="suspension_pads_obs" class="w-full" value="<?php echo $suspension_info['suspension_pads_obs'];?>">
            </div>
        </div>

        <div class="input-line">
            <div class="w-7/12 font-semibold">Bandejas e braços</div>
            <div class="w-1/12">
                <select name="tray_arm" id="tray_arm">
                    <option value="1" <?php echo ($suspension_info['tray_arm'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                    <option value="2" <?php echo ($suspension_info['tray_arm'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                    <option value="3" <?php echo ($suspension_info['tray_arm'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                </select>
            </div>
            <div class="w-4/12">
                <input type="text" name="tray_arm_obs" id="tray_arm_obs" class="w-full" value="<?php echo $suspension_info['tray_arm_obs'];?>">
            </div>
        </div>

    </div>


    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $suspension_info['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>