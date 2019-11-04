<h1>invoice delete page</h1>
<div class="btn-container">
    <div class="btn-container-box">
        <a href="?page=invoices-create"><button type="button" class="btn btn-outline-success">add invoices</button></button>
        <a href="?page=invoices-edit"><button type="button" class="btn btn-outline-secondary">edit invoices</button></a>
        <a href="?page=invoices-delete"><button type="button" class="btn btn-outline-danger">delete invoices</button></a>
    </div>

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