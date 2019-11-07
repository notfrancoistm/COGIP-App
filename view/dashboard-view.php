<div class="globalelement row justify-content-center">
    <h2>Dashboard</h2>
</div>

<!-- last invoices -->
<div id="lastInvoice" class="globalelement row justify-content-center">
    <div class="card text-center col-md-12">
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
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <th scope="col">Details</th>          
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($invoices_data as $invoice) :?>
                    <tr>          
                        <th scope="row"><?=$invoice['ID']?></th>
                        <td><?=$invoice['number']?></td>
                        <td><?=date('Y-m-d', strtotime($invoice['date']))?></td>
                        <td><?=$invoice['company']?></td>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <td><a href="?page=invoices-delete&id=<?=$invoice['ID']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                        <td><a href="?page=invoices-edit&id=<?=$invoice['ID']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <td><a href="?page=invoices-details&id=<?=$invoice['ID']?>" class="fa fa-eye" aria-hidden="true"></a></td>          
                        <?php endif ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>  
</div>

<!-- last Contacts -->
<div id="lastContacts" class="globalelement row justify-content-center">
    <div class="card text-center col-md-12">
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
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                            <th scope="col">Details</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts_data as $contact) :?>
                        <tr>          
                            <th scope="row"><?=$contact['ID']?></th>
                            <td><?=$contact['first_name'] . ' ' . $contact['last_name']?></td>
                            <td><?=$contact['phone']?></td>
                            <td><?=$contact['mail']?></td>
                            <td><?=$contact['company']?></td>
                            <?php if ($_SESSION['rights'] === 'god') :?>
                            <td><a href="?page=contacts-delete&id=<?=$contact['ID']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                            <td><a href="?page=contacts-edit&id=<?=$contact['ID']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                            <td><a href="?page=contacts-details&id=<?=$contact['ID']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                            <?php endif ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>

<!-- last Companies -->
<div id="lastCompanies" class="globalelement row justify-content-center">
    <div class="card text-center col-md-12">
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
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <th scope="col">Details</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($compagnies_data as $company) :?>
                    <tr>          
                        <th scope="row"><?=$company['ID']?></th>
                        <td><?=$company['company_name']?></td>
                        <td><?=$company['VAT']?></td>
                        <td><?=$company['country']?></td>
                        <td><?=$company['type']?></td>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <td><a href="?page=compagnies-delete&id=<?=$company['ID']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                        <td><a href="?page=compagnies-edit&id=<?=$company['ID']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <td><a href="?page=compagnies-details&id=<?=$company['ID']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                        <?php endif ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>