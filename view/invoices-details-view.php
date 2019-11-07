<h1>invoice delete page</h1>
<div class="btn-container">
    <div class="btn-container-box">
        <a href="?page=invoices-create"><button type="button" class="btn btn-outline-success">add invoices</button></button>
        <a href="?page=invoices-edit"><button type="button" class="btn btn-outline-secondary">edit invoices</button></a>
        <a href="?page=invoices-delete"><button type="button" class="btn btn-outline-danger">delete invoices</button></a>
    </div>
</div>

<table class="table table-striped table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Invoice Number</th>
            <th scope="col">Date</th>
            <th scope="col">Company</th>  
            <th scope="col">Type</th> 
            <th scope="col">Contact</th>         
        </tr>
    </thead>
    <tbody>
        <tr>          
            <th scope="row"><?=$invoice['invoice_id']?></th>
            <td><?=$invoice['number']?></td>
            <td><?=date('Y-m-d', strtotime($invoice['date']))?></td>
            <td><?=$invoice['company_name']?></td>
            <td><?=$invoice['company_type']?></td>
            <td><?=$invoice['contacts_full_name']?></td>
        </tr>
    </tbody>
</table>