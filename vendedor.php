<?php
  include 'index.php';
  selectVendedor($conn);
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <h5>
      Nome do Vendedor:
      <input type="text" name="nome" placeholder="nome"><br>
      Valor do Salario:
      <input type="text" name="salario" placeholder="salario"><br>
      Código do Setor:
      <input type="text" name="codsetor" placeholder="Código do setor"><br>
      <button type="submit" name="1" value="1" class="waves-effect waves-light btn black">Cadastrar</button>
      <button type="submit" name="2" value="2" class="waves-effect waves-light btn black">Deletar</button>
      <button type="submit" name="3" value="3" class="waves-effect waves-light btn black">Alterar</button>
      <br>Informe um id, caso queira alterar ou deletar.
      <input type="text" name="id" placeholder="id">
      <h5>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        If(!isset($_POST["1"])){
          $_POST["1"] = false;
        }
        If(!isset($_POST["2"])){
          $_POST["2"] = false;
        }
        If(!isset($_POST["3"])){
          $_POST["3"] = false;
        }

        if($_POST["1"] == true){
            
            $nome = $_POST['nome'];
            $salario = $_POST['salario'];
            $codsetor = $_POST['codsetor'];

            insertVendedor($conn,$nome,$salario,$codsetor);
        } 

        if($_POST["2"] == true){
          
           $id = $_POST["id"];

           deleteVendedor($conn,$id);
        } 

        if($_POST["3"] == true){
            
            $nome = $_POST['nome'];
            $salario = $_POST['salario'];
            $codsetor = $_POST['codsetor'];
            $id = $_POST["id"];


            updateVendedor($conn,$nome,$salario,$codsetor,$id);
            header("Refresh: 0");
        } 

    }
?>



