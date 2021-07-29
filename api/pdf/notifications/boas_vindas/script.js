function fillDocuments(id){
  document.getElementById("nameCustomer").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("contractValue").innerHTML = objData.valorOperacao.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
}
let customerId = prompt('Qual o código do cliente?');

let jsonData = JSON.parse(localStorage[customerId]).loan;
let objData = JSON.parse(jsonData);

fillDocuments(customerId);
  
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;

