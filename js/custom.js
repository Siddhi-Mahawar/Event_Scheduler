$(document).ready(function(){
//    $(":text[id='patient']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
//    $(":text[id='doctor']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
//    $(":password[id='docpass']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
//    $(":password[id='patientpass']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='adminemail']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-info");;
    $(":password[id='adminpassword']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-info");;
});
function checkvalidation(){
    if($(":text[id='patient']").val().trim().length===0)
    {
        $(":text[id='patient']").popover('show');
        setTimeout(function(){$(":text[id='patient']").popover('hide');},1500);
        $(":text[id='patient']").focus();
        return false;
    }
    
    else if($(":password[id='patientpass']").val().trim().length===0)
    {
        $(":password[id='patientpass']").popover('show');
        setTimeout(function(){$(":password[id='patientpass']").popover('hide');},1500);
        $(":password[id='patientpass']").focus();
        return false;
    }
    return true;
}
function checkValidations(){
    if($(":text[id='doctor']").val().trim().length===0)
    {
        $(":text[id='doctor']").popover('show');
        setTimeout(function(){$(":text[id='doctor']").popover('hide');},1500);
        $(":text[id='doctor']").focus();
        return false;
    }
    
    else if($(":password[id='docpass']").val().trim().length===0)
    {
        $(":password[id='docpass']").popover('show');
        setTimeout(function(){$(":password[id='docpass']").popover('hide');},1500);
        $(":password[id='docpass']").focus();
        return false;
    }
    return true;
}

function checkDetails()
{
    if($('#doctor').val().length===0)
    {
        alert('select Doctor');
        $('#doctor').focus();
        return false;
    }
    if($('#query').val().length===0)
    {
        alert('Please Enter the Query');
        return false;
    }
    return true;
}

function checkadmin()
{
    if($(":text[id='adminemail']").val().trim().length===0)
    {
        $(":text[id='adminemail']").popover('show');
        setTimeout(function(){$(":text[id='adminemail']").popover('hide');},1500);
        $(":text[id='adminemail']").focus();
        return false;
    }
    
    else if($(":password[id='adminpassword']").val().trim().length===0)
    {
        $(":password[id='adminpassword']").popover('show');
        setTimeout(function(){$(":password[id='adminpassword']").popover('hide');},1500);
        $(":password[id='adminpassword']").focus();
        return false;
    }
    return true;
}