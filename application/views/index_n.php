<form method="post" action="<?php echo site_url('fibonacci/request'); ?>">
<div class="form-text">
    <label class="form-text-label" for="choice1">
        Input index
    </label>
    <input required class="form-text-input" type="number" name="input_index_n" id="input_choice1" value="">
</div>
<input type="submit" value="Submit" class="btn btn-primary mt-3">
</form>