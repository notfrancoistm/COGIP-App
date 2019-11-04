<h1>All company</h1>

<div id="lastCompanies" class="tabcontent">
    <table class="table table-striped">
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
            <?php foreach($companies_data as $company) :?>
            <tr>          
                <th scope="row"><?=$company['ID']?></th>
                <td><?=$company['company_name']?></td>
                <td><?=$company['VAT']?></td>
                <td><?=$company['country']?></td>
                <td><?=$company['type']?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>