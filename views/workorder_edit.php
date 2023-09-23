<div class="breadcrumb">
    <span class="breadcrumb-title">Ordem de Serviço <i class="fa-solid fa-chevron-right px-2"></i> Editar</span>
</div>

<form class="w-full py-2.5" action="<?php echo BASE_URL; ?>workorder/update/<?php echo $order_info['id'];?>" method="post">
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="customer">Cliente</label>
            <input type="text" name="customer" id="customer" class="w-full" value="<?php echo $order_info['customer'];?>">
        </div>
        <div class="w-2/6 mr-1">
            <label for="brand">Marca</label>
            <input type="text" name="brand" id="brand" class="w-full" value="<?php echo $order_info['brand'];?>">
        </div>
        <div class="w-2/6">
            <label for="model">Modelo</label>
            <input type="text" name="model" id="model" class="w-full" value="<?php echo $order_info['model'];?>">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="year">Ano</label>
            <input type="text" name="year" id="year" class="w-full" value="<?php echo $order_info['year'];?>">
        </div>
        <div class="w-2/6 mr-1">
            <label for="license_plate">Placa</label>
            <input type="text" name="license_plate" id="license_plate" class="w-full" value="<?php echo $order_info['license_plate'];?>">
        </div>
        <div class="w-2/6 mr-1">
            <label for="chassis">Chassi</label>
            <input type="text" name="chassis" id="chassis" class="w-full" value="<?php echo $order_info['chassis'];?>">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="transmission">Transmissão</label>
            <input type="text" name="transmission" id="transmission" class="w-full" value="<?php echo $order_info['transmission'];?>">
        </div>
        <div class="w-2/6 mr-1">
            <label for="fuel">Combustível</label>
            <input type="text" name="fuel" id="fuel" class="w-full" value="<?php echo $order_info['fuel'];?>">
        </div>
        <div class="w-2/6">
            <label for="power">Potência</label>
            <input type="text" name="power" id="power" class="w-full" value="<?php echo $order_info['power'];?>">
        </div>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>