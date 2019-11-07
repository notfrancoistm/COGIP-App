<?php 
require 'model/home-mdl.php';

$string_input = 'wail madrane';

$invoices_data = get_many_invoices(5);
$contacts_data = get_many_contacts(5);
$companies_data = get_many_companies(5);

/*POST*/
// create_company('test2', 'test2', 'test2', 1);
// create_invoices('1', 1, 1, 1);
// create_contact('test', 'test', 'test@test.es', 2, '0001');

/*PUT*/
// update_company(12, 'pouchita', 'pouchita', 'pouchita', 1);
// update_invoice(20, '256', 1, 1, 1);
// update_contact($id, string $first_name, string $last_name, string $email, $company, $phone);

require 'view/home-view.php';
?>