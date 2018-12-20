<html lang='fr'>
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>Ajouter</title>
        <title><?php echo $title ?></title>
    </head>
    <body>   
        <div class="container shadow-lg">
        <h3 class="text-center jumbotron font-italic"> Edit un Todo </h3>
        <div class="text-center font-weigth-bold">
<?php
echo validation_errors(); 
echo form_open('TodoController/update/'.$unTodo['id']); 
echo form_label('Ordre :', 'ordre');
echo form_input('ordre',set_value('ordre',$unTodo['ordre'])); 
echo form_label('Tâches', 'task');
echo form_input('task', set_value('task',$unTodo['task']));

echo '</br>'.form_submit('update', 'Edit');
echo form_close(); 
?>
        </div>
        </div>
        </body>
        </html>
