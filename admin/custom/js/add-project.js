$(document).ready(function() {
    $(".project").keyup(function(){
        console.log('project.js record checking calling');
        var txt = $(this).val();
        recordError = $(this).next();

        console.log(recordError, txt);

        if(txt!="")
        {
        $.ajax({
            url:"ajax/isRecordExist.php",
            method:"post",
            data:{
            searchTxt:txt,
            table: 'project',
            field: 'project_name'
            },
            dataType:"json",
            success:function(data)
            {
            if(data != 2){
                $('#submit').prop('disabled', true);
                $(recordError).html('Project already Exist.!!');
            }
            else{
                $(recordError).html('');
                $('#submit').prop('disabled', false);
            }
            }
        });
        }
        else
        {
        $(recordError).html("");
        }
    });

    $('.projectType').off('change').on('change', ()=>{
        let typeValue = event.target.value;

        if(typeValue == 1){
            $('.bhkTypeDiv').removeClass('d-none');
            $('.sqftTypeDiv').addClass('d-none');
        }
        else{
            $('.sqftTypeDiv').removeClass('d-none');
            $('.bhkTypeDiv').addClass('d-none');        
        }

        console.log(event.target.value);
    })
})