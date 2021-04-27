
function fillDocuments(id){
  document.getElementById("nameCustomer").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("nameCustomerSignature").innerHTML = JSON.parse(localStorage[id]).name;
  document.getElementById("cpf").innerHTML = JSON.parse(localStorage[id]).cpf;
  document.getElementById("cpfSignature").innerHTML = JSON.parse(localStorage[id]).cpf;
  document.getElementById("address").innerHTML = JSON.parse(localStorage[id]).address;
  document.getElementById("number").innerHTML = JSON.parse(localStorage[id]).number;
  //document.getElementById("addOnAddress").innerHTML = JSON.parse(localStorage[id]).addOnAddress;
  document.getElementById("district").innerHTML = JSON.parse(localStorage[id]).district;
  document.getElementById("city").innerHTML = JSON.parse(localStorage[id]).city;
  document.getElementById("uf").innerHTML = JSON.parse(localStorage[id]).uf;
  document.getElementById("cep").innerHTML = JSON.parse(localStorage[id]).cep;
}
let customerId = prompt('Qual o código do cliente?')

fillDocuments(customerId)
  

//DATE TODAY
let today = new Date().toLocaleDateString(); 
document.getElementById("dateToday").innerHTML = today;


