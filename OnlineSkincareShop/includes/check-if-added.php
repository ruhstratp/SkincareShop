<?php
//Verifica daca produsul a fost adaugat in cos 
function check_if_added_to_cart($item_id) {
    
    $user_id = $_SESSION['user_id']; 
    require("common.php");
   
    $query = "SELECT * FROM users_products WHERE item_id='$item_id' AND user_id ='$user_id' and status='A fost adaugat in cos!'";
    $result_query= mysqli_query($con, $query);

    if (mysqli_num_rows($result_query)) {
        return 1;
    } else {
        return 0;
    }
}

?>