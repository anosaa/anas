<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <h1 class="text-center my-3">our productes</h1>
    <section class="py-5 container">
        <div class="row">
            <?php for ($p = 1; $p <= 12; $p++) { ?>
                <div class="col-md-3 col-sm-6 mb-2">
                    <img src="images/product-<?= $p ?>.jpg" class="card-img">
                    <h3>product title</h3>

                </div>

            <?php } ?>

            <section class="py-5 container">
                <?php
                $employes = [
                    "sara" => ["job" => "front-end", "salary" => 10000, "branch" => "mansoura"],
                    "samar" => ["job" => "back-end", "salary" => 8000, "branch" => "mansoura"],
                ];
                ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Salary</th>
                        <th>branch</th>
                    </tr>

                    <?php
                    foreach ($employes as $e=> $emp) {?>
                     
                        <tr>
                            <td><?=$e?></td>
                        <?php foreach($emp as $k =>$v){ ?>
                              <td><?=$v?></td>
                           <?php }?>
                         </tr>
                  <?php  } ?>

                </table>


            </section>
            <?php
            $salries = [2000, 2000, 3000, 4000];
            $sum = 0;
            foreach ($salries as $s) {
                $sum = $sum + $s;
            }
            echo "total : $sum"
            ?>


        </div>
    </section>

</body>

</html>