<?php
define('TITLE', 'Linear Search');
require_once('include/header.php');
?>
          <div class="article">
            <h2><span>Linear search</span></h2>
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
					$position = linear_search($key, $student_receipts[$j]);
					
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
					echo "<p>Linear Search Algorithm took {$duration} seconds to search for the receipt number '<em>{$key}</em>' in the array of " . NUM_STUDENTS . " students.</p>";
				}
				
				echo "</div>";
			}
			else {
			?>
			<p>
				 
				<!--a href="https://en.wikipedia.org/wiki/Linear_search" target="_blank">Learn more...</a-->
			</p>
            <div class="clr"></div>
          </div>
		  <div class="article">
            <h2><span>Try Linear Search</span></h2>
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
			<form action="linear-search.php" method="post" class="data-entry">
				<ol>
					<li>
						<label for="key">Enter a receipt number</label>
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
				<li class="active"><a href="linear-search.php">Linear search</a></li>
				<li><a href="binary-search.php">Binary search</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once('include/footer.php'); ?>