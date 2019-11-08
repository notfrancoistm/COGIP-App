<?php
// dump($contact);
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
                    <input class="form-control" name="first_name" value="<?=$contact['first_name']?>" id="first_name" type="text" placeholder="First name" required autofocus>
                </div>

                <div class="form-group col-md-8">
                    <input class="form-control" name="last_name" value="<?=$contact['last_name']?>" id="last_name" type="text" placeholder="Last name" required>
                </div>

                <div class="form-group col-md-8">
                    <input class="form-control" name="email" value="<?=$contact['mail']?>" id="email" type="text" placeholder="Email adress" required>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="gender" id="gender" required>
                    <option value="none" selected disabled hidden>Company</option> 
                    <?php foreach($companies_data as $company) : ?>
                        <option value="<?=$company['company_id']?>" <?=is_selected($contact['company'], $company['company_id'])?> ><?=$company['company_name']?></option>
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