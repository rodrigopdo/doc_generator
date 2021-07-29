
function fillDocuments(id){
  document.getElementById("nameCustomer").innerHTML = JSON.parse(localStorage[id]).name;
}
let customerId = prompt('Qual o código do cliente?');

fillDocuments(customerId);
  
//DATE TODAY
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;

