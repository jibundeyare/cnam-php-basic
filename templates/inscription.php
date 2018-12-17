<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <title>Inscription</title>
</head>
<body>

    <form method="post">

        <div>
            <div>
                <label>prénom</label>
            </div>
            <div>
                <input type="text" name="firstname" value="<?php echo $firstname; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>nom</label>
            </div>
            <div>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>pseudo</label>
            </div>
            <div>
                <input type="text" name="login" value="<?php echo $login; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>email</label>
            </div>
            <div>
                <input type="email" name="email" value="<?php echo $email; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>mot de passe</label>
            </div>
            <div>
                <input type="password" name="password" value="<?php echo $password; ?>" />
            </div>
        </div>

        <div>
            <button>Ok</button>
        </div>

    </form>

</body>
</html>
