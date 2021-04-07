<?php
    $posts = [
        [
            'id' => 1,
            'img' => './src/posts/first.jpg',
            'header' => 'Наш магазин має найкращий вибір різних високоякісних 
кросівок',
            'text' => 'Наш магазин має найбільший вибір різних високоякісних 
кросівок. Ви можете придбати їх за справедливою ціною та отримати спеціальну 
знижку, що означає, що наш магазин економить ваші гроші. Ми знаємо, що наша 
продукція має такі переваги, як преміум якість та оригінальний дизайн.'
        ],
        [
            'id' => 2,
            'img' => './src/posts/second.jpg',
            'header' => 'Це справді продукт нового покоління',
            'text' => 'І наша продукція - це ідеальне поєднання привабливого дизайну 
та справжнього хорошого вмісту. Це справді продукт нового покоління. Ми обіцяємо, 
що з нашими товарами ви завжди будете модними та стильними.
 
Для тих, хто не піклується про моду, ми можемо запропонувати кілька цікавих 
варіантів дизайну.'
        ],
        [
            'id' => 3,
            'img' => './src/posts/third.jpg',
            'header' => 'Ми ніколи не зупиняємося, досягаючи своїх цілей',
            'text' => 'Ми працюємо з найкращими брендами, а найкращі бренди 
працюють для найкращих клієнтів. Ми хотіли б почути ваш відгук про наш 
продукт та обслуговування клієнтів. З кожним запитом ми стаємо кращими 
для вас, і з кожним позитивним відгуком ми усвідомлюємо, що нам це вдається.

До зустрічі в кросівках!'
        ],
    ];?>

<div id="blog">
    <?php
    foreach ($posts as $post): ?>
        <div id="blogContent">
            <img id="postImg" alt="postImage" src="<?php echo $post['img'];?>"/>
            <div class="text" id="postContent">
                <p id="postName"><?php echo $post['header'];?></p>
                <p id="postText"><?php echo $post['text'];?></p>
            </div>
        </div>
        <hr id="blogLine">
    <?php endforeach; ?>
</div>
<div id="addComment">
    <p id="commentHeader" class="text">Залишити коментар</p>
    <div id="usersData">
        <div>
            <p class="text">Ім'я</p>
            <form>
                <label><input class="input text" type="text" name="nameInput"></label>
            </form>
        </div>
        <div>
            <p class="text">e-mail</p>
            <form>
                <label><input class="input text" type="text" name="e-mailInput"></label>
            </form>
        </div>
    </div>
    <div id="usersComment">
        <p class="text">Коментар</p>
        <form>
            <label><input class="input text" type="text" name="commentInput"></label>
        </form>
    </div>
</div>
