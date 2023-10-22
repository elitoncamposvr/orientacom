<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>OS <?php echo strtoupper($order_info['id']) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
        }

        .line {
            background-color: #e2e8f0;
        }

        .border {
            border: 1px solid #e2e8f0;
        }

        .border-dark{
            border: 1px solid #64748b;
        }

        .pd-1 {
            padding: 4px;
        }

        .text-obs {
            font-size: 10px;
        }

        .p-header {
            font-size: 18px;
        }

        table {
            border-collapse: collapse;
        }

        .table-border,
        .table-border tr,
        .table-border td {
            border: 1px solid #64748b;
        }

        /*
    .p-title {
        font-size: 16px;
        font-weight: bold;
    }

    .table-line {
        width: 100%;
        padding: 0 60px;
        display: inline-block;
        margin-bottom: 8px;
    }

    .py-10 {
        padding: 10px 0;
    }

    .title {
        background-color: black;
        color: white;
        border-radius: 6px;
        font-size: 22px;
        font-weight: bold;
        text-align: center;
        margin: 10px 60px;
        padding: 5px 0;
    }

    .label {
        width: 39%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
    }

    .data {
        width: 59%;
        float: right;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
    }

    .label-2 {
        width: 59%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
    }

    .data-2 {
        width: 39%;
        float: right;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
    }

    .label-3 {
        width: 46%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
    }

    .data-perc {
        width: 12%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
        margin-left: 1%;
    }

    .data-3 {
        width: 39%;
        float: right;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
    }

    h1 {
        text-align: center;
        font-size: 20px;
        margin: 20px;
        font-weight: 500;
    }

    .clear {
        clear: both;
    }

    footer {
        width: 100%;
        position: absolute;
        bottom: 0;
        text-align: center;
        border-top: 2px solid #14b8a6;
    }
*/
        .center {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="line">
        <table width="100%" class="p-header">
            <tr>
                <td width="75%" class="center">RELATÓRIO DE AVALIAÇÃO TÉCNICA - PRÉ-COMPRA</td>
                <td>OS Nº <?php echo $order_info['id']; ?></td>
            </tr>
        </table>
    </div>
    <div class="line">
        <table width="100%" class="pd-1">
            <tr>
                <td width="30%">
                    MARCA: <?php echo strtoupper($order_info['brand']); ?>
                </td>
                <td width="25%">
                    MODELO:<?php echo strtoupper($order_info['model']); ?>
                </td>
                <td width="20%">
                    ANO: <?php echo strtoupper($order_info['year']); ?>
                </td>
                <td width="25%">
                    PLACA: <?php echo strtoupper($order_info['license_plate']); ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="line">
        <table width="100%" class="pd-1">
            <tr>
                <td width="30%">
                    CHASSI: <?php echo strtoupper($order_info['chassis']); ?>
                </td>
                <td width="25%">
                    COR: <?php echo strtoupper($order_info['color']); ?>
                </td>
                <td width="20%">
                    KM: <?php echo strtoupper($order_info['km']); ?>
                </td>
                <td width="25%">
                    DATA: <?php echo date('d/m/Y', strtotime($order_info['date_os'])); ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="line">
        <table width="100%" class="pd-1">
            <tr>
                <td width="30%">
                    TRANSMISSÃO: <?php echo strtoupper($order_info['transmission']); ?>
                </td>
                <td width="25%">
                    COMBUSTÍVEL: <?php echo strtoupper($order_info['fuel']); ?>
                </td>
                <td width="20%">
                    POTÊNCIA: <?php echo strtoupper($order_info['power']); ?>
                </td>
                <td width="25%">
                    HORA: <?php echo date('H:i', strtotime($order_info['date_os'])); ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="border pd-1 text-obs">
        <strong>OBSERVAÇÕES:</strong>
        <div>- A avaliação dos itens elencados nesta listagem é realizada apenas visualmente. A verificação da numeração do chassi objetiva apenas certificar-se tecnicamente do tipo/modelo/ano do veículo.</div>
        <div>- Quanto à observação das informações do painel de instrumentos objetivam auxiliar na constatação do estado do veículo e uso, por exemplo, a quilometragem acusada. O histórico de quilometragem poderá ser analisado quando disponibilizado pelo proprietário do veículo para confronto com os dados de vistorias ou de outros serviços realizados no veículo onde a coleta desta informação foi realizada. Portanto, não possuindo meios de aferir a consistência da informação constante no hodômetro no momento da sua coleta, não nos responsabilizamos por eventual adulteração deste equipamento.</div>
        <div>- Informações e avaliações mais detalhadas somente podem ser efetuadas com desmonte das peças, conjuntos e subconjuntos mecânicos, o que definitivamente não é
            mérito desta avaliação.</div>
    </div>

    <div class="line">
        <table width="100%">
            <tr>
                <td width="15%">TESTE</td>
                <td>
                    <table width="100%" class="table-border">
                        <tr>
                            <td>RESUMO DAS AVALIAÇÕES</td>
                            <td class="center">ITENS VERIFICADOS</td>
                            <td class="center">ITENS "OK"</td>
                            <td class="center">ITENS COM OBSERVAÇÕES</td>
                            <td class="center">% APROVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>EXTERIOR</td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                        </tr>
                        <tr>
                            <td>MECÂNICA GERAL</td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                        </tr>
                        <tr>
                            <td>INTERIOR</td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class="line border-dark">
        <table width="100%">
            <tr>
                <td width="15%">RESPONSÁVEIS</td>
                <td>Líder Mec. Manut. Autom.: <?php echo $order_info['responsible_consultant'];?></td>
                <td>Consultor Ténico: <?php echo $order_info['responsible_mechanic'];?></td>
            </tr>
        </table>
    </div>
</body>

</html>