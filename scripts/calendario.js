
//Criando um loop que irá criar multiarrays para todos os dias do ano:
var evento = new Array();
for (loopMes = 0; loopMes <= 11; loopMes++) {
    evento[loopMes] = new Array();
    for (loopDia = 1; loopDia <= 31; loopDia++) {
        evento[loopMes][loopDia] = "";
    }
}

//----------------------- AGENDA -----------------------//
evento[9][3] = "<h3>03 de Agosto de 2016</h3><br>FUTEBOL<br>Feminino Primeira Fase (FB001) - Local: Estádio Olímpico - Horário: 13h00-18h00<br>Feminino Primeira Fase (FB002) - Local: Arena Corinthians (São Paulo) - Horário: 15h00-20h00<br>Feminino Primeira Fase (FB003) - Local: Mineirão (Belo Horizonte) - Horário: 19h00-00h00";
    
evento[9][4] = "<h3>04 de Agosto de 2016</h3><br>FUTEBOL<br>Masculino Primeira Fase (FB004) - Local: Estádio Mané Garrincha (Brasília) - Horário: 13h00-18h00<br>Masculino Primeira Fase (FB005) - Local: Estádio Olímpico - Horário: 15h00-20h00<br>Masculino Primeira Fase (FB006) - Local: Arena Fonte Nova (Salvador) - Horário:17h00-22h00<br>Masculino Primeira Fase (FB007) - Local: Arena Da Amazônia (Manaus) - Horário: 18h00-23h00";

evento[9][6] = "<h3>06 de Agosto de 2016</h3><br>FUTEBOL<br>Feminino Primeira Fase (FB008) - Local: Arena Corinthians (São Paulo) - Horário: 15h00 - 20h00<br>Feminino Primeira Fase (FB009) - Local: Mineirão (Belo Horizonte) - Horário: 17h00 - 22h00<br>Feminino Primeira Fase (FB010) - Local: Estádio Olímpico 19h00 - Horário: 00h00<br><br>GINÁSTICA ARTÍSTICA<br>Masculino Classificatória (GA001) - Local: Arena Olímpica do Rio - Horário: 10h30-13h00<br>Masculino Classificatória (GA002) - Local: Arena Olímpica do Rio - Horário: 14h30-17h00<br>Masculino Classificatória (GA003) - Local: Arena Olímpica do Rio - Horário: 18h30-21h00<br><br>VOLEIBOL<br>Feminino Primeira Fase (VO001) - Local: Maracanãzinho 09h30-13h30<br>Feminino Primeira Fase (VO002) - Local: Maracanãzinho 15h00-18h50<br><br>Feminino Primeira Fase (VO003) - Local: Maracanãzinho 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Fase de Grupos (BV001) - Local: Arena de Vôlei de Praia - Horário: 10h00-13h50<br>Masculino e/ou Feminino Fase de Grupos (BV002) - Local: Arena de Vôlei de Praia - Horário: 15h30-19h30<br>Masculino e/ou Feminino Fase de Grupos (BV003) - Local: Arena de Vôlei de Praia - Horário: 21h00-00h50";

evento[9][7] = "<h3>07 de Agosto de 2016</h3><br>FUTEBOL<br>Masculino Primeira Fase (FB013) - Local: Arena Fonte Nova (Salvador) - Horário: 13h00-18h00<br>Masculino Primeira Fase (FB012) - Local: Estádio Olímpico - Horário: 15h00-20h00<br>Masculino Primeira Fase (FB011) - Local: Arena da Amazônia (Manaus) - Horário: 18h00-23h00<br>Masculino Primeira Fase (FB014) - Local: Estádio Mané Garrincha (Brasília) - Horário: 19h00-00h00<br><br>GINÁSTICA ARTÍSTICA<br>Feminino Classificatória (GA004) - Local: Arena Olímpica do Rio - Horário: 09h45-13h00<br>Feminino Classificatória (GA005) - Local: Arena Olímpica do Rio - Horário: 14h30-16h00<br>Feminino Classificatória (GA006) - Local: Arena Olímpica do Rio - Horário: 17h30-19h00<br>Feminino Classificatória (GA007) - Local: Arena Olímpica do Rio - Horário: 20h30-22h00<br><br>VOLEIBOL<br>Masculino Primeira Fase (VO004) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Masculino Primeira Fase (VO005) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Masculino Primeira Fase (VO006) - Local: Maracanãzinho - Horário: 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Fase de Grupos (BV004) - Local: Arena de Vôlei de Praia - Horário: 10h00-13h50<br>Masculino e/ou Feminino Fase de Grupos (BV005) - Local: Arena de Vôlei de Praia - Horário: 15h30-19h30<br>Masculino e/ou Feminino Fase de Grupos (BV006) - Local: Arena de Vôlei de Praia - Horário: 21h00-00h50";
    
