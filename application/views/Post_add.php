<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter un post</title>
  </head>
  <body>
    <h1>Ajouter un post</h1>
    <?php echo form_open() ?>
    <?php echo validation_errors() ?>
    <?php echo form_label('Titre', 'title', ['class' => 'uneClassCSS']) ?>
    <?php echo form_input('title', $title ?: '', ['id' => 'title']) ?><br>
    <?php echo form_label('Contenu', 'content') ?>
    <?php echo form_textarea('content', $content ?: 'Cher journal, ', ['id' => 'content']) ?><br>
    <?php echo form_submit('submit', 'Publier') ?>
    <br>

    <?php echo form_close() ?>
  </body>
</html>
