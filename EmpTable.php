<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Table</title>
	<style>
#tbstyle {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#tbstyle td, #tbstyle th {
  border: 1px solid 
#ddd;
  padding: 8px;
}

#tbstyle tr:nth-child(even){background-color: 
#f2f2f2;}

#tbstyle tr:hover {background-color: 
#ddd;}

#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: 
#859161;
  color: 
White;
}
</style>
</head>
<body>
	   <div class="container" style="width:500px;">
	   <div class="table-container">
	   <?php
	   		if(file_exists('Emp.json'))
			   {
				   $filename = 'Emp.json';
				   $data = file_get_contents($filename); //data read from json file
				   $users = json_decode($data);  //decode a data
				   $message = "<h3 class='text-success'>JSON file data</h3>";
			   }else{
					$message = "<h3 class='text-danger'>JSON file Not found</h3>";
			   }
			 if(isset($message))
			 {
				  echo $message;

			 ?>
		<table id="tbstyle">
			<tbody>
				<tr>
					<th>empid</th>
					<th>first_name</th>
					<th>last_name</th>
					<th>dept</th>
				</tr>
				<?php foreach ($users as $user) { ?>
				<tr>
					<td> <?= $user->empid; ?> </td>
					<td> <?= $user->first_name; ?> </td>
					<td> <?= $user->last_name; ?> </td>
					<td> <?= $user->dept; ?> </td>
				</tr>
				<?php }
			 }
			 else
				echo $message;
			 ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>