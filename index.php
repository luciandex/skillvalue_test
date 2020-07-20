<? php

//procedural approach, no function created
//$data1 = '10:00 14:00 10:00 15:00 10:00 13:00';
//$data2 = '17:00 22:00 14:00 21:00 17:00 22:00';

$data = array('10:00 14:00 10:00 15:00 10:00 13:00','17:00 22:00 14:00 21:00 17:00 22:00');

$start = explode(" ", str_replace(':00', '',$data[0]));
$end = explode(" ", str_replace(':00', '',$data[1]));

for ($j = 0; $j < count($start); $j++) {

    for ($i = 0; $i < ($end[$j] - $start[$j]); $i++) {

        $array[] = $start[$j] + $i;
    }
}

$countArray = array_count_values($array);
$result = count(array_keys($countArray,max($countArray)));

echo $result; // output 2



//procedural approach, with function
//$data[0] = '10:00 14:00 10:00 15:00 10:00 13:00';
//$data[1] = '17:00 22:00 14:00 21:00 17:00 22:00';

$data = array('10:00 14:00 10:00 15:00 10:00 13:00','17:00 22:00 14:00 21:00 17:00 22:00');

function findTheHours($data)
{
    $start = explode(" ", str_replace(':00', '', $data[0]));
    $end = explode(" ", str_replace(':00', '', $data[1]));

    for ($j = 0; $j < count($start); $j++) {
    
        for ($i = 0; $i < ($end[$j] - $start[$j]); $i++) {
        
            $array[] = $start[$j] + $i;
        }
    }

    $countArray = array_count_values($array);
    $result = count(array_keys($countArray, max($countArray)));

    return $result;
}

echo findTheHours($data);


//object oriented approach
// coming soon
