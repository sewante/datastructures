<?php
define('TITLE', 'Sum of integers');
require_once('include/header.php');
?>
          <div class="article">
            <h2><span>Sums</span></h2>
            <div class="clr"></div>
            <p>
                We can write a recursive program to calculate the sum of the positive integers of<br>
                n + (n − 2) + (n − 4)+......... + n − x.&nbsp;&nbsp; Until n − x =< 0. 
            </p>
            <p>
                we can define f(n) mathematically as<b>  f(n) =  n + (n − 2) + (n − 4)+.......+ n − x</b>,&nbsp;&nbsp; for example<br>f(6) = 12,
                    &nbsp;f(5) = 9, e.t.c .<br>This can be done recursively by defining our base case to be 0 i.e <b> f(n) = 0</b> if <i>n-x <=0</i>,
                and our recursive case to be<b> n + f(n−2)</b>  if <i>n > 0</i>. 
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
                  <label for="positiveint">Input the positive integer</label>
                  <input id="positiveint" name="positiveint" class="text" />
                </li>
                <li>
                  <input type="image" name="submit" id="imageField" src="images/submit.gif" class="send" value='submit'/>
                  <div class="clr"></div>
                </li>
              </ol>
            </form>
            <div class="clr"></div>
            <p>See the results below</p>
          </div>
		  <?php
		  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			  $value = $_POST['positiveint'];
    
			//define the recurvive function to compute the sum
			function sum_positive_integers($value){
				if($value<=0){
					return 0;
				}
				else {
					return $value + sum_positive_integers($value-2); 
				}
			}
		?>
		  <div class="article">
            <h2><span>Results</span></h2>
            <div class="clr"></div>
                <?php
                    echo "<p>The sum of integers is " . sum_positive_integers($value) . "</p>";
                ?>
            <div class="clr"></div>
          </div>
		  <?php } ?>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Recursive</span> algorithms</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="pascals_triangle.php">Pascal's Triangle</a></li>
              <li class="active"><a href="sum_integers.php">Sum of integers</a></li>
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