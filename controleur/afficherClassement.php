<?php
	$i = 1;
	$res = $_SESSION["liste"];
	echo "<table border=1 align='center' id='customers'>
	                         <tr>
	                         <th>Rang </th>
	                         <th>Nom</th>
	                         <th>Prénom</th>
	                         <th>Score</th>                        
	                         </tr>";
	    	foreach ($res as $cherche) 
	    	{
	                echo "<tr>";
	                echo "<td>" .$i. 
							"</td>";
	            	echo "<td>" .$cherche['nom']. 
							"</td>";
				    echo "<td>" .$cherche['prenom']. 
							"</td>";
					echo "<td>" .$cherche['score']. 
							"</td>";
	                echo "</tr>";
	                $i++;
	    	}
	echo "</table>";
?>