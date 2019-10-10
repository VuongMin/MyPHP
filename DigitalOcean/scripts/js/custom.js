init();
checkSelected();
function init() {
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
//Event mouse down
    $( "#frm_support input,#frm_support textarea" ).on({
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
    //Event change select
    $('#tabsSelect').change(function () {
            checkSelected();
    });
}
//tabs report
function checkSelected() {
    var elementSelected=$('#tabsSelect option:selected');
    if(elementSelected.val()==0)
    {
        $('.Abuse-content').hide();
        $('#__start').show();
        $('#text').show();

    }else
    {
        $('.Abuse-content').hide();
        $('#text').hide();
        var value=elementSelected.val();
        switch (value) {
            case '1':{
                  $('#_dmca').show();
                  $('#__dmca').show();
                break;
            }
            case '2':{
                $('#_trademark').show();
                $('#__trademark').show();
                break;
            }
            case '3':{
                $('#_spam').show();
                $('#__spam').show();
                break
            }
            case '4':{
                $('#_phishing').show();
                $('#__phishing').show();

                break;
            }
            case '5':
            {
                $('#_malware').show();
                $('#__malware').show();

                break;
            }
            case '6':
            {
                $('#_botnet').show();
                $('#__botnet').show();

                break;
            }
            case '7':
            {
                $('#_bruteforce').show();
                $('#__bruteforce').show();

                break;
            }
            case '8':
            {
                $('#_childabuse').show();
                $('#__childabuse').show();
                break;
            }
            case '9':
            {
                $('#_violent').show();
                $('#__violent').show();
                break;
            }
            case '10':
            {
                $('#_other').show();
                $('#__other').show();
                break;
            }

        }
    }
}
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