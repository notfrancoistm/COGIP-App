<h1>All invoice</h1>

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