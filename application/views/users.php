<?php
?>

           <table
			border="1">
			<tr>
				<th>ID</th>	<th>Name</th>
			</tr>
			<?php 
			foreach($query as $row){
				echo "<tr>";
				echo "<td>". $row->id ."</td>";
				echo "<td>". $row->name ."</td>";
				echo "</tr>";
			}
			?>
		</table>