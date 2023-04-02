<html>

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />  
  <link rel="stylesheet" type="text/css" href="css/word.css">
  <script src="js/jspdf.js"></script>
  <script src="js/htmlcanva.js"></script>

</head>

<body id="pagina" class="c22 doc-content" onload="gerarPDF()">
  <p class="c21">
    <span class="c1">SINDICATO DOS FISIOTERAPEUTAS E TERAPEUTAS OCUPACIONAIS DO ESTADO
      &nbsp;DO TOCANTINS &nbsp;</span>
  </p>
  <p class="c2"><span class="c1">SINFITO-TO </span></p>
  <p class="c6"><span class="c1">CNPJ: 18.742.418/0001-30 </span></p>
  <p class="c20">
    <span class="c13">FICHA DE FILIA&Ccedil;&Atilde;O N&ordm;_________ </span>
  </p>
  <p class="c8">

    <?php

    echo "<span class='cParagrafo'>";
    echo "EU, " . $_POST["nome"] . ",";
    echo 'CPF ' . $_POST['cpf'] . ',RG ' . $_POST['rg'] . ' SSP ' . $_POST['ssp'] . ' em conformidade ';
    echo "ao estatuto do SINFITO - Sindicato dos Fisioterapeutas e
        Terapeutas Ocupacionais do Estado do Tocantins, venho pela presente
        solicitar ao senhor presidente deste sindicato a minha
        inscri&ccedil;&atilde;o como associado, bem como, autorizar o
        desconto de 1,2% (um ponto dois por cento) de meu sal&aacute;rio em
        favor desta entidade.
      </span>";
    ?>
  </p>
  
  <p class="c2" style="text-align: right;">
    <span class="c0">
      <?php echo $_POST['cidade'] ?>/<?php echo $_POST['uf'] ?>,
      <?php
      date_default_timezone_set('America/Sao_Paulo');
      $data = date('d/m/Y');
      echo $data;
      ?>
    </span>
  </p>
  <p class="c12"><span class="c0">__________________________ </span></p>
  <p class="c6"><span class="c0">Assinatura </span></p>
  <p><span class="c0">DADOS PESSOAIS: </span></p>
  <p><span class="c0">Nome Completo:
      <?php echo $_POST["nome"] ?>
    </span></p>
  <p>
    <span class="c0">
      Forma&ccedil;&atilde;o: ( <?php if ($_POST["formacao"]=="Fisioterapeuta"){echo "X";} ?> ) FISIOTERAPEUTA ( <?php if ($_POST["formacao"]=="Terapeuta Ocupacional"){echo "X";} ?>  ) TERAPEUTA OCUPACIONAL      
    </span>
  </p>
  <p><span class="c0">CREFITO: <?php echo $_POST["crefito"] ?></span></p>
  <p class="c3">
    <span class="c0">Endere&ccedil;o:
      <?php echo $_POST["endereco"] . ' ' . $_POST["complemento"] ?> Setor:
      <?php echo $_POST["bairro"] ?>
      <br>Cidade:
      <?php echo $_POST["cidade"] ?> UF:
      <?php echo $_POST["uf"] ?>
      <br>Fone
      residencial
      <?php echo $_POST["telefone"] ?> Celular:
      <?php echo $_POST["celular"] ?>
      <br>Naturalidade:
      <?php echo $_POST["cidade_nat"] ?> UF:
      <?php echo $_POST["estado_nat"] ?> Data
      nascimento:
      <?php
      $date = new DateTime($_POST["datanascimento"]);
      $result = $date->format('d/m/Y');
      echo $result;
      ?>
      <br>E-mail:
      <?php echo $_POST["email"] ?>
      <br>Local de
      trabalho:
      <?php echo $_POST["localtrabalho"] ?>
      <br>( <?php if ($_POST["categoria"]=="Servidor Público"){echo "X";} ?> ) SERVIDOR P&Uacute;BLICO ( <?php if ($_POST["categoria"]=="Autônomo"){echo "X";} ?> ) AUT&Ocirc;NOMO ( <?php if ($_POST["categoria"]=="C.L.T."){echo "X";} ?> ) C.L.T.
    </span>
  </p>
  <p class="c9">
    <span class="c0">MATR&Iacute;CULA:
      <?php echo $_POST["matricula"] ?>
    </span>
  </p>
  <p class="c16">
    <span class="c0">CONTA CORRENTE:
      <?php echo $_POST["conta"] ?> AG&Ecirc;NCIA:
      <?php echo $_POST["agencia"] ?>
      &nbsp;
    </span>
  </p>
  <p class="c19"><span class="c0">Rendimento Bruto:
      <?php echo $_POST["rendimento"] ?>
    </span></p><br>
  <p class="c6"><span class="c0">DEFERIMENTO </span></p>
  <p class="c12">
    <span class="c0">_______________/TO ____/____/____ </span>
  </p>
  <p class="c18">
    <span class="c0">__________________________________ </span>
  </p>
  <p class="c6"><span class="c0">Raphael Cota Couto </span></p>
  <p class="c6"><span class="c4">Presidente</span></p>
  <br>
  <p style="text-align: center;"><span class="c11" >Coragem para mudar</span></p>
  <p style="text-align: center;">
    <span class="c11" >Facebook: Sinfito Tocantins /email: sinfito.tocantins@gmail.com
      Endere&ccedil;o: Qd. 606 Sul, Av. LO-13, Lote 17, Palmas-TO, CEP.
      77022-054
    </span>
  </p>


  <script>
    function gerarPDF() {
      // Cria um novo documento PDF com o tamanho desejado
      window.jsPDF = window.jspdf.jsPDF
      window.html2canvas = html2canvas;
      var doc = new jsPDF("p", "mm", "a4");
      // Insere o HTML da página atual no documento PDF
      doc.html(document.querySelector('#pagina'), {
        callback: function (doc) {
          var pageCount = doc.internal.getNumberOfPages();
          while (pageCount>1){
            doc.deletePage(pageCount)  
            pageCount = doc.internal.getNumberOfPages();
          }
          // Save the PDF
          doc.save('cadastro_sinfito.pdf');
        },
        image: {
          type: "png",
          quality: 100
        },
        html2canvas: {
          scale: 0.25,
          allowTaint:true,
          letterRendering:true,
          svgRendering:true,
        }
      });
      // Salva o documento PDF com o nome desejado
      //doc.save("cadastro_sinfito.pdf");
    }
  </script>

</body>

</html>