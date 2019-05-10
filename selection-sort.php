<?php
define('TITLE', 'Selection Sort');
require_once("include/header.php");
require_once("include/config.php");
?>
		<div class="article">
            <h2><span>Selection sort</span></h2>
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
					selection_sort($student_receipts[$i]);
				}
				$end_time = microtime(true);
				
				$duration = $end_time - $start_time;
				echo "<p>The Selection Sort algorithm took {$duration} seconds to sort " . NUM_STUDENTS . " student records.";
				
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
				Is a sorting algorithm, specifically an in-place comparison sort. It has O(n<sup>2</sup>) time complexity making it inefficient on large lists, 
				and generally performs worse than similar insertion sort. Selection sort is noted for it's simplicity, and it has performance advantages over more 
				complicated algorithms in certain situations, particularly where auxillary memory is limited.<br>
				<a href="https://en.wikipedia.org/wiki/Bubble_sort" target="_blank">Learn more...</a>
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2>Time complexity</h2>
            <div class="clr"></div>
            <p>
				Selection sort has worse-case, average-case, and best-case performances all at O(n<sup>2</sup>). Selecting the lowest element requires scanning 
				the remaining n - 1 elements and so on, for (n - 1) + (n - 2) + ... + 2 + 1 comparisons. Each of these scans requires one swap for n - 1 elements 
				(the final element is already in place).
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2><span>Try Selection Sort</span></h2>
            <div class="clr"></div>
			<?php echo "<p>Sort sample records for " . NUM_STUDENTS . " students.</p>"; ?>
			<form action="selection-sort.php" method="post" class="data-entry">
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
				<li class="active"><a href="selection-sort.php">Selection sort</a></li>
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