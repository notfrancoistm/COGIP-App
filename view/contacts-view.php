<div id="lastContacts" class="globalelement row justify-content-center">
    <div class="card text-center col-md-10">
        <h5 class="row card-header">
        <strong class="contacts">Last contacts</strong>
        </h5>

        <div class="row justify-content-center">
                <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                            <th scope="col">Details</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts_data as $contact) :?>
                        <tr>          
                            <th scope="row"><?=$contact['contact_id']?></th>
                            <td><?=$contact['full_name']?></td>
                            <td><?=$contact['phone']?></td>
                            <td><?=$contact['mail']?></td>
                            <td><?=$contact['company_name']?></td>
                            <?php if ($_SESSION['rights'] === 'god') :?>
                            <td><a href="?page=contacts-delete&id=<?=$contact['contact_id']?>" class="fa fa-trash" aria-hidden="true"></a></td>
                            <td><a href="?page=contacts-edit&id=<?=$contact['contact_id']?>" class="fa fa-pencil" aria-hidden="true"></a></td>
                            <td><a href="?page=contacts-details&id=<?=$contact['contact_id']?>" class="fa fa-eye" aria-hidden="true"></a></td> 
                            <?php endif ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>