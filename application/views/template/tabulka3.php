<h3>Tabuľka typu práce</h3>
<form action="<?php echo base_url('prax/submit') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-2"></label>
        <div class="col-md-10">

            <input type="text" name="txt_title" class="form-control" value="vložiť názov vykonávanie práce">
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
        <td>Názov práce</td>
        <td>ID firmy</td>
        <td>Funkcia</td>

    </tr>
    </thead>
    <tbody>
    <?php
    if($data4) {
        foreach ($data4 as $udaj4) {
            ?>
            <tr>
                <td><?php echo $udaj4->idtyp_prace; ?></td>
                <td><?php echo $udaj4->meno; ?></td>
                <td><?php echo $udaj4->firma_idfirma; ?></td>
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