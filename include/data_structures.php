<?php
class Student
{
	private $receipts = array();
	private $student_number = null;
	
	public function __construct($student_number)
	{
		$this->student_number = $student_number;
	}
	
	public function add_receipt($receipt_number)
	{
		array_push($this->receipts, $receipt_number);
	}
	
	public function get_student_number()
	{
		return $this->student_number;
	}
	
	public function get_receipts()
	{
		return $this->receipts;
	}
}

class Stack
{
	private $students = null;
	
	public function __construct()
	{
		$this->students = array();
	}
	
	public function push(Student $student)
	{
		array_push($this->students, $student);
	}
	
	public function pop()
	{
		if (count($this->students) > 0) {
			return array_pop($this->students);
		}
		else {
			return null;
		}
	}
	
	public function peek()
	{
		if (count($students) > 0) {
			return $students[count($students)-1];
		}
		else {
			return null;
		}
	}
	
	public function is_empty()
	{
		return (count($students) == 0);
	}
	
	public function size()
	{
		return count($students);
	}
}

class Queue
{
    private $students = null;
    public function __construct()
    {
        $this->students = array();
    }

    public function enqueue(Student $student)
    {
        array_push($this->students, $student);
    }

    public function dequeue()
    {
        if (count($this->students) > 0) {
            return array_shift($this->students);
        }
        else {
            return null;
        }
    }

    public function is_empty()
    {
        return (count($this->students) == 0);
    }

    public function size()
    {
        return count($students);
    }
}

require_once('config.php');
require_once('utilities.php');

/*/ Try using the stack data structure.

$stack = new Stack();
$student_records = read_file("student_receipts.txt");
for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+NUM_STUDENTS); ++$i) {
	$student = new Student($i);
	for ($j = 0; $j<NUM_RECEIPTS; ++$j) {
		$student->add_receipt($student_records[$i][$j]);
	}
	
	$stack->push($student);
}

// Display the results.
echo "<table border='1'>";
echo "<tr><td>Student Number</td><td colspan=10>Receipt Numbers</td></tr>";
for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+NUM_STUDENTS); ++$i) {
	$student = $stack->pop();
	if ($student != null) {
		$receipts = $student->get_receipts();
		echo "<tr>";
		echo "<td>" . $student->get_student_number() . "</td>";
		for ($j=0; $j<NUM_RECEIPTS; ++$j) {
			echo "<td>{$receipts[$j]}</td>";
		}
		echo "</tr>";
	}
}
echo "</table>"; */

/*/ Try using queue data structure.
$queue = new Queue();
$student_records = read_file("student_receipts.txt");
$start_time = microtime(true);
for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+NUM_STUDENTS); ++$i) {
	$student = new Student($i);
	for ($j = 0; $j<NUM_RECEIPTS; ++$j) {
		$student->add_receipt($student_records[$i][$j]);
	}
	
	$queue->enqueue($student);
}
$end_time = microtime(true);

$duration = $end_time - $start_time;
print("<p>It took me {$duration} seconds to construct the queue.</p>");

// Display the results.
echo "<table border='1'>";
echo "<tr><td>Student Number</td><td colspan=10>Receipt Numbers</td></tr>";
for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+NUM_STUDENTS); ++$i) {
	$student = $queue->dequeue();
	if ($student != null) {
		$receipts = $student->get_receipts();
		echo "<tr>";
		echo "<td>" . $student->get_student_number() . "</td>";
		for ($j=0; $j<NUM_RECEIPTS; ++$j) {
			echo "<td>{$receipts[$j]}</td>";
		}
		echo "</tr>";
	}
}
echo "</table>";*/
?>