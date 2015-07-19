<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/18/15
 * Time: 7:14 PM
 */
?>

<div class="mdl-shadow--2dp mdl-cell mdl-grid mdl-cell--12-col">
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
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
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $item; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

