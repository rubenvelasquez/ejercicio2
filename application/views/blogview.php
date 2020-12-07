<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $heading ;?></h1>
    <p><?php echo $parafo ;?></p>
    <ul>
        <?php foreach ($todo_list as $item):?>
        <li><?php echo$item;?></li>
        <?php endforeach;?>
    </ul>
    <h4>lista de numero</h4>
    <ul>
    <?php foreach ($numero as $item):?>
        <li><?php echo $item;?></li>
    <?php endforeach;?>
    </ul>
</body>
</html>