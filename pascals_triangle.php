<?php
define('TITLE', "Pascal's Triangle");
require_once('include/header.php');
?>
          <div class="article">
            <h2><span>Pascal's Triangle</span></h2>
            <div class="clr"></div>
            <p>
		Pascal's Triangle computes the binomial coefficients in the binomial expansions..
                as shown below. try to input the degree of the polynomial and the output will yield the binomial
                coefficients.
            </p>
            <p>
                This equation is the equation for a binomial coefficient. You can build
                Pascal’s triangle by adding the two numbers that are diagonally above a
                number in the triangle. Write a program that prints out Pascal’s triangle
                in O(n<sup>2</sup>)
            </p>
            <div class="clr"></div>
          </div>
          <div class="article">
            <h2><span>Try it out</span></h2>
            <div class="clr"></div>
            <!--content goes here-->
            <form action="" method="post" id="try">
              <ol>
                <li>
                  <label for="degree">Degree of polynomial</label>
                  <input id="degree" name="degree" class="text" />
                </li>
                <li>
                  <input type="image" name="submit" id="imageField" src="images/submit.gif" class="send" value='submit'/>
                  <div class="clr"></div>
                </li>
              </ol>
            </form>
            <div class="clr"></div>
          </div>
		  <?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				require_once('include/utilities.php');
			   $value = $_POST['degree'];
			?>
		  <div class="article">
            <h2><span>Results</span></h2>
            <div class="clr"></div>
                <ul> 
                    <li>
                        <?php
                            //start timer
                           $start_time = microtime(true);
                           echo pascals_triangle($value);
                           
                            //end timer
                            $end_time = microtime(true);
                            $execution_time = ($end_time-$start_time);
                        ?>
                    </li>
                    <li>
                        <?php
                           echo $execution_time." seconds";
                        ?>
                    </li>
                </ul>
            <div class="clr"></div>
          </div>
			<?php } ?>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Recursive</span> algorithms</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li class="active"><a href="pascals_triangle.php">Pascal's Triangle</a></li>
              <li><a href="sum_integers.php">Sum of integers</a></li>
            </ul>
          </div>
		  <div class="gadget">
            <h2 class="star"><span>Group members</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
				<li><a>Nakaali Phionah</a></li>
				<li><a>Nabengo Mariam</a></li>
				<li><a>Nansubuga Joyce Euzebia</a></li>
				<li><a>Nabikolo Shiba</a></li>
				<li><a>Muyambi Julius</a></li>
				<li><a>Robert Odoch</a></li>
				<li><a>Robert Mwesigye</a></li>
				<li><a>Bwayo Jude</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once('include/footer.php'); ?>