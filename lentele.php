<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table {
            border: 1px solid #000;
        }
        .table tr td{
            width: 30px;
            height: 30px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #000;
        }

        td.header{
            background-color: aquamarine;
        }

        td.hover{
            background-color: red;
        }
    </style>
</head>
<body>
<table class="table">
    <?php for ($i=1; $i<10; $i++){ ?>
    <tr>
        <?php for ($j=1; $j<10; $j++){ ?>
        <td class="x<?=($i==1 || $j==1  )?'header':''?> ">
            <?=(rand(0, 100) <90 )? $j*$i :""?>

        </td>
        <?php } ?>
    </tr>
   <?php } ?>

</table>
</body>
</html>