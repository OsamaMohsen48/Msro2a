<!-- Nav Start -->
<nav class="inFrame">
    <div class="navLeft">
        <i class="humIcon navIcon fas fa-bars"></i>
        <a href="index.php" class="title">Msro2a</a>
    </div>
    <div class="navRight">
        <form method="GET" class="searchForm flexRow" action="search.php">
            <input type="text" class="searchBar" placeholder="Search Posts" name="searchText" value="<?php if(isset($_SESSION["searchText"])) echo $_SESSION["searchText"] ?>"/>
            <button class="searchIcon"><i class="fas fa-search"></i></button>
        </form>
        <?php if($controller -> isLoggedIn()): ?>
            <label class="welcome">Hi <?= $controller -> getCurrentUser() -> getName() ?>!</label>
        <?php else: ?>
            <button class="signIn_Up_Button"><a href="signIn.php">Sign In</a></button>
            <button class="signIn_Up_Button"><a href="signUp.php">Sign Up</a></button>
        <?php endif; ?>
    </div>
</nav>
<div class="searchForPhones">
    <form method="GET" class="searchForm inFrame" action="search.php">
        <input type="text" class="searchBar" placeholder="Search Posts" name="searchText"/>
        <button class="searchIcon"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- Nav End -->