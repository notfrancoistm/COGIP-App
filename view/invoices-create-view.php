<?php
// dump($invoice);
// dump($companies_data[0]);
// dump($contacts_data[0]);

// dump($number__val);
// dump($company_id__val);
// dump($type_id__val);
// dump($contact__val);
// dump($submit);
?>
<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-4">
        <h5 class="row card-header">
        <strong class="invoices">New invoice</strong>
        </h5>

        <form class="invoices" style="color: rgb(112, 193, 247) ;" action="" method="post" name="invoices">
            <div class="row justify-content-center">

                <div class="form-group col-md-8">
                    <label for="invoices_number">invoice number</label>
                    <input class="form-control" name="invoices_number" id="invoices_number" type="text" placeholder="Invoices number" required autofocus>
                </div>
                <div class="form-group col-md-8">
                    <label for="company">company</label>
                    <select id="company" class="form-control" name="company" required>
                    <?php foreach($companies_data as $company) : ?>
                        <option value="<?=$company['company_id']?>,<?=$company['type_id']?>"><?=$company['company_name']?></option>
                    <?php endforeach ?>
                    </select> 
                </div>
                <div class="form-group col-md-8">
                    <label for="contact">contact</label>
                    <select id="contact" class="form-control" name="contact" required>
                    <?php foreach($contacts_data as $contact) : ?>
                        <option value="<?=$contact['contact_id']?>"><?=$contact['full_name']?></option>
                    <?php endforeach ?>
                    </select>
                </div>

            </div>

            <div class="row justify-content-center">
                <button type="submit" name="submit" class="btn btn-rounded" style="background-color: rgb(112, 193, 247);" value="Login">Create invoice</button>
            </div>

        </form>
    </div>
</div>

