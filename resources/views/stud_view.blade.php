<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
		 <?php //print_r($users); exit;?>
         <?php foreach ($users as $user) {
		 echo '<tr>'.'<td>';
		 echo $user->id;
		 echo '</td>'.'<td>';
		 echo $user->Name;
		 echo '</td>'.'</tr>';}
         ?>
         
      </table>
   </body>
</html>