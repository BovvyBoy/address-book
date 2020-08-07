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
                    <td><a href="contact.php" data-item="$contact" data-toggle="modal" data-target="#detailModal"><?php echo $contact->first_name.' '.$contact->last_name ?></a></td>
                    <td>
                    <ul class="list-group">
                        <!-- <li><a href="#" class="btn btn-sm btn-info" data-toggle="editModal" data-target="<?php echo $contact->id ?>">Edit</a></li> -->
                        <li><a href="#" class="btn btn-sm btn-warning">Delete</a></li>
                    </ul>
                    </td>
                </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>
        <div id="detailModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $contact->first_name.' '.$contact->last_name ;  ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>