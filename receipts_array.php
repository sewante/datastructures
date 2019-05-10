<?php
ini_set('memory_limit','1024M');
	function getRecepitNumber($studentArray)
	{
		//recepitNumber variable
		$recepitNumber=null;
		//loop thru to concat the recepit
		for($i=0;$i<5;$i++)
		{
			$recepitNumber.=mt_rand(0,9);
		}
		//checking for unqiue
		if(!is_null(searchArray($studentArray,$recepitNumber)))
		{
			$recepitNumber=getRecepitNumber($studentArray);
		}

		return $recepitNumber;

	}

	function searchArray($studentArray,$recepitNumber)
	{
		//check if is array 
		//check if is empty
		foreach($studentArray as $key=>$val)
		{
			if($val===$recepitNumber)
			{
				return $key;
			}
		}
		return null;

	}

	//test
	//echo getRecepitNumber();
	//40000 hold array
	$studentArray=array();
	for($i=0;$i<10000;$i++)
	{
		$studentRecepitArray=array();
		for ($j=0; $j <10 ; $j++) 
		{ 
			# code...
			$studentRecepitArray[]=getRecepitNumber($studentArray);

		}
		array_push($studentArray,$studentRecepitArray);
	}

	//echo json_encode($studentArray);
	//
	/*echo "<table border='1'>";
	$count=1;
	foreach ($studentArray as $key => $value) 
	{
		# code...
		$str="<tr><td>Student -".$count."</td>";

		for($i=0;$i<10;$i++)
		{
			$str.="<td>".$value[$i]."</td>";
		}

		$str.="</tr>";
		echo $str;
		$count=$count+1;
	}
	echo"</table>";*/
    /* echo '<pre>';
     print_r($studentArray);
     echo '</pre>';*/
    
    //write a file to store the student receipts
    function write_file($studentArray){
        $file_name = "student_receipts.txt";
        $file_content = serialize($studentArray);
        if(!file_exists($file_name)){
            $file = file_put_contents($file_name, $file_content);
        }
        else {
            echo 'Files alredy exists';
       }
    }
    //read the receipts from the generated file.
    function read_file(){
        $file_name = "student_receipts.txt";
        if(file_exists($file_name)){
            $file_content = file_get_contents($file_name);
            $student_array = unserialize($file_content);
            echo "<table border='1'>";
            $count=215000000;
            foreach ($student_array as $key => $value) 
            {
                    $student_row="<tr><td>Student -".$count."</td>";

                    for($i=0;$i<10;$i++)
                    {
                            $student_row.="<td>".$value[$i]."</td>";
                    }

                    $student_row.="</tr>";
                    echo $student_row;
                    $count=$count+1;
            }
            echo"</table>";
        }
    }
    //call the function to write the file
    #write_file($studentArray);
    //call the function to read the generated file
    #read_file();


