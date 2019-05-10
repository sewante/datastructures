<?php
define('TITLE', 'Bubble Sort');
require_once("include/header.php");
require_once("include/config.php");
?>
		<div class="article">
            <h2><span>Bubble sort</span></h2>
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
					bubble_sort($student_receipts[$i]);
				}
				$end_time = microtime(true);
				
				$duration = $end_time - $start_time;
				echo "<p>The Bubble Sort algorithm took {$duration} seconds to sort " . NUM_STUDENTS . " student records.";
				
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
				Sometimes referred to as <strong>sinking sort</strong>, is a simple sorting algorithm that repeatedly steps through the list to be sorted,
				compares each pair of adjascent items and swaps them if they are in the wrong order. The pass through the list is repeated until no swaps are 
				needed, which indicates that the list is sorted.<br>
				<a href="https://en.wikipedia.org/wiki/Bubble_sort" target="_blank">Learn more...</a>
			</p>
            <div class="clr"></div>
		</div>
		  <div class="article">
            <h2>Time complexity</h2>
            <div class="clr"></div>
            <p>
				Bubble sort has worst-case and average complexity both О(n<sup>2</sup>), where n is the number of items being sorted.
			</p>
			<p>
				The ability to detect that the list is sorted efficiently is built into the algorithm. When the list is already sorted (best-case), the complexity of 
				bubble sort is only O(n)
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2><span>Try Bubble Sort</span></h2>
            <div class="clr"></div>
			<?php echo "<p>Sort sample records for " . NUM_STUDENTS . " students.</p>"; ?>
			<form action="bubble-sort.php" method="post" class="data-entry">
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
				<li class="active"><a href="bubble-sort.php">Bubble sort</a></li>
				<li><a href="selection-sort.php">Selection sort</a></li>
				<li><a href="insertion-sort.php">Insertion sort</a></li>
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