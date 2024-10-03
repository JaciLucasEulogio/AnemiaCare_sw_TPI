function deleteHijo(idHijo, idForm) {
	document.getElementById('idHijoInputFormDelete').value = idHijo;
	console.log("ELIMANDO: "+ idHijo + " del form: " + idForm)
	guardarModal(null, idForm);
}  

