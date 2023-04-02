$(function () {
    $("#buscar_cep").click(function () {
      //Nova variável "cep" somente com dígitos.
      var cep = $("#cep").val().replace(/\D/g, "");

      //Verifica se campo cep possui valor informado.
      if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {
          //Consulta o webservice viacep.com.br/
          $.getJSON(
            "//viacep.com.br/ws/" + cep + "/json/?callback=?",
            function (dados) {
              if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                $("#rua").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#uf").val(dados.uf);
              } //end if.
              else {
                //CEP pesquisado não foi encontrado.
                console.log("CEP não encontrado.");
              }
            }
          );
        } //end if.
        else {
          console.log("Formato de CEP inválido.");
        }
      } //end if.
    });
  });