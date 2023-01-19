


<?php
    $daugiklis=2;
    if ( isset($_GET['daugiklis'])){
        $daugiklis=$_GET['daugiklis'];
    }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        Daugybos lentelė
                    </div>
                    <div class="card-body">
                        <?php for ($i=1; $i<=10; $i++){ ?>
                            <a class="btn btn-success <?=($i==$daugiklis)?"active":""?>" href="index.php?daugiklis=<?=$i?>"><?=$i?></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                       <?=$daugiklis?>  daugybos lentelė
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <tbody>
                            <?php for ($i=1; $i<=10; $i++){ ?>
                                <tr>
                                    <td><?=$daugiklis?></td>
                                    <td>*</td>
                                    <td><?=$i?></td>
                                    <td>=</td>
                                    <td><?=($i*$daugiklis)?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>





