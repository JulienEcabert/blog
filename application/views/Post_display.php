<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $this->table->set_heading('Id', 'Titre', 'Contenu'); ?>
    <?php
          foreach ($datas as $key => $data) {
            $this->table->add_row($data->id,$data->title,$data->content);
          }
     ?>
    <?php echo $this->table->generate();?>
  </body>
</html>
