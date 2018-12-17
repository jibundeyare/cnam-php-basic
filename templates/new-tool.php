<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        <div>
            <?php if (isset($errors['code'])): ?>
            <div>
                <?php echo $errors['code']; ?>
            </div>
            <?php endif; ?>
            <input type="text" name="code" placeholder="code" value="<?php echo $code; ?>" />
        </div>
        <div>
            <?php if (isset($errors['name'])): ?>
            <div>
                <?php echo $errors['name']; ?>
            </div>
            <?php endif; ?>
            <input type="text" name="name" placeholder="nom" value="<?php echo $name; ?>" />
        </div>
        <div>
            <?php if (isset($errors['price'])): ?>
            <div>
                <?php echo $errors['price']; ?>
            </div>
            <?php endif; ?>
            <input type="text" name="price" placeholder="prix" value="<?php echo $price; ?>" />
        </div>
        <div>
            <?php if (isset($errors['category'])): ?>
            <div>
                <?php echo $errors['category']; ?>
            </div>
            <?php endif; ?>
            <select name="category">
                <option value="0">catégorie</option>
                <option value="1" <?php if ($category == 1): ?>selected <?php endif; ?>>outillage</option>
                <option value="2" <?php if ($category == 2): ?>selected <?php endif; ?>>matériel</option>
            </select>
        </div>
        <div>
            <!-- ajouter une balise img -->
            <input type="file" name="photo" />
        </div>
        <div>
            <button>valider</button>
        </div>
    </form>

</body>
</html>
