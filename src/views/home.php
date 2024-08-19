<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h3>Реезультат складання</h3>
<form action="<?= url('') ?>" method="POST">
    <div>
        <input type="number" name="number1" placeholder="number1">
        <?php showValidationError('number1')  ?>
    </div>
    <div>
        <input type="number" name="number2" placeholder="number2">
        <?php showValidationError('number2')  ?>
    </div>
    <div>
        <input type="submit" value="Порахувати">
    </div>
</form>
</body>
</html>