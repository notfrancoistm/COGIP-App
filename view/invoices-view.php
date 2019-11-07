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