evento[9][8] = "<h3>08 de Agosto de 2016</h3><br>GINÁSTICA ARTÍSTICA<br>Competição por Equipes Masculina Final (GA008) - Local: Arena Olímpica do Rio - Horário: 16h00-19h00<br><br>VOLEIBOL<br>Feminino Primeira Fase (VO007) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Feminino Primeira Fase (VO008) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Feminino Primeira Fase (VO009) - Local: Maracanãzinho - Horário: 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Fase de Grupos (BV007) - Local: Arena de Vôlei de Praia - Horário: 10h00-13h50<br>Masculino e/ou Feminino Fase de Grupos (BV008) - Local: Arena de Vôlei de Praia - Horário: 15h30-19h30<br>Masculino e/ou Feminino Fase de Grupos (BV009) - Local: Arena de Vôlei de Praia - Horário: 21h00-00h50";
       
evento[9][9] = "<h3>09 de Agosto de 2016</h3><br>FUTEBOL<br>Feminino Primeira Fase (FB015) - Local: Estádio Mané Garrincha (Brasília) - Horário: 16h00-18h00<br>Feminino Primeira Fase (FB016) - Local: Arena Fonte Nova (Salvador) - Horário: 16h00-21h00<br>Feminino Primeira Fase (FB017) - Local: Arena da Amazônia (Manaus) - Horário: 18h00-23h00<br>Feminino Primeira Fase (FB018) - Local: Estádio Mané Garrincha (Brasília) - Horário: 22h00-00h00<br><br>GINÁSTICA ARTÍSTICA<br>Competição por Equipes Feminina Final (GA009) - Local: Arena Olímpica do Rio - Horário: 16h00-18h15<br><br>VOLEIBOL<br>Masculino Primeira Fase (VO010) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Masculino Primeira Fase (VO011) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Masculino Primeira Fase (VO012) - Local: Maracanãzinho  - Horário: 0h3P0h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Fase de Grupos (BV010) - Local: Arena de Vôlei de Praia - Horário: 10h00-13h50<br>Masculino e/ou Feminino Fase de Grupos (BV011) - Local: Arena de Vôlei de Praia - Horário: 15h30-19h30<br>Masculino e/ou Feminino Fase de Grupos (BV012) - Local: Arena de Vôlei de Praia - Horário: 21h00-00h50";
      
evento[9][10] = "<h3>10 de Agosto de 2016</h3><br>FUTEBOL<br>Masculino Primeira Fase (FB020) - Local: Estádio Mané Garrincha (Brasília) - Horário: 13h00-18h00<br>Masculino Primeira Fase (FB019) - Local: Mineirão (Belo Horizonte) - Horário: 13h00-18h00<br>Masculino Primeira Fase (FB021) - Local: Arena Fonte Nova (Salvador) - Horário: 19h00-00h00<br>Masculino Primeira Fase (FB022) - Local: Arena Corinthians (São Paulo) - Horário: 19h00-00h00<br><br>GINÁSTICA ARTÍSTICA<br>Competição Individual Geral Masculina Final (GA010) - Local: Arena Olímpica do Rio - Horário: 16h00-18h15<br><br>VOLEIBOL<br>Feminino Primeira Fase (VO013) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Masculino Primeira Fase (VO014) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Masculino Primeira Fase (VO015) - Local: Maracanãzinho - Horário: 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Fase de Grupos (BV013) - Local: Arena de Vôlei de Praia - Horário: 10h00-13h50<br>Masculino e/ou Feminino Fase de Grupos (BV014) - Local: Arena de Vôlei de Praia - Horário: 15h30-19h30<br>Masculino e/ou Feminino Fase de Grupos (BV015) - Local: Arena de Vôlei de Praia - Horário: 21h00-00h50";
    
