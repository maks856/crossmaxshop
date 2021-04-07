
<div id="top">

    <img id="logo" alt="Logo" src="./src/logo.png">

    <form id="search" method="get" action="./index.php?page=search">
        <button class="search" type="submit" onclick="window.location.href='./index.php?page=search&search=<?php echo $_GET['search']?>'"
                id="si"><img alt="searchIcon" src="./src/search.svg"></button>
        <label><input class="search text" type="text" placeholder="Пошук товару..."
                      name="search"></label>
    </form>

    <p class="text" id="phoneNumber">+38(099)-056-82-23</p>

    <div id="icons">
        <button class="icon"><img alt="trolleyIcon" src="./src/trolley.svg"></button>
        <button class="icon" onclick="window.location.href='./pages/authorisation.php'">
            <img alt="trolleyIcon" src="./src/user.svg"></button>
    </div>

</div>

<div>
    <div id="nav">
        <a class="text links" href="./index.php">ГОЛОВНА</a>
        <a class="text links" href="./index.php?page=man`s">ЧОЛОВІЧІ</a>
        <a class="text links" href="./index.php?page=woman`s">ЖІНОЧІ</a>
        <a class="text links" href="./index.php?page=kid`s">ДИТЯЧІ</a>
        <a class="text links" href="./index.php?page=blog">БЛОГ</a>
        <a class="text links" href="#footerContent">КОНТАКТИ</a>
    </div>
</div>