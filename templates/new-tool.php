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
            <?php if (isset($errors['code'])): ?>
            <div>
                <?php echo $errors['code']; ?>
            </div>
            <?php endif; ?>
            <input type="text" name="code" placeholder="code" value="<?php echo $code; ?>" /> <span class="required">*</span>
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
            <?php if (isset($errors['price'])): ?>
            <div>
                <?php echo $errors['price']; ?>
            </div>
            <?php endif; ?>
            <input type="text" name="price" placeholder="prix" value="<?php echo $price; ?>" /> <span class="required">*</span>
        </div>
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
            <!-- ajouter une balise img -->
            <input type="file" name="photo" />
        </div>
        <div>
            <button>valider</button>
        </div>
    </form>

    <p>Les champs avec une <span class="required">*</span> sont obligatoires.</p>

</body>
</html>
