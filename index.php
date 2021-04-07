<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Онлайн магазин</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="./src/favicon.ico" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="scripts/scrollUp.js"></script>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
</head>

<body>

    <header>
        <?php
        if (!isset($_GET['const'])){
            $const = $_GET['const'] ??"";
            require('pages/header.php');}
        ?>
    </header>

    <div id="content">
        <?php
        $goods = [
            [
                'id' => 1,
                'person' => 'man',
                'sale' => '+',
                'popular' => '+',
                'name' => 'Adidas Gazelle',
                'desc' => 'Опис Adidas Gazelle',
                'img' => './src/goods/adidas1.png',
                'price' => '1 990,00 грн'
            ],
            [
                'id' => 2,
                'person' => 'man',
                'sale' => '',
                'popular' => '+',
                'name' => 'Nike MX-720',
                'desc' => 'Опис Nike MX-720',
                'img' => './src/goods/nike1.png',
                'price' => '4 999,00 грн'
            ],
            [
                'id' => 3,
                'person' => 'man',
                'sale' => '+',
                'popular' => '',
                'name' => 'Under Armour Reign 2',
                'desc' => 'Опис Under Armour Reign 2',
                'img' => './src/goods/underarmour1.png',
                'price' => '3 890,00 грн'
            ],
            [
                'id' => 4,
                'person' => 'man',
                'sale' => '',
                'popular' => '+',
                'name' => 'Puma Suede Classic',
                'desc' => 'Опис Puma Suede Classic',
                'img' => './src/goods/puma1.png',
                'price' => '2 990,00 грн'
            ],
            [
                'id' => 5,
                'person' => 'man',
                'sale' => '',
                'popular' => '+',
                'name' => 'Nike Air Max 270',
                'desc' => 'Опис Nike Air Max 270',
                'img' => './src/goods/airmax270.png',
                'price' => '3 109,00 грн'
            ],
            [
                'id' => 6,
                'person' => 'man',
                'sale' => '',
                'popular' => '',
                'name' => 'New Balance Shando',
                'desc' => 'Опис Nike MX-720',
                'img' => './src/goods/newbalanceshando.png',
                'price' => '2 620,00 грн'
            ],
            [
                'id' => 7,
                'person' => 'man',
                'sale' => '+',
                'popular' => '+',
                'name' => 'Adidas Yeezy',
                'desc' => 'Опис Adidas Yeezy',
                'img' => './src/goods/adidasyeezy.jpg',
                'price' => '3 390,00 грн'
            ],
            [
                'id' => 8,
                'person' => 'man',
                'sale' => '',
                'popular' => '',
                'name' => 'Reebok CL',
                'desc' => 'Опис Reebok CL',
                'img' => './src/goods/reebok1.png',
                'price' => '4 999,00 грн'
            ],
            [
                'id' => 9,
                'person' => 'woman',
                'sale' => '+',
                'popular' => '',
                'name' => 'Kappa Neoclassic',
                'desc' => 'Опис Kappa Neoclassic',
                'img' => './src/goods/kappaneo.png',
                'price' => '1 999,00 грн'
            ],
            [
                'id' => 10,
                'person' => 'woman',
                'sale' => '',
                'popular' => '+',
                'name' => 'Nike Zoom',
                'desc' => 'Опис Nike Zoom',
                'img' => './src/goods/nike-zoom.png',
                'price' => '1 849,00 грн'
            ],
            [
                'id' => 11,
                'person' => 'woman',
                'sale' => '',
                'popular' => '',
                'name' => 'Nike Air Heights',
                'desc' => 'Опис Nike Air Heights',
                'img' => './src/goods/nikeairheights.png',
                'price' => '2 209,00 грн'
            ],
            [
                'id' => 12,
                'person' => 'woman',
                'sale' => '+',
                'popular' => '',
                'name' => 'Adidas Samba',
                'desc' => 'Опис Adidas Samba',
                'img' => './src/goods/adidassamba.png',
                'price' => '1 790,00 грн'
            ],
            [
                'id' => 13,
                'person' => 'woman',
                'sale' => '+',
                'popular' => '',
                'name' => 'Adidas Ozweego',
                'desc' => 'Опис Adidas Ozweego',
                'img' => './src/goods/adidasozweego.png',
                'price' => '2 500,00 грн'
            ],
            [
                'id' => 14,
                'person' => 'woman',
                'sale' => '',
                'popular' => '+',
                'name' => 'Reebok',
                'desc' => 'Опис Reebok',
                'img' => './src/goods/reebok2.png',
                'price' => '1 890,00 грн'
            ],
            [
                'id' => 15,
                'person' => 'woman',
                'sale' => '',
                'popular' => '',
                'name' => 'Reebok',
                'desc' => 'Опис Reebok',
                'img' => './src/goods/reebok3.png',
                'price' => '2 190,00 грн'
            ],
            [
                'id' => 16,
                'person' => 'woman',
                'sale' => '',
                'popular' => '+',
                'name' => 'Under Armour Bandit',
                'desc' => 'Опис Under Armour Bandit',
                'img' => './src/goods/uabandit.png',
                'price' => '2 690,00 грн'
            ],
            [
                'id' => 17,
                'person' => 'kid',
                'sale' => '+',
                'popular' => '',
                'name' => 'Adidas Original Haven',
                'desc' => 'Опис Adidas Original Haven',
                'img' => './src/goods/adidasoriginalhaven.png',
                'price' => '1 520,00 грн'
            ],
            [
                'id' => 18,
                'person' => 'kid',
                'sale' => '+',
                'popular' => '',
                'name' => 'Adidas Original Swift',
                'desc' => 'Опис Adidas Original Swift Run',
                'img' => './src/goods/adidasoriginalswiftrun.png',
                'price' => '1 670,00 грн'
            ],
            [
                'id' => 19,
                'person' => 'kid',
                'sale' => '',
                'popular' => '',
                'name' => 'Nike Light',
                'desc' => 'Опис Nike Light',
                'img' => './src/goods/nikekid.png',
                'price' => '1 330,00 грн'
            ],
            [
                'id' => 20,
                'person' => 'kid',
                'sale' => '',
                'popular' => '',
                'name' => 'Puma',
                'desc' => 'Опис Puma',
                'img' => './src/goods/puma3.png',
                'price' => '1 880,00 грн'
            ],
        ];

        $page = $_GET['page'];
        if (!isset($page)) {
            require('pages/main.php');
        } elseif ($page == 'man`s') {
            require('pages/man`s.php');
        } elseif ($page == 'woman`s') {
            require('pages/woman`s.php');
        } elseif ($page == 'kid`s') {
            require('pages/kid`s.php');
        } elseif ($page == 'blog') {
            require('pages/blog.php');
        } elseif ($page == 'sale') {
            require('pages/sale.php');
        } elseif ($page == 'search') {
            require('pages/search.php');
        } elseif ($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require('pages/product.php');
        }?>
    </div>

    <a href="#" class="scrollup"><img alt="" src="src/top_icon.svg"></a>

    <footer>
        <?php
        if (!isset($_GET['const'])){
            $const = $_GET['const'] ??"";
            require('pages/footer.php');}
        ?>
    </footer>

</body>

</html>