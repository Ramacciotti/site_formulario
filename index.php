<!-- Definindo Html -->
<!DOCTYPE html>

<html lang="pt-br">
    
    <!-- HEAD XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <head>

        <!-- 1. Configuração de Caractere: Padrão de Codificação Latino -->
        <meta charset="UTF-8">

        <!-- 2. Título do Site -->
        <title>Formulário</title>

        <!-- 3. Chamar css do bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    </head>
    
    <!-- BODY XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <body>

        <!-- 1. Container do Site -->
        <div id="Container" class="container">
            
            <!-- Variáveis ===============================================================================================================-->
            <?php

                // 1. Variáveis que irão guardar a quantidade de votos em cada resposta --------------------------------------------------------
                $P2S = 0; $P2N = 0; $P3S = 0; $P3N = 0; $P4S = 0; $P4N = 0; $P5S = 0; $P5N = 0; $P6S = 0; $P6N = 0; $P7S = 0; $P7N = 0; $P8S = 0; $P8N = 0; $P9S = 0; $P9N = 0; $P10S = 0; $P10N = 0; $P11S = 0; $P11N = 0;
                
                // 2. Variáveis que irão guardar as perguntas -----------------------------------------------------------------------------------
                $P2 = "Você já deu uma olhadinha nas suas redes sociais, enquanto estava no trabalho?";
                $P3 = "Você já baixou algum arquivo no seu computador, que veio com um vírus?";
                $P4 = "Pergunta 3";
                $P5 = "Pergunta 4";
                $P6 = "Pergunta 5";
                $P7 = "Pergunta 6";
                $P8 = "Pergunta 7";
                $P9 = "Pergunta 8";
                $P10 = "Pergunta 9";
                $P11 = "Pergunta 10";

                // 3. Variáveis para contar quantidade de entrevistados
                $ENTREVISTADOS = 0;

                // 1. Conectar à database online
                include("conectar_database.php");
                
                // 2. Selecionar todos os valores da tabela na database online
                $CONSULTA = "SELECT * FROM tabela_formulario";
                
                // 3. Pegar resultado da consulta e guardar nessa variável
                $RESULTADO = $CONEXAO->query($CONSULTA);    					

                // 4. Se tiver pelo menos 1 usuário cadastrado...
                if ($RESULTADO->num_rows > 0) {
                    
                    // A. Consultar todas as linhas da tabela na database online
					while($LINHA = $RESULTADO->fetch_assoc()) {

                        // I. Soma a quantidade de pessoas que responderam a pesquisa
                        $ENTREVISTADOS = $ENTREVISTADOS +1;
                    }

                }

                // 5. Fechar conexão
				$CONEXAO->close();
            ?>

            <!-- Título ===============================================================================================================-->
            <section id="Section_Título" class="row p-3 mb-2">
                
                <!-- 1. Logo da Empresa --------------------------------------------------------------------------------------------->
                <img id="Logo" src="images/RM_EDUCACAO_LOGO.png" class="rounded mx-auto d-block" alt="..." style="width:200px;height:200px;">

                <!-- 2. Título do Site --------------------------------------------------------------------------------------------->
                <div id="Titulo" class="col-12 blockquote text-center">

                    <!-- A. Título -->
                    <h1>Política de Uso da Internet</h1>

                </div>

                <!-- 3. Subtítulo do Sites --------------------------------------------------------------------------------------------->
                <div id="Subtitulo" class="col-12">

                    <!-- B. Subtítulo -->
                    <p class="text-justify"> Hoje, ficar sem internet é uma tarefa quase impossível; afinal, grande parte de nossas atividades está ligada à ela, de alguma forma. Nós, da RM Educação,
                    gostaríamos de entender mais sobre como você utiliza esse recurso através de algumas perguntas. Nosso objetivo é melhorar nosso entendimento sobre a utilização deste utilitário. Você poderia responder nosso formulário? :]</p>

                </div>                

            </section>

            <!-- Formulário ===============================================================================================================-->
            <section id="Section_Formulario" class="row p-3 mb-2">

                <!-- 1. Formulário do site --------------------------------------------------------------------------------------------->
                <div class="col-12">

                    <!-- A. Formulário -->
                    <form  id="Form" action="registrar.php" method="GET">

                        <!-- I. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlInput1">0) Qual é o seu nome completo?</label>
                            <!-- Resposta -->
                            <input type="text" class="form-control" placeholder="Nome Completo" name="resposta_1" minlength="10">
                        </div>

                        <!-- II. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "1) $P2" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_2">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                        </div>

                        <!-- III. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "2) $P3" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_3">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div>   

                        <!-- IV. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "3) $P4" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_4">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div>   

                        <!-- IV. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "4) $P5" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_5">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- V. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "5) $P6" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_6">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- VI. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "6) $P7" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_7">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- VII. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "7) $P8" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_8">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- VIII. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "8) $P9" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_9">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- IX. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "9) $P10" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_10">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- XI. Pergunta -->
                        <div class="form-group">
                            <!-- Pergunta -->
                            <label for="exampleFormControlSelect1"><?php echo "10) $P11" ?></label>
                            <!-- Resposta -->
                            <select class="form-control Formulario_Opcoes" name="resposta_11">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>                            
                        </div> 

                        <!-- Botão de envio -->
                        <button id="Botao_Formulario" type="submit" class="btn btn-primary" name="registro_enviar" value="Salvar">Enviar</button>

                    </form>
                    
                    <!-- B. Carregar Jquery -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript">
                    </script>
                    
                    <!-- C. Manipular envio do Fomrulário -->            
                    <script>
                    
                        // Quando o documento estiver pronto...
                        $(document).ready(function () {
                            
                            // Quando clicarem no botão enviar...
                            $("#Form").submit(function (e) {
                    
                                // 1. Impedir o comportamento padrão do fomrulário
                                e.preventDefault();
                    
                                // 2. Desativar o botão
                                $("#Botao_Formulario").attr("disabled", true);
                                
                                $.ajax({
                                    type: 'get',
                                    url: 'registrar.php',
                                    data: $('#Form').serialize(),
                                    success: function () {
                                    alert('O formulário foi enviado com sucesso!');
                                    }
                                });
                                
                            });
                                
                        });
                            
                    </script>

                </div>

            </section>

            <!-- Vídeo ===============================================================================================================-->
            <section id="Section_Video" class="row p-3 mb-2">
                
                <!-- 1. Título ---------------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Título -->
                    <h2 class="Titulo_H2">O que é política de uso da Internet?</h2>

                </div>
                
                <!-- 2. Parágrafo ---------------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Parágrafo-->
                    <p class="text-justify Paragrafo">Obrigada por responder nosso formulário! Gostaria de saber mais o que é política de uso 
                    da internet? Nós te explicamos! O propósito de uma política de uso da internet é definir aquilo que é permitido 
                    ou não, a fim de que a empresa possa atender as necessidades essenciais para que os colaboradores possam 
                    desempenhar suas funções em um ambiente com qualidade. Leia nosso <a href="/files/Relatório_Técnico_Mariana_Ramacciotti.pdf" download target="_blank">Relatório Técnico</a> 
                    sobre o assunto e assista a apresentação abaixo, criada com muito carinho pela equipe do departamento de tecnologia da RM Educação. <br><br> E falando em equipe, está na hora de nos apresentarmos! Nosso time é formado por: Mariana Ramacciotti, Ana Amélia Shibata Vidal, Marcela Soares Lucena, Silvana Justino Rocha, Eduardo França de Oliveira Rodrigues e Gustavo Lamounier Adas.</p>

                </div>
                
                <!-- 3. Vídeo ---------------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Vídeo -->
                    <iframe width="570" height="325" src="https://www.youtube.com/embed/OM1HWiO7Mn4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>

                </div>

            </section>
            
            <!-- Tabela ===============================================================================================================-->
            <section id="Section_Tabela" class="row p-3 mb-2">

                <!-- 1. Título --------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Título -->
                    <h2>Resultados da Nossa Pesquisa</h2>

                </div>

                <!-- 2. Parágrafo --------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Parágrafo-->
                    <p class="text-justify">Assim como você, outras pessoas também responderam nosso questionário. Até agora, <span style="color:#F35334;"><b><?php echo "$ENTREVISTADOS" ?> pessoas</b></nb></span> foram entrevistas. Ficou curioso para saber dos resultados? Confira abaixo!</p>

                </div>

                <!-- Trazer os dados do banco de dados online -------------------------------------------------------------------------------------------------------------->
                <?php 

					// 1. Conectar à database online
					include("conectar_database.php");
					
					// 2. Selecionar todos os valores da tabela na database online
                    $CONSULTA = "SELECT * FROM tabela_formulario";
                    
                    // 3. Pegar resultado da consulta e guardar nessa variável
					$RESULTADO = $CONEXAO->query($CONSULTA);    					

					// 4. Se tiver pelo menos 1 usuário cadastrado...
					if ($RESULTADO->num_rows > 0) {
					    
					    // A. Consultar todas as linhas da tabela na database online
						while($LINHA = $RESULTADO->fetch_assoc()) {
                               
                            // #region Pergunta 2 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_2"] == 'sim') {

                                    // A. Somar na Variável
                                    $P2S = $P2S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P2N = $P2N + 1;
                                } 
                                
                            // #endregion    
    						
    						// #region Pergunta 3 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_3"] == 'sim') {

                                    // A. Somar na Variável
                                    $P3S = $P3S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P3N = $P3N + 1;
                                }
    						
                            // #endregion    
                            
                            // #region Pergunta 4 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_4"] == 'sim') {

                                    // A. Somar na Variável
                                    $P4S = $P4S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P4N = $P4N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 5 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_5"] == 'sim') {

                                    // A. Somar na Variável
                                    $P5S = $P5S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P5N = $P5N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 6 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_6"] == 'sim') {

                                    // A. Somar na Variável
                                    $P6S = $P6S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P6N = $P6N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 7 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_7"] == 'sim') {

                                    // A. Somar na Variável
                                    $P7S = $P7S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P7N = $P7N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 5 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_8"] == 'sim') {

                                    // A. Somar na Variável
                                    $P8S = $P8S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P8N = $P8N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 9 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_9"] == 'sim') {

                                    // A. Somar na Variável
                                    $P9S = $P9S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P9N = $P9N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 10 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_10"] == 'sim') {

                                    // A. Somar na Variável
                                    $P10S = $P10S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P10N = $P10N + 1;
                                }
    						
                            // #endregion 
                            
                            // #region Pergunta 11 ---------------------------------------------------------------------------------------------

                                // 1. Se a resposta for sim...
                                if($LINHA["resposta_11"] == 'sim') {

                                    // A. Somar na Variável
                                    $P11S = $P11S + 1;

                                // 2. Se a resposta for não...
                                } else {

                                    // A. Somar na Variável
                                    $P11N = $P11N + 1;
                                }
    						
						    // #endregion 
                        }    
                        
                        echo "</table>";
                    
                    // 5. Se não tiver nenhum usuário cadastrado...
					} else {

                        // A. Mostrar Mensagem
						echo "Não há ninguém cadastrado!";
					}
                    
                    // 6. Fechar conexão
					$CONEXAO->close();							
				?>
				
				<!-- Colocar dados na Tabela -------------------------------------------------------------------------------------------------------------->
    				
                <!-- 1. Tabela -->  
                <table class="table table-borderless table-dark">
                    
                  <!-- A. Título das Colunas -->  
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Pergunta</th>
                      <th scope="col">Sim</th>
                      <th scope="col">Não</th>
                    </tr>
                  </thead>
                  
                  <!-- B. Linhas -->  
                  <tbody>
                      
                    <!-- 1. Linha 1 -->    
                    <tr>
                      <td scope="row">1.</td>
                      <td><?php echo "$P2" ?></td>
                      <td><?php echo "$P2S" ?></td>
                      <td><?php echo "$P2N" ?></td>
                    </tr>
                    
                    <!-- 2. Linha 2 -->    
                    <tr>
                      <td scope="row">2.</td>
                      <td><?php echo "$P3" ?></td>
                      <td><?php echo "$P3S" ?></td>
                      <td><?php echo "$P3N" ?></td>
                    </tr>
                    
                    <!-- 3. Linha 3 -->    
                    <tr>
                      <td scope="row">3.</td>
                      <td><?php echo "$P4" ?></td>
                      <td><?php echo "$P4S" ?></td>
                      <td><?php echo "$P4N" ?></td>
                    </tr>

                    <!-- 4. Linha 4 -->    
                    <tr>
                      <td scope="row">4.</td>
                      <td><?php echo "$P5" ?></td>
                      <td><?php echo "$P5S" ?></td>
                      <td><?php echo "$P5N" ?></td>
                    </tr>

                    <!-- 5. Linha 5 -->    
                    <tr>
                      <td scope="row">5.</td>
                      <td><?php echo "$P6" ?></td>
                      <td><?php echo "$P6S" ?></td>
                      <td><?php echo "$P6N" ?></td>
                    </tr>

                    <!-- 6. Linha 6 -->    
                    <tr>
                      <td scope="row">6.</td>
                      <td><?php echo "$P7" ?></td>
                      <td><?php echo "$P7S" ?></td>
                      <td><?php echo "$P7N" ?></td>
                    </tr>

                    <!-- 7. Linha 7 -->    
                    <tr>
                      <td scope="row">7.</td>
                      <td><?php echo "$P8" ?></td>
                      <td><?php echo "$P8S" ?></td>
                      <td><?php echo "$P8N" ?></td>
                    </tr>

                    <!-- 8. Linha 8 -->    
                    <tr>
                      <td scope="row">8.</td>
                      <td><?php echo "$P9" ?></td>
                      <td><?php echo "$P9S" ?></td>
                      <td><?php echo "$P9N" ?></td>
                    </tr>

                    <!-- 9. Linha 9 -->    
                    <tr>
                      <td scope="row">9.</td>
                      <td><?php echo "$P10" ?></td>
                      <td><?php echo "$P10S" ?></td>
                      <td><?php echo "$P10N" ?></td>
                    </tr>

                    <!-- 10. Linha 10 -->    
                    <tr>
                      <td scope="row">10.</td>
                      <td><?php echo "$P11" ?></td>
                      <td><?php echo "$P11S" ?></td>
                      <td><?php echo "$P11N" ?></td>
                    </tr>
                    
                  </tbody>
                  
                </table>
            
            </section>    
            
            <!-- Nomes ===============================================================================================================-->
            <section id="Section_Entrevistados" class="row p-3 mb-2">
                
                <!-- 1. Título --------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Título -->
                    <h2 class="Titulo_H2">Participantes</h2>

                </div>

                <!-- 2. Parágrafo --------------------------------------------------------------------------------------------->
                <div class="col-12 blockquote text-center">

                    <!-- A. Parágrafo-->
                    <p class="text-justify Paragrafo">Gostaria de conhecer as pessoas que participaram da nossa pesquisa? Confira abaixo!</p>

                </div>

                <!-- 3. Pegar nomes lá na database --------------------------------------------------------------------------------------------->
                <?php 
                    
                    // A. Conectar à database online
                    include("conectar_database.php");
                    
                    // B. Selecionar todos os valores da tabela na database online
                    $CONSULTA = "SELECT resposta_1 FROM tabela_formulario";
                    
                    // C. Pegar resultado da consulta e guardar nessa variável
                    $RESULTADO = $CONEXAO->query($CONSULTA);   
                    
                    $QUANTIDADE = 0;
                    
                    // D. Se tiver pelo menos 1 usuário cadastrado...
					if ($RESULTADO->num_rows > 0) {
					    
					    // I. Criar tabela
					        echo "<table class='table table-borderless table-dark'>";
					    
				        // II. Criar título para a tabela
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th scope='col'>" . "Pessoas que responderam nossa pesquisa" . "</th>";
                                echo "</tr>";
                            echo "</thead>";
                                    
					    // III. Consultar todas as linhas da tabela na database online
						while($LINHA = $RESULTADO->fetch_assoc()) {
						    
						   foreach ($LINHA as $col => $NOMES) {
                            
                                // Mostrar os Nomes
                                echo "<tr>";
                                  echo "<td>" . $NOMES . "</td>";
                                echo "</tr>";
                                
                            }
                        }
                        
                        // IV. Fechar Tabela
                        echo "</table>";  
                    }
                
                // 2. Fechar conexão
                $CONEXAO->close();
                
                ?>

            </section>
            
            <!-- Autora ===============================================================================================================-->
            <section id="Section_Autora" class="row p-3 mb-2">
                
                <!-- 1. Texto Autora  --------------------------------------------------------------------------------------------->
                <div class="col-12">
                    
                    <!-- A. Parágrafo -->
                    <p class="text-center">Este site foi desenvolvido por <a href='https://www.linkedin.com/in/marianaramacciotti/'>Mariana Ramacciotti</a></p>
                    
                </div>
                
            </section>
            
        </div>

        <!-- 2. Adicionar Javascript -->
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        
        <!-- 3. Chamar JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>

    </body>

</html>

