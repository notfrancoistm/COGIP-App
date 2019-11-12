<div class="globalelement row justify-content-center">
    <h5>Joyeuse comptabilité <?=$_SESSION['username']?> ! Puisse le sort vous etre favorable</h5>
</div>

<!-- last invoices -->
<div id="lastInvoice" class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="invoices">Last invoices</strong>
        </h5>
        <div class="row justify-content-center">
            <table class="table table-striped table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Invoice Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Company</th>
                        <th scope="col">Type</th> 
                        <th scope="col">Contact</th>
                        <?php if ($_SESSION['rights'] === 'god') :?> 
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <?php endif ?>  
                        <th scope="col">Details</th>  
                              
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($invoices_data as $invoice) :?>
                    <tr>          
                        <th scope="row"><?=$invoice['invoice_id']?></th>
                        <td><?=$invoice['number']?></td>
                        <td><?=date('Y-m-d', strtotime($invoice['date']))?></td>
                        <td><?=$invoice['company_name']?></td>
                        <td><?=$invoice['company_type']?></td>
                        <td><?=$invoice['contacts_full_name']?></td>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <td><a href="?page=invoices-delete&id=<?=$invoice['invoice_id']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                        <!-- <td><a href="?page=invoices-delete&id=<?=$invoice['invoice_id']?>" class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></a></td> -->
                        <td><a href="?page=invoices-edit&id=<?=$invoice['invoice_id']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <?php endif ?>
                        <td><a href="?page=invoices-details&id=<?=$invoice['invoice_id']?>" class="fa fa-eye" aria-hidden="true"></a></td>          
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>  
</div>
<hr>
<!-- last Contacts -->
<div id="lastContacts" class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="contacts">Last contacts</strong>
        </h5>

        <div class="row justify-content-center">
            <table class="table table-striped table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Company</th>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <?php endif ?>
                        <th scope="col">Details</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts_data as $contact) :?>
                    <tr>          
                        <th scope="row"><?=$contact['contact_id']?></th>
                        <td><?=$contact['full_name']?></td>
                        <td><?=$contact['phone']?></td>
                        <td><?=$contact['mail']?></td>
                        <td><?=$contact['company_name']?></td>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <td><a href="?page=contacts-delete&id=<?=$contact['contact_id']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                        <!-- <td><a href="?page=contacts-delete&id=<?=$contact['contact_id']?>" class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></a></td> -->
                        <td><a href="?page=contacts-edit&id=<?=$contact['contact_id']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <?php endif ?>
                        <td><a href="?page=contacts-details&id=<?=$contact['contact_id']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<!-- last Companies -->
<div id="lastCompanies" class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="companies">Last companies</strong>
        </h5>
        <div class="row justify-content-center">
            <table class="table table-striped table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">VAT</th>
                        <th scope="col">Country</th>
                        <th scope="col">Type</th>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <?php endif ?>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($companies_data as $company) :?>
                    <tr>          
                        <th scope="row"><?=$company['company_id']?></th>
                        <td><?=$company['company_name']?></td>
                        <td><?=$company['VAT']?></td>
                        <td><?=$company['country']?></td>
                        <td><?=$company['type']?></td>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <td><a href="?page=compagnies-delete&id=<?=$company['company_id']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                        <!-- <td><a href="?page=compagnies-delete&id=<?=$company['company_id']?>" class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></a></td> -->
                        <td><a href="?page=compagnies-edit&id=<?=$company['company_id']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <?php endif ?>
                        <td><a href="?page=compagnies-details&id=<?=$company['company_id']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>