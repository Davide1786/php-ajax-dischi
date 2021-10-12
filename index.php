<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box-header"></div>
        <div class="box-main">
            <?php 
                require __DIR__ . '/data/database.php';

                foreach($db as $dischi) {
                    echo 
                    '<div class="album">'.
                        '<div class="cd">'.
                            "<img src='$dischi[poster]'>".
                        '</div>'.
                        '<div class="testi">'.
                            '<h3>'
                                .$dischi['author'].
                            '</h3>'.
                            '<h4>'
                                .$dischi['genre'].
                            '</h4>'.
                            '<h4>'
                                .$dischi['year'].
                            '</h4>'.
                        '</div>'.
                    '</div>';
                }
            ?>
        </div>
    
    </div>

   
    
</body>
</html>

