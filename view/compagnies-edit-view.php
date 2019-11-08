<?php
// dump($company);
?>
<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-4">
        <h5 class="row card-header">
        <strong class="company">Edit company</strong>
        </h5>

        <form class="company" style="color: rgb(112, 193, 247) ;" action="" method="post" name="company">
            <div class="row justify-content-center">

                <div class="form-group col-md-8">
                    <input class="form-control" name="company_name" value="<?=$company['company_name']?>" id="company_name" type="text" placeholder="Name of the company" required autofocus>
                </div>

                <div class="form-group col-md-8">
                    <input class="form-control" name="vat_number" value="<?=$company['VAT']?>" id="vat_number" type="text" placeholder="VAT of the company" required>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="country" value="<?=$company['company_name']?>" id="country" required>
                    <?php require 'component/country.php' ?>

                    <?php foreach($countries as $key => $value) : ?> 
                        <option value="<?= $key ?>" <?=is_selected($company['country'], $key)?> title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option> 
                    <?php endforeach ?>
                    
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="type" id="type" required>
                    <option value="none" selected disabled hidden>Type</option>
                    <?php foreach($types as $type) :?>     
                        <option value="<?=$type['ID']?>" <?=is_selected($company['type_id'], $type['ID'])?> ><?=$type['company_type']?></option>
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