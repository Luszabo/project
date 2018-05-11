<h3>Tabuľka Záznamov</h3>
<form action="<?php echo base_url('Home/add_user4') ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-md-2"></label>
        <div class="col-md-10">
            <input type="text" name="txt_title" class="form-control" value="vložiť dátum záznamu">
            <input type="text" name="txt_title" class="form-control" value="vložiť krátky záznam práce študenta">
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
        <td>ID študenta</td>
        <td>Deň</td>
        <td>Záznam</td>
        <td>ID inštruktora</td>
        <td>ID typu práce</td>
        <td>Funkcia</td>


    </tr>
    </thead>
    <tbody>
    <?php
    if($data5) {
        foreach ($data5 as $udaj5) {
            ?>
            <tr>
                <td><?php echo $udaj5->id; ?></td>
                <td><?php echo $udaj5->student_idstudent; ?></td>
                <td><?php echo $udaj5->den; ?></td>
                <td><?php echo $udaj5->zaznam; ?></td>
                <td><?php echo $udaj5->instruktor_idinstruktor; ?></td>
                <td><?php echo $udaj5->typ_prace_idtyp_prace; ?></td>
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