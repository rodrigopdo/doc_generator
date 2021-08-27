
function fillDocuments(id){
  document.getElementById("nameCustomer").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("nameCustomerSignature").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("cpf").innerHTML = JSON.parse(localStorage[id]).cpf;
  document.getElementById("cpfSignature").innerHTML = JSON.parse(localStorage[id]).cpf;
  document.getElementById("address").innerHTML = JSON.parse(localStorage[id]).address;
  document.getElementById("number").innerHTML = JSON.parse(localStorage[id]).number;
  document.getElementById("addOnAddress").innerHTML = JSON.parse(localStorage[id]).addOnAddress;
  document.getElementById("district").innerHTML = JSON.parse(localStorage[id]).district;
  document.getElementById("city").innerHTML = JSON.parse(localStorage[id]).city;
  document.getElementById("uf").innerHTML = JSON.parse(localStorage[id]).uf;
  document.getElementById("cep").innerHTML = JSON.parse(localStorage[id]).cep;
}
let customerId = prompt('Qual o código do cliente?')

fillDocuments(customerId)
  
//----------COTAÇÃO----------------------//

//CURRENT DATE
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;

let jsonData = JSON.parse(localStorage[customerId]).loan;

let objData = JSON.parse(jsonData);

//TERMO CESSÃO - ANEXO 1
let correctDateFormat = objData.dataOperacao.replace(/-/g, ",");
let operationDateOnly = correctDateFormat.substr(0, 10);
let myDate = new Date(operationDateOnly);

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
  let antecipationFee = (objData.taxaOperacaoPercentual * 100).toFixed(2);
  let liCol3 = document.createElement("li");
  liCol3.textContent = antecipationFee + " %";
  listFees.appendChild(liCol3);
}