<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $splitArray = [];
    $loremText = 'Non velit quae . ut tenetur rerum . non dolor . inventore qui saepe recusandae non neque quas. Qui dolorum quia vel galisum mollitia non perferendis . iusto eum cupiditate vero non architecto omnis et praesentium voluptatem ea repellendus ratione.';
    $splitArray = explode(".",$loremText);
    var_dump($splitArray)
    ?>
</body>
</html>