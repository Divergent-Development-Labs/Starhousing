$(document).ready(function() {

    $(".galleryImageLink").off('keyup, change').on('keyup, change', setGalleryArray);    

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
            $('.CentRateValue').prop('required', false);   
        }
        else{
            $('.bhkOrSqftTypeValue').attr('placeholder', 'Ener Cent value');
            $('.bhkOrSqftTypeLabel').html('Cent value');            
            $('.CentRateDiv').show();   
            $('.CentRateValue').prop('required', true);   
        }

        // console.log(event.target.value);
    })

} );

function setGalleryArray(){
    var arr = [];
    
    $.each($('.galleryImageLink'), function(k, ele){
        console.log(k, ele);
        console.log($(ele).val());
        var val = $(ele).val().match("file/d/(.*)/view");
        if(val && val[1] != null){
            arr.push(val[1]);
        }
    });
    
    var arrData = JSON.stringify(arr);
    $('#galleryLinkArray').val(arrData);
}
