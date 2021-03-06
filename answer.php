<?php 
class Witch {

	function killVillarge($sequence_of_year = 0){
		$total_villagers = 0;		
		for ($a = 0;$a <= $sequence_of_year; $a++){
			if($a < 2){
				$fibonaci_numbers[] = $a;
				$total_villagers += $a;
			}else{
				$fibonaci_numbers[] = end($fibonaci_numbers) + prev($fibonaci_numbers);
				$total_villagers += end($fibonaci_numbers);
			}
		}
		return $total_villagers;
	}

	function averageNumberOfPeople($averageNumberOfPeople = Array()){
		$total_people_killed = 0;
		foreach ($averageNumberOfPeople as $k => $v) {
			if($v["YearOfDeath"] < 0 || $v["AgeOfDeath"] < 0)
				return -1;
			$total_people_killed += $this->killVillarge($v["YearOfDeath"] - $v["AgeOfDeath"]);
		}		
		return $total_people_killed / count ($averageNumberOfPeople);			
	}

}

$witch = new Witch();
//echo "On the 1st year she kills ".$witch->killVillarge(1)." villagers<br>";
//echo "On the 2nd year she kills ".$witch->killVillarge(2)." villagers<br>";
//echo "On the 3rd year she kills ".$witch->killVillarge(3)." villagers<br>";
//echo "On the 4th year she kills ".$witch->killVillarge(4)." villagers<br>";
//echo "On the 5th year she kills ".$witch->killVillarge(5)." villagers<br>";
//echo "On the 6th year she kills ".$witch->killVillarge(6)." villager<br>";
echo "Average Number Of People From Age Of Death = 10, Year Of Death = 12 And Age Of Death = 13, Year Of Death = 17 is ".
$witch->averageNumberOfPeople(Array(
    Array(
		"AgeOfDeath" => 10,
		"YearOfDeath" => 12
	),
	Array(
		"AgeOfDeath" => 13,
		"YearOfDeath" => 17
	)
))."<br>";

?>