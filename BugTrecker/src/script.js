/**
 * Created by amoroz-prom on 13.11.14.
 */
$(function(){
    $('.b-form__create-task').hide();
    $('.b-layout__main-menu-item_create span').on('click',function ShowCreateTask(){
        $('.b-form__create-task').toggle();
    });
    $('.b-layout__main-menu-item_show-task').on('click',function ShowAllTasks(){
        $.ajax({
            method:'POST',
            url:'index.php',
            data: 'Showus=gettask',
            success: function(result){
                var data = JSON.parse(result);
                var div = document.createElement('div');
                var taskname = document.createElement('h2');
                var textdescription = document.createTextNode("TASK DESCRIPTION");
                var texttaskname = document.createTextNode("TASK NAME");
                var description = document.createElement('h3');
                $('.b-layout__task_or_user-list').append(div);
                description.appendChild(textdescription);

                taskname.appendChild(texttaskname);
                div.appendChild(taskname);
                div.appendChild(description);

                for(var i =0;i<data.length;i++){
                    var span = document.createElement('h2');
                    var span2 =document.createElement('h3');
                    var txt = document.createTextNode(data[i].taskname);
                    var txt2 = document.createTextNode(data[i].description);
                    span.appendChild(txt);
                    span2.appendChild(txt2);
                    var wrapper = document.createElement('div');
                    wrapper.appendChild(span);
                    wrapper.appendChild(span2);
                    div.appendChild(wrapper);
                    $('.b-layout__task_or_user-list').append(div);
                }
                $('.b-layout__task_or_user-list div h2').addClass('b-task_or_user-list__item-taskname');
                $('.b-layout__task_or_user-list div h3').addClass('b-task_or_user-list__item-taskdescription');
                $('.b-layout__task_or_user-list div').filter(':first').addClass('wrapper');

            }

        });
    });
    $('.b-layout__main-menu-item_show-user').on('click', function ShowAllUsers(){
        $.ajax({
           method: 'POST',
            url: 'index.php',
            data:'Showus=getuser',
            //alert('wefwe');
        success:
            function(result){
                var data = JSON.parse(result);
                for(var i =0; i<data.length;i++){
                    var div = document.createElement('div');
                    var span = document.createElement('h2');
                    var span2 =document.createElement('h3');
                    var txt2 = document.createTextNode(data[i].username);
                    var txt = document.createTextNode(data[i].email);
                    span2.appendChild(txt2);
                    span.appendChild(txt);
                    div.appendChild(span2);
                    div.appendChild(span);
                    $('.b-layout__task_or_user-list').append(div);
                }
                $('.b-layout__task_or_user-list div h2').addClass('b-task_or_user-list__item-author');
                $('.b-layout__task_or_user-list div h3').addClass('b-task_or_user-list__item-email');

                }
        });
    });
});
