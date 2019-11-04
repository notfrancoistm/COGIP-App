<h3>
    Bonjour <?=$_SESSION['username']?> !<br>
    Que souhaitez-vous faire aujourd'hui ?
</h3>

<div class="btn-container">
    <div class="btn-container-box">
        <button type="button" class="btn btn-outline-success tablink" onclick="openPage('lastInvoice', this, '')">Last invoices</button>
        <button type="button" class="btn btn-outline-success tablink" onclick="openPage('lastContacts', this, '')">Last contacts</button>
        <button type="button" class="btn btn-outline-success tablink" onclick="openPage('lastCompanies', this, '')">Last companies</button>
    </div>
</div>

<!-- last invoices -->
<div id="lastInvoice" class="tabcontent">
    <h5 class="row card-header info-color py-3">
    <strong class="invoices">Last invoices</strong>
    </h5>
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

<!-- Contacts -->
<div id="lastContacts" class="tabcontent">
    <h5 class="row card-header info-color py-3">
    <strong class="contacts">Last contacts</strong>
    </h5>
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
                <td><a href="?page=invoices-delete&id=<?=$invoice['ID']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                <td><a href="?page=invoices-edit&id=<?=$invoice['ID']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                <td><a href="?page=invoices-details&id=<?=$invoice['ID']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                <?php endif ?>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Companies -->
<div id="lastCompanies" class="tabcontent">
    <h5 class="row card-header info-color py-3">
    <strong class="companies">Last companies</strong>
    </h5>
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
            <?php foreach($companies_data as $company) :?>
            <tr>          
                <th scope="row"><?=$company['ID']?></th>
                <td><?=$company['company_name']?></td>
                <td><?=$company['VAT']?></td>
                <td><?=$company['country']?></td>
                <td><?=$company['type']?></td>
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
<script src="assets/script/script.js"></script>