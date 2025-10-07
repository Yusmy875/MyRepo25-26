<?php
function renderNav($activePage = '') {
   echo '
<header>
<div class="logo">
<a href="index.php">MyShop</a>
</div>
<nav>
<ul>
<li><a href="index.php" ' . ($activePage == "home" ? 'class="active"' : '') . '>Home</a></li>
<li><a href="about.php" ' . ($activePage == "about" ? 'class="active"' : '') . '>About</a></li>
<li><a href="contact.php" ' . ($activePage == "contact" ? 'class="active"' : '') . '>Contact</a></li>
</ul>
</nav>
</header>
   ';
}
?>
