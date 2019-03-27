function addtask(){
    task = $('#task').val();
    
    $.ajax({
        type: "POST",
        url: "backend/addtask_ajax.php",
        data: {
            
           task
           
        },
        success: function (data) {
           
         if(data == 'success'){
             alert("task added");
             window.location = '';
         }
         else{
             alert("could not add task");
             window.location = '';
         }
        }
    });

}
function deletetask(id){
    
    
    $.ajax({
        type: "POST",
        url: "backend/deletetask_ajax.php",
        data: {
            
           id,
           
        },
        success: function (data) {
           
         if(data == 'success'){
             
             window.location = '';
         }
         else{
             alert("could not delete task");
             window.location = '';
         }
        }
    });

}
function completetask(id,task){
    
    
    $.ajax({
        type: "POST",
        url: "backend/completetask_ajax.php",
        data: {
            
           id,
           task
           
        },
        success: function (data) {
           
         if(data == 'success'){
             
             window.location = '';
         }
         else{
             alert("could not complete task");
             window.location = '';
         }
        }
    });

}


function clearall(){
$.ajax({
    type: "POST",
    url: "backend/cleartasks_ajax.php",
    
    success: function (data) {
       
     if(data == 'success'){
         alert("successfully cleared all Tasks");
         window.location = '';
     }
     else{
         alert("could not clear");
         window.location = '';
     }
    }
});

}
function cleartask(){
    $.ajax({
        type: "POST",
        url: "backend/cleartask_ajax.php",
        
        success: function (data) {
           
         if(data == 'success'){
             
             window.location = '';
         }
         else{
             alert("could not clear");
             window.location = '';
         }
        }
    });
    
    }
    function clearctask(){
        $.ajax({
            type: "POST",
            url: "backend/clearctask_ajax.php",
            
            success: function (data) {
               
             if(data == 'success'){
                 
                 window.location = '';
             }
             else{
                 alert("could not clear");
                 window.location = '';
             }
            }
        });
        
        }
        function undotask(id,name){
    
    
            $.ajax({
                type: "POST",
                url: "backend/undotask_ajax.php",
                data: {
                    
                   id,
                   name
                   
                },
                success: function (data) {
                   
                 if(data == 'success'){
                     
                     window.location = '';
                 }
                 else{
                     alert("could not add back");
                     window.location = '';
                 }
                }
            });
        
        }
        function edittask(id,task){
    
    
            $.ajax({
                type: "POST",
                url: "backend/edittask_ajax.php",
                data: {
                    
                   id,
                   task
                   
                },
                success: function (data) {
                   
                 if(data == 'success'){
                     
                     window.location = '';
                 }
                 else{
                    alert("could not edit");
                     window.location = '';
                 }
                }
            });
        
        }
        function deletectask(id){
    
    
            $.ajax({
                type: "POST",
                url: "backend/deletectask_ajax.php",
                data: {
                    
                   id,
                   
                },
                success: function (data) {
                   
                 if(data == 'success'){
                     alert("task deleted");
                     window.location = '';
                 }
                 else{
                     alert("could not delete task");
                     window.location = '';
                 }
                }
            });
        
        }
        function edit(id){
            task = $('#edit').val();
            
            $.ajax({
                type: "POST",
                url: "backend/edittask_ajax.php",
                data: {
                    id,
                   task
                   
                },
                success: function (data) {
                   
                 if(data == 'success'){
                     alert("task editted");
                     window.location = '';
                 }
                 else{
                     alert("could not add task");
                     window.location = '';
                 }
                }
            });
        
        }