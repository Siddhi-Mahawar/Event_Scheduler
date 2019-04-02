/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    $(":text[id='pemail']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='pname']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='paddress']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='pmobile']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='pdob']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":password[id='ppassword']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='demail']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='dname']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='daddress']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='dmobile']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='ddob']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":password[id='dpassword']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='dspe']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='dedu']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
    $(":text[id='dexp']").popover({placement:"top"}).data("bs.popover").tip().addClass("popover-danger");
});
function checkvalidation(){
    if($(":text[id='pemail']").val().trim().length===0)
    {
        $(":text[id='pemail']").popover('show');
        setTimeout(function(){$(":text[id='pemail']").popover('hide');},1500);
        $(":text[id='pemail']").focus();
        return false;
    }
    if($(":text[id='pname']").val().trim().length===0)
    {
        $(":text[id='pname']").popover('show');
        setTimeout(function(){$(":text[id='pname']").popover('hide');},1500);
        $(":text[id='pname']").focus();
        return false;
    }
    if($(":text[id='pmobile']").val().trim().length===0)
    {
        $(":text[id='pmobile']").popover('show');
        setTimeout(function(){$(":text[id='pmobile']").popover('hide');},1500);
        $(":text[id='pmobile']").focus();
        return false;
    }
    if($(":text[id='paddress']").val().trim().length===0)
    {
        $(":text[id='paddress']").popover('show');
        setTimeout(function(){$(":text[id='paddress']").popover('hide');},1500);
        $(":text[id='paddress']").focus();
        return false;
    }
    if($(":text[id='pdob']").val().trim().length===0)
    {
        $(":text[id='pdob']").popover('show');
        setTimeout(function(){$(":text[id='pdob']").popover('hide');},1500);
        $(":text[id='pdob']").focus();
        return false;
    }
    else if($(":password[id='ppassword']").val().trim().length===0)
    {
        $(":password[id='ppassword']").popover('show');
        setTimeout(function(){$(":password[id='ppassword']").popover('hide');},1500);
        $(":password[id='ppassword']").focus();
        return false;
    }
    return true;
}

function checkDoctor(){
    if($(":text[id='demail']").val().trim().length===0)
    {
        $(":text[id='demail']").popover('show');
        setTimeout(function(){$(":text[id='demail']").popover('hide');},1500);
        $(":text[id='demail']").focus();
        return false;
    }
    if($(":text[id='dname']").val().trim().length===0)
    {
        $(":text[id='dname']").popover('show');
        setTimeout(function(){$(":text[id='dname']").popover('hide');},1500);
        $(":text[id='dname']").focus();
        return false;
    }
    if($(":text[id='dmobile']").val().trim().length===0)
    {
        $(":text[id='dmobile']").popover('show');
        setTimeout(function(){$(":text[id='dmobile']").popover('hide');},1500);
        $(":text[id='dmobile']").focus();
        return false;
    }
    if($(":text[id='daddress']").val().trim().length===0)
    {
        $(":text[id='daddress']").popover('show');
        setTimeout(function(){$(":text[id='daddress']").popover('hide');},1500);
        $(":text[id='daddress']").focus();
        return false;
    }
    if($(":text[id='ddob']").val().trim().length===0)
    {
        $(":text[id='ddob']").popover('show');
        setTimeout(function(){$(":text[id='ddob']").popover('hide');},1500);
        $(":text[id='ddob']").focus();
        return false;
    }
    if($(":text[id='dexp']").val().trim().length===0)
    {
        $(":text[id='dexp']").popover('show');
        setTimeout(function(){$(":text[id='dexp']").popover('hide');},1500);
        $(":text[id='dexp']").focus();
        return false;
    }
    if($(":text[id='dedu']").val().trim().length===0)
    {
        $(":text[id='dedu']").popover('show');
        setTimeout(function(){$(":text[id='dedu']").popover('hide');},1500);
        $(":text[id='dedu']").focus();
        return false;
    }
    if($(":text[id='dspe']").val().trim().length===0)
    {
        $(":text[id='dspe']").popover('show');
        setTimeout(function(){$(":text[id='dspe']").popover('hide');},1500);
        $(":text[id='dspe']").focus();
        return false;
    }
    else if($(":password[id='dpassword']").val().trim().length===0)
    {
        $(":password[id='dpassword']").popover('show');
        setTimeout(function(){$(":password[id='dpassword']").popover('hide');},1500);
        $(":password[id='dpassword']").focus();
        return false;
    }
    return true;
}