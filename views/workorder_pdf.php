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

        .line-mid-dark {
            background-color: #cbd5e1;
        }

        .line-dark {
            background-color: #64748b;
        }

        .border {
            border: 1px solid #e2e8f0;
        }

        .border-dark {
            border: 1px solid #64748b;
        }

        .pd-1 {
            padding: 4px;
        }

        .mb-1 {
            margin-bottom: 4px;
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

        .vertical-line {
            text-align: center;
            line-height: 20px;
            font-size: 18px;
            background-color: #cbd5e1;
        }

        .center {
            text-align: center;
        }

        .left{
            text-align: left;
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
    <div class="line-mid-dark mb-1">
        <table width="100%">
            <tr>
                <td width="15%">RESPONSÁVEIS</td>
                <td>Líder Mec. Manut. Autom.: <?php echo $order_info['responsible_consultant']; ?></td>
                <td>Consultor Ténico: <?php echo $order_info['responsible_mechanic']; ?></td>
            </tr>
        </table>
    </div>

    <div class="line center">
        RELATÓRIO DE AVALIAÇÃO EXTERIOR - PRÉ COMPRA
    </div>
    <div class="border">
        <table width="100%" class="border">
            <tr>
                <td width="3%" class="vertical-line pd-1">
                    E<br />
                    X<br />
                    T<br />
                    E<br />
                    R<br />
                    I<br />
                    O<br />
                    R<br />
                </td>
                <td class="center">
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="<?php echo BASE_URL; ?>assets/images/img-vistory.jpg" alt="IMG" width="110%">
                                <span>VISTA EXTERIOR DO VEÍCULO</span>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" class="line-mid-dark pd-1">
                        <tr>
                            <td>
                                (OK) - OK
                            </td>
                            <td>
                                (S) - Saliência
                            </td>
                            <td>
                                (F) - Ferrugem
                            </td>
                            <td>
                                (R) - Risco
                            </td>
                            <td>
                                (A) - Amassado
                            </td>
                            <td>
                                (I) - Impacto de Pedras
                            </td>
                            <td>
                                (RT) - Retoque
                            </td>
                            <td>
                                (P) - Repintura
                            </td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td width="33.33%" class="left">
                                <table width="100%">
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Capô dianteiro</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Para-brisas Dianteiro</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Espelho Retrovisor Direito</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Farol dianteiro direito</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Farol dianteiro esquerdo</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Para-choques dianteiro</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Espelho retrovisor esquerdo</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Paralamas dianteiro esquerdo</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Porta dianteira esquerda</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Vidro dianteiro esquerdo</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="border center">1</td>
                                        <td width="10%" class="border center">OK</td>
                                        <td width="10%" class="border center"></td>
                                        <td>Porta traseira esquerda</td>
                                    </tr>
                                </table>
                            </td>
















                            <td width="33.33%" class="left">TESTE</td>
                            <td width="33.33%" class="left">TESTE</td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </div>

</body>

</html>