evento[9][11] = "<h3>11 de Agosto de 2016</h3><br>GINÁSTICA ARTÍSTICA<br>Competição Individual Geral Feminina Final (GA011) - Local: Arena Olímpica do Rio	16h00-18h15<br><br>VOLEIBOL<br>Masculino Primeira Fase (VO016) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Masculino Primeira Fase (VO017) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Masculino Primeira Fase (VO018) - Local: Maracanãzinho  - Horário: 0h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Fase de Grupos (BV016) - Local: Arena de Vôlei de Praia - Horário: 10h00-13h50<br>Masculino e/ou Feminino Fase de Grupos (BV017) - Local: Arena de Vôlei de Praia - Horário: 15h30-19h30<br>Masculino e/ou Feminino Fase de Grupos e Repescagem (BV018) - Local: Arena de Vôlei de Praia - Horário: 21h00-00h50<br>";
    
evento[9][12] = "<h3>12 de Agosto de 2016</h3><br>FUTEBOL<br>Feminino Quarta de Final (FB023) - Local: Estádio Mané Garrincha (Brasília) - Horário: 13h00-18h00<br>Feminino Quarta de Final (FB024) - Local: Arena Fonte Nova (Salvador) - Horário: 16h00-18h00<br>Feminino Quarta de Final (FB025) - Local: Arena Corinthians (São Paulo) - Horário: 19h00-21h00<br>Feminino Quarta de Final (FB026) - Local: Mineirão (Belo Horizonte) - Horário: 22h00-00h00<br><br>VOLEIBOL<br>Feminino Primeira Fase (VO019) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Feminino Primeira Fase (VO020) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Feminino Primeira Fase (VO021) - Local: Maracanãzinho - Horário: 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Oitavas de Final (BV019) - Local: Arena de Vôlei de Praia - Horário: 11h00-12h50<br>Masculino e/ou Feminino Oitavas de Final (BV020) - Local: Arena de Vôlei de Praia - Horário: 15h00-16h50<br>Masculino e/ou Feminino Oitavas de Final (BV021) - Local: Arena de Vôlei de Praia - Horário: 19h00-20h50<br>Masculino e/ou Feminino Oitavas de Final (BV022) - Local: Arena de Vôlei de Praia - Horário: 23h00-00h50";
    
evento[9][13] = "<h3>13 de Agosto de 2016</h3><br>FUTEBOL<br>Masculino Quarta de Final (FB027) - Local: Estádio Mané Garrincha (Brasília) - Horário: 13h00-15h00<br>Masculino Quarta de Final (FB028) - Local: Arena Fonte Nova (Salvador) - Horário: 16h00-18h00<br>Masculino Quarta de Final (FB029) - Local: Mineirão (Belo Horizonte) - Horário: 19h00-21h00<br>Masculino Quarta de Final (FB030) - Local: Arena Corinthians (São Paulo) - Horário: 22h00-00h00<br><br>VOLEIBOL<br>Masculino Primeira fase (VO022) - Local: Maracanãzinho 09h30-13h30<br>Masculino Primeira fase (VO023) - Local: Maracanãzinho 15h00-18h50<br>Masculino Primeira fase (VO024) - Local: Maracanãzinho 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Oitavas de Final (BV023) - Local: Arena de Vôlei de Praia - Horário: 11h00-12h50<br>Masculino e/ou Feminino Oitavas de Final (BV024) - Local: Arena de Vôlei de Praia - Horário: 15h00-16h50<br>Masculino e/ou Feminino Oitavas de Final (BV025) - Local: Arena de Vôlei de Praia - Horário: 19h00-20h50<br>Masculino e/ou Feminino Oitavas de Final (BV026) - Local: Arena de Vôlei de Praia - Horário: 23h00-00h50";
    
evento[9][14] = "<h3>14 de Agosto de 2016</h3><br>GINÁSTICA ARTÍSTICA<br>Masculino e Feminino Finais de Aparelhos (GA012) - Local: Arena Olímpica do Rio - Horário: 14h00-18h50<br><br>VOLEIBOL<br>Feminino Primeira Fase (VO025) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Feminino Primeira Fase (VO026) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Feminino Primeira Fase (VO027) - Local: Maracanãzinho - Horário: 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Feminino Quartas de Final (BV027) - Local: Arena de Vôlei de Praia - Horário: 16h00-17h50<br>Feminino Quartas de Final (BV028) - Local: Arena de Vôlei de Praia - Horário: 23h00-00h50<br>";
    
