<?php
$d =[
'periodo 1'=> ['2019-10-28',
		'2019-11-01'
	],
'periodo 2'=> ['2019-12-06',
		'2019-12-09'
	],
'periodo 3'=> ['2019-12-23',
		'2020-01-07'
	],
'periodo 4'=> ['2020-02-24',
		'2020-02-28'
	],
'periodo 5'=> ['2020-04-09',
		'2020-04-17'
	]
];
$vacaciones=[
	'2020-05-01',
	'2020-06-25'
	];
  
// Use strtotime function 
function vacaciones ($d, $vacaciones){
foreach ($d as $d){
	$V1 = strtotime($d[0][0]); 
	$V2 = strtotime($d[0][1]); 
// Use for loop to store dates into array 
// 86400 sec = 24 hrs = 60*60*24 
for ($currentDate = $V1; $currentDate <= $V2;  
                                $currentDate += (86400)) { 
                                      
$vacaciones = date('Y-m-d', $currentDate); 
return $vacaciones;
		} 
	}
}
for($i=1;$i<290;$i++){
	$a=date('Y-m-d',($i-1)*86400+strtotime('2019-09-13'));
	if(
		!in_array($a,$vacaciones)
		and
		date('D',strtotime($a))!='Sat'
		and
		date('D',strtotime($a))!='Sun'
	){
		$x[]=[
		'n'=>$i,
		's'=>round($i/7)+1,
		'fecha'=>date('Y-m-d',strtotime('2019-09-13')+($i-1)*86400),
		'D'=>date('D',strtotime('2019-09-13')+($i-1)*86400),
		];
	}
}
for($i=1;$i<290;$i++){
	$a=date('Y-m-d',($i-1)*86400+strtotime('2019-09-13'));
	if(
		!in_array($a,$vacaciones)
		and
		date('D',strtotime($a))!='Sat'
		and
		date('D',strtotime($a))!='Sun'
	){
		$y[]=[
		'n'=>$i,
		's'=>round($i/7)+1,
		'fecha'=>date('Y-m-d',strtotime('2019-09-13')+($i-1)*86400),
		'D'=>date('D',strtotime('2019-09-13')+($i-1)*86400),
		];
	}
}
echo count($x).' horas tenemos de HW'."<br>";
echo (count($y)*2).' horas tenemos de LMS';
foreach($x as $z){
	echo '<tr>'."<br>";
	// día año
	echo '<td>'."<br>";
	echo $z['n'].'º dia del año'."<br>";
	echo '</td>';	
	// día semana
	echo '<td>';
	echo $z['s'].'ª semana del año'."<br>";
	echo '</td>';
	// fecha
	echo '<td>';
	echo $z['fecha']."<br>";
	echo '</td>';	
	// día de la semana
	echo '<td>';
	echo $z['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>