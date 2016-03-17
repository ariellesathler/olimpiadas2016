
//Criando um loop que irá criar multiarrays para todos os dias do ano:
var evento = new Array();
for (loopMes = 0; loopMes <= 11; loopMes++) {
    evento[loopMes] = new Array();
    for (loopDia = 1; loopDia <= 31; loopDia++) {
        evento[loopMes][loopDia] = "";
    }
}

//----------------------- AGENDA -----------------------//
evento[10][1] = "Hoje é dia 1. O mês está começando!";
evento[10][2] = "Olá. Hoje é dia 2. O mês começou ontem!";
evento[10][3] = "Eu gosto do dia 3!";
evento[10][28] = "O mês está acabando. Hoje é dia 28!";




function calendario() {
    //Defina o mês que será exibido no calendário:
    var pesquisaMes = 10; //0:Jan; 1:Fev; 2:Mar; 3:Abr; 4:Mai; 5:Jun; 6:Jul; 7:Ago; 8:Set; 9:Out; 10:Nov; 11:Dez;

    //Defina o ano:
    var ano = 2009;

    //Defina o dia da semana em que o ano começa:
    var inicioDiaSem = 4; //0:Dom; 1:Seg; 2:Ter; 3:Qua; 4:Qui; 5:---; 6:Sáb;



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

    //Construindo o calendário, com 6 linhas:
    for (var iLinha = 1; iLinha <= 6; iLinha++) {
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

    document.getElementById("calendario").innerHTML = "<table width='200px' border='1'>" + tabela + "</table>";
}

function verEvento(v1, v2) {
    var objCalEv = document.getElementById("calendarioEventos");

    objCalEv.innerHTML = evento[v1][v2];
}
window.onload = calendario;