$('#frm_sales .form-group>*').one({
    "blur": function() {
        $('#frm_sales li').remove();
        $('.error').removeAttr('style');
        if($(this).val()==''||$(this).val()==null) {
            $(this).parent().attr('style','border-color:red');
            $(this).before('<li style=" list-style-type: none;margin-left:13px;font-size:13px ;color: red;font-weight: bold"> This is required</li>');
        }
    },
});
//Event mouse down and leaving
$( "#frm_support input,textarea" ).on({
    "blur": function() {
        $('.error li').remove();
        $('.error').removeAttr('style');
        if($(this).val()==''||$(this).val()==null) {
            $(this).parent().attr('style','border-color:red');
            $(this).before('<li style=" list-style-type: none;margin-left:13px;font-size:13px ;color: red;font-weight: bold"> This is required</li>');
        }
    },
    "keydown": function() {
        $('.error li').remove();
        $('.error').removeAttr('style');
    }
});
$('#frm_sales .form-group>*').keydown(function () {
     $('.form-group li:first-child').remove();
});
//Event click post form
$('[name="submit"]').off().on('click',function (e) {
    // e.preventDefault();
    if($('.error li').length!=0)
    {
       $('.error li').remove();
       $('.error').removeAttr('style');
    }
    $('#frm_sales li').remove();
});

//refresh page
function closeIt()
{
    if($('.error li').length!=0)
    {
        $.post( "core/refresh.php", function( data ) {
            console.log('sucses!');
        });

    }
}
window.onbeforeunload = closeIt;
//refresh tabs
$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    $(this).attr('style','color:black');
    localStorage.setItem('activeTab', $(e.target).attr('href'));

});
var activeTab = localStorage.getItem('activeTab');
if(activeTab){
    $('#myTab a[href="' + activeTab + '"]').tab('show');
}