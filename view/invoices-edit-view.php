<?php
dump($invoice);
?>
<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-4">
        <h5 class="row card-header">
        <strong class="invoices">Edit invoice</strong>
        </h5>

        <form class="invoices" style="color: rgb(112, 193, 247) ;" action="" method="post" name="invoices">
            <div class="row justify-content-center">

                <div class="form-group col-md-8">
                    <label for="invoices_number">invoice number</label>
                    <input class="form-control" name="invoices_number" id="invoices_number" type="text" placeholder="Invoices number" required autofocus>
                </div>
                <div class="form-group col-md-8">
                    <label for=""></label>
                    <select class="form-control" name="company">
                        <option value="none" selected disabled>Company</option> 
                        <?php ?>
                    </select>    
                </div>
                <div class="form-group col-md-8">
                    <select class="form-control" name="contact">
                        <option value="none" selected disabled>Contact regarding</option> 
                        <?php  ?>
                    </select> 
                </div>

            </div>

            <div class="row justify-content-center">
                <button type="submit" name="submit" class="btn btn-rounded" style="background-color: rgb(112, 193, 247);" value="Login">Saves changes</button>
            </div>

        </form>
    </div>
</div>

