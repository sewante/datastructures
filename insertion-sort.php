<?php
define('TITLE', 'Insertion Sort');
require_once("include/header.php");
require_once("include/config.php");
?>
		<div class="article">
            <h2><span>Insertion sort</span></h2>
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
					insertion_sort($student_receipts[$i]);
				}
				$end_time = microtime(true);
				
				$duration = $end_time - $start_time;
				echo "<p>The Insertion Sort algorithm took {$duration} seconds to sort " . NUM_STUDENTS . " student records.";
				
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
				Is a simple sorting algorithm that builds the final sorted array (or list) one item at a time. It is much less efficient on large lists than more 
				advanced algorithms such as quick sort, heapsort, or merge sort.<br>
				<a href="https://en.wikipedia.org/wiki/Insertion_sort" target="_blank">Learn more...</a>
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2>Time complexity</h2>
            <div class="clr"></div>
            <p>
				The best case input is an array which is already sorted. In this case insertion sort has a linear running time (i.e., O(n)). During each iteration, 
				the first remaining element of the input is only compared with the right-most element of the sorted subsection of the array.
			</p>
			<p>
				The simplest worst case input is an array sorted in reverse order. The set of all worst case inputs consists of all arrays where each element is the 
				smallest or second-smallest of the elements before it. In these cases every iteration of the inner loop will scan and shift the entire sorted subsection 
				of the array before inserting the next element. This gives insertion sort a quadratic running time (i.e., O(n<sup>2</sup>)).
			</p>
			<p>
				The average case is also quadratic, which makes insertion sort impractical for sorting large arrays. However, insertion sort is one of the fastest algorithms 
				for sorting very small arrays, even faster than quick sort.
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2><span>Try Insertion Sort</span></h2>
            <div class="clr"></div>
			<?php echo "<p>Sort sample records for " . NUM_STUDENTS . " students.</p>"; ?>
			<form action="insertion-sort.php" method="post" class="data-entry">
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
				<li class="active"><a href="insertion-sort.php">Insertion sort</a></li>
				<li><a href="merge-sort.php">Merge sort</a></li>
				<li><a href="quick-sort.php">Quick sort</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once("include/footer.php"); ?>