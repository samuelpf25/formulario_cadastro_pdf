function carrega_form(){
    console.log('Estou carregando a outra página!')
    window.location.href="http://127.0.0.1:5500/form_gerado.html"
}


/*(function () {
    function adicionar() {
        var dados = JSON.stringify({
            nome    : document.querySelector("input[name=nome]").value,
            cpf    : document.querySelector("input[name=cpf]").value,
            rg    : document.querySelector("input[name=rg]").value,
            ssp    : document.querySelector("input[name=ssp]").value
        });
        // tbClientes.push(dados);
        localStorage.setItem("storage", JSON.stringify(dados));
        alert("Registro Adicionado!");
        return true;
    }
    var form = document.querySelector("form");
    form.addEventListener("submit", function () {
        // event.preventDefault(); event
        return adicionar();
    });
})();*/