<?php
// dump($company);
dump($id);
dump($company_name);
dump($vat_number);
dump($country);
dump($company_type);

dump($company_name__val);
dump($vat_number__val);
dump($country__val);
dump($submit);

?>
<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-4">
        <h5 class="row card-header">
        <strong class="company">Edit company</strong>
        </h5>

        <form class="company" style="color: rgb(112, 193, 247);" action="" method="post" name="company">
            <div class="row justify-content-center">

                <div class="form-group col-md-8">
                    <input class="form-control" name="company_name" value="<?=$company_name?>" id="company_name" type="text" placeholder="Name of the company" required autofocus>
                </div>

                <div class="form-group col-md-8">
                    <input class="form-control" name="vat_number" value="<?=$vat_number?>" id="vat_number" type="text" placeholder="VAT of the company" required>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="country" id="country" required>
                    <?php require 'component/country.php' ?>

                    <?php foreach($countries as $key => $value) : ?> 
                        <option value="<?= $key ?>" <?=is_selected($country, $key)?> title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option> 
                    <?php endforeach ?>
                    
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="type" id="type" required>
                    <?php foreach($types as $type) :?>     
                        <option value="<?=$type['ID']?>" <?=is_selected($company_type, $type['ID'])?> ><?=$type['company_type']?></option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>  
                
            <div class="row justify-content-center">
                <button type="submit" name="submit" class="btn btn-rounded" style="background-color: rgb(112, 193, 247);" value="Login">Save changes</button>
            </div>
        </form>

    </div>
</div>