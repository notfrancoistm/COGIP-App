<?php
//dump($contact);
// dump($companies_data[0]);
?>
<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-4">
        <h5 class="row card-header">
        <strong class="contacts">Edit contacts</strong>
        </h5>

        <form class="contacts" style="color: rgb(112, 193, 247) ;" action="" method="post" name="contacts">
            <div class="row justify-content-center">

                <div class="form-group col-md-8">
                    <label for="first_name">first name</label>
                    <input class="form-control" name="first_name" value="<?=$first_name?>" id="first_name" type="text" placeholder="First name" required autofocus>
                </div>

                <div class="form-group col-md-8">
                    <label for="last_name">last name</label>
                    <input class="form-control" name="last_name" value="<?=$last_name?>" id="last_name" type="text" placeholder="Last name" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="email">mail</label>
                    <input class="form-control" name="email" value="<?=$email?>" id="email" type="text" placeholder="Email adress" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="phone">phone</label>
                    <input class="form-control" name="phone" value="<?=$phone?>" id="phone" type="tel" placeholder="phone" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="company">company</label>
                    <select class="form-control" name="company" id="company" required>
                    <?php foreach($companies_data as $company) : ?>
                        <option value="<?=$company['company_id']?>" <?=is_selected($contact_company, $company['company_id'])?> ><?=$company['company_name']?></option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>  
                
            <div class="row justify-content-center">
                <button type="submit" name="submit" class="btn btn-rounded" style="background-color: rgb(112, 193, 247);">Save changes</button>
            </div>
        </form>

    </div>
</div>