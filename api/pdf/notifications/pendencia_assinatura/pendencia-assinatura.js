
function fillDocuments(id){
  document.getElementById("nameCustomer").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("customerEmail").innerHTML = JSON.parse(localStorage[id]).email;
  document.getElementById("customerContract").innerHTML = customerCont;
}
let customerId = prompt('Qual o código do cliente?');
let customerCont = prompt('Qual o contrato em questão?');

fillDocuments(customerId);
  
//DATE TODAY
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;

