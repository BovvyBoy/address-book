<?php 

function search($text) {
    //Database Connection
    $db = new PDO("mysql:host=127.0.0.1;dbname=addressbook", 'root', 'Boverine35');

    $text = htmlspecialchars($text);

    $get_name = $db->prepare("SELECT first_name FROM contacts WHERE first_name LIKE concat('%', :first_name, '%')");
    $get_name->execute(array('first_name' => $text));

    
    while($names = $get_name->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="">'.$names['first_name'].'</a>';
    }

}
search($_GET['txt']);
?>