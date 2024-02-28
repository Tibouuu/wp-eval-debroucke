<?php
global $wp;
$action = home_url( $wp->request );
?>
<form method="post" action="<?php echo $action; ?>">
    <?php $capacity = get_field_object('capacity');?>
    <?php if ($capacity) : ?>
        <?php
        $choices = $capacity['choices'];
        $value = get_field('capacity');
        ?>
        <label>
            <select class="acf-capacity" name="filter-capacity">
                <?php foreach ($choices as $value => $choice) : ?>
                    <option value="<?php echo $value ?>"
                        <?php echo $_POST && $_POST['filter-capacity'] === $value ? 'selected' : '' ?>>
                        <?php echo $choice ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>
    <?php endif; ?>
    <input type="submit" value="OK">
</form>
