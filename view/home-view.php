<div class="btn-container">
    <div class="btn-container-box">
        <button type="button" class="btn btn-outline-success tablink" onclick="openPage('lastInvoice', this, 'green')">Last invoices</button>
        <button type="button" class="btn btn-outline-success tablink" onclick="openPage('lastContacts', this, 'green')">Last contacts</button>
        <button type="button" class="btn btn-outline-success tablink" onclick="openPage('lastCompanies', this, 'green')">Last companies</button>
    </div>
</div>

<!-- last invoices -->
<div id="lastInvoice" class="tabcontent">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Invoice Number</th>
                <th scope="col">Date</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($invoices_data as $invoice) :?>
            <tr>          
                <th scope="row"><?=$invoice['ID']?></th>
                <td><?=$invoice['number']?></td>
                <td><?=date('Y-m-d', strtotime($invoice['date']))?></td>
                <td><?=$invoice['company']?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Contacts -->
<div id="lastContacts" class="tabcontent">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Company</th>
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
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Companies -->
<div id="lastCompanies" class="tabcontent">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">VAT</th>
                <th scope="col">Country</th>
                <th scope="col">Type</th>
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
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>



</div>
<script src="assets/script/script.js"></script>