<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <style media="print" >
        .noprint{
            display:none;
        }
    </style>
    <style type="text/css">
        body{
            margin: 0px;
            background-color: #FFFFFF;
        }

        .borda td{
            border:solid 1px #000000;
            border-collapse: collapse;
        }
        .border_none{
            border:none;
        }
        .sem_borda_lateral{
            border-left:none !important;
            border-right:none !important;
            border-collapse: collapse;
        }


        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        .style2 {
            font-size: 24px
        }
        thead {
            display: table-header-group;
        }
        tfoot{
            display: table-footer-group;
        }
        .style3 {
            font-size: 14px
        }

        .cabecalho{
            font:Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
        .texto{
            font:Arial, Helvetica, sans-serif;
            font-size:14px;
            text-transform:uppercase;
        }

        .tr{
            font:Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .folha {
            page-break-after: always;
        }
    </style>
</head>


    <body>

        <table width="100%">
            <tr class="noprint">
                <td height="35" align="center">
                    <a href="javascript: imprimir()" class="btn btn-info btn-xs"><span class="fa fa-print"></span> Imprimir</a>
                </td>
            </tr>
        </table>

        <div class="folha">
            <table width="796" class="" height="393" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="33" height="34">&nbsp;</td>
                        <td width="712">&nbsp;</td>
                        <td width="29">&nbsp;</td>
                    </tr>
                    <tr>
                    <td height="333">&nbsp;</td>
                    <td align="center" valign="top"><table width="710" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                        <td height="80" class="">
                            <table width="100%" border="0" class="borda" cellpadding="0" cellspacing="0">
                            <tr>
                            <td width="150" height="90" align="center" valign="middle"><img src="{{ asset('assets/img/logo.svg') }}" width="80%" height="auto"  /></td>
                            <td width="344" height="90" align="center" valign="middle" class="texto_caps " style="font-size:14px">
                                    <p><span class="cabecalho">SEMEAR - CENTRO DE EDUCA&Ccedil;&Atilde;O INFANTIL<br />
                            CNPJ 10.505.917/0001-00</span></p>
                                <p><span class="cabecalho"><strong>FONE (42) 3027-3565</strong></span></p></td>
                            <td width="214" height="90" align="center" valign="middle">
                                <table width="196" height="75" class="borda" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="25" align="center" valign="middle" class="borda" bgcolor="#CCCCCC"><strong>RECIBO</strong></td>
                                    </tr>
                                    <tr>
                                        <td height="24" align="center" valign="middle" class="sem_borda_lateral"><strong class="cabecalho">VALOR</strong></td>
                                    </tr>
                                    <tr>
                                        <td height="24" align="center" valign="middle" ><strong>R$ {{ number_format($data['value'], 2, ',', '.') }}</strong></td>
                                    </tr>

                            </table></td>
                            </tr>
                        </table></td>
                        </tr>
                        <tr>
                        <td class="">
                            <table width="100%" border="0" class="borda" cellpadding="3" cellspacing="0">
                            <tr>
                            <td height="25" class="texto borda_base">Recebemos de: <strong>{{  $data['payer'] }}</strong></td>
                            </tr>
                            <tr>
                            <td height="25" class="texto borda_base">A quantia de: <strong> {{  $data['desc_value'] }}</strong></td>
                            </tr>
                            <tr>
                            <td height="25" class="texto borda_base">Correspondente: <strong>{{  $data['reference'] }}</strong></td>
                            </tr>
                            <tr>
                            <td height="25" class="texto">e para clareza firmamos o presente</td>
                            </tr>
                            <tr>
                            <td height="129" class="texto"><table width="710" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                <td width="41%" height="110" align="center" valign="bottom">CARIMBO COM CNPJ</td>
                                <td width="59%" align="center" valign="bottom"><p><strong>PONTA GROSSA, {{ \Carbon\Carbon::parse($data['created_at'])->format('d/m/Y') }}</strong></p>
                                <p>&nbsp;</p>
                                <p>______________________________________________________<br />
                                ASSINATURA</p></td>
                                </tr>
                            </table></td>
                            </tr>
                        </table></td>
                        </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
                    <td height="23">&nbsp;</td>
                    <td height="23">&nbsp;</td>
                    <td height="23">&nbsp;</td>
                    </tr>
                </table>
                  </div>

    </body>
</html>

<script>

	function imprimir(){
		window.print();

	}

</script>
