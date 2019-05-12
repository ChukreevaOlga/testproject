<?php require "../test/header.php";?>
<main class="main">
    <div class="container">
        <div class="title-1">
            Накорми котэ
        </div>
        <div class="catalog__items">
            <?php 
            $name = array('с потрохами','с рыбой','с курой в подливе');
            $count = array(0.5,2,5);
            $gift_count=array('10 порций','40 порций','100 порций');
            $gift=array('мышь в подарок','2 мыши в подарок','5 мышей в подарок заказчик доволен');
            $text=array('Чего сидишь? Порадуй пушистейшего, <a href="#" class="link"> купи.</a>','Головы щучьи с зеленью, да свежайшая сёмгушка.','Пичалька ( , с курой закончился.');
            for($i=0;$i<3;$i++){
            ?>
            <div class="catalog__item">
                <div class="catalog__container">
                    <div class="catalog__desc">
                    Заморское лакомство
                </div>
                <div class="catalog__title">
                    Вкусняха
                </div>
                <div class="catalog__name">
                    <?php echo $name[$i]?>
                </div>
                <div class="catalog__text">
                    <div>
                        <?php echo $gift_count[$i]?>
                    </div>
                    <div>
                        <?php echo $gift[$i]?>
                    </div>
                </div>
                <img class="catalog__img" src="../test/image/Clip.png" alt="Кошечка">
                <div class="catalog__count">
                    <div class="catalog__number">
                        <?php echo $count[$i]?>
                    </div>
                    <div>
                        кг
                    </div>
                </div>
                <div class="catalog__info">
                    <?php echo $text[$i]?>    
                </div>
                </div>
            </div>
            <?php }?>
        </div>        
    </div>

</main>
<?php require "../test/footer.php";?>

