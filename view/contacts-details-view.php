<h1>contacts detail page</h1>

<div class="btn-container">
    <div class="btn-container-box">
        <a href="?page=contacts-create"><button type="button" class="btn btn-outline-success">add contats</button></button>
        <a href="?page=contacts-edit"><button type="button" class="btn btn-outline-secondary">edit contacts</button></a>
        <a href="?page=contacts-delete"><button type="button" class="btn btn-outline-danger">delete contacts</button></a>
    </div>
</div>

<table class="table table-striped table-responsive-sm">
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
        <tr>          
            <th scope="row"><?=$contact['contact_id']?></th>
            <td><?=$contact['full_name']?></td>
            <td><?=$contact['phone']?></td>
            <td><?=$contact['mail']?></td>
            <td><?=$contact['company_name']?></td>
        </tr>
    </tbody>
</table>