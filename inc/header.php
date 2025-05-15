<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="header">
        <img src="/assets/images/logo/monz-creative-school.png" width="10rem" height="auto" alt="Logo">
        <nav>
            <ul>
                <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="course.php" class="<?= $currentPage == 'course.php' ? 'active' : '' ?>">Courses</a></li>
                <li><a href="services.php" class="<?= $currentPage == 'services.php' ? 'active' : '' ?>">Placement</a></li>
                <li><a href="placement.php" class="<?= $currentPage == 'placement.php' ? 'active' : '' ?>">Our Students Work</a></li>
                <li><a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About</a></li>
                <li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Courses</a></li>
            </ul>
        </nav>
    </div>
</header>