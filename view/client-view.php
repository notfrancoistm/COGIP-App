<div id="lastContacts" class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="provider">Providers</strong>
        </h5>

        <div class="row justify-content-center">
            <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Company name</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($compagnies_data as $company) :?>
                        <tr>          
                            <th scope="row"><?=$company['ID']?></th>
                            <td><?=$company['company_name']?></td>
                            <?php if ($_SESSION['rights'] === 'god') :?>
                            <td><a href="" class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></a></td>
                            <td><a href="" class="fa fa-pencil" aria-hidden="true"></a></td>
                            <?php endif ?>
                            <td><a href="" class="fa fa-eye" aria-hidden="true"></a></td> 
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>