evento[9][15] = "<h3>15 de Agosto de 2016</h3><br>GINÁSTICA ARTÍSTICA<br>Masculino e Feminino Finais de Aparelhos (GA013) - Local: Arena Olímpica do Rio - Horário: 14h00-16h35<br><br>VOLEIBOL<br>Masculino Primeira Fase (VO028) - Local: Maracanãzinho - Horário: 09h30-13h30<br>Masculino Primeira Fase (VO029) - Local: Maracanãzinho - Horário: 15h00-18h50<br>Masculino Primeira Fase (VO030) - Local: Maracanãzinho - Horário: 20h30-00h30<br><br>VÔLEI DE PRAIA<br>Masculino Quartas de Final (BV029) - Local: Arena de Vôlei de Praia - Horário: 16h00-17h50<br>Masculino Quartas de Final (BV030) - Local: Arena de Vôlei de Praia - Horário: 23h00-00h50";
       
evento[9][16] = "<h3>16 de Agosto de 2016</h3><br>FUTEBOL<br>Feminino Semifinal (FB032) - Local: Maracanã - Horário: 13h00-15h00<br>Feminino Semifinal (FB031) - Local: Mineirão (Belo Horizonte) - Horário: 16h00-18h00<br><br>GINÁSTICA ARTÍSTICA<br>Masculino e Feminino - Finais de Aparelhos (GA014) - Local: Arena Olímpica do Rio - Horário: 14h00-16h15<br><br>VOLEIBOL<br>Feminino Quartas de Final (VO031) - Local: Maracanãzinho - Horário: 10h00-12h00<br>Feminino Quartas de Final (VO032) - Local: Maracanãzinho - Horário: 14h00-16h00<br>Feminino Quartas de Final (VO033) - Local: Maracanãzinho - Horário: 18h00-20h00<br>Feminino Quartas de Final (VO034) - Local: Maracanãzinho - Horário: 22h15-00h15<br><br>VÔLEI DE PRAIA<br>Masculino e/ou Feminino Semifinais (BV031) - Local: Arena de Vôlei de Praia - Horário: 16h00-17h50<br>Masculino e/ou Feminino Semifinais (BV032) - Local: Arena de Vôlei de Praia - Horário: 23h00-00h50";
    
evento[9][17] = "<h3>17 de Agosto de 2016</h3><br>FUTEBOL<br>Masculino Semifinal (FB034) - Local: Maracanã - Horário: 13h00-15h00<br>Masculino Semifinal (FB033) - Local: Arena Corinthians - São Paulo - Horário: 16h00-18h00<br><br>VOLEIBOL<br>Masculino Quartas de Final (VO035) - Local: Maracanãzinho - Horário: 10h00-12h00<br>Masculino Quartas de Final (VO036) - Local: Maracanãzinho - Horário: 14h00-16h00<br>Masculino Quartas de Final (VO037) - Local: Maracanãzinho - Horário: 18h00-20h00<br>Masculino Quartas de Final (VO038) - Local: Maracanãzinho - Horário: 22h15-00h15<br><br>VÔLEI DE PRAIA<br>Feminino Bronze e Final (BV033) - Local: Arena de Vôlei de Praia - Horário: 22h00-01h30";
    
evento[9][18] = "<h3>18 de Agosto de 2016</h3><br>VOLEIBOL<br>Feminino Semifinais (VO039) - Local: Maracanãzinho - Horário: 13h00-15h00<br>Feminino Semifinais (VO040) - Local: Maracanãzinho - Horário: 22h15-00h15<br><br>VÔLEI DE PRAIA<br>Masculino Bronze e Final (BV034) - Local: Arena de Vôlei de Praia - Horário: 22h00-01h30";
    
evento[9][19] = "<h3>19 de Agosto de 2016</h3><br>FUTEBOL<br>Feminino Bronze (FB035) - Local: Arena Corinthians (São Paulo) - Horário: 13h00-16h00<br>Feminino Ouro (FB036) - Local: Maracanã - Horário: 17h30-20h00<br><br>VOLEIBOL<br>Masculino Semifinais (VO041) - Local: Maracanãzinho - Horário: 13h00-15h00<br>Masculino Semifinais (VO042 - Local: Maracanãzinho - Horário: 22h15-00h15";
    
