<div class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="companies">Companies</strong>
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
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <?php endif ?>
                        <th scope="col">Details</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($companies_data as $company) :?>
                    <tr>          
                        <th scope="row"><?=$company['company_id']?></th>
                        <td><?=$company['company_name']?></td>
                        <td><?=$company['VAT']?></td>
                        <td><?=$company['country']?></td>
                        <td><?=$company['type']?></td>
                        <?php if ($_SESSION['rights'] === 'god') :?>
                        <td><a href="?page=compagnies-delete&id=<?=$company['company_id']?>" class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></a></td>
                        <td><a href="?page=compagnies-edit&id=<?=$company['company_id']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                        <?php endif ?>
                        <td><a href="?page=compagnies-details&id=<?=$company['company_id']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>