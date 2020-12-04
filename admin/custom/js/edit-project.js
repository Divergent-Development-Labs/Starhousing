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
        $('.bhkOrSqftTypeDiv').removeClass('d-none');
        $('.CentRateDiv').removeClass('d-none');   
        // $('.CentRateDiv').removeClass('d-block');   

        if(typeValue == 1){
            $('.bhkOrSqftTypeValue').attr('placeholder', 'Ener BHK value');
            $('.bhkOrSqftTypeLabel').html('BHK value');         
            $('.CentRateDiv').hide();   
        }
        else{
            $('.bhkOrSqftTypeValue').attr('placeholder', 'Ener Cent value');
            $('.bhkOrSqftTypeLabel').html('Cent value');            
            $('.CentRateDiv').show();   
        }

        // console.log(event.target.value);
    })

} );

