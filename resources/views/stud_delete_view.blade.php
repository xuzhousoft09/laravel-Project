<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
		 <?php 
         foreach ($users as $user){
         echo '<tr><td>';
		 echo $user->id;
		 echo '</td>';
		 echo '<td>';
		 echo $user->Name;
		 echo '</td>';
         echo '<td>';
		 echo '<a href = delete';
		 echo $user->id.'>Delete</a></td></tr>';
		 }
         ?>
      </table>
   </body>
</html>