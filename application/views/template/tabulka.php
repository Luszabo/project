<h3>Tabulka inštruktorov</h3>
<form action="<?php echo base_url('Home/add_user') ?>" method="post" class="form-horizontal">
    <div class="form-group">

        <div class="col-md-10">
            <input type="text" name="meno" class="form-control" value="vložiť meno inštruktora">
            <input type="text" name="profesia" class="form-control" value="vložiť názov profesie">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2"></label>
        <div class="col-md-10">
            <input type="submit" name="add" class="btn btn-primary" value="Uložiť">
        </div>
    </div>

</form>
<table class="table table-bordered ">
    <thead>
    <tr>
        <td>ID</td>
        <td>Meno</td>
        <td>Profesia</td>
        <td>ID firmy</td>
        <td>Funkcia</td>

    </tr>
    </thead>
    <tbody>
    <?php
    if($data2) {
        foreach ($data2 as $udaj2) {
            ?>
            <tr>
                <td><?php echo $udaj2->idinstruktor; ?></td>
                <td><?php echo $udaj2->meno; ?></td>
                <td><?php echo $udaj2->profesia; ?></td>
                <td><?php echo $udaj2->firma_idfirma; ?></td>
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