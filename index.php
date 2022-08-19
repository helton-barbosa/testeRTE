<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <table>
      <tr>
         <td conspan="7"><a href="add.php">Adicionar</a></td>
      </tr>
      <tr>
         <td>Primeiro Nome</td>
         <td>Último Nome</td>
         <td>Endereço</td>
         <td>E-mail</td>
         <td>Celular</td>
         <td>Ações</td>
      </tr>
      <?php
         $data = file_get_contents('users.json');
         $date = json_decode($data);
         $index = 1;
         if(!empty($data)){
            foreach($data as $row){
               ?>
               <tr>
                  <td>
                     <?php echo $row->pNome; ?>
                  </td>
                  <td>
                     <?php echo $row->uNome; ?>
                  </td>
                  <td>
                     <?php echo $row->email; ?>
                  </td>
                  <td>
                     <?php echo $row->endereco; ?>
                  </td>
                  <td>
                     <?php echo $row->celular; ?>
                  </td>
                  <td>
                     <a href="update.php?edit_id=<?php echo $index; ?>">Editar</a>
                     <a href="delete.php?delete_id=<?php echo $index; ?>">Deletar</a>
                  </td>
               </tr>
               <?php
               $index++;
            }
         }
      ?>
   </table>
</body>
</html>