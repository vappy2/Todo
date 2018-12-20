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
        <h1 class="text-center"> Réordonner les Todos </h1>
        <?php
echo validation_errors(); 
echo form_open('TodoController/update/'.$unTodo['id']); 
echo form_label('Ordre :', 'ordre');
echo form_input('ordre',set_value('ordre',$unTodo['ordre']));
?>
        </body>
        </html>
