	
		<table>
			<tr>
				<th class='str'> Projekt ID </th>
				<th class='str'> Projekt Név </th>
			</tr>
		
			<?php
				include_once("../../keret/lekeres.php");

				$projekt = projektek();


		for ($i = 0; $i < count($projekt); $i++) {
    echo "
        <tr class='sor'>
            <td>" . $projekt[$i]["projektID"] . "</td>
            <td>" . $projekt[$i]["projektNev"] . "</td>
            <td>
					<button id='myButton'> Részletek </button>
			</td>";
}

echo "</table></div>";
?>



