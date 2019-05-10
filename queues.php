<?php
define('TITLE', 'Queues');
require_once("include/header.php");
require_once("include/config.php");
?>
		<div class="article">
            <h2><span>Queues</span></h2>
            <div class="clr"></div>
			
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				require_once("include/data_structures.php");
				
				// Read the student receipts from the file.
				$student_receipts = read_file();
				
				// Try using queue data structure.
				$queue = new Queue();
				$student_records = read_file("include/student_receipts.txt");
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
				print("<p>Time taken to construct queue: {$duration} seconds.</p>");

				// Display the results.
				$num = 10;  // Number records to display.
				echo "<h3>Sample results</h3>";
				echo "<p>Showing {$num}/" . NUM_STUDENTS . " records from the file.</p>";
				echo "<table border='1'>";
				echo "<tr><td>Student Number</td><td colspan=10>Receipt Numbers</td></tr>";
				for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+$num); ++$i) {
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
				echo "</table>";
				echo "</div>";
			} else {
			?>
			</div>
		  <div class="article">
            <h2><span>Try Queues</span></h2>
            <div class="clr"></div>
			<?php echo "<p>Construct a queue for " . NUM_STUDENTS . " student records.</p>"; ?>
			<form action="" method="post" class="data-entry">
				<ol>
					<li>
						<input type="submit" name="submit" value="Construct Queue">
					</li>
				</ol>
			</form>
            <div class="clr"></div>
          </div>
			<?php } ?>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Data Structures</span></h2>
            <div class="clr"></div>
            <ul class="sb_menu">
				<li><a href="stacks.php">Stacks</a></li>
				<li class="active"><a href="queues.php">Queues</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once("include/footer.php"); ?>