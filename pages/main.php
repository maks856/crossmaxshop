<div id="bigImg" style="background: #07393c">
    <img id="big" alt="image with sales" src="./src/bigImage.png">
    <button class="text sale" onclick="window.location.href='index.php?page=sale'">ЗАМОВИТИ</button>
</div>

<div id="info">
    <div class="info">
        <button class="linkInfo" ><img alt="ShippedIcon" src="./src/package.svg"></button>
        <a class="text">Доставка</a>
    </div>
    <div class="info">
        <button class="linkInfo"><img alt="ServiceIcon" src="./src/service.svg"></button>
        <a class="text">Підтримка</a>
    </div>
    <div class="info">
        <button class="linkInfo"><img alt="PaymentIcon" src="./src/wallet.svg"></button>
        <a class="text">Оплата</a>
    </div>
</div>

<p class="text" id="popular">Популярні товари</p>
<div class="templates" id="pop">
    <?php
    foreach ($goods as $good): ?>
        <?php if ($good['popular'] == '+'): ?>
            <a class="shopUnit" href="index.php?page=product&id=<?php echo $good['id'];?>">
                <img alt="unitImage" src="<?php echo $good['img'];?>"/>

                <div class="text shopUnitName">
                    <?php echo $good['name'];?>
                </div>

                <div class="text shopUnitPrice">
                    <?php echo $good['price'];?>
                </div>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
