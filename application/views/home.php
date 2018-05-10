<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--
<div class="container">


        <div class="jumbotron">
            <h2>Evidencia študenskej praxe</h2>
    </div>

</div><!-- /.container -->

<div class="container">

    <h2>Text</h2>
    <a href="<?php echo base_url('views/add'); ?>" class="btn btn-primary">pridať</a>
    <p></p>
    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <td>ID</td>
            <td>Firma</td>

        </tr>
        </thead>
        <tbody>
        <?php
             if($data){
                 foreach ($data as $udaj)
            ?>
            <tr>
                <td><?php echo $udaj->idfirma; ?></td>
                <td><?php echo $udaj->nazov; ?></td>

            </tr>
            <?php
        }
        ?>
        </tbody>