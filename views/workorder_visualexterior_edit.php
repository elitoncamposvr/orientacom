<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $visualexterior_info['workorder_id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Visual Exterior</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $visualexterior_info['workorder_id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line justify-between bg-slate-200 rounded-md p-2 font-semibold">
    <span>(OK) - OK</span>
    <span>(S) - Saliência</span>
    <span>(F) - Ferrugem</span>
    <span>(R) - Risco</span>
    <span>(A) - Amassado</span>
    <span>(I) - Impacto de pedras</span>
    <span>(RT) - Retoque</span>
    <span>(P) - Pintura</span>
</div>

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/visualexterior_update/<?php echo $visualexterior_info['id'];?>" method="post">
<input type="hidden" name="workorder_id" value="<?php echo $visualexterior_info['workorder_id'];?>">
    <div class="input-line">
        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Capô dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_hood" id="front_hood">
                        <option value="1" <?php echo ($visualexterior_info['front_hood'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_hood'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_hood'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_hood_obs" id="front_hood_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_hood_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_hood_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_hood_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_hood_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_hood_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_hood_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_hood_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_hood_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Espelho retrovisor direito</div>
                <div class="w-2/12 mr-1">
                    <select name="rearview_mirror_right" id="rearview_mirror_right">
                        <option value="1" <?php echo ($visualexterior_info['rearview_mirror_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rearview_mirror_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rearview_mirror_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rearview_mirror_right_obs" id="rearview_mirror_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rearview_mirror_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Espelho retrovisor esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="rearview_mirror_left" id="rearview_mirror_left">
                        <option value="1" <?php echo ($visualexterior_info['rearview_mirror_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rearview_mirror_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rearview_mirror_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rearview_mirror_left_obs" id="rearview_mirror_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rearview_mirror_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Farol dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_headlight_right" id="front_headlight_right">
                        <option value="1" <?php echo ($visualexterior_info['front_headlight_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_headlight_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_headlight_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_headlight_right_obs" id="front_headlight_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_headlight_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Farol dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_headlight_left" id="front_headlight_left">
                        <option value="1" <?php echo ($visualexterior_info['front_headlight_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_headlight_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_headlight_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_headlight_left_obs" id="front_headlight_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_headlight_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-choques dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_bumper" id="front_bumper">
                        <option value="1" <?php echo ($visualexterior_info['front_bumper'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_bumper'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_bumper'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_bumper_obs" id="front_bumper_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_bumper_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_bumper_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_bumper_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_bumper_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_bumper_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_bumper_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_bumper_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_bumper_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_fenders_right" id="front_fenders_right">
                        <option value="1" <?php echo ($visualexterior_info['front_fenders_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_fenders_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_fenders_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_fenders_right_obs" id="front_fenders_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_fenders_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_fenders_left" id="front_fenders_left">
                        <option value="1" <?php echo ($visualexterior_info['front_fenders_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_fenders_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_fenders_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_fenders_left_obs" id="front_fenders_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_fenders_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_window_right" id="front_window_right">
                        <option value="1" <?php echo ($visualexterior_info['front_window_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_window_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_window_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_window_right_obs" id="front_window_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_window_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_window_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_window_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_window_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_window_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_window_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_window_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_window_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_window_left" id="front_window_left">
                        <option value="1" <?php echo ($visualexterior_info['front_window_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_window_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_window_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_window_left_obs" id="front_window_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_window_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_window_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_window_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_window_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_window_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_window_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_window_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_window_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta dianteira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="front_door_right" id="front_door_right">
                        <option value="1" <?php echo ($visualexterior_info['front_door_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_door_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_door_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_door_right_obs" id="front_door_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_door_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_door_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_door_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_door_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_door_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_door_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_door_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_door_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta dianteira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="front_door_left" id="front_door_left">
                        <option value="1" <?php echo ($visualexterior_info['front_door_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_door_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_door_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_door_left_obs" id="front_door_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_door_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_door_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_door_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_door_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_door_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_door_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_door_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_door_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Janela traseira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_window_right" id="rear_window_right">
                        <option value="1" <?php echo ($visualexterior_info['rear_window_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_window_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_window_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_window_right_obs" id="rear_window_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_window_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_window_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_window_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_window_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_window_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_window_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_window_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_window_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Janela traseira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_window_left" id="rear_window_left">
                        <option value="1" <?php echo ($visualexterior_info['rear_window_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_window_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_window_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_window_left_obs" id="rear_window_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_window_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_window_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_window_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_window_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_window_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_window_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_window_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_window_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas traseiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_fenders_right" id="rear_fenders_right">
                        <option value="1" <?php echo ($visualexterior_info['rear_fenders_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_fenders_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_fenders_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_fenders_right_obs" id="rear_fenders_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_fenders_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas traseiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_fenders_left" id="rear_fenders_left">
                        <option value="1" <?php echo ($visualexterior_info['rear_fenders_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_fenders_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_fenders_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_fenders_left_obs" id="rear_fenders_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_fenders_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Tampa traseira do porta malas</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_trunk_lid" id="rear_trunk_lid">
                        <option value="1" <?php echo ($visualexterior_info['rear_trunk_lid'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_trunk_lid'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_trunk_lid'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_trunk_lid_obs" id="rear_trunk_lid_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_trunk_lid_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Tampa superior do porta malas</div>
                <div class="w-2/12 mr-1">
                    <select name="upper_trunk_lid" id="upper_trunk_lid">
                        <option value="1" <?php echo ($visualexterior_info['upper_trunk_lid'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['upper_trunk_lid'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['upper_trunk_lid'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="upper_trunk_lid_obs" id="upper_trunk_lid_obs">
                        <option value="1" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['upper_trunk_lid_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Lanterna traseira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="taillight_right" id="taillight_right">
                        <option value="1" <?php echo ($visualexterior_info['taillight_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['taillight_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['taillight_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="taillight_right_obs" id="taillight_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['taillight_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['taillight_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['taillight_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['taillight_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['taillight_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['taillight_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['taillight_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['taillight_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Lanterna traseira esqueda</div>
                <div class="w-2/12 mr-1">
                    <select name="taillight_left" id="taillight_left">
                        <option value="1" <?php echo ($visualexterior_info['taillight_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['taillight_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['taillight_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="taillight_left_obs" id="taillight_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['taillight_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['taillight_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['taillight_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['taillight_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['taillight_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['taillight_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['taillight_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['taillight_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro traseiro</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_window" id="rear_window">
                        <option value="1" <?php echo ($visualexterior_info['rear_window'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_window'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_window'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_window_obs" id="rear_window_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_window_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_window_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_window_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_window_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_window_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_window_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_window_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_window_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Parabrisas dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_windshield" id="front_windshield">
                        <option value="1" <?php echo ($visualexterior_info['front_windshield'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_windshield'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['front_windshield'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_windshield_obs" id="front_windshield_obs">
                        <option value="1" <?php echo ($visualexterior_info['front_windshield_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['front_windshield_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['front_windshield_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['front_windshield_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['front_windshield_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['front_windshield_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['front_windshield_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['front_windshield_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-choques traseiro</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_bumper" id="rear_bumper">
                        <option value="1" <?php echo ($visualexterior_info['rear_bumper'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_bumper'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_bumper'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_bumper_obs" id="rear_bumper_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_bumper_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_bumper_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_bumper_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_bumper_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_bumper_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_bumper_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_bumper_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_bumper_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta traseira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_door_right" id="rear_door_right">
                        <option value="1" <?php echo ($visualexterior_info['rear_door_right'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_door_right'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_door_right'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_door_right_obs" id="rear_door_right_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_door_right_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_door_right_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_door_right_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_door_right_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_door_right_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_door_right_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_door_right_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_door_right_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta traseira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_door_left" id="rear_door_left">
                        <option value="1" <?php echo ($visualexterior_info['rear_door_left'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_door_left'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_door_left'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_door_left_obs" id="rear_door_left_obs">
                        <option value="1" <?php echo ($visualexterior_info['rear_door_left_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['rear_door_left_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['rear_door_left_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['rear_door_left_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['rear_door_left_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['rear_door_left_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['rear_door_left_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['rear_door_left_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Teto</div>
                <div class="w-2/12 mr-1">
                    <select name="roof" id="roof">
                        <option value="1" <?php echo ($visualexterior_info['roof'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['roof'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['roof'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="roof_obs" id="roof_obs">
                        <option value="1" <?php echo ($visualexterior_info['roof_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['roof_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['roof_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['roof_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['roof_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['roof_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['roof_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['roof_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Capota conversível</div>
                <div class="w-2/12 mr-1">
                    <select name="convertible_top" id="convertible_top">
                        <option value="1" <?php echo ($visualexterior_info['convertible_top'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['convertible_top'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['convertible_top'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="convertible_top_obs" id="convertible_top_obs">
                        <option value="1" <?php echo ($visualexterior_info['convertible_top_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['convertible_top_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['convertible_top_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['convertible_top_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['convertible_top_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['convertible_top_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['convertible_top_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['convertible_top_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Película de proteção PPF</div>
                <div class="w-2/12 mr-1">
                    <select name="protective_film" id="protective_film">
                        <option value="1" <?php echo ($visualexterior_info['protective_film'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['protective_film'] == 3) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['protective_film'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="protective_film_obs" id="protective_film_obs">
                        <option value="1" <?php echo ($visualexterior_info['protective_film_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['protective_film_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['protective_film_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['protective_film_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['protective_film_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['protective_film_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['protective_film_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['protective_film_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Aerofólio</div>
                <div class="w-2/12 mr-1">
                    <select name="airfoil" id="airfoil">
                        <option value="1" <?php echo ($visualexterior_info['airfoil'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['airfoil'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['airfoil'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="airfoil_obs" id="airfoil_obs">
                        <option value="1" <?php echo ($visualexterior_info['airfoil_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['airfoil_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['airfoil_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['airfoil_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['airfoil_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['airfoil_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['airfoil_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['airfoil_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Há sinais de reparos de acidente?</div>
                <div class="w-2/12 mr-1">
                    <select name="accident_warning_sings" id="accident_warning_sings">
                        <option value="1" <?php echo ($visualexterior_info['accident_warning_sings'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['accident_warning_sings'] == 2) ? 'selected="selected"' : '';?>>NC</option>
                        <option value="3" <?php echo ($visualexterior_info['accident_warning_sings'] == 3) ? 'selected="selected"' : '';?>>NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="accident_warning_sings_obs" id="accident_warning_sings_obs">
                        <option value="1" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 1) ? 'selected="selected"' : '';?>>OK</option>
                        <option value="2" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 2) ? 'selected="selected"' : '';?>>S</option>
                        <option value="3" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 3) ? 'selected="selected"' : '';?>>F</option>
                        <option value="4" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 4) ? 'selected="selected"' : '';?>>R</option>
                        <option value="5" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 5) ? 'selected="selected"' : '';?>>A</option>
                        <option value="6" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 6) ? 'selected="selected"' : '';?>>I</option>
                        <option value="7" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 7) ? 'selected="selected"' : '';?>>RT</option>
                        <option value="8" <?php echo ($visualexterior_info['accident_warning_sings_obs'] == 8) ? 'selected="selected"' : '';?>>P</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="input-line flex-col">
        <span>
            <label for="observations">Observações</label>
        </span>
        <textarea name="observations" id="observations" rows="5" class="w-full"><?php echo $visualexterior_info['observations'];?></textarea>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>