<div id="lastInvoice" class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="invoices">Invoices</strong>
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
                        <th scope="col">Details</th>      
                        <?php endif ?>    
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
                        <td><a href="?page=invoices-edit&id=<?=$invoice['invoice_id']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <td><a href="?page=invoices-details&id=<?=$invoice['invoice_id']?>" class="fa fa-eye" aria-hidden="true"></a></td>          
                        <?php endif ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>  
</div>