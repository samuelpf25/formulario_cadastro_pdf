  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="content-language" content="pt-br" />

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->


    <!--STYLES-->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts-icones.css" />
    <link rel="shortcut icon" href="https://www.loopnerd.com.br/wp-content/themes/loopnerd/img/favicon.png" />

    <!--SCRIPTS-->
    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/select_cidades.js" type="module"></script>
    <script src="js/mascaras.js"></script>
    <script src="js/busca_cep.js"></script>
    <script src="js/gerar_formulario.js"></script>

    <title>Formulário SINFITO</title>
  </head>

  <body>
    <header class="main_header container">
      <div class="content">
        <div class="main_header_logo">
          <img src="img/sinfito.png" alt="logo.png" title="Sinfito" />
        </div>
      </div>
    </header>



    <main class="main_content container">
      <section class="section-seu-codigo container">
        <div class="content">
          <div class="box-artigo">
            <!--Inícia Formulário-->

            <div class="container_form">
              <!--<h1>SINDICATO DOS FISIOTERAPEUTAS E TERAPEUTAS OCUPACIONAIS DO ESTADO  DO TOCANTINS</h1>-->
              <h1 style="text-align: center">CADASTRO SINFITO</h1>

              <form class="form" action="form_gerado.php" method="post">

                <!--############################# DADOS PESSOAIS-->
                <hr style="margin-top: 20px; margin-bottom: 20px" />
                <h3 style="padding: 5px; text-align: center">Dados Pessoais</h3>

                <div class="form_grupo">
                  <label for="nome" class="form_label">Nome</label>
                  <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required />
                </div>

                <div class="form_grupo">
                  <label for="e-mail" class="form_label">Email</label>
                  <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"
                    required />
                </div>

                <div class="form_grupo">
                  <label for="cpf" class="form_label">CPF</label>
                  <input type="text" name="cpf" class="form_input" id="cpf" placeholder="CPF" oninput="mascara(this)"
                    required />
                </div>

                <div class="form_grupo">
                  <label for="rg" class="form_label">RG</label>
                  <input type="text" name="rg" class="form_input" id="rg" placeholder="RG" required />
                </div>

                <div class="form_grupo">
                  <label for="ssp" class="form_label">SSP</label>
                  <input type="text" name="ssp" class="form_input" id="ssp" placeholder="SSP" required />
                </div>

                <div class="form_grupo">
                  <label for="datanascimento" class="form_label">Data de Nascimento</label>
                  <input type="date" name="datanascimento" class="form_input" id="datanascimento"
                    placeholder="Data de Nascimento" required />
                </div>

                <div class="form_grupo">
                  <label for="telefone" class="form_label">Telefone Residencial</label>
                  <input class="form_input" type="tel" onkeyup="handlePhone(event)" name="telefone" id="telefone"
                    placeholder="(99)9999-9999" />
                </div>

                <div class="form_grupo">
                  <label for="celular" class="form_label">Celular</label>
                  <input class="form_input" type="tel" onkeyup="handlePhone(event)" name="celular" id="celular"
                    placeholder="(99)9999-9999" required/>
                </div>

                <div class="form_grupo">
                  <span class="legenda">Sexo:</span>

                  <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="masculino" name="sexo" value="Masculino" />
                    <label for="masculino" class="radio_label form_label">
                      <span class="radio_new_btn"></span> Masculino</label>
                  </div>

                  <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="feminino" name="sexo" value="Feminino" />
                    <label for="feminino" class="radio_label form_label">
                      <span class="radio_new_btn"></span> Feminino</label>
                  </div>
                </div>

                <!--############################# DADOS PROFISSIONAIS-->
                <hr style="margin-top: 20px; margin-bottom: 20px" />
                <h3 style="padding: 5px; text-align: center">
                  Dados Profissionais
                </h3>

                <div class="form_grupo">
                  <label for="formacao" class="text">Formação</label>
                  <select name="formacao" class="dropdown" required>
                    <option selected disabled class="form_select_option" value="">
                      Selecione
                    </option>
                    <option value="Fisioterapeuta" class="form_select_option">
                      Fisioterapeuta
                    </option>
                    <option value="Terapeuta Ocupacional" class="form_select_option">
                      Terapeuta Ocupacional
                    </option>
                  </select>
                </div>

                <div class="form_grupo">
                  <label for="crefito" class="form_label">CREFITO</label>
                  <input type="text" name="crefito" class="form_input" id="crefito" placeholder="Nº CREFITO" required />
                </div>

                <div class="form_grupo">
                  <label for="localtrabalho" class="form_label">Local de Trabalho</label>
                  <input type="text" name="localtrabalho" class="form_input" id="localtrabalho"
                    placeholder="Local de Trabalho" required />
                </div>

                <div class="form_grupo">
                  <label for="matricula" class="form_label">Matrícula</label>
                  <input type="text" name="matricula" class="form_input" id="matricula"
                    placeholder="Matrícula do local de trabalho" />
                </div>

                <div class="form_grupo">
                  <span class="legenda">Categoria de ocupação:</span>

                  <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="servidor" name="categoria"
                      value="Servidor Público" required/>
                    <label for="servidor" class="radio_label form_label">
                      <span class="radio_new_btn"></span> Servidor
                      Público</label>
                  </div>

                  <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="autonomo" name="categoria" value="Autônomo" />
                    <label for="autonomo" class="radio_label form_label">
                      <span class="radio_new_btn"></span> Autônomo</label>
                  </div>

                  <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="clt" name="categoria" value="C.L.T." />
                    <label for="clt" class="radio_label form_label">
                      <span class="radio_new_btn"></span> C.L.T.</label>
                  </div>
                </div>

                <!--############################# NATURALIDADE-->

                <hr style="margin-top: 20px; margin-bottom: 20px" />
                <h3 style="padding: 5px; text-align: center">Naturalidade</h3>

                <div class="form_grupo">
                  <label class="form_label" for="states">Estados</label>
                  <select name="estado_nat" id="states" class="dropdown" required>
                    <option value="" class="form_select_option">
                      Escolha um Estado
                    </option>
                    <option value="AC" class="form_select_option">Acre</option>
                    <option value="AL" class="form_select_option">
                      Alagoas
                    </option>
                    <option value="AP" class="form_select_option">Amapá</option>
                    <option value="AM" class="form_select_option">
                      Amazonas
                    </option>
                    <option value="BA" class="form_select_option">Bahia</option>
                    <option value="CE" class="form_select_option">Ceará</option>
                    <option value="DF" class="form_select_option">
                      Distrito Federal
                    </option>
                    <option value="ES" class="form_select_option">
                      Espírito Santo
                    </option>
                    <option value="GO" class="form_select_option">Goiás</option>
                    <option value="MA" class="form_select_option">
                      Maranhão
                    </option>
                    <option value="MT" class="form_select_option">
                      Mato Grosso
                    </option>
                    <option value="MS" class="form_select_option">
                      Mato Grosso do Sul
                    </option>
                    <option value="MG" class="form_select_option">
                      Minas Gerais
                    </option>
                    <option value="PA" class="form_select_option">Pará</option>
                    <option value="PB" class="form_select_option">
                      Paraíba
                    </option>
                    <option value="PR" class="form_select_option">
                      Paraná
                    </option>
                    <option value="PE" class="form_select_option">
                      Pernambuco
                    </option>
                    <option value="PI" class="form_select_option">Piauí</option>
                    <option value="RJ" class="form_select_option">
                      Rio de Janeiro
                    </option>
                    <option value="RN" class="form_select_option">
                      Rio Grande do Norte
                    </option>
                    <option value="RS" class="form_select_option">
                      Rio Grande do Sul
                    </option>
                    <option value="RO" class="form_select_option">
                      Rondônia
                    </option>
                    <option value="RR" class="form_select_option">
                      Roraima
                    </option>
                    <option value="SC" class="form_select_option">
                      Santa Catarina
                    </option>
                    <option value="SP" class="form_select_option">
                      São Paulo
                    </option>
                    <option value="SE" class="form_select_option">
                      Sergipe
                    </option>
                    <option value="TO" class="form_select_option">
                      Tocantins
                    </option>
                  </select>
                </div>
                <div class="form_grupo">
                  <div id="wrapper-cities">
                    <label for="cities" class="form_label">Cidades</label>
                    <select name="cidade_nat" id="cities" class="dropdown" required></select>
                  </div>
                </div>

                <!--############################# ENDEREÇO RESIDENCIAL-->
                <hr style="margin-top: 20px; margin-bottom: 20px" />
                <h3 style="padding: 5px; text-align: center">
                  Endereço Residencial
                </h3>

                <div class="form_grupo">
                  <label for="cep" class="form_label">CEP</label>
                  <input class="form_input" type="text" id="cep" name="cep" placeholder="CEP" required/>
                  <button type="button" id="buscar_cep" class="btn_buscar">
                    Buscar
                    <i class="fa fa-search" action=""></i>
                  </button>
                </div>

                <div class="form_grupo">
                  <label for="uf" class="form_label">UF (a partir do CEP)</label>
                  <input class="form_input" type="text" id="uf" name="uf" placeholder="UF" readonly="readonly" required/>
                </div>

                <div class="form_grupo">
                  <label for="cidade" class="form_label">Cidade (a partir do CEP)</label>
                  <input class="form_input" type="text" id="cidade" name="cidade" placeholder="Cidade"
                    readonly="readonly" required/>
                </div>

                <div class="form_grupo">
                  <label for="endereco" class="form_label">Endereço</label>
                  <input class="form_input" type="text" id="rua" name="endereco" placeholder="Endereço" required/>
                </div>

                <div class="form_grupo">
                  <label for="complemento" class="form_label">Complemento de Endereço (Lote, Qi ...)</label>
                  <input class="form_input" type="text" id="complemento" name="complemento"
                    placeholder="Complemento de Endereço" />
                </div>

                <div class="form_grupo">
                  <label for="bairro" class="form_label">Bairro</label>
                  <input class="form_input" type="text" id="bairro" name="bairro" placeholder="Bairro" required/>
                </div>

                <!--############################# DADOS BANCÁRIOS-->

                <hr style="margin-top: 20px; margin-bottom: 20px" />
                <h3 style="padding: 5px; text-align: center">
                  Dados Bancários
                </h3>

                <div class="form_grupo">
                  <label for="banco" class="form_label">Banco</label>
                  <input class="form_input" type="text" id="banco" name="banco" placeholder="Nome do Banco" required/>
                </div>

                <div class="form_grupo">
                  <label for="agencia" class="form_label">Agência</label>
                  <input class="form_input" type="text" id="agencia" name="agencia" placeholder="Agência" required/>
                </div>

                <div class="form_grupo">
                  <label for="conta" class="form_label">Conta Corrente</label>
                  <input class="form_input" type="text" id="conta" name="conta" placeholder="Conta Corrente" required/>
                </div>


                <div class="form_grupo">
                  <label for="rendimento" class="form_label">Rendimento Bruto</label>
                  <input class="form_input" type="text" id="rendimento" name="rendimento" placeholder="Rendimento Bruto"
                    onkeyup="dinheiro()" required/>
                </div>

                <div class="submit">
                  <input type="hidden" name="acao" value="enviar" />
                  <button type="submit" name="Submit" class="submit_btn">
                    Cadastrar
                  </button>
                </div>
            </div>
            </form>
          </div>
          <!--container_form-->

          <!--Finaliza Formulário-->
        </div>
        <!--Box Artigo-->

        <div class="clear"></div>
        </div>
      </section>
      <!--FECHA BOX HTML-->
    </main>

    <footer class="main_footer container">
      <div class="main_footer_copy">
        <p class="m-b-footer">
          Samsites - 2023, todos os direitos reservados.
        </p>
      </div>
    </footer>

    <script></script>
  </body>

  </html>