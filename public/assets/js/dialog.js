function alertDialogUser($name,$fullname,$action,$title,$content,$link)
{
    $('#modalContent').text($content);
    $('#modalTitleText').text($title);
    $('#modalButtonText').text('  '+$action+' pengguna ini!');
    $('#modalFullname').text($fullname);
    $('#modalLink').attr('href',function () {
        return $(this).attr('href').replace('action',$link); 
    });
    
    
    $(document).ready(function(){
        $("#linkActionBlock,#linkActionDelete,#linkActionUnblock").click(function(){
            $("#modalUser").modal();
        });
         $("#cancel,#closes").click(function(){
            resetModal();
        });
    });
}

function resetModal(){
    $('#modalLink').prop('href','action');
    $('#modalButtonText').text('');

    
}







