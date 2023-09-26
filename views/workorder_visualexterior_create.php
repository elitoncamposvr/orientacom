<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $workorder_id; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Visual Exterior</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/store" method="post">
    <div class="input-line">
        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Capô Dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_hood" id="front_hood">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_hood_obs" id="front_hood_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Parabrisas Dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_windshield" id="front_windshield">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_windshield_obs" id="front_windshield_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Espelho Retrovisor Direito</div>
                <div class="w-2/12 mr-1">
                    <select name="rearview_mirror_right" id="rearview_mirror_right">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rearview_mirror_right_obs" id="rearview_mirror_right_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Espelho Retrovisor Esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="rearview_mirror_left" id="rearview_mirror_left">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rearview_mirror_left_obs" id="rearview_mirror_left_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Farol Dianteiro Direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_headlight_right" id="front_headlight_right">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_headlight_right_obs" id="front_headlight_right_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Farol Dianteiro Esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_headlight_left" id="front_headlight_left">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_headlight_left_obs" id="front_headlight_left_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-choques dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_bumper" id="front_bumper">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_bumper_obs" id="front_bumper_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_fenders_right" id="front_fenders_right">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_fenders_right_obs" id="front_fenders_right_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_fenders_left" id="front_fenders_left">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_fenders_left_obs" id="front_fenders_left_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_window_right" id="front_window_right">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_window_right_obs" id="front_window_right_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_window_left" id="front_window_left">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_window_left_obs" id="front_window_left_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta dianteira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="front_door_right" id="front_door_right">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_door_right_obs" id="front_door_right_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta dianteira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="front_door_left" id="front_door_left">
                        <option value="1">OK</option>
                        <option value="1">NC</option>
                        <option value="1">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_door_left_obs" id="front_door_left_obs">
                        <option value="1">OK</option>
                        <option value="1">S</option>
                        <option value="1">F</option>
                        <option value="1">R</option>
                        <option value="1">A</option>
                        <option value="1">I</option>
                        <option value="1">RT</option>
                        <option value="1">P</option>
                    </select>
                </div>
            </div>
        </div>














        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            Teste
        </div>

    </div>

    <div class="input-line flex-col">
        <span>
            <label for="aditional_info">Observações</label>
        </span>
        <textarea name="aditional_info" id="aditional_info" rows="5" class="w-full"></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>