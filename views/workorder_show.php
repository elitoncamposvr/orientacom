<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço nº <?php echo $order_info['id']; ?></span>
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
        <a href="<?php echo BASE_URL; ?>workorder/visualexterior_create/<?php echo $order_info['id']; ?>">
            <div class="w-full bg-slate-300 rounded-md p-1.5">Visual Exterior</div>
        </a>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Pneus</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Freios</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Direção</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Combustível</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Motor</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Suspensão</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Mecânica Geral</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Luzes e Vidros</div>
        <div class="w-full bg-slate-300 rounded-md p-1.5">Visual Interior</div>

    </div>
</div>

<div class="input-line justify-center items-center py-3">
    <span class="px-1">
        <a href="<?php echo BASE_URL; ?>workorder/edit/<?php echo $order_info['id']; ?>" class="btn"><i class="fa-solid fa-up-right-from-square"></i> Editar</a>
    </span>
    <span class="px-1">
        <a href="<?php echo BASE_URL; ?>workorder/destroy/<?php echo $order_info['id']; ?>" class="btn-danger hover:btn-danger--hover" onclick="return confirm('Deseja realmente excluir?')"><i class="fa-regular fa-trash-can"></i> Excluir</a>
    </span>
</div>