<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Contrato | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\contrato.css" />
</head>
	<body >
    <?php
        require('db/checkemprestimo.php');
        require('db/connection.php');
        $data = date('d/m/Y'); 
    ?>
        <form action="gets/getFormContrato.php" method="post">
            <div class="container">
                <span class="t_contrato">Contrato emprestimo Credito para todxs - (CPT)</span>
                <p class="texto_contrato" style="white-space: pre-line;"><span class="t_termos">Termos contrato de emprestimo – (CPT)</span>
                    O presente contrato define as condições gerais aplicáveis ao Empréstimo, concedido pela CRÉDITO PARA TODXS,
                    inscrita no CNPJ pelo número 12.123.123/0001-01 doravante denominada
                    Mutuante, e <?php echo "<span class='n_contrato'>".$infomacoes['nome_cliente']." ".$infomacoes['sobrenome_cliente']."</span>";?>, inscrita no CPF pelo número <?php echo $infomacoes['cpf'];?>,
                    doravante denominada Mutuária, de acordo com a Lei Complementar nº 167 de 25/04/2018.
                    <span class="clausula">CLÁUSULA PRIMEIRA:</span>
                    DEFINIÇÕES
                    a) TAXA DE JUROS TOTAL - É a remuneração da ESC (Custo Efetivo Total do Empréstimo) – é a
                    nomenclatura estabelecida para denominar a remuneração da Mutuante que considera todos os
                    encargos e despesas incidentes na operação de empréstimo, contratada ou ofertada ao
                    microempreendedor individual, microempresa ou empresa de pequeno porte.
                    b) COAF – é o Conselho de Controle de Atividades Financeiras.
                    c) CONTRATO – é o presente Contrato, as descrições do Quadro Resumo e eventuais anexos
                    discriminadores das garantias.
                    d) CONTRATANTE MUTUÁRIA – é o microempreendedor individual, microempresa ou empresa de
                    pequeno porte tomador do Empréstimo.
                    e) IOF – É o Imposto de Operação Financeira, conforme estabelecido na legislação aplicável, incidente
                    sobre o Empréstimo.
                    f) CONTRATADA MUTUANTE – é a Empresa Simples de Crédito, empresa que fornece o Empréstimo
                    a este contrato.
                    g) DEVEDOR SOLIDÁRIO – É pessoa física interveniente garantidora do empréstimo contraído pela
                    Contratante Mutuária.
                    h) QUADRO RESUMO – são as descrições exatas dos termos do Empréstimo disponibilizada a
                    Contratante Mutuária no momento da contratação, contendo valor solicitado, quantidade de
                    parcelas, datas dos vencimentos das parcelas, juros totais, datas dos vencimentos das parcelas,
                    total a pagar, IOF, incidente e opção das garantias acessórias.
                    <span class="clausula">CLÁUSULA SEGUNDA: O EMPRÉSTIMO</span>
                    a) A Contratada Mutuante concedeu a Contratante Mutuária um Empréstimo no valor mutuado e de
                    acordo com as demais condições indicadas no Quadro Resumo, cujo montante líquido, deduzida a
                    remuneração da ESC, o IOF e eventuais pendências financeiras relativas a contratos anteriores, foi
                    liberado por meio de crédito na conta da Contratante Mutuária. 
                    b) A Contratante Mutuária se obriga a restituir a Contratada Mutuante o valor total devido indicado
                    no Quadro Resumo, sendo que os juros do Empréstimo serão calculados de forma exponencial e
                    capitalizados diariamente, com base em um ano de 365 (trezentos e sessenta e cinco) dias.
                    c) Fica ajustado que qualquer tolerância por parte da Contratada Mutuante, assim como a não
                    exigência imediata de qualquer crédito, ou o recebimento após o vencimento, antecipado ou
                    tempestivo, de qualquer debito, não constituirá novação, nem modificação do ajuste, nem
                    qualquer precedente ou expectativa de direito da Contratada Mutuante de execução imediata.
                    <span class="clausula">CLÁUSULA TERCEIRA: TARIFAS</span>
                    a) A Contratada Mutuante não cobrará qualquer valor a título de tarifa de originação do Empréstimo.
                    <span class="clausula">CLÁUSULA QUARTA: O PAGAMENTO DO EMPRÉSTIMO</span>
                    a) As parcelas do empréstimo poderão ou não estar representadas por Notas Promissórias, emitidas
                    pela Contratante e avalizadas pelo Devedor Solidário e deverão ser quitadas nos respectivos
                    vencimentos, mediante opção no Quadro Resumo.
                    b) As parcelas poderão, ainda estar garantidas pela cessão Fiduciária de Direitos Creditórios, de
                    titularidade da Contratante Mutuária, mediante opção no Quadro Resumo, sendo que as cláusulas
                    da garantia fiduciária e a relação dos direitos creditórios com seus respectivos valores, devedores
                    e vencimentos, constarão de um anexo, especifico, parte integrante do Contrato.
                    c) Caso a data de vencimento de qualquer das parcelas indicadas no Quadro Resumo não seja Dia Útil,
                    o valor devido deverá ser quitado no dia útil subsequente, sem a incidência de juros moratórios.
                    <span class="clausula">CLÁUSULA QUINTA: PAGAMENTO ANTECIPADO DO EMPRÉSTIMO</span>
                    a) O Empréstimo poderá ser pago antecipadamente para a Contratada Mutuante por opção do
                    Contratante Mutuante aplicando-se a redução proporcional utilizando-se a mesma taxa de juros
                    contratada.
                    <span class="clausula">CLÁUSULA SEXTA: ATRASO DA CONTRATANTE MUTUÁRIA</span>
                    a) Para efeitos deste Contrato, entende-se por atraso o não pagamento no prazo e pela forma devida,
                    de qualquer quantia de valor da parcela devida, ou qualquer outra obrigação, contraída junto a
                    Contratada Mutuante em decorrência deste Contrato.
                    b) A configuração de atraso ocorrera independentemente de qualquer aviso ou notificação,
                    resultando do simples descumprimento das obrigações assumidas neste contrato.
                    c) O atraso no pagamento de quaisquer valores devidos, vencidos e não pagos na época em que forem
                    exigíveis por força do disposto neste Contrato, ou nas hipóteses de vencimento antecipado da
                    divida adiante previste, configurará a situação de atraso, ficando a divida sujeita do vencimento ao
                    efetivo pagamento, aos seguintes encargos:
                    - Juros moratórios, cuja a taxa se encontra indicada no Quadro Resumo e que incidirá sobre o valor
                    da parcela em atraso;
                    - Multa moratória de 2% (dois por cento) e que incidirá o sobre o valor da parcela em atraso;
                    <span class="clausula">CLÁUSULA SÉTIMA: VENCIMENTO ANTECIPADO DO EMPRÉSTIMO</span>
                    a) No caso de apuração de falsidade, fraude ou inexatidão de qualquer declaração, informação ou
                    documento que houverem sido prestados pela Contratante Mutuária seus representantes legais
                    e/ou garantidores, ocorrerá o vencimento antecipado da totalidade do empréstimo em aberto.
                    <span class="clausula">CLÁUSULA OITAVA: DISPOSIÇÕES GERAIS</span>
                    b) A Contratante Mutuária seus representantes legais e/ou garantidores declaram que todas as
                    informações fornecidas no momento da solicitação do Empréstimo são verdadeiras, especialmente
                    acerca da licitude da origem da renda e patrimônio, bem como estarem cientes das disposições
                    previstas na Lei nº 9.613/96 com as alterações introduzidas, inclusive pela Lei nº 12.683/12
                    devendo ainda informar à Contratada Mutuante sobre eventuais alterações nos dados cadastrais,
                    sendo de sua responsabilidade todas as consequências decorrentes do descumprimento dessa
                    obrigação. Além disso, a Contratada Mutuante, sempre que necessário poderá solicitar a
                    atualização dos dados cadastrais das partes do Contrato, inclusive garantidores e representantes
                    legais.
                    c) A Contratante Mutuária autoriza a Contratada Mutuante, em caráter irrevogável e irretratável e na
                    forma da regulamentação aplicável a (i) transmitir e consultar informações sobre o Contratante
                    e/ou relativas a esta operação de Empréstimos à Centrais de Risco de Crédito utilizando tais
                    informações, inclusive para analise de capacidade de crédito do Contratante, bem como fornecer
                    tais informações a terceiros que sejam contratados para prestar serviços de controle e cobrança
                    por quaisquer meios, das obrigações assumida pelas Contratantes Mutuária com relação a este
                    Contrato, (ii) levar a registro este Contrato em entidade Registradora autorizada pelo Banco
                    Central; e (iii) em caso de inadimplemento, inserir o nome da Contratante Mutuária e de seus
                    garantidores m bancos públicos ou privados de restrição cadastral.
                    d) A contratante Mutuária está ciente de que a Contratada Mutuante está sujeita a mecanismos de
                    controle para fins de prevenção à lavagem de dinheiro e sobre o dever de comunicação ao COAF
                    de operações que possam estar configuradas na Lei 9.613/98 (que dispõe sobre os crimes de
                    lavagem ou ocultação de bens, direitos e valores) e demais disposições legais pertinentes à matéria.
                    e) Independentemente das garantias acessórias ofertadas, o presente contrato, assinado por 2 (duas)
                    testemunhas é título executivo extrajudicial para a cobrança executiva das obrigações assumidas.
                    f) Fica eleito o Foro da Sede da Contratada Mutuante para resolver quaisquer questões relativas ao
                    presente Contrato.
                    Contrato de Empréstimo Crédito para todxs – (CPT)
                    g) O presente contrato é firmado em 3 (três) vias, assinado pelas partes e testemunhas, sendo que
                    uma das vias é nesse ato entregue a Contratante Mutuária.
                    (Blumenau), (<?php echo $data;?>)
                    ______________________________________________
                    (<?php echo "<span class='n_contrato'>".$infomacoes['nome_cliente']." ".$infomacoes['sobrenome_cliente'].'</span>';?>)
                    CONTRATANTE MUTUÁRIA
                    ______________________________________________
                    (CRÉDITO PARA TODXS)
                    CONTRATADA MUTUANTE
                    </p>
                    <table class="tabela_mutuante" ;>
                        <h4>Contrato de Empréstimo Empresa Crédito para todxs – (CPT)</h4> 
                        <table  class="t_tabela_mutuante">
                            <tr>
                                <th >QUADRO RESUMO:</th>
                                <th >Identificação da Mutuante:</th>
                            </tr>
                            <tr >
                                <th>Razão Social:</th>
                                <td >Crédito para todxs</td>
                            </tr>
                            <tr>
                                <th>CNPJ:</th>
                                <td>12.123.123/0001-01</td>
                            </tr>
                            <tr>
                                <th>Endereço:</th>
                                <td>Blumenau, Santa Catarina, Brasil.</td>
                            </tr>
                        </table>
                        <table class="tabela_mutuaria">
                                <tr>
                                    <th >QUADRO RESUMO:</th>
                                    <th class="th_mutu">Identificação da Mutuária:</th>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><?php echo $infomacoes['nome_cliente']." ".$infomacoes['sobrenome_cliente'];?></td>
                                </tr>
                                <tr>
                                    <th>CPF:</th>
                                    <td><?php echo $infomacoes['cpf'];?></td>
                                </tr>
                                <tr>
                                    <th>Endereço:</th>
                                    <td><?php echo $infomacoes['endereco'].','. $infomacoes['bairro'].','. $infomacoes['cidade'].','.$infomacoes['estado'].','.$infomacoes['pais'];?></td>
                                </tr>
                                <tr>
                                    <th>Natureza da operação:</th>
                                    <td>Emprestimo</td>
                                </tr>
                                <tr>
                                    <th>Valor Total Contratado:</th>
                                    <td name="iof" value="<?php echo $r;?>"><?php $r=$valor + $iof; echo 'R$'. number_format($r, 2, ',', '.' );?></td>
                                </tr>
                                <tr>
                                    <th>Data do contrato:</th>
                                    <td><?php echo $data;?></td>
                                </tr>
                                <tr>
                                    <th>Quantidade parcelas:</th>
                                    <td><?php echo $vezes;?></td>
                                </tr>
                                <tr>
                                    <th>Taxa de juros:</th>
                                    <td><?php echo "0,082%"?></td>
                                </tr>
                                <tr>
                                    <th>Alíquotas IOF:</th>
                                    <td><?php echo 'R$'. number_format($iof, 2, ',', '.' );?></td>
                                </tr>
                                <tr>
                                    <th>Parcelas a vencer</th>
                                    <td><?php echo $vezes; ?></td>
                                </tr>
                                <table class="tabela_baixo">
                                    <tr>
                                        <th class="th_data">Data de vencimento:</th>
                                        <th class="th_valor">Valor da parcela:</th>
                                    </tr>
                                    <tr>
                                        <td class="td_data"><?php echo  date("d/m/Y", strtotime($_SESSION['dataVenc']));?></td>
                                        <td class="mensa"><?php echo 'R$'. $mensalidade;?></td>
                                    </tr>
                                </table>
                        </table>
                    </table>
                    <div class="submit">
                        <input class="submit" type="submit" value="Contratar"/>
                        <a class="cancelar" href="index.php">Cancelar</a>
                    </div>
            </div>
        </form>
    </body>
</html>