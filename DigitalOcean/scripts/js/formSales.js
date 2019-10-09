var sale= {
     init:function () {
         this.register();
     },
    register:function () {
       $('#btn_submit').on('click',function (e) {
           e.preventDefault();
           $.ajax({
              url:'core/process.php', //Currently it is at the index
              type: 'POST',
              dataType: 'json',
              data: {
                info: sale.getData()
              },
               success:function (res) {
                 if(res!=true)
                 {
                    $('#frm_sales .form-group>*').each(function (idx,val) {
                        for (var prop in res)
                        {
                            if ($(this).prop('name')==prop)
                            {
                                $(this).before('<li style=" list-style-type: none;margin-left:13px;font-size:13px ;color: red;font-weight: bold">'+res[prop]+'</li>');
                              break;
                            }
                        }
                    });
                 }else
                 {
                     $('#frm_sales').load('layout/alert.html');

                 }
               },
               error: function(jqxhr, status, exception) {
                   alert('Exception:', exception);
               }
          });
       });
    },
    getData:function () {
         var arrChecked=[];
        $('#frm_sales [name="project"]').each(function( index ) {
             if( $( this ).is(':checked') ){
                 arrChecked.push($(this).val());
             }
        });
         var data= {
             firstname: $('#frm_sales [name="firstname"]').val(),
             lastname: $('#frm_sales [name="lastname"]').val(),
             email: $('#frm_sales [name="email"]').val(),
             phone: $('#frm_sales [name="phone"]').val(),
             company: $('#frm_sales [name="company"]').val(),
             role: $('#frm_sales [name="role"]').val(),
             seniority: $('#frm_sales [name="seniority"]').val(),
             usecase: $('#frm_sales [name="usecase"]').val(),
             spend: $('#frm_sales [name="spend"]').val(),
             migration: $('#frm_sales [name="migration"]').val(),
             project:   arrChecked,
             discription: $('#frm_sales [name="discription"]').val(),
         };
        return  data;
    }
};
sale.init();
