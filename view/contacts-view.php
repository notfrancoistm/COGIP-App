<h1>All contacts</h1>

<div id="lastContacts" class="tabcontent">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Company</th>
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