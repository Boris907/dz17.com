<h1>Наша работа</h1>
<div>
    <?php foreach ($articles as $article):?>
        <ul>
            <li><?php echo $article['id']?></li>
            <li><?php echo $article['title']?></li>
            <li><?php echo $article['text']?></li>
        </ul>
        <br>
    <?php endforeach;?>
</div>