<div class="globalelement row justify-content-center">
    <div class="card col-md-4">
        <h5 class="row card-header">
        <strong class="invoices">Details</strong>
        </h5>

        <form class="invoices" style="color: rgb(112, 193, 247) ;" action="" method="post" name="invoices">
            <div class="row">
                <div class="col-md-8">
                    <h5 style="color:black" name="invoices_number" id="invoices_number">Invoice Number</h5>
                    <p><?=$invoice['number']?></p>
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="date">Date</h5>
                    <p><?=date('Y-m-d', strtotime($invoice['date']))?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="company">Company</h5>
                    <p><?=$invoice['company_name']?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="company">Type</h5>
                    <p><?=$invoice['company_type']?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="company">Contact</h5>
                    <p><?=$invoice['contacts_full_name']?></p> 
                </div>
            </div>

            <?php if ($_SESSION['rights'] === 'god') :?>
            <div class="row justify-content-center">
                <button type="submit" name="submit" class="form btn btn-rounded btn-outline-secondary" style="margin: 3px;" value="edit">Edit</button>
                <button type="submit" name="submit" class="form btn btn-rounded btn-outline-secondary" style="margin: 3px" value="delete">Delete</button>
            </div>
            <?php endif ?>

        </form>
    </div>
</div>