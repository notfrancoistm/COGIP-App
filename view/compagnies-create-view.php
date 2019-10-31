<form>
    <h3>New company</h3>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Name of the company">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <select class="form-control" name="country" placeholder="-- selecte company country " alt="country" value="<?php echo $country ?>">
                <?php require 'component/country.php' ?>
            </select>
        </div>
    </div>
        
        <div class="form-group">
            <input type="numbers" class="form-control" id="formGroupExampleInput" placeholder="VAT number">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create company</button>
</form>