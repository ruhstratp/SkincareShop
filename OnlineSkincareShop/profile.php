<?php
require ("includes/common.php");
$user_id=$_GET["user_id"];
$query="SELECT * FROM users WHERE id='$user_id'";
$result=mysqli_query($con, $query);
$user=mysqli_fetch_array($result);
?>
<html>
    <body>
        <div>
            <form action="change_profile.php" method="POST">
                <input type="hidden" value="<?php echo $user_id; ?>" name="id" id="id">
                Nume: <input type="text" value="<?php echo $user["last_name"]?>" name="last_name" id="last_name" required>
                Prenume: <input type="text" value="<?php echo $user["first_name"]?>" name="first_name" id="first_name" required>
                Email: <input type="email" value="<?php echo $user["email_id"]?>" name="email" id="email" required>
                Telefon: <input type="text" value="<?php echo $user["phone"]?>" name="phone" id="phone" required>
                Adresă: <input type="text" value="<?php echo $user["address"]?>" name="address" id="address" required>
                Oras: <input type="text" value="<?php echo $user["city"]?>" name="city" id="city" required>
                Judet: <input type="text" value="<?php echo $user["county"]?>" name="county" id="county" required>
                Cod postal: <input type="text" value="<?php echo $user["postal_code"]?>" name="postal_code" id="postal_code" required>
                Parola: <input type="password" value="" name="pass" id="pass" >
                <input type="submit" value="Actualizeaza datele">
</form>
        </div>
    </body>
</html>