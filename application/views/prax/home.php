

<div class="container">

    <h3>Text</h3>
    <p></p>

    <h3>Zoznam firiem</h3>
    <form action="<?php echo base_url('Home/add_user1') ?>" method="post" class="form-horizontal">
        <div class="form-group">

            <div class="col-md-10">
               <input type="text" name="txt_title" class="form-control" value="vložiť meno firmy">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2"></label>
            <div class="col-md-10">
                <input type="submit" name="btnSave" class="btn btn-primary" value="Uložiť">
            </div>
        </div>

    </form>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <td>ID</td>
            <td>Firma</td>
            <td>Funkcia</td>

        </tr>
        </thead>
        <tbody>
        <?php
             if($data) {
                 foreach ($data as $udaj) {
                     ?>
                     <tr>
                         <td><?php echo $udaj->idfirma; ?></td>
                         <td><?php echo $udaj->nazov; ?></td>
                         <td>
                             <a class="btn btn-info btn-xs">Edit</a>

                             <a class="btn btn-warning btn-xs">Delete</a>
                         </td>

                     </tr>
                     <?php
                 }
             }
        ?>
        </tbody>
    </table>
</div>




