<?php
session_start();
use ProjectNews\Controllers\NewsController;

require_once "../../Controllers/NewsController.php";
require_once "../Shared/_Header.html";
$id_detail=null;
if (isset($_GET))
{
  $id_detail=$_GET['id'];
}
$model=new NewsController();
$model_detail=$model->detail($id_detail);
$m_comment=$model->comment(rand(0,10));
$relate=null;
$highlight=null;
if(isset($_SESSION['id_TypeNews']))
{
 $relate= $model->relateto($_SESSION['id_TypeNews']);
 $highlight=$model->highlight($_SESSION['id_TypeNews']);
}

?>
<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h1><?php echo  $model_detail[0]['TieuDe'] ?></h1>

            <!-- Author -->
            <p class="lead">

            </p>

            <!-- Preview Image -->
            <img class="img-responsive" src="../../Scripts/image/<?php echo  $model_detail[0]['Hinh'] ?>" alt="">

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> <?php echo  $model_detail[0]['created_at'] ?></p>
            <hr>

            <!-- Post Content -->
            <p class="lead">
                <?php echo  $model_detail[0]['NoiDung'] ?>
            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>

            <hr>

            <!-- Posted Comments -->



         <?php
         foreach ($m_comment as $value)
         {
             echo ' <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">
                        <small>'.$value['created_at'].'</small>
                    </h4>
                  '.$value['NoiDung'].'
                </div>
            </div>';
         }

         ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin liên quan</b></div>
                <div class="panel-body">

                    <?php
                    foreach ($relate as $val)
                    {
                        echo ' <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="../../Scripts/image/'.$val['Hinh'].'" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>'.$val['TieuDe'].'</b></a>
                        </div>
                      
                        <div class="break"></div>
                    </div>
                    <!-- end item -->';
                    }
                    ?>


                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin nổi bật</b></div>
                <div class="panel-body">
                   <?php
                      foreach ($highlight as $value)
                      {
                          echo ' <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="../../Scripts/image/'.$value['Hinh'].'" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>'.$value['TieuDe'].'</b></a>
                        </div>
               
                        <div class="break"></div>
                    </div>
                    <!-- end item -->';
                      }
                    ?>


                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
<?php
require_once "../Shared/_Footer.html";
?>