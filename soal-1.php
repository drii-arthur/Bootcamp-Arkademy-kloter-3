<?php

		$name = "Muhammad Pandriadi";
		$addres = "Kp sajira barat 03/03 desa sajira kec sajira kab lebak Banten";
		$hobbies = ["Playing Game", "Wild fishing"];
		$is_married = false;
		$school = [
							"highSchool" => "SMA NEGERI 1 SAJIRA",
							"university" => ""];
		$skill =  [
							"Skill1" => "HTML","CSS","jAVASCRIPT","BOOTSTRAP","PHP"
							
		];
	
		function biodata($name, $addres, $hobbies, $is_married, $school, $skill){
	return json_encode([
		'name' => $name,
		'address' => $addres,
		'hobbies' => $hobbies,
		'is_married' => $is_married,
		'schools' => $school,
		'skills' => $skill
	],
	JSON_PRETTY_PRINT
);
		};



echo biodata($name, $addres, $hobbies, $is_married, $school, $skill);

?>
<!-- semoga lolos seleksi,semoga ada kebijakan karna saya baru belajar dan sangat berharap lolos seleksi -->
