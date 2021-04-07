<p class="text" id="h">Жіночі</p>

<div class="templates units" id="womans">
    <?php
    foreach ($goods as $good): ?>
        <?php if ($good['person'] == 'woman'): ?>
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