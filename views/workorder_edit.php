<div class="breadcrumb">
<span class="breadcrumb-title">Ordem de Serviço nº <?php echo $order_info['id']; ?><i class="fa-solid fa-chevron-right px-2 fa-xs"></i> Editar</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>workorder/show/<?php echo $order_info['id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<form class="w-full py-2.5" action="<?php echo BASE_URL; ?>workorder/update/<?php echo $order_info['id']; ?>" method="post">
    <div class="input-line">
        <div class="w-6/12 mr-1">
            <label for="customer">Cliente</label>
            <input type="text" name="customer" id="customer" class="w-full" value="<?php echo $order_info['customer']; ?>">
        </div>
        <div class="w-3/12 mr-1">
            <label for="brand">Marca</label>
            <input type="text" name="brand" id="brand" class="w-full" value="<?php echo $order_info['brand']; ?>">
        </div>
        <div class="w-3/12">
            <label for="model">Modelo</label>
            <input type="text" name="model" id="model" class="w-full" value="<?php echo $order_info['model']; ?>">
        </div>
    </div>

    <div class="input-line">
        <div class="w-1/12 mr-1">
            <label for="year">Ano</label>
            <input type="text" name="year" id="year" class="w-full" value="<?php echo $order_info['year']; ?>">
        </div>
        <div class="w-2/12 mr-1">
            <label for="color">Cor</label>
            <input type="text" name="color" id="color" class="w-full" value="<?php echo $order_info['color']; ?>">
        </div>
        <div class="w-2/12 mr-1">
            <label for="license_plate">Placa</label>
            <input type="text" name="license_plate" id="license_plate" class="w-full" value="<?php echo $order_info['license_plate']; ?>">
        </div>
        <div class="w-4/12 mr-1">
            <label for="chassis">Chassi</label>
            <input type="text" name="chassis" id="chassis" class="w-full" value="<?php echo $order_info['chassis']; ?>">
        </div>
        <div class="w-3/12 mr-1">
            <label for="km">Odômetro</label>
            <input type="text" name="km" id="km" class="w-full" value="<?php echo $order_info['km']; ?>">
        </div>
    </div>

    <div class="input-line">
        <div class="w-2/12 mr-1">
            <label for="transmission">Transmissão</label>
            <input type="text" name="transmission" id="transmission" class="w-full" value="<?php echo $order_info['transmission']; ?>">
        </div>
        <div class="w-2/12 mr-1">
            <label for="fuel">Combustível</label>
            <input type="text" name="fuel" id="fuel" class="w-full" value="<?php echo $order_info['fuel']; ?>">
        </div>
        <div class="w-2/12 mr-1">
            <label for="power">Potência</label>
            <input type="text" name="power" id="power" class="w-full" value="<?php echo $order_info['power']; ?>">
        </div>
        <div class="w-3/12 mr-1">
            <label for="responsible_consultant">Consultor Reponsável</label>
            <input type="text" name="responsible_consultant" id="responsible_consultant" class="w-full" value="<?php echo $order_info['responsible_consultant']; ?>">
        </div>
        <div class="w-3/12">
            <label for="responsible_mechanic">Mecânico Responsável</label>
            <input type="text" name="responsible_mechanic" id="responsible_mechanic" class="w-full" value="<?php echo $order_info['responsible_mechanic']; ?>">
        </div>
    </div>

    <div class="input-line flex-col">
        <span>
            <label for="aditional_info">Observações</label>
        </span>
        <textarea name="aditional_info" id="aditional_info" rows="5" class="w-full"><?php echo $order_info['aditional_info']; ?></textarea>
    </div>

    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>