<?php
define('TITLE', 'Blog Posts');
define('PAGE', 'blog');
require_once('include/header.php');
?>
          <div class="article">
            <h2><span>Discussion </span> Forum </h2>
            <div class="clr"></div>
            <p>Posted by <a href="#">Nansubuga Joyce</a> </p>
            <p>
				Hello there, I have a challenge with Binary Search could someone help me to define it for me in a simpler way and please comment about the complexity of a binary search algorith...thanks
			</p>
            <p>Tagged: <a href="#">Sewante</a>, <a href="#">Emrea</a>, <a href="#">Colodoba</a>, <a href="#">Distance</a></p>
            <p><a href="#"><strong>Comments (3)</strong></a> <span>&nbsp;&bull;&nbsp;</span> Oct 04, 2016 <span>&nbsp;&bull;&nbsp;</span> <a href="#"><strong>Edit</strong></a></p>
          </div>
          <div class="article">
            <h2><span>2</span> Responses</h2>
            <div class="clr"></div>
            <div class="comment"> <a href="#"><img src="images/nabengo.jpg" width="40" height="40" alt="" class="userpic" /></a>
              <p><a href="#">Mariam</a> Says:<br />
                Oct 04th, 2016 at 2:17 pm</p>
              <p>Binary search is a search algorithm that finds the position of a target value within a sorted array<br>It is also known as half-interval search or logarithmic search
			  It compares the target value to the middle element of the array or list, i.e. if they are not equal the half in which the target cannot lie is eliminated and the search continues on the remaining half until it is successful.</p>
            </div>
            <div class="comment"> <a href="#"><img src="images/sewante.jpg" width="40" height="40" alt="" class="userpic" /></a>
              <p><a href="#">Sewante</a> Says:<br />
                Oct 05th, 2016 at 3:21 pm</p>
              <p>
				Binary search runs in at worst logarithmic time, making O ( log ⁡ n )  comparisons, where n  is the number of elements in the array and log  is the binary logarithm; and using only constant 
				( O ( 1 ) )  space. Although specialized data structures designed for fast searching—such as hash tables—can be searched
				more efficiently, binary search applies to a wider range of search problems.
			  .</p>
            </div>

          </div>
          <div class="article">
            <h2><span>Leave a</span> Reply</h2>
            <div class="clr"></div>
            <form action="#" method="post" id="leavereply">
              <ol>
                <li>
                  <label for="name">Name (required)</label>
                  <input id="name" name="name" class="text" />
                </li>
                <li>
                  <label for="email">Email Address (required)</label>
                  <input id="email" name="email" class="text" />
                </li>
                <li>
                  <label for="message">Your Message</label>
                  <textarea id="message" name="message" rows="8" cols="50"></textarea>
                </li>
                <li>
                  <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                  <div class="clr"></div>
                </li>
              </ol>
            </form>
          </div>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Course</span> outline</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
			  <li><a href="index.php">Introduction</a></li>
              <li><a href="complexity.html">Complexity analysis</a></li>
             <li><a href="recursion.php">Recursive data structures</a></li>
              <li><a href="#">Elementary Data Structures</a></li>
              <li><a href="sorting.php">Sorting Algorithms</a></li>
              <li><a href="searching.php">Searching Algorithms</a></li>
              <li><a href="#">Trees and Tree algorithms</a></li>
			  <li><a href="#">Graph and Graph Algorithms</a></li>
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