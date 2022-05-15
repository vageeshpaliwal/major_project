<?php 
include 'connect.php'; 
$q="SELECT * FROM operation1";
$query=mysqli_query($con,$q);
if(mysqli_num_rows($query)>0){
	while ($result=mysqli_fetch_array($query)) {

		?>

		<tr>
			<td><?php  echo $result['id'];?></td>
			<td><?php  echo $result['name'];?></td>
			<td><?php  echo $result['email'];?></td>
			<td><?php  echo $result['password'];?></td>
			<td><?php  echo $result['contact'];?></td>
			<td>
				<button class="btn btn-dark">Edit</button>
				<button onclick="deletedata(<?php echo $result['id']; ?>)"class="btn btn-danger">Delete</button>
			</td>
		</tr>



		<?php
	}
}
































// echo "hello";
// if(isset($_POST['displaysend']))
// {
// 	$table='<table class="table">
//   <thead class="thead-dark">
//     <tr>
//       <th scope="col">id</th>
//       <th scope="col">name</th>
//       <th scope="col">email</th>
//       <th scope="col">password</th>
//        <th scope="col">contact</th>
//         <th scope="col">Action</th>

//     </tr>
//   </thead>';
//   echo $sql1="SELECT * FROM `operation1`";
//   die();
//   $res=mysqli_query($con,$sql1);
//   while($row=mysqli_fetch_assoc($res))
//    {
//   	$id=$row['id'];
//   	$name=$row['name'];
//   	$email=$row['email'];
//   	$password=$row['password'];
//   	$contact=$row['contact'];

//   	$table.='<tr>
//       <td scope="row">'.$id.'</td>
//       <td>'.$name.'</td>
//       <td>'.$email.'</td>
//       <td>'.$password.'</td>
//       <td>'.$contact.'</td>
//     </tr>';
//   }
//   $table.='</table>';
//   echo $table;
// }


?>