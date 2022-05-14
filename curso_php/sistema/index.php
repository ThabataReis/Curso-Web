<?php

    //CHAMANDO CONEXAO
    include 'conexao.php';

    //COLETANDO AS INFORMACOES DO POST
    //@ PARA IGNORAR ERRO CASO O POST NAO SEJA ENVIADO
    @$cd_convenio = $_POST['frm_cd_convenio'];

?>

<form method="POST" action="index.php">

    Código do convênio: <br>
    <input type="number" name="frm_cd_convenio">

    <button type="submit"> Enviar</button>

</form> 

<?php
    echo 'Convenio selecionado: ' . $cd_convenio . '<br><br>';

    
//BUSCANDO DADOS DO CONVENIO
$consulta_convenio = "SELECT * FROM 
banco_iep.convenio
WHERE cd_convenio = $cd_convenio";

//EXECUTANDO COMANDO NO BANCO
$resultado = mysqli_query($conexao, $consulta_convenio);

//APENAS PARA O COMANDO SELECT
//CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
$linha = mysqli_fetch_array($resultado);

//EXIBINDO INFORMACOES
//echo $linha['cd_convenio'];
//echo ' | ' . $linha['nm_convenio'];
//echo ' | ' . $linha['cooparticipacao'];


?>

<table>
    <!--PRIMEIRA LINHA TITULO TH-->
    <tr> 
        <th>Código </th>
        <th>Convênio </th>
        <th>Cooparticipação </th>
    </tr>

    <tr>
        <td> <?php echo $linha['cd_convenio']; ?> </td>
        <td> <?php echo $linha['nm_convenio']; ?>  </td>
        <td> <?php echo $linha['cooparticipacao']; ?>  </td>
    </tr>

  <style>

      table{
        style=" padding: 0px; 
        text-align: center;
      }

  th{
      background-color: lightblue;
      text-align: center;
      padding: 2px;
  }

</table>
