<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-4">
        <h5 class="row card-header">
        <strong class="company">Edit company</strong>
        </h5>

        <form class="company" style="color: rgb(112, 193, 247) ;" action="" method="post" name="company">
            <div class="row justify-content-center">

                <div class="form-group col-md-8">
                    <input class="form-control" name="company_name" id="company_name" type="text" placeholder="Name of the company" required autofocus>
                </div>

                <div class="form-group col-md-8">
                    <input class="form-control" name="vat_number" id="vat_number" type="text" placeholder="VAT of the company" required>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="country" id="country" required>
                        <?php require 'component/country.php' ?>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <select class="form-control" name="type" id="type" required>
                    <option value="none" selected disabled hidden>Type</option> 
                        <option value="client">Client</option>
                        <option value="provider">Provider</option>
                    </select>
                </div>
            </div>  
                
            <div class="row justify-content-center">
                <button type="submit" name="submit" class="btn btn-rounded" style="background-color: rgb(112, 193, 247);" value="Login">Save changes</button>
            </div>
        </form>

    </div>
</div>