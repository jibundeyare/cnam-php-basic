<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <h1>Nouvel outil</h1>

    <form method="post" enctype="multipart/form-data">
        <div>
            <?php if (isset($errors['category'])): ?>
            <div>
                <?php echo $errors['category']; ?>
            </div>
            <?php endif; ?>
            <select name="category">
            <?php
            foreach ($categories as $key => $value):
            ?>
                <option value="<?php echo $key; ?>" <?php if ($category == $key): ?>selected <?php endif; ?>><?php echo $value; ?></option>
            <?php
            endforeach;
            ?>
            </select> <span class="required">*</span>
        </div>
        <div>
            <?php if (isset($errors['name'])): ?>
            <div>
                <?php echo $errors['name']; ?>
            </div>
            <?php endif; ?>
            <input type="text" name="name" placeholder="nom" value="<?php echo $name; ?>" /> <span class="required">*</span>
        </div>
        <div>
            <?php if (isset($errors['description'])): ?>
            <div>
                <?php echo $errors['description']; ?>
            </div>
            <?php endif; ?>
            <textarea name="description" placeholder="description"><?php echo $description; ?></textarea><span class="required">*</span>
        </div>
        <div>
            <button>valider</button>
        </div>
    </form>

    <p>Les champs avec une <span class="required">*</span> sont obligatoires.</p>

</body>
</html>
