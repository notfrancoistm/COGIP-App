<h1>detail of the compagny page</h1>

<?php if ($_SESSION['rights'] === 'god') :?>
<div class="btn-container">
    <div class="btn-container-box">
        <a href="?page=compagnies-create"><button type="button" class="btn btn-outline-success">add company</button></button>
        <a href="?page=compagnies-edit"><button type="button" class="btn btn-outline-secondary">edit company</button></a>
        <a href="?page=compagnies-delete"><button type="button" class="btn btn-outline-danger">delete company</button></a>
    </div>
</div>
<?php endif ?>

<table class="table table-striped table-responsive-sm">
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
        <tr>          
            <th scope="row"><?=$company['ID']?></th>
            <td><?=$company['company_name']?></td>
            <td><?=$company['VAT']?></td>
            <td><?=$company['country']?></td>
            <td><?=$company['type']?></td>
        </tr>
    </tbody>
</table>