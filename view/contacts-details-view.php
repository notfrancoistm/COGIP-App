<div class="globalelement row justify-content-center">
    <div class="card col-md-4">
        <h5 class="row card-header">
        <strong class="invoices">Details</strong>
        </h5>
        
        <form class="invoices" style="color: rgb(112, 193, 247) ;" action="" method="post" name="invoices">
            <div class="row">
                <div class="col-md-8">
                    <h5 style="color:black" name="name">Name</h5>
                    <p><?=$contact['full_name']?></p>
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="phone">Phone</h5>
                    <p><?=$contact['phone']?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="email">Email</h5>
                    <p><?=$contact['mail']?></p> 
                </div>

                <div class="col-md-8">
                    <h5 style="color:black" name="company">Company</h5>
                    <p><?=$contact['company_name']?></p> 
                </div>
            </div>

            <?php if ($_SESSION['rights'] === 'god') :?>
            <div class="row justify-content-center">
                <a href="?page=contacts-edit&id=<?=$id?>" class="form btn btn-rounded btn-outline-secondary" style="margin: 3px">Edit</a>
                <a href="?page=contacts-delete&id=<?=$id?>" class="form btn btn-rounded btn-outline-secondary" style="margin: 3px">Delete</a>
            </div>
            <?php endif ?>
            
        </form>
    </div>
</div>