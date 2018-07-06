<?php

if (isset($_POST["Import"])) {

    $filename = $_FILES["file"]["tmp_name"];


    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        $no = 1; ?>
        <form class="form-horizontal" action="action.php" method="post" name="display">
            <fieldset>

                <!-- Form Name -->
                <legend>Display Form</legend>
                <?php while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
                    if ($no < 10) {
                        $urut = "00" . $no;
                    } else if ($no < 100) {
                        $urut = "0" . $no;
                    } else {
                        $urut = "" . $no;
                    }
                    ?>
                    <!-- File Button -->
                    <div class="form-group">
                        <label class="control-label" for="filebutton">Data #<?= $urut ?></label>
                        <input type="text" name="nrp<?= $no ?>" value="<?= $getData[0] ?>">&nbsp;
                        <input type="text" name="name<?= $no ?>" value="<?= $getData[1] ?>">&nbsp;
                        <input type="radio" name="gender<?= $no ?>"
                               value="M" <?= ($getData[2] == "M" ? 'checked' : '') ?>> Male &nbsp;
                        <input type="radio" name="gender<?= $no ?>"
                               value="F" <?= ($getData[2] == "F" ? 'checked' : '') ?>> Female &nbsp;&nbsp;
                        <select name="major<?= $no ?>">
                            <option value="TI" <?= ($getData[3] == "TI" ? 'selected' : '') ?> >TI</option>
                            <option value="MI" <?= ($getData[3] == "MI" ? 'selected' : '') ?> >MI</option>
                            <option value="SI" <?= ($getData[3] == "SI" ? 'selected' : '') ?> >SI</option>
                            <option value="DKV" <?= ($getData[3] == "DKV" ? 'selected' : '') ?> >DKV</option>
                        </select>&nbsp;
                        <input type="text" name="address<?= $no ?>" value="<?= $getData[4] ?>">&nbsp;
                        <input type="text" name="phone<?= $no ?>" value="<?= $getData[5] ?>">
                    </div>
                    <?php
                    $no++;
                }

                fclose($file); ?>

                <div class="form-group">
                    &nbsp;
                    <input type="hidden" name="total" value="<?= $no ?>">
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                    <div class="col-md-4">
                        <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading"
                                data-loading-text="Loading...">Import
                        </button>
                    </div>
                </div>

            </fieldset>
        </form>
        <?php
    }
}


?>