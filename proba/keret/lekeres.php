<?php
	include("sqlCon.php");
	function projektek()
	{
		$sql = " SELECT projektID, projektNev FROM projektek";
		
		
		$resoult = connect()->query(" SELECT * FROM projektek");
	
		if($resoult -> num_rows >0)
		{
			$n =0;
			
			while($row = $resoult -> fetch_assoc())
			{
				$list[$n]["projektName"] = $row["projektName"];
				$list[$n]["projektSorszam"] = $row["projektSorszam"];
				
				$list[$n]["Megrendelo"] = $row["Megrendelo"];
				$list[$n]["munkatipus"] = $row["munkatipus"];
				$list[$n]["PrManager"] = $row["PrManager"];
				$list[$n]["AKezdDatum"] = $row["AKezdDatum"];
				$list[$n]["Aervenyesseg"] = $row["Aervenyesseg"];
				$list[$n]["Anetto"] = $row["Anetto"];
				$list[$n]["Abrutto"] = $row["Abrutto"];
				$list[$n]["Vnetto"] = $row["Vnetto"];
				$list[$n]["Vbrutto"] = $row["Vbrutto"];
				$list[$n]["Tanyagkoltseg"] = $row["Tanyagkoltseg"];
				$list[$n]["merfoldko"] = $row["merfoldko"];
				$list[$n]["merfoldkodb"] = $row["merfoldkodb"];
				$list[$n]["prjaktfazis"] = $row["prjaktfazis"];
				$list[$n]["megjegyzes"] = $row["megjegyzes"];
				$list[$n]["tig"] = $row["tig"];
				$list[$n]["tigdb"] = $row["tigdb"];
				$list[$n]["tigsorszam"] = $row["tigsorszam"];
				$list[$n]["szamla"] = $row["projektNev"];
				$list[$n]["szamladb"] = $row["projektNev"];
				$list[$n]["szamlasorszam"] = $row["szamlasorszam"];
				$n++;
				
			}
		}
		else
		{
			$list = null;
			echo "<br>"."lista null";
		}
		connect() -> close();
		return $list;
	}
	
	
?>