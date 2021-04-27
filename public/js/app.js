//import jsonData from './data.js'

const jsonData = `{
  "dataOperacao" : "2021-03-24",
  "qtdParcelas" : 9,
  "dataPrimeiroVencimento" : "2021-05-05",
  "valorOperacao" : 9838.0,
  "valorIOFsobreValorePeriodo" : null,
  "valorIOFFlatOperacao" : null,
  "valorLiquidoOperacao" : 9690.43,
  "taxaOperacaoPercentual" : 0.008,
  "taxaOperacaoPercentualMes" : null,
  "operationTypeEnum" : "CAPITAL_GIRO",
  "listaParcelas" : [ {
    "dataVencimentoParcela" : "2021-05-05",
    "numeroParcela" : 1,
    "prazoDiasCorridos" : 42,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1164.24,
    "valorJurosParcela" : 13.06,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2021-05-05",
    "fatorParcela" : 0.98890655365717
  }, {
    "dataVencimentoParcela" : "2021-07-05",
    "numeroParcela" : 2,
    "prazoDiasCorridos" : 103,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1145.53,
    "valorJurosParcela" : 31.77,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2021-07-04",
    "fatorParcela" : 0.9730134414397833
  }, {
    "dataVencimentoParcela" : "2021-09-02",
    "numeroParcela" : 3,
    "prazoDiasCorridos" : 162,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1127.72,
    "valorJurosParcela" : 49.58,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2021-09-02",
    "fatorParcela" : 0.9578844577078934
  }, {
    "dataVencimentoParcela" : "2021-11-01",
    "numeroParcela" : 4,
    "prazoDiasCorridos" : 222,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1109.89,
    "valorJurosParcela" : 67.41,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2021-11-01",
    "fatorParcela" : 0.9427402778839654
  }, {
    "dataVencimentoParcela" : "2021-12-31",
    "numeroParcela" : 5,
    "prazoDiasCorridos" : 282,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1092.34,
    "valorJurosParcela" : 84.96,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2021-12-31",
    "fatorParcela" : 0.9278355279627714
  }, {
    "dataVencimentoParcela" : "2022-03-02",
    "numeroParcela" : 6,
    "prazoDiasCorridos" : 343,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1074.79,
    "valorJurosParcela" : 102.52,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2022-03-01",
    "fatorParcela" : 0.9129239125925867
  }, {
    "dataVencimentoParcela" : "2022-05-02",
    "numeroParcela" : 7,
    "prazoDiasCorridos" : 404,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1057.52,
    "valorJurosParcela" : 119.79,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2022-04-30",
    "fatorParcela" : 0.8982519477490817
  }, {
    "dataVencimentoParcela" : "2022-06-29",
    "numeroParcela" : 8,
    "prazoDiasCorridos" : 462,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1041.35,
    "valorJurosParcela" : 135.95,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2022-06-29",
    "fatorParcela" : 0.8845203019713013
  }, {
    "dataVencimentoParcela" : "2022-08-29",
    "numeroParcela" : 9,
    "prazoDiasCorridos" : 523,
    "prazoDiasUteis" : 0,
    "valorParcela" : 1177.3,
    "valorPrincipalParcela" : 1024.61,
    "valorJurosParcela" : 152.69,
    "valorIofParcela" : 0.0,
    "dataVencimentoParcelaOriginal" : "2022-08-28",
    "fatorParcela" : 0.8703048228991904
  } ],
  "fatorParcela" : 0.11966902548089459,
  "dataVencimentoOperacao" : "2022-08-29",
  "taxaAberturaCredito" : 147.57,
  "tipoIntervalo" : "D",
  "periodicidade" : null
}`;

let objData = JSON.parse(jsonData);

function registerUser() {
  let inputName = document.getElementById("nomeCompleto").value;
  let inputCpf = document.getElementById("cpf").value;
  let inputAddress = document.getElementById("logradouro").value;
  let inputNumber = document.getElementById("numero").value;
  let inputAddOnAddress = document.getElementById("complemento").value;
  let inputDistrict = document.getElementById("bairro").value;
  let inputCity = document.getElementById("localidade").value;
  let inputUf = document.getElementById("uf").value;
  let inputCep = document.getElementById("cep").value;
  
  localStorage.setItem("cotacao", jsonData);
  
  localStorage.setItem("nome", inputName);
  localStorage.setItem("cpf", inputCpf)
  localStorage.setItem("endereco", inputAddress)
  localStorage.setItem("numero", inputNumber)
  localStorage.setItem("complemento", inputAddOnAddress)
  localStorage.setItem("bairro", inputDistrict)
  localStorage.setItem("cidade", inputCity)
  localStorage.setItem("uf", inputUf)
  localStorage.setItem("cep", inputCep)

  alert("Dados armazenados em LocalStorage")
};

window.addEventListener("load", function() {
  document.getElementById("nameCustomer").innerHTML = localStorage.nome;
  document.getElementById("nameCustomerSignature").innerHTML = localStorage.nome;
  document.getElementById("cpf").innerHTML = localStorage.cpf;
  document.getElementById("address").innerHTML = localStorage.endereco;
  document.getElementById("number").innerHTML = localStorage.numero;
  document.getElementById("addOnAddress").innerHTML = localStorage.complemento;
  document.getElementById("district").innerHTML = localStorage.bairro;
  document.getElementById("city").innerHTML = localStorage.cidade;
  document.getElementById("uf").innerHTML = localStorage.uf;
  document.getElementById("cep").innerHTML = localStorage.cep;
})







//DATE TODAY
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;



//TERMO CESSÃO - ANEXO 1

//HEADER
let correctDateFormat = objData.dataOperacao.replace(/-/g, ",");
let myDate = new Date(correctDateFormat);
document.getElementById("dtOperacao").innerHTML = myDate.toLocaleDateString();

document.getElementById("qtParcelas").innerHTML = objData.qtdParcelas;
document.getElementById("valorTac").innerHTML = objData.taxaAberturaCredito.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
document.getElementById("valorLiquido").innerHTML = objData.valorLiquidoOperacao.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

//TABLE
for (let i = 0; i <= objData.listaParcelas.length; i++) {
   
  let listInstallmentFixedValue = document.getElementById("valorFace")
  let installmentfixedValue = objData.listaParcelas[i].valorParcela.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });  
  let liCol2 = document.createElement("li");
  liCol2.textContent = installmentfixedValue;
  listInstallmentFixedValue.appendChild(liCol2);
  
  let listPrincipal = document.getElementById("installmentList")
  let mainInstallmentValue = objData.listaParcelas[i].valorPrincipalParcela.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });  
  let liCol4 = document.createElement("li");
  liCol4.textContent = mainInstallmentValue;
  listPrincipal.appendChild(liCol4);
  
  let listDueDate = document.getElementById("dataPrevista")
  let dueDate = objData.listaParcelas[i].dataVencimentoParcela;
  let liCol1 = document.createElement("li");
  let DateFormat = dueDate.replace(/-/g, ",");
  let dateBr = new Date(DateFormat);
  liCol1.textContent = dateBr.toLocaleDateString();
  listDueDate.appendChild(liCol1);
  
  let listFees = document.getElementById("taxaEfetiva")
  let antecipationFee = objData.taxaOperacaoPercentual.toFixed(3) * 100;
  let liCol3 = document.createElement("li");
  liCol3.textContent = antecipationFee + " %";
  listFees.appendChild(liCol3);
}