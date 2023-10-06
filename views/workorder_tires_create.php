<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $workorder_id; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Pneus</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $workorder_id; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/visualexterior_store/<?php echo $workorder_id; ?>" method="post">
    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-4/12"></div>
            <div class="w-2/12 text-center">Avaliação</div>
            <div class="w-2/12 text-center">Situação</div>
            <div class="w-2/12 text-center">DOT</div>
            <div class="w-2/12 text-center">TWI</div>
        </div>
        <div class="input-line">
            <div class="w-4/12 font-semibold">Pneu e roda dianteiro direito</div>
            <div class="w-2/12 text-center">
                <select name="front_right" id="front_right">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <select name="front_right_situation" id="front_right_situation">
                    <option value="1">OK</option>
                    <option value="2">Saliência</option>
                    <option value="3">Ferrugem</option>
                    <option value="4">Risco</option>
                    <option value="5">Amassado</option>
                    <option value="6">Impacto de pedras</option>
                    <option value="7">Retoque</option>
                    <option value="8">Pintura</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <input type="text" name="front_right_dot" id="front_right_dot" class="w-full">
            </div>
            <div class="w-2/12 text-center">
                <select name="front_right_twi" id="front_right_twi">
                    <option value="1">Excelente</option>
                    <option value="2">Bom</option>
                    <option value="3">Ruim</option>
                    <option value="4">Péssimo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-4/12"></div>
            <div class="w-2/12 text-center">Avaliação</div>
            <div class="w-2/12 text-center">Situação</div>
            <div class="w-2/12 text-center">DOT</div>
            <div class="w-2/12 text-center">TWI</div>
        </div>
        <div class="input-line">
            <div class="w-4/12 font-semibold">Pneu e roda dianteiro esquerdo</div>
            <div class="w-2/12 text-center">
                <select name="front_left" id="front_left">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <select name="front_left_situation" id="front_left_situation">
                    <option value="1">OK</option>
                    <option value="2">Saliência</option>
                    <option value="3">Ferrugem</option>
                    <option value="4">Risco</option>
                    <option value="5">Amassado</option>
                    <option value="6">Impacto de pedras</option>
                    <option value="7">Retoque</option>
                    <option value="8">Pintura</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <input type="text" name="front_left_dot" id="front_left_dot" class="w-full">
            </div>
            <div class="w-2/12 text-center">
                <select name="front_left_twi" id="front_left_twi">
                    <option value="1">Excelente</option>
                    <option value="2">Bom</option>
                    <option value="3">Ruim</option>
                    <option value="4">Péssimo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-4/12"></div>
            <div class="w-2/12 text-center">Avaliação</div>
            <div class="w-2/12 text-center">Situação</div>
            <div class="w-2/12 text-center">DOT</div>
            <div class="w-2/12 text-center">TWI</div>
        </div>
        <div class="input-line">
            <div class="w-4/12 font-semibold">Pneu e roda traseiro direito</div>
            <div class="w-2/12 text-center">
                <select name="rear_right" id="rear_right">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <select name="rear_right_situation" id="rear_right_situation">
                    <option value="1">OK</option>
                    <option value="2">Saliência</option>
                    <option value="3">Ferrugem</option>
                    <option value="4">Risco</option>
                    <option value="5">Amassado</option>
                    <option value="6">Impacto de pedras</option>
                    <option value="7">Retoque</option>
                    <option value="8">Pintura</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <input type="text" name="rear_right_dot" id="rear_right_dot" class="w-full">
            </div>
            <div class="w-2/12 text-center">
                <select name="rear_right_twi" id="rear_right_twi">
                    <option value="1">Excelente</option>
                    <option value="2">Bom</option>
                    <option value="3">Ruim</option>
                    <option value="4">Péssimo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="input-line rounded-md bg-slate-200 p-2 flex-col mb-2">
        <div class="input-line text-sm font-semibold">
            <div class="w-4/12"></div>
            <div class="w-2/12 text-center">Avaliação</div>
            <div class="w-2/12 text-center">Situação</div>
            <div class="w-2/12 text-center">DOT</div>
            <div class="w-2/12 text-center">TWI</div>
        </div>
        <div class="input-line">
            <div class="w-4/12 font-semibold">Pneu e roda traseiro esquerdo</div>
            <div class="w-2/12 text-center">
                <select name="rear_right" id="rear_right">
                    <option value="1">OK</option>
                    <option value="2">NC</option>
                    <option value="3">NA</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <select name="rear_left_situation" id="rear_left_situation">
                    <option value="1">OK</option>
                    <option value="2">Saliência</option>
                    <option value="3">Ferrugem</option>
                    <option value="4">Risco</option>
                    <option value="5">Amassado</option>
                    <option value="6">Impacto de pedras</option>
                    <option value="7">Retoque</option>
                    <option value="8">Pintura</option>
                </select>
            </div>
            <div class="w-2/12 text-center">
                <input type="text" name="rear_left_dot" id="rear_left_dot" class="w-full">
            </div>
            <div class="w-2/12 text-center">
                <select name="rear_left_twi" id="rear_left_twi">
                    <option value="1">Excelente</option>
                    <option value="2">Bom</option>
                    <option value="3">Ruim</option>
                    <option value="4">Péssimo</option>
                </select>
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