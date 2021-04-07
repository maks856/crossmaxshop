<p class="text" id="h">Дитячі</p>
<div class="templates units" id="kids">

    <?php
    foreach ($goods as $good): ?>
        <?php if ($good['person'] == 'kid'): ?>
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
