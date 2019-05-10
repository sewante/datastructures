<?php
define('TITLE', 'Quick Sort');
require_once("include/header.php");
require_once("include/config.php");
?>
		<div class="article">
            <h2><span>Quick sort</span></h2>
            <div class="clr"></div>
			
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				require_once("include/utilities.php");
				require_once("include/sorting_algorithms.php");
				
				// Read the student receipts from the file.
				$student_receipts = read_file();
				
				// Sort the receipts.
				$start_time = microtime(true);
				for ($i=STARTING_STUDENT_NUMBER; $i<=(STARTING_STUDENT_NUMBER+(NUM_STUDENTS-1)); ++$i) {
					$student_receipts[$i] = quick_sort($student_receipts[$i]);
				}
				$end_time = microtime(true);
				
				$duration = $end_time - $start_time;
				echo "<p>The Quick Sort algorithm took {$duration} seconds to sort " . NUM_STUDENTS . " student records.";
				
				echo "<h3>Sample results</h3>";
				$num = 10; // Number of records to display.
				echo "<p>Showing {$num}/" . NUM_STUDENTS . " records from the file.</p>";
				echo "<table border='1'>";
				echo "<tr><td>Student Number</td><td colspan=10>Receipt Numbers</td></tr>";
				for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+$num); ++$i) {
					echo "<tr>";
					echo "<td>{$i}</td>";
					for ($j=0; $j<NUM_RECEIPTS; ++$j) {
						echo "<td>{$student_receipts[$i][$j]}</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
				echo "</div>";
			} else {
			?>
			
            <p>
				Sometimes called <strong>partition-exchange sort</strong> is an efficient sorting algorithm, serving as a systematic method for placing the elements of 
				an array in order. Developed by Thomas Hoare in 1959, with his work published in 1961, it is still a commonly used algorithm for sorting. When implemented 
				well, it can be about two or three times faster than its main competitors, <a href="merge-sort.php">merge sort</a> and heap sort.<br>
				<a href="https://en.wikipedia.org/wiki/Quicksort" target="_blank">Learn more...</a>
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2>Time complexity</h2>
            <div class="clr"></div>
            <p>
				<!--content goes here-->
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2><span>Try Quick Sort</span></h2>
            <div class="clr"></div>
			<?php echo "<p>Sort sample records for " . NUM_STUDENTS . " students.</p>"; ?>
			<form action="" method="post" class="data-entry">
				<ol>
					<li>
						<input type="submit" name="submit" value="Sort">
					</li>
				</ol>
			</form>
            <div class="clr"></div>
          </div>
			<?php } ?>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Sorting</span> algorithms</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
				<li><a href="bubble-sort.php">Bubble sort</a></li>
				<li><a href="selection-sort.php">Selection sort</a></li>
				<li><a href="insertion-sort.php">Insertion sort</a></li>
				<li><a href="merge-sort.php">Merge sort</a></li>
				<li class="active"><a href="quick-sort.php">Quick sort</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once("include/footer.php"); ?>