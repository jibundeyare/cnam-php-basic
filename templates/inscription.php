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
            <?php if (isset($errors['firstname'])): ?>
            <div>
                <?php echo $errors['firstname']; ?>
            </div>
            <?php endif; ?>
            <div>
                <input type="text" name="firstname" value="<?php echo $firstname; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>nom</label>
            </div>
            <?php if (isset($errors['lastname'])): ?>
            <div>
                <?php echo $errors['lastname']; ?>
            </div>
            <?php endif; ?>
            <div>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>pseudo</label>
            </div>
            <?php if (isset($errors['login'])): ?>
            <div>
                <?php echo $errors['login']; ?>
            </div>
            <?php endif; ?>
            <div>
                <input type="text" name="login" value="<?php echo $login; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>email</label>
            </div>
            <?php if (isset($errors['email'])): ?>
            <div>
                <?php echo $errors['email']; ?>
            </div>
            <?php endif; ?>
            <div>
                <input type="email" name="email" value="<?php echo $email; ?>" />
            </div>
        </div>

        <div>
            <div>
                <label>mot de passe</label>
            </div>
            <?php if (isset($errors['password'])): ?>
            <div>
                <?php echo $errors['password']; ?>
            </div>
            <?php endif; ?>
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
