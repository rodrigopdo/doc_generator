
function fillDocuments(id){
  document.getElementById("nameCustomer").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("customerDoc").innerHTML = customerDocument;
}
let customerId = prompt('Qual o código do cliente?');
let customerDocument = prompt('Qual documento será solicitado?');

fillDocuments(customerId);
  
//DATE TODAY
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;

