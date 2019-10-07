//Event mouse down and leaving
$('input,textarea').one('blur',function (e) {
    $('.error li').remove();
    $('.error').removeAttr('style');
  if($(this).val()==''||$(this).val()==null)
  {
     $(this).parent().attr('style','border-color:red');
     $(this).before('<li style=" margin-left:13px;font-size:13px ;color: red;font-weight: bold"> This is required</li>');
  }
});
//Event click post form
$('button[name="submit"]').off().on('click',function (e) {
    // e.preventDefault();
    if($('.error li').length!=0)
    {
       $('.error li').remove();
       $('.error').removeAttr('style');
    }
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