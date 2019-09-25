<?php
session_start();
use ProjectNews\Controllers\NewsController;

require_once "../Shared/_Header.html";
require_once "../../Controllers/NewsController.php";
$model=new NewsController();
$id=null;
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $_SESSION['id_TypeNews']=$id;
}
$master=$model->index($id);


?>
<head>
    <base href="http://localhost/MyPHP/MVC/ProjectNews/Views/News/">
</head>
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
Menu
                    </li>


                </ul>
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <?php
                     foreach ($master as $key=>$value)
                     {
                         echo ' <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>'.$value['TieuDe'].'</b></h4>
                    </div>
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="'.$value['TieuDeKhongDau'].'_'.$value['id'].'">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="../../Scripts/image/'.$value['Hinh'].'" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>'.$value['TieuDe'].'</h3>
                            <p>'.$value['TomTat'].'.</p>
                            <a class="btn btn-primary" href="'.$value['TieuDeKhongDau'].'/'.$value['id'].'">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>';
                     }
                    ?>
                </div>
            </div>



                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div>

        </div>

    </div>
    <!-- end Page Content -->
<?php
require_once "../Shared/_Footer.html";
?>