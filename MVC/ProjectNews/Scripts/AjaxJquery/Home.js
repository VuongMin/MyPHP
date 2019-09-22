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
                            var save;
                          var xhtml='';
                            $.each(res,function (idx,val) {
                                //conver typenews to array
                                var typeNews= this.Typenews.split(',');
                                console.log(typeNews);
                                 xhtml+='<li href="'+ val.TenKhongDau+'" class="list-group-item menu1">'+val.Ten+'</li>\n' +
                                     '<ul>\n';
                                     $.each(typeNews,function (i,value) {
                                        if(i==1||i==save+3)
                                        {
                                            save=i;//every loop save i to use for rules every add 3 unit
                                           xhtml+= '<li class="list-group-item">\n' +
                                                        '<a href="'+typeNews[i+1]+'?id='+ typeNews[i-1] +' '+'">'+value+'</a>\n' +
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

