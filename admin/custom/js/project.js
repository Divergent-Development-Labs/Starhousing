function addProject(){
    // console.log(input);
    $('#addProjectForm').addClass('was-validated');
    if(!$('#addProjectForm')[0].checkValidity()){
        return false;
    }
}

$( document ).ready(function() {


    $('#dz').DataTable( {
        "processing": true,
        "buttons": true,
        dom: 'Blfrtip',
        buttons: [
            {
                extend: 'copy',
                footer: true,
                exportOptions: {
                    columns: [0,1,2,3,4,5,6]
                }
            },
            {
                extend: 'print',
                footer: true,
                exportOptions: {
                    columns: [0,1,2,3,4,5,6]
                }
            },
            {
                extend: 'colvis',
                footer: true,
            }
        ],

        "searching": true    
    });

    // $(".project").keyup(function(){
    //     console.log('project.js record checking calling');
    //     var txt = $(this).val();
    //     recordError = $(this).next();

    //     console.log(recordError, txt);

    //     if(txt!="")
    //     {
    //     $.ajax({
    //         url:"ajax/isRecordExist.php",
    //         method:"post",
    //         data:{
    //         searchTxt:txt,
    //         table: 'project',
    //         field: 'project_name'
    //         },
    //         dataType:"json",
    //         success:function(data)
    //         {
    //         if(data != 2){
    //             $('#submit').prop('disabled', true);
    //             $(recordError).html('Project already Exist.!!');
    //         }
    //         else{
    //             $(recordError).html('');
    //             $('#submit').prop('disabled', false);
    //         }
    //         }
    //     });
    //     }
    //     else
    //     {
    //     $(recordError).html("");
    //     }
    // });
});
