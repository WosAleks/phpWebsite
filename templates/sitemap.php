<?php
require_once __DIR__.'/../templates/_header.php';
?>


<body>
    <div id="sitemap">
    <p><small><em>Site Map</em></small></p>
    <ul>
        <li><a href="index.php">Home Page</a> </li>
        <li><a href="index.php?action=about">About Us</a> </li>
        <li><a href="index.php?action=shop"> Shop </a> </li>
        <li><a href="index.php?action=contact">Contact Us</a> </li>
        <li><a href="index.php?action=sitemap">Site Map</a> </li>

    </ul>
    </div>
</body>

<?php
require_once __DIR__ . '/../templates/_footer.php';
?>