var home =
    {
        innit:function () {
         home.LoadMenuMutil();
        },
         LoadMenuMutil:function () {
             $.ajax(
                 {
                   url:'../../Controllers/HomeController.php?action=menu',
                     type: "GET",
                    // data:{action:'menu'}, //case:2
                     dataType: "json",
                     success:function (res) {
                        if(res.length!=0)
                        {


                          var xhtml='';
                            $.each(res,function (idx,val) {
                                //conver typenews to array
                                var typeNews= this.Typenews.split(',');
                                 xhtml+='<li href="'+ val.TenKhongDau+'" class="list-group-item menu1">'+val.Ten+'</li>\n' +
                                     '<ul>\n';
                                     $.each(typeNews,function (i,value) {
                                        if(i%2==0)
                                        {
                                           xhtml+= '<li class="list-group-item">\n' +
                                                        '<a href="'+typeNews[i+1]+'">'+value+'</a>\n' +
                                                  '</li>\n';
                                        }
                                     });
                                     xhtml+='</ul>';
                            });
                             //use jquery after
                             $('#menu').append(xhtml);
                        }
                     }
                 }
             );
        }
        
    };
home.innit();

