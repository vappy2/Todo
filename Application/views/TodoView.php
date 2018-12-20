<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>Acceuil</title>
        <title><?php echo $title ?></title>
    </head>
    <body>        
            <div class="container shadow-lg">
                <div class="text-center jumbotron bg-muted">
            <H1 class ="display-3">
               Todo List !
            </H1>
                </div>
                    <div>
                        <h6 class="text-center font-italic">
                            Il y a <?php echo $Compte; ?> Todos !</br>
                          <?php echo $reste; ?>  todos effectués !
                    </h6>
                    </div>
                
                <table class="table table-bordered table-sm"> 
                    <thead>
                    <th>Ordre</th>
                    <th>Id</th>
                    <th>Task</th>
                    <th>Completed</th>
                    </thead>
                    <tbody>
                        <tr>
            <?php foreach ($todos as $todo):?>
                            <td><?php echo $todo['ordre']; ?> </td>
                            <td><?php echo $todo['id']; ?> </td>
              <td><?php if ($todo['completed']==TRUE)
                   {
                   echo '<s>'.$todo['task'].'</s>';
                   }
                   else 
                       {
                       echo $todo['task'];
                       }
                       ?> </td>
                       
                
              <td><?php echo $todo['completed']; ?></td>
                
                    
              <td><a href="<?php echo base_url('TodoController/fait/').$todo['id']; ?>" class="text-muted">Complete</a></td>
              <td><a href="<?php echo base_url('TodoController/update/').$todo['id']; ?>" class="text-muted">Edit</a></td>
              <td><a href="<?php echo base_url('TodoController/delete/').$todo['id']; ?>" class="text-muted">Delete</a></br></td>
                        </tr>              
            <?php endforeach; ?>                          
                        </tbody>                         
                </table>                
                    <a href="<?php echo base_url('TodoController/add') ?>"class="btn btn-secondary "> Add</a></td></li>
                   <!-- <a href="<?php echo base_url('TodoController/order') ?>"class="btn btn-secondary"> Reorder task</a></li> -->
                
        </div><!-- /.container -->
        
    </body>
</html>