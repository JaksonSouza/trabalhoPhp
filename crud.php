<?php

	function insertVendedor($conn,$nome,$salario,$codsetor){
 
		    $sql = "insert into vendedor(nome,salario,codsetor) values('$nome',$salario,$codsetor);";

            if ($conn->query($sql) === TRUE) {
                echo "Novo registro cadastrado.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
	}

	function selectVendedor($conn){
	?>
		<table>
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>NOME</th>
	              <th>SALARIO</th>
	              <th>CODSETOR</th>
	          </tr>
	        </thead>
	        <?php
	          $sql = "select * from vendedor;";

	          $result = $conn->query($sql);

	          if($result->num_rows > 0){
	              while($row = $result->fetch_assoc()){
	        ?>
	        <tbody>
	          <tr>
	            <td><?php echo $row['id'];?></td>
	            <td><?php echo $row['nome'];?></td>
	            <td><?php echo $row['salario'];?></td>
	            <td><?php echo $row['codsetor'];?></td> 
	          </tr>
	          <?php
	              }
	          }
	          ?>
	        </tbody>
		</table>
		<?php
	}

		function deleteVendedor($conn,$id){

           $sql = "DELETE FROM vendedor WHERE id = $id;";

            if ($conn->query($sql) === TRUE) {
				echo "Vendedor deletado com sucesso.";

            }     
        } 

        function updateVendedor($conn,$nome,$salario,$codsetor, $id){
 
		   	$sql = "UPDATE vendedor SET nome='$nome',salario=$salario,codsetor=$codsetor WHERE id = $id;";
		   	//UPDATE vendedor SET nome='marcos',salario=1,codsetor=1 WHERE id = 18;

            if ($conn->query($sql) === TRUE) {
                echo "Novo registro cadastrado.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
	}
	?>