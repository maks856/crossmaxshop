<div class="templates units" id="search">
    <?php
    foreach ($goods as $good): ?>
        <?php if (strripos ( $good['name'] , $_GET['search'] , $offset = 0 ) != 'false'): ?>
            <a class="shopUnit" href="../index.php?page=product&id=<?php echo $good['id'];?>">
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
