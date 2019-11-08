<div class="globalelement row justify-content-center">
    <div class="card col-md-4">
        <h5 class="row card-header">
        <strong class="invoices">Details</strong>
        </h5>
        
        <form class="invoices" style="color: rgb(112, 193, 247) ;" action="" method="post" name="invoices">
            <div class="row">
                <div class="col-md-8">
                    <h5 style="color:black" name="name">Name</h5>
                    <p><?=$company['company_name']?></p>
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="vat">VAT</h5>
                    <p><?=$company['VAT']?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="country">Country</h5>
                    <p><?=$company['country']?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="type">Type</h5>
                    <p><?=$company['type']?></p> 
                </div>
            </div>
            <?php if ($_SESSION['rights'] === 'god') :?>
            <div class="row justify-content-center">
                <button type="submit" name="submit" class="form btn btn-rounded btn-outline btn-outline-secondary" style="margin: 3px;" value="edit">Edit</button>
                <button type="submit" name="submit" class="form btn btn-rounded btn-outline btn-outline-secondary" style="margin: 3px" value="delete">Delete</button>
            </div>
            <?php endif ?>
        </form>
    </div>
</div>