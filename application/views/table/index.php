<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/18/15
 * Time: 7:14 PM
 */
?>

<div class="row">
    <div class="col-lg-12">
        <h2>Basic Table</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <?php foreach ($fields as $field):?>
                    <th><?php echo $field; ?></th>
                    <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($records as $record):?>
                <tr>
                    <?php foreach ($record as $item):?>
                    <td><?php echo $item; ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>