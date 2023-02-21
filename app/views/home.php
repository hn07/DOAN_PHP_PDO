<h1>This is home page</h1>
<h2>
    <?php
    foreach ($data['category'] as $key => $value) {
        echo $value['catName']."<br/>";
    }
    ?>
</h2>