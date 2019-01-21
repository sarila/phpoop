<?php
	include('dbconfig.class.php');




	class User extends Database
	{
		
		public function get_alluser(){
			$sql4 = "SELECT * FROM users";
			$result = mysqli_query($this->db, $sql4);
			while ($row4 = mysqli_fetch_array($result)) {
				$uid= $row4['id'];
				$uname= $row4['username'];
				$ustatus = $row4['status'];
				$uemail = $row4['email'];
				$urole = $row4['role'];
				echo "<tr><br/> 
				<th scope='row'>".$uid."</th>
				<td>". $uname."</td>
				<td>". $ustatus."</td>
				<td>". $uemail."</td>
				<td>". $urole."</td>
				</tr>"
				;
			}
		}
	}



  ?>