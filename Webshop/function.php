<?php
function renderNav($activePage = '', $menuItems = []) {
   // Default menu if none provided
   if (empty($menuItems)) {
      $menuItems = [
         'home' => ['label' => 'Home', 'href' => 'index.php'],
         'about' => ['label' => 'About', 'href' => 'about.php'],
         'contact' => ['label' => 'Contact', 'href' => 'contact.php'],
      ];
   }

   echo '
<header>
<div class="logo">
<a href="index.php">MyShop</a>
</div>
<nav>
<ul>';
   foreach ($menuItems as $key => $item) {
      $activeClass = ($activePage == $key) ? 'class="active"' : '';
      echo '<li><a href="' . htmlspecialchars($item['href']) . '" ' . $activeClass . '>' . htmlspecialchars($item['label']) . '</a></li>';
   }
   echo '
</ul>
</nav>
</header>
   ';
}
?>
