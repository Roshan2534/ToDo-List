<?php include 'templates/header.php';?>
<div  style='background-color:white' class="container">
<h1  style='color:black' class="text-center">Your Tasks <button  onclick="cleartask()"class="btn btn-info">clear</button></h1>
    <div  style='background-color:grey; width:800px' class="container">
    
    
    

    <?php foreach($tasks as $task){ ?>
     <div  id="myid" class="row" style="margin-bot:5px;padding:5px">
        <div class="col-sm-4">
        <h5 style='color:black'><?=$task['task']?> </h5>
        
        
        </div>
        <button onclick="completetask('<?=$task['id']?>','<?=$task['task']?>')" class="test  btn-success">completed</button>
        <button  onclick="deletetask('<?=$task['id']?>')" class="test  btn-danger">delete</button>
        <button  onclick="edit('<?=$task['id']?>')" class="test btn-info">edit</button>
        
        
    
    </div><br>
    <?php } ?>
    <br>
    <input type="text" id="task" placeholder="Enter task">
    <button onclick="addtask()" class="btn btn-success">Add task</button><br>
    <input type="text" id="edit" placeholder="Enter edited task"><br>
    <br>
    
    </div>
    
    <h1 style='color:black' class="text-center">Completed Tasks <button  onclick="clearctask()"class="btn btn-info">clear</button></h1></h1>
    <div  style='background-color:grey;width:800px'  class="container">
    <?php foreach($completed as $complete){ ?>
    <div class="row"  style="margin-bot:5px;padding:5px">
    <div class="col-sm-4" style="padding:10px">
        <h5 style='color:black'>  <?=$complete['name']?></h5>
        </div>
        <button onclick="undotask('<?=$complete['id']?>','<?=$complete['name']?>')" class="test  btn-success">Undo</button>
        <button  onclick="deletectask('<?=$complete['id']?>')" class="test  btn-danger">delete</button>
    </div>
    <?php } ?>
    </div>
    </div>
   <?php include 'templates/footer.php';?>