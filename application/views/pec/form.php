<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/20/15
 * Time: 11:41 AM
 */
?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
    <form action="<?php echo base_url("index.php/pec/submitForm");?>" method="post" class="mdl-grid">
        <div class="mdl-card__supporting-text">
            <!-- fields -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="pecno"/>
                <label class="mdl-textfield__label">PEC Number</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="caseno"/>
                <label class="mdl-textfield__label">Case Number</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="date_pec"/>
                <label class="mdl-textfield__label">PEC Date</label>
            </div>
        </div>

        <div class="mdl-card__supporting-text">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="name"/>
                <label class="mdl-textfield__label">Name</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="fee"/>
                <label class="mdl-textfield__label">Fees Rs</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="rno"/>
                <label class="mdl-textfield__label">Receipt Number</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="date_payment"/>
                <label class="mdl-textfield__label">Date of Payment</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="faculty"/>
                <label class="mdl-textfield__label">Faculty</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="dept"/>
                <label class="mdl-textfield__label">Department</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="board"/>
                <label class="mdl-textfield__label">Board</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="exam"/>
                <label class="mdl-textfield__label">Exam Passed</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="admission"/>
                <label class="mdl-textfield__label">Admission in</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="fecno"/>
                <label class="mdl-textfield__label">FEC Number</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="date_fec"/>
                <label class="mdl-textfield__label">Date</label>
            </div>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <!-- buttons -->
            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect ">
                Save
            </button>

            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect ">
                Print Certificate
            </button>

            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect ">
                Reset
            </button>

            <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect ">
                Close
            </button>
        </div>
    </form>
</div>

