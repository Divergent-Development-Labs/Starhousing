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
});
