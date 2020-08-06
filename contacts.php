<?php include('core/init.php'); ?>

<?php 
//Create db object
$db = new Database;

//Run Query
$db->query("SELECT * FROM `contacts`");

//Assign result set
$contacts = $db->resultset();
?>

<div class="row">
    <div class="col-md">
        <table>
            <thead>
              <tr>
                <th width="500">Name</th>
                <th width="500">Actions</th>
              </tr>
            </thead>

            <tbody>
                <?php foreach($contacts as $contact)  :  ?>
                <tr>
                    <td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name ?></a></td>
                    <td>
                    <ul class="list-group">
                        <li><a href="#" class="btn btn-sm btn-info" data-reveal-id="addContactForm">Edit</a></li>
                        <li><a href="#" class="btn btn-sm btn-warning">Delete</a></li>
                    </ul>
                    </td>
                </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>
    </div>
</div>