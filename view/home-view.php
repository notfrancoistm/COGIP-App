<div class="btn-container">
    <div class="btn-container-box">
        <button type="button" class="btn btn-outline-success ">Last invoice</button>
        <button type="button" class="btn btn-outline-success ">Last contacts</button>
        <button type="button" class="btn btn-outline-success ">Last compagnies</button>
    </div>
</div>

<div class="container info-container">
    <div class="btn-container-box">
        ...
    </div>
    
    <!-- Invoices -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">invoice number</th>
                <th scope="col">Date</th>
                <th scope="col">company</th>
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

    <!-- Contacts -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">company</th>
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