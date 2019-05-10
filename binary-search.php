<?php
define('TITLE', 'Binary Search');
require_once('include/header.php');
?>
          <div class="article">
            <h2><span>Binary search</span></h2>
            <div class="clr"></div>
			
			<?php
			require_once("include/config.php");
			require_once("include/utilities.php");
			require_once("include/search_algorithms.php");
			
			// Read the student receipts from the file.
			$student_receipts = read_file();
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$key = $_POST['key'];
				
				$start_time = microtime(true);
				for ($j=STARTING_STUDENT_NUMBER; $j<STARTING_STUDENT_NUMBER+NUM_STUDENTS; ++$j) {
					sort($student_receipts[$j], SORT_STRING);
					$position = binary_search($key, $student_receipts[$j], 0, NUM_RECEIPTS-1);
					
					// Has key been found?
					if ($position != -1) { // Found
						break;
					}
				}
				$end_time = microtime(true);
				
				$duration = $end_time - $start_time;
				echo "<h3>Search Results for receipt number ${key}</h3>";
				if ($position == -1) {
					echo "<p>Sorry, the receipt number {$key} doesn'nt exist on file.</p>";
				}
				else {
					echo "<p>Receipt found in the records of the student having student number {$j}.</p>";
					echo "<p>Binary Search Algorithm took {$duration} seconds to search for the receipt number '<em>{$key}</em>' in the array of " . NUM_STUDENTS . " students.</p>";
				}
				
				echo "</div>";
			}
			else {
			?>
			
            <p>
				Binary search is a search algorithm that finds the position of a target value within a sorted array. It is also known as half-interval search or logarithmic search
			  It compares the target value to the middle element of the array or list, i.e. if they are not equal the half in which the target cannot lie is eliminated and the search 
			  continues on the remaining half until it is successful.<br>
			  Binary search runs in at worst logarithmic time, making O ( log ⁡ n )  comparisons, where n  is the number of elements in the array and log  is the binary logarithm; and using only constant 
			 ( O ( 1 ) )  space. Although specialized data structures designed for fast searching—such as hash tables—can be searched
			 more efficiently, binary search applies to a wider range of search problems.
				<a href="https://en.wikipedia.org/wiki/Binary_search" target="_blank">Learn more...</a>
			</p>
			<?php
			/*$start_time = microtime(true);
			for ($i=STARTING_STUDENT_NUMBER; $i<(STARTING_STUDENT_NUMBER+NUM_STUDENTS); ++$i) {
				// Get three receipt numbers for this student.
				$receipt_numbers = array();
				for ($j=0; $j<3; ++$j) {
					$receipt_numbers[] = $student_receipts[$i][mt_rand(0,9)];
				}
				
				// Pick one receipt at random.
				$key = $receipt_numbers[mt_rand(0,2)];
				
				// Search for the receipt number in the records.
				for ($k=STARTING_STUDENT_NUMBER; $k<(STARTING_STUDENT_NUMBER+NUM_STUDENTS); ++$k) {
					sort($student_receipts[$k], SORT_STRING);
					$pos = binary_search($key, $student_receipts[$k], 0, NUM_RECEIPTS);
				
					if ($pos != -1) {
						break;
					}
				}
			}
			$end_time = microtime(true);
			
			$duration = $end_time - $start_time;			
			echo "<p>Binary Search takes {$duration} seconds to process " . NUM_STUDENTS . " students.</p>";*/
			?>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2><span>Try Binary Search</span></h2>
            <div class="clr"></div>
			<?php echo "<p>Search for a receipt number provided by a student from our record of " . NUM_STUDENTS . " students.</p>"; ?>
			<?php
			$num = 10; // Number of records to display.
			echo "<p><em>Showing {$num}/" . NUM_STUDENTS . " records from the file.</em></p>";
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
			?>
			<form action="binary-search.php" method="post" class="data-entry">
				<ol>
					<li>
						<label for="key">Enter the receipt number to search for</label>
						<input type="text" name="key" id="key" class="text">
					</li>
					<li>
						<input type="submit" name="submit" value="Search">
					</li>
				</ol>
			</form>
            <div class="clr"></div>
          </div>
			<?php } ?>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Searching</span> algorithms</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
				<li><a href="linear-search.php">Linear search</a></li>
				<li class="active"><a href="binary-search.php">Binary search</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once('include/footer.php'); ?>