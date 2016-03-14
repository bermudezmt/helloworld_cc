<?php include 'header.php'; 
include_once 'dbconnect.php';

    $result = mysql_query("SELECT firstname, lastname, address1, address2, city, zip, country, date from users;"); ?>
   <div class="container">
   <?php if($result) { ?>
	<div class="table-responsive">
	  <table class="table">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address 1</th>
				<th>Address 2</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Country</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		while ($row = mysql_fetch_assoc($result)) {
		echo '<tr>';
			echo '<td>'.$row['firstname'].'</td>';
			echo '<td>'.$row['lastname'].'</td>';
			echo '<td>'.$row['address1'].'</td>';
			echo '<td>'.$row['address2'].'</td>';
			echo '<td>'.$row['city'].'</td>';
			echo '<td>'.$row['zip'].'</td>';
			echo '<td>'.$row['country'].'</td>';
			echo '<td>'.$row['date'].'</td>';
		echo '</tr>';
		}
		mysql_free_result($result);
		 ?>
		</tbody>
	  </table>
	</div>
    <?php	
  } else {
	echo '<p>Database query error.</p>';
  }?>
  </div>
</body>
</html>


