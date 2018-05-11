<h3>Tabulka študentov</h3>
<form action="<?php echo base_url('Home/add_user2') ?>" method="post" class="form-horizontal">
    <div class="form-group">

        <div class="col-md-10">
            <input type="text" name="txt_title" class="form-control" value="vložiť meno študenta">
            <input type="text" name="txt_title" class="form-control" value="vložiť názov školy">
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
        <td>Meno</td>
        <td>škola</td>
        <td>Funkcia</td>

    </tr>
    </thead>
    <tbody>
    <?php
    if($data3) {
        foreach ($data3 as $udaj3) {
            ?>
            <tr>
                <td><?php echo $udaj3->idstudent; ?></td>
                <td><?php echo $udaj3->meno; ?></td>
                <td><?php echo $udaj3->skola; ?></td>
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