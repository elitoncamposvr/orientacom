<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $workorder_id; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Verificação de Itens <i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Visual Exterior</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $workorder_id; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
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

<form class="w-full py-2.5 flex-col" action="<?php echo BASE_URL; ?>workorder/visualexterior_store/<?php echo $workorder_id; ?>" method="post">
    <div class="input-line">
        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Capô dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_hood" id="front_hood">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_hood_obs" id="front_hood_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Espelho retrovisor direito</div>
                <div class="w-2/12 mr-1">
                    <select name="rearview_mirror_right" id="rearview_mirror_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rearview_mirror_right_obs" id="rearview_mirror_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Espelho retrovisor esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="rearview_mirror_left" id="rearview_mirror_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rearview_mirror_left_obs" id="rearview_mirror_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Farol dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_headlight_right" id="front_headlight_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_headlight_right_obs" id="front_headlight_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Farol dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_headlight_left" id="front_headlight_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_headlight_left_obs" id="front_headlight_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-choques dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_bumper" id="front_bumper">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_bumper_obs" id="front_bumper_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_fenders_right" id="front_fenders_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_fenders_right_obs" id="front_fenders_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_fenders_left" id="front_fenders_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_fenders_left_obs" id="front_fenders_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro dianteiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="front_window_right" id="front_window_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_window_right_obs" id="front_window_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro dianteiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="front_window_left" id="front_window_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_window_left_obs" id="front_window_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
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
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_door_right_obs" id="front_door_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta dianteira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="front_door_left" id="front_door_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_door_left_obs" id="front_door_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Janela traseira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_window_right" id="rear_window_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_window_right_obs" id="rear_window_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Janela traseira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_window_left" id="rear_window_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_window_left_obs" id="rear_window_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas traseiro direito</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_fenders_right" id="rear_fenders_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_fenders_right_obs" id="rear_fenders_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-lamas traseiro esquerdo</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_fenders_left" id="rear_fenders_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_fenders_left_obs" id="rear_fenders_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Tampa traseira do porta malas</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_trunk_lid" id="rear_trunk_lid">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_trunk_lid_obs" id="rear_trunk_lid_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Tampa superior do porta malas</div>
                <div class="w-2/12 mr-1">
                    <select name="upper_trunk_lid" id="upper_trunk_lid">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="upper_trunk_lid_obs" id="upper_trunk_lid_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Lanterna traseira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="taillight_right" id="taillight_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="taillight_right_obs" id="taillight_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Lanterna traseira esqueda</div>
                <div class="w-2/12 mr-1">
                    <select name="taillight_left" id="taillight_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="taillight_left_obs" id="taillight_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="w-2/6 mr-1 flex-col bg-slate-200 rounded-md p-1">
            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Vidro traseiro</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_window" id="rear_window">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_window_obs" id="rear_window_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Parabrisas dianteiro</div>
                <div class="w-2/12 mr-1">
                    <select name="front_windshield" id="front_windshield">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="front_windshield_obs" id="front_windshield_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Para-choques traseiro</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_bumper" id="rear_bumper">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_bumper_obs" id="rear_bumper_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta traseira direita</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_door_right" id="rear_door_right">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_door_right_obs" id="rear_door_right_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Porta traseira esquerda</div>
                <div class="w-2/12 mr-1">
                    <select name="rear_door_left" id="rear_door_left">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="rear_door_left_obs" id="rear_door_left_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Teto</div>
                <div class="w-2/12 mr-1">
                    <select name="roof" id="roof">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="roof_obs" id="roof_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Capota conversível</div>
                <div class="w-2/12 mr-1">
                    <select name="convertible_top" id="convertible_top">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="convertible_top_obs" id="convertible_top_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Película de proteção PPF</div>
                <div class="w-2/12 mr-1">
                    <select name="protective_film" id="protective_film">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="protective_film_obs" id="protective_film_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Aerofólio</div>
                <div class="w-2/12 mr-1">
                    <select name="airfoil" id="airfoil">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="airfoil_obs" id="airfoil_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
            </div>

            <div class="input-line items-center">
                <div class="w-8/12 mr-1 font-semibold">Há sinais de reparos de acidente?</div>
                <div class="w-2/12 mr-1">
                    <select name="accident_warning_sings" id="accident_warning_sings">
                        <option value="1">OK</option>
                        <option value="2">NC</option>
                        <option value="3">NA</option>
                    </select>
                </div>
                <div class="w-2/12">
                    <select name="accident_warning_sings_obs" id="accident_warning_sings_obs">
                        <option value="1">OK</option>
                        <option value="2">S</option>
                        <option value="3">F</option>
                        <option value="4">R</option>
                        <option value="5">A</option>
                        <option value="6">I</option>
                        <option value="7">RT</option>
                        <option value="8">P</option>
                    </select>
                </div>
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