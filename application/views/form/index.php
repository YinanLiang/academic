<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/18/15
 * Time: 4:24 PM
 */
?>

<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
        <!-- Simple Textfield -->
        <form action="<?php echo base_url("index.php/record/submitForm");?>" method="post" class="mdl-grid">
            <div class="mdl-card__supporting-text">
            <div class="mdl-textfield mdl-js-textfield textfield-demo mdl-cell mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" id="sample1" name="textField" />
                <label class="mdl-textfield__label" for="sample1">Text...</label>
            </div>

            <div class="demo-separator mdl-cell--1-col"></div>
            <div class="demo-separator mdl-cell--1-col"></div>
            <!-- Numeric Textfield with Floating Label -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo mdl-cell mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" name="floatingTextField"/>
                <label class="mdl-textfield__label" for="sample4">Number...</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
            </div>

            <div class="demo-separator mdl-cell--1-col"></div>
            <!-- Floating Multiline Textfield -->
            <div class="mdl-textfield mdl-js-textfield textfield-demo mdl-cell mdl-cell--4-col">
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="multilineText" ></textarea>
                <label class="mdl-textfield__label" for="sample5">Text lines...</label>
            </div>

            <div class="demo-separator mdl-cell--1-col"></div>
            <!-- Default Slider -->
            <div class="mdl-cell mdl-cell--4-col"><input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="0" tabindex="0" name="slider"/></div>

            <div class="mdl-cell mdl-cell--4-col">
                <input type="file" name="file">
                <label >File input</label>
            </div>
    </div>
    <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-cell mdl-cell--2-col" type="submit">
        Submit
    </button>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-cell mdl-cell--2-col" type="reset">
        Reset
    </button>
    </div>
    </form>
</div>


