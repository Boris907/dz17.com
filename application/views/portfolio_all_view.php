<h2>Наша работа</h2>
<div>
    <?php foreach ($works as $work):?>
        <ul>
            <li><?php echo $work['url']?></li>
            <li><?php echo $work['year']?></li>
            <li><?php echo $work['description']?></li>
            <li><a href="/portfolio/work/<?=$work['id']?>">Подробнее</a></li>
        </ul>
        <br>
    <?php endforeach;?>
</div>