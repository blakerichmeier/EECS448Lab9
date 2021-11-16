<?php

echo "<tr> <th> </th><th> &nbsp&nbsp&nbsp&nbsp &nbsp1</th> <th> &nbsp2</th> <th> &nbsp3</th> <th> &nbsp&nbsp4</th> <th> &nbsp&nbsp5</th> <th> &nbsp&nbsp6</th> <th> &nbsp&nbsp7</th> <th> &nbsp&nbsp8</th> <th> &nbsp9</th> <th> &nbsp10</th></tr>";
echo "<table>";

        for ($i =1; $i < 11; $i++){

            echo'<tr>';
            for ($j = 0; $j < 11; $j++)
		if($j == 0){
		echo '<td>' .$i.'</td>';

	}
	else{
      echo '<td>' .$j*$i.'</td>';

	}
	echo "</tr>";
        }

  echo"</table>";

?>
