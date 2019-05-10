<?php
function str_rand($length = 32, 
                  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    if (!is_int($length) || $length < 0) {
        return false;
    }

    $characters_length = strlen($characters) - 1;
    $string = '';
    for ($i = $length; $i > 0; $i--) {
        $string .= $characters[mt_rand(0, $characters_length)];
    }

    return $string;
}

function write_file($data){
	$file_name = "student_receipts.txt";
	$file_content = serialize($data);
	if(!file_exists($file_name)){
		$file = file_put_contents($file_name, $file_content);
	}
	else {
		echo 'Files alredy exists';
   }
}

//read the receipts from the generated file.
function read_file($file_name="include/student_receipts.txt") {
	if(file_exists($file_name)){
		$file_content = file_get_contents($file_name);
		$student_receipts = unserialize($file_content);
	}
	else {
		echo "File {$file_name} not found";
	}
	
	return $student_receipts;
}


/* Part (a) - Uncomment this section to generate a fresh file. */
// Generate the student receipts.
/*$student_receipts = array();
for ($i=0,$j=STARTING_STUDENT_NUMBER; $i<NUM_STUDENTS; ++$i, ++$j) {
    for ($k=0; $k!=NUM_RECEIPTS; ++$k) {
        $student_receipts[$j][$k] = str_rand(5);
    }
}

// Write the student receipts to a file.
write_file($student_receipts);*/

function factorial($value){
   if($value==0)
	   return 1;
   else {
	   return $value*factorial($value-1);  
   }
}

function pascals_triangle($degree){
   for ($index1 = 0; $index1 < $degree; $index1++) {
	   for($index2=1; $index2<=($degree-$index1); $index2++)
		   echo '&nbsp;&nbsp;&nbsp;';
	   
	   for ($index2 = 0; $index2 <=$index1; $index2++) 
		   echo factorial($index1)/(factorial($index2)*factorial($index1-$index2))."&nbsp;&nbsp; ";
	   print '<br>';
   }
}
?>