
class CustomerData {
	constructor(name, cpf, email, phone, address, number, addOnAddress, district, city, uf, cep) {
		this.name = name
		this.cpf = cpf
		this.email = email
		this.phone = phone
		this.address = address
		this.number = number
		this.addOnAddress = addOnAddress
		this.district = district
		this.city = city
		this.uf = uf
		this.cep = cep
	}
};

class DataBase {
	constructor() {
		let id = localStorage.getItem('id')
		if(id === null) {
			localStorage.setItem('id', 0)
		}
	}
	getNextId() {
		let nextId = localStorage.getItem('id')
		return parseInt(nextId) + 1
	}
	register(d) {
		let id = this.getNextId()
		//localStorage.setItem("cotacao", jsonData);
		localStorage.setItem(id, JSON.stringify(d))
		localStorage.setItem('id', id)
	}
	getCustomerList() {
		let customers = Array()
		let id = localStorage.getItem('id')

		//recupera todas as customers cadastradas
		for(let i = 1; i <= id; i++) {
			let customer = JSON.parse(localStorage.getItem(i))
			//checar índices removidos, se sim, pular
			if(customer === null) {
				continue
			}
			customer.id = i
			customers.push(customer)
		}
		return customers
	}
	delete(id) {
		localStorage.removeItem(id)
	}	
}

let dataBase = new DataBase()

function registerUser() {

	let inputName = document.getElementById("nomeCompleto");
  let inputCpf = document.getElementById("cpf");
  let inputEmail = document.getElementById("email");
  let inputPhone = document.getElementById("phone");
  let inputAddress = document.getElementById("logradouro");
  let inputNumber = document.getElementById("numero");
  let inputAddOnAddress = document.getElementById("complemento");
  let inputDistrict = document.getElementById("bairro");
  let inputCity = document.getElementById("localidade");
  let inputUf = document.getElementById("uf");
  let inputCep = document.getElementById("cep");

	let customerData = new CustomerData(
		inputName.value, 
		inputCpf.value, 
		inputEmail.value, 
		inputPhone.value, 
		inputAddress.value, 
		inputNumber.value, 
		inputAddOnAddress.value,
		inputDistrict.value,
		inputCity.value,
		inputUf.value,
		inputCep.value
	)
	dataBase.register(customerData);
  // alert("Dados armazenados em LocalStorage");
};

//SHOW CUSTOMER LIST
function showCustomerList() {
	let customers = []
	customers = dataBase.getCustomerList()

	let listCustomer =  document.getElementById('customerList')
	listCustomer.innerHTML = ''

	customers.forEach(function(d) {

		let row = listCustomer.insertRow()
		row.insertCell(0).innerHTML = d.id
		row.insertCell(1).innerHTML = d.name
		row.insertCell(2).innerHTML = d.cpf
		row.insertCell(3).innerHTML = d.cep
		row.insertCell(4).innerHTML = d.address
		row.insertCell(5).innerHTML = d.number
		row.insertCell(6).innerHTML = d.district
		row.insertCell(7).innerHTML = d.city
		row.insertCell(8).innerHTML = d.uf

		let btn = document.createElement('button')
		btn.className = 'btn btn-secondary'
		btn.innerHTML = '<i class="fas fa-times"></i>'
		btn.id = `id_despesa_${d.id}`
		btn.onclick = function() {
			let id = this.id.replace('id_despesa_', '')
			dataBase.delete(id)
			window.location.reload()
		}
		row.insertCell(9).append(btn)


	})

}	

//LINK WHATSAPP
function customerMsg() {
	let id = prompt("Qual o código ID do cliente que quer enviar mensagem?")
	let whatsLink = document.getElementById("whatsBtn");
	let phone = JSON.parse(localStorage[id]).phone;
	let phoneClean = phone.replace('(','').replace(')', '').replace(' ','').replace('-','');
	console.log(phoneClean);
	whatsLink.setAttribute("href", `https://api.whatsapp.com/send?l=pt&phone=55${phoneClean}`);
}