evento[9][20] = "<h3>20 de Agosto de 2016</h3><br>FUTEBOL<br>Masculino Bronze (FB037) - Local: Mineirão (Belo Horizonte)	13h00-15h30<br>Masculino Ouro (FB038) - Local: Maracanã	17h30-20h00<br><br>VOLEIBOL<br>Feminino Bronze (VO043) - Local: Maracanãzinho 13h00-15h00<br>Feminino Final (VO044) - Local: Maracanãzinho 22h15-00h30";
     
evento[9][21] = "<h3>21 de Agosto de 2016</h3><br>VOLEIBOL<br>Masculino Bronze (VO045) - Local: Maracanãzinho 09h30-11h30<br>Masculino Final (VO046) - Local: Maracanãzinho 13h15-15h30";





function calendario() {
    //Defina o mês que será exibido no calendário:
    var pesquisaMes = 9; //0:Jan; 1:Fev; 2:Mar; 3:Abr; 4:Mai; 5:Jun; 6:Jul; 7:Ago; 8:Set; 9:Out; 10:Nov; 11:Dez;

    //Defina o ano:
    var ano = 2016;

    //Defina o dia da semana em que o ano começa:
    var inicioDiaSem = 0; //0:Dom; 1:Seg; 2:Ter; 3:Qua; 4:Qui; 5:---; 6:Sáb;



    //----------------------- NÃO ALTERAR -----------------------//
    var pesquisaDia = 1; //Não alterar
    var diasNoMes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    //Verificando se o ano é bissexto:
    diasNoMes[1] = ((ano % 4 == 0) ? 29 : 28);

    var pesquisaDiasTotais = 0;

    for (var i = 0; i < pesquisaMes; i++) {
        pesquisaDiasTotais += diasNoMes[i];
    }
    pesquisaDiasTotais += pesquisaDia;
    //alert(pesquisaDiasTotais);

    var calculoDiaSem = ((pesquisaDiasTotais % 7) + inicioDiaSem);


    //------------------- INICIANDO A CONSTRUÇÃO DO CALENDÁRIO -------------------//
    var tabela = ""; //Variável que irá armazenar todas as linhas da tabela do calendário;
    var iCount = 1; //Criando um contador contínuo, que servirá de referencial;

    //Criando um contador para o dia do mês.
    //Esse contador só iniciará quando o iCount for maior ou igual ao dia em que a semana inicia;
    var iMes = 1;

    //Construindo o calendário, com 5 linhas:
    for (var iLinha = 1; iLinha <= 5; iLinha++) {
        tabela += "<tr>"; // Abrindo a linha atual;
        for (var iCol = 1; iCol <= 7; iCol++) {

            //Se iCount for maior que o dia em que a semana inicia, então: iniciar iMes;
            //Após os testes, para evitar iniciar o calendário saltando uma linha, vamos elevar o valor
            //do iCount, caso o calculoDiaSem seja 7;
            if (calculoDiaSem > 7) {
                iCount = 8;
            }

            if (iCount >= calculoDiaSem && iMes <= diasNoMes[pesquisaMes]) {
                //Verificar se existem eventos associados ao dia atual:
                var variavel = eval("evento[" + iMes + "]");
                if (evento[pesquisaMes][iMes] != "") {
                    temEvento = true;
                } else {
                    temEvento = false;
                }

                //alert(evalEvento);
                if (temEvento == true) {
                    tabela += "<td><a href='javascript:verEvento(" + pesquisaMes + "," + iMes + ")'>" + iMes + "</a></td>";
                } else {
                    tabela += "<td>" + iMes + "</td>";
                }
                iMes++;
            } else {
                tabela += "<td>&nbsp;</td>";
            }
            iCount++;
        }
        tabela += "</tr>"; // Fechando a linha atual;
    }

    document.getElementById("calendario").innerHTML = "<table>"+
    "<thead>"+
    "<tr><th>dom</th><th>seg</th><th>ter</th><th>qua</th><th>qui</th><th>sex</th><th>sab</th></tr>"+
    "</thead>"+
    "<tbody>"+
    tabela + "</tbody></table>";
}

function verEvento(v1, v2) {
    var objCalEv = document.getElementById("calendarioEventos");

    objCalEv.innerHTML = evento[v1][v2];
}
window.onload = calendario;