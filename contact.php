<?php
define('TITLE', 'Contact Us');
define('PAGE', 'contact');
require_once('include/header.php');
?>
          <!--div class="article">
            <h2><span>Contact</span></h2>
            <div class="clr"></div>
            <p>You can find more of my free template designs at my website. For premium commercial designs, you can check out DreamTemplate.com.</p>
          </div-->
          <div class="article">
            <h2><span>Send us</span> mail</h2>
            <div class="clr"></div>
            <form action="#" method="post" id="sendemail">
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