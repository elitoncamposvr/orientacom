<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $order_info['id']; ?></span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="input-line py-1.5">
    <div class="w-6/12 mr-1">
        <span class="font-bold pr-1">Cliente:</span>
        <?php echo $order_info['customer']; ?>
    </div>
    <div class="w-2/12 mr-1">
        <span class="font-bold pr-1">Data:</span>
        <?php echo date('d/m/Y H:i', strtotime($order_info['date_os'])); ?>
    </div>
    <div class="w-3/12 mr-1">
        <span class="font-bold pr-1">Status:</span>
        <?php echo ($order_info['status'] == 1) ? 'Concluído' : 'Pendente'; ?>
    </div>
    <div class="w-1/12 text-right">
        <span class="font-bold pr-1">OS Nº:</span>
        <?php echo $order_info['id']; ?>
    </div>
</div>

<div class="input-line py-1.5">
    <div class="w-3/12 mr-1">
        <span class="font-bold pr-1">Marca:</span>
        <?php echo $order_info['brand']; ?>
    </div>
    <div class="w-3/12 mr-1">
        <span class="font-bold pr-1">Modelo: </span>
        <?php echo $order_info['model']; ?>
    </div>
    <div class="w-2/12 mr-1">
        <span class="font-bold pr-1">Ano:</span>
        <?php echo $order_info['year']; ?>
    </div>
    <div class="w-2/12 mr-1">
        <span class="font-bold pr-1">Cor:</span>
        <?php echo $order_info['color']; ?>
    </div>
    <div class="w-2/12 text-right">
        <span class="font-bold pr-1">KM:</span>
        <?php echo $order_info['km']; ?>
    </div>
</div>

<div class="input-line py-1.5">
    <div class="w-3/12 mr-1">
        <span class="font-bold pr-1">Chassi:</span>
        <?php echo $order_info['chassis']; ?>
    </div>
    <div class="w-3/12 mr-1">
        <span class="font-bold pr-1">Placa:</span>
        <?php echo $order_info['license_plate']; ?>
    </div>
    <div class="w-2/12 mr-1">
        <span class="font-bold pr-1">Transmissão:</span>
        <?php echo $order_info['transmission']; ?>
    </div>
    <div class="w-2/12 mr-1">
        <span class="font-bold pr-1">Combustível:</span>
        <?php echo $order_info['fuel']; ?>
    </div>
    <div class="w-2/12 text-right">
        <span class="font-bold pr-1">Potência:</span>
        <?php echo $order_info['power']; ?>
    </div>
</div>

<div class="input-line py-1.5">
    <div class="w-6/12">
        <span class="font-bold pr-1">Consultor Responsável:</span>
        <?php echo $order_info['responsible_consultant']; ?>
    </div>
    <div class="w-6/12">
        <span class="font-bold pr-1">Mecânico Responsável:</span>
        <?php echo $order_info['responsible_mechanic']; ?>
    </div>
</div>

<?php if ($order_info['aditional_info'] != '') : ?>
    <div class="input-line flex-col">
        <div class="w-full font-bold">
            Observações Gerais:
        </div>
        <div class="w-full">
            <?php echo $order_info['aditional_info']; ?>
        </div>
    </div>
<?php endif; ?>

<div class="input-line p-2 my-2 bg-slate-200 rounded-md">
    <div class="grid grid-cols-3 gap-4 w-full">
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($visual_exterior_status > 0) ? 'visualexterior_edit/' . $order_info['visual_exterior_id'] : 'visualexterior_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Visual Exterior
                </div>
                <span class="text-xs">
                    <?php
                    if ($visual_exterior_status > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['tires_id'] > 0) ? 'tires_edit/' . $order_info['tires_id'] : 'tires_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Pneus
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['tires_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['brakes_id'] > 0) ? 'brakes_edit/' . $order_info['brakes_id'] : 'brakes_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Freios
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['brakes_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['steering_system_id'] > 0) ? 'steeringsystem_edit/' . $order_info['steering_system_id'] : 'steeringsystem_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Direção
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['steering_system_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['fuel_system_id'] > 0) ? 'fuelsystem_edit/' . $order_info['fuel_system_id'] : 'fuelsystem_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Combustível
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['fuel_system_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['engine_id'] > 0) ? 'engine_edit/' . $order_info['engine_id'] : 'engine_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Motor
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['engine_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['suspension_id'] > 0) ? 'suspension_edit/' . $order_info['suspension_id'] : 'suspension_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Suspensão
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['suspension_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['general_items_id'] > 0) ? 'general_edit/' . $order_info['general_items_id'] : 'general_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Mecânica Geral
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['general_items_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['light_glass_id'] > 0) ? 'lightglass_edit/' . $order_info['light_glass_id'] : 'lightglass_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Luzes e Vidros
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['light_glass_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL; ?>workorder/<?php echo ($order_info['interior_visual_id'] > 0) ? 'interior_edit/' . $order_info['interior_visual_id'] : 'interior_create/' . $order_info['id'] ?>">
            <div class="card-link hover:card-link--hover">
                <div class="font-semibold text">
                    Visual Interior
                </div>
                <span class="text-xs">
                    <?php
                    if ($order_info['interior_visual_id'] > 0) {
                        echo '<span class="rounded-md p-1 bg-green-600 text-white">Concluído</span>';
                    } else {
                        echo '<span class="rounded-md p-1 bg-amber-400 text-white">Pendente</span>';
                    }
                    ?>
                </span>
            </div>
        </a>

    </div>
</div>

<div class="input-line justify-center items-center py-3">
    <?php echo ($order_info['visual_exterior_id'] == 1 && $order_info['tires_id'] == 1 && $order_info['brakes_id'] == 1 && $order_info['steering_system_id'] == 1 && $order_info['fuel_system_id'] == 1 && $order_info['engine_id'] == 1 && $order_info['suspension_id'] == 1 && $order_info['general_items_id'] == 1 && $order_info['light_glass_id'] == 1 && $order_info['interior_visual_id'] == 1) ?>
    <span class="px-1">
        <a href="<?php echo BASE_URL; ?>workorder/report/<?php echo $order_info['id']; ?>" class="btn-success hover:btn-success--hover"><i class="fa-solid fa-up-right-from-square"></i> Gerar Relatório</a>
    </span>
    <?php ?>
    <span class="px-1">
        <a href="<?php echo BASE_URL; ?>workorder/edit/<?php echo $order_info['id']; ?>" class="btn hover:btn--hover"><i class="fa-solid fa-up-right-from-square"></i> Editar</a>
    </span>
    <span class="px-1">
        <a href="<?php echo BASE_URL; ?>workorder/destroy/<?php echo $order_info['id']; ?>" class="btn-danger hover:btn-danger--hover" onclick="return confirm('Deseja realmente excluir?')"><i class="fa-regular fa-trash-can"></i> Excluir</a>
    </span>
</div>