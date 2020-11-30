<script>

    // 1. Avisar que o formulário foi enviado com sucesso
    function Sucesso(){
        // A. Browser invoca um popup
        alert("Suas respostas foram enviadas com sucesso!");
    }

    // 2. Avisar que o formulário não foi enviado
    function Erro(){
        // A. Browser invoca um popup
        alert("Ops, não conseguimos obter suas respostas! Tente de novo!");
    }

</script>

<?php    

    // 1. Conectar à Database  -----------------------------------------------------------------------------------------------------
    
        // A. Incluir classe que conecta à database
        include("conectar_database.php");

    // 2. Variáveis ---------------------------------------------------------------------------------------------------------
      
        // A. nova variável = nome do campo do index
        $resposta_1 = $_GET ['resposta_1'];
        $resposta_2 = $_GET ['resposta_2'];
        $resposta_3 = $_GET ['resposta_3']; 
        $resposta_4 = $_GET ['resposta_4'];
        $resposta_5 = $_GET ['resposta_5'];
        $resposta_6 = $_GET ['resposta_6']; 
        $resposta_7 = $_GET ['resposta_7'];
        $resposta_8 = $_GET ['resposta_8'];
        $resposta_9 = $_GET ['resposta_9']; 
        $resposta_10 = $_GET ['resposta_10'];
        $resposta_11 = $_GET ['resposta_11'];

    // 3. Mandar respostas para a database ---------------------------------------------------------------------------------------------------------
     
        // A. Inserir na [nome da tabela no phpmyadmin], os valores digitados pelo usuário
        $INSERIR_RESPOSTAS = "INSERT INTO `tabela_formulario` (`resposta_1`, `resposta_2`, `resposta_3`, `resposta_4`, `resposta_5`, `resposta_6`, `resposta_7`, `resposta_8`, `resposta_9`, `resposta_10`, `resposta_11`) VALUES('$resposta_1','$resposta_2','$resposta_3','$resposta_4','$resposta_5','$resposta_6','$resposta_7','$resposta_8','$resposta_9','$resposta_10','$resposta_11');";

        // B. Se as respostas foram enviadas para à database...
        if(mysqli_query($CONEXAO,$INSERIR_RESPOSTAS)){                    
            
            // I. Exibir mensagem de Sucesso e impedir o form de mandar para outra página
            echo "<script>Sucesso();window.location.href='index.php';</script>";  
        
        // C. Se as respostas não foram enviadas para à database...
        } else {

            // I. Exibir mensagem de Erro e impedir o form de mandar para outra página
            echo "<script>Erro();window.location.href='index.php';</script>";     

        }     

    // 4. Fechar Conexão ---------------------------------------------------------------------------------------------------------
    mysqli_close($CONEXAO);
?>