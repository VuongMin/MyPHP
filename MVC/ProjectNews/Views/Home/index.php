<?php
require  "../../Controllers/HomeController.php";
require_once "../Shared/_Header.html";
$model= new HomeController();
$slide= $model->slide();
?>

    <!-- Page Content -->
    <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">


                        <?php
                        foreach ($slide[0] as $key=>$val)
                        {
                            echo '  <div class="item ">
                                     <img class="slide-image" src="../../Scripts/image/'.$val['Hinh'].'" alt="">
                                 </div>';
                        }
                        ?>

                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	Menu
                    </li>


                </ul>
            </div>

            <div class="col-md-9">
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#">Category</a> |
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#">Category</a> |
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
						<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#">Category</a> |
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
						<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#">Category</a> |
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item --><!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#">Category</a> |
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->
						<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="#">Category</a> |
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                		<small><a href="loaitin.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>

							<div class="break"></div>
		                </div>
		                <!-- end item -->

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
<?php require_once "../Shared/_Footer.html" ?>


