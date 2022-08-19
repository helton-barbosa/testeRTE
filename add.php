<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add</title>
</head>
<body>
   <?php
      if(isset($_POST['btnadd'])){
         $data = file_get_contents('users.json');
         $data =json_decode($data, true);

         $data_arr = array(
            'pNome' => $_POST['txtFname'],
            'uNome' => $_POST['txtLname'],
            'endereco' => $_POST['txtAddress'],
            'email' => $_POST['txtEmail'],
            'celular' => $_POST['txtMobile']
         );
         $data[] = $add_arr;

         $data = json_encode($data, JSON_PRETTY_PRINT);
         file_put_contents('users.json', $data);

         header('location: index.php');
      }
   ?>
   <form method="post" name="frmAd">
      <table>
         <tr>
            <td>Adicionar Registro</td>
         </tr>
         <tr>
            <td>Primeiro nome</td>
            <td><input type="text" name="txtFname" id=""></td>
         </tr>
         <tr>
            <td>Sobrenome</td>
            <td><input type="text" name="txtLname" id=""></td>
         </tr>
         <tr>
            <td>Endereço</td>
            <td><input type="text" name="txtAddress" id=""></td>
         </tr>
         <tr>
            <td>E-mail</td>
            <td><input type="text" name="txtEmail" id=""></td>
         </tr>
         <tr>
            <td>Celular</td>
            <td><input type="text" name="txtMobile" id=""></td>
         </tr>
         <tr>
            <td colspan="2"><input type="submit" value="Add" name="btnadd"></td>
         </tr>
      </table>
   </form>
</body>
</html>