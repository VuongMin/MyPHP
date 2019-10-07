<?php
session_start();
$frm_error=isset($_SESSION['frm_error'])?$_SESSION['frm_error']:null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Digital Ocean</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="scripts/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="bootstrap/lib/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/lib/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row nav-top">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p style="line-height: 40px;font-weight:bold;font-size: 12px" >
                    <span class="btn btn-info" style="  font-weight: bold;  text-transform: uppercase;font-size:10px ;width: 38px;height: 19px;line-height: 5px;padding-left:5px;color: #031b4e;  ">New</span>
                    <a href="" >
                        Fresh features and 1-Click Apps for DigitalOcean Kubernetes
                    </a><i class="fas fa-angle-right"></i></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <nav  class="header">
                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <a  class="nav-link " href="#">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Sign in</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <hr style="margin: 0;padding: 0"/>
    <!-- End nav-top -->
    <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-top">
                <a class="navbar-brand" href="#">Digital Ocean</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto " >
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Marketplace</a>
                                <a class="dropdown-item" href="#">Customers</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Marketplace <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Partners
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Community
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Pricing

                            </a>
                        </li>

                    </ul>
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>

                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar--->
    <hr style="margin: 0;padding: 0"/>
</div>
<div class="container" >
    <div class="row " style="background: #fafbfc">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paragraph" >
            <h1 >Get in touch</h1>
            <p style=" margin: 0 auto;width:850px;text-align: center;font-size: 20px;color: #808693; ">Have a question? Send us a note using the form below and someone from the DigitalOcean team will be in touch soon.</p>
        </div>
    </div>
    <!--tabs-->
    <div class="row " >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- My tabs--->
            <ul class="nav nav-tabs" id="myTab" role="tablist"style="background: #fafbfc;padding-top: 50px; ">
                <li class="nav-item" style="width: 386px; background: #fafbfc;">
                    <a class="nav-link active"  id="tab-support" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        Need Support?<br/>
                        <span  style="color: rgba(3,27,78,.25)">Open a support ticket and get help, fast</span>
                    </a>

                </li>
                <li class="nav-item"style="width: 386px;background: #fafbfc; ">
                    <a class="nav-link" id="tab-sale"  data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        Sales Inquiries<br/>
                        <span class="" style="color: rgba(3,27,78,.25)">Contact sales about large deployments</span>
                    </a>
                </li>
                <li class="nav-item" style="width: 386px ;background: #fafbfc;">
                    <a class="nav-link" id="tab-report" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Report Abuse<br/>
                        <span class=""style="color: rgba(3,27,78,.25)" >Report any abuse or suspicious activity</span>
                    </a>
                </li>
            </ul>
            <!--End my tabs-->
            <!--tabs content-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- Tabs-support-->
                    <div class="container">
                        <p class="fast-answer" style="text-align: center">
                            Existing customer?
                            <a href="https://cloudsupport.digitalocean.com">Open a ticket</a>.
                            <br>
                            Need a fast answer? Search our
                            <a href="https://www.digitalocean.com/community/questions">Community Q&amp;A</a>.
                        </p>
                        <form id="frm_support" action="core/process.php" method="post">
                            <div class="form-row ">
                                <div  class="form-group col-md-6">
                                    <div class="error">
                                        <?php echo  ($frm_error!=null&&!empty($frm_error['name']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['name']." </li>":""; ?>
                                        <input  style="border: none" type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="error">
                                        <?php echo  ($frm_error!=null&&!empty($frm_error['Email']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['Email']." </li>":""; ?>
                                        <input style="border: none" type="email" class="form-control" name="email" placeholder="Email">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <select  style="height: 48px;"  class="form-control">
                                    <option value="0"  selected >Reason for getting in touch</option>
                                    <option value="1">Account / Control Panel</option>
                                    <option value="2">App / Website</option>
                                    <option value="3">Billing</option>
                                    <option value="4">Droplets</option>
                                    <option value="5">Networking</option>
                                    <option value="6">Something is Broken</option>
                                    <option value="7">Spaces</option>
                                    <option value="8">Volumes</option>
                                    <option value="9">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="error">
                                    <?php echo  ($frm_error!=null&&!empty($frm_error['Email']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['subject']." </li>":""; ?>
                                    <input type="text"  style="border: none"class="form-control" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="error">
                                    <?php echo  ($frm_error!=null&&!empty($frm_error['Email']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['descripton']." </li>":""; ?>
                                    <textarea type="text" style="height: 68px;width: 895px" class="form-control" name="descripton" placeholder="Brief description of how DigitalOcean can help you"></textarea>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <input  style="width: 443px;float: right;height: 48px;" style="border: none" type="submit"  name="submit" class="btn btn-primary" value="Sign in" />
                        </form>
                    </div>
                </div>
                <!---tabs sales -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Business Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Business Phone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Company Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="What is your primary role?">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="What is your seniority?">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="What is your use case?">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="What is your estimated monthly spend?">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="What is your timeline for deployment/migration?">
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Which products & services are you considering using in this project?</p>
                                    <input type="checkbox" name="" value="" > Droplets (VMs)<br/>
                                    <input type="checkbox" name="" value="" > Managed Kubernetes<br/>
                                    <input type="checkbox" name="" value="" > Spaces Object Storage<br/>
                                    <input type="checkbox" name="" value="" > Volumes Block Storage<br/>
                                    <input type="checkbox" name="" value="" > Managed Databases<br/>
                                    <input type="checkbox" name="" value="" > Premier Support<br/>
                                    <input type="checkbox" name="" value="" > Networking Tools (LBs, Firewalls, Floating IPs)<br/>
                                    <input type="checkbox" name="" value="" > Developer Tools (API, Monitoring, Team Accounts)<br/>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea style="width: 100%" type="" name="" placeholder="What is the biggest challenge you are trying to solve with this project?"></textarea>
                                </div>
                            </div>

                            <input  style="width: 100%;height: 48px" name="submit" type="submit" class="btn btn-primary float-right" value="Send Message">

                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>

                                    <select class="form-control" id="">
                                        <option value="0">Select Abuse Type</option>
                                        <option value="1">DMCA Takedown</option>
                                        <option value="2">Trademark Infringement</option>
                                        <option value="3">Spam</option>
                                        <option value="4">Phishing</option>
                                        <option value="5">Malware</option>
                                        <option value="6">Botnet</option>
                                        <option value="7">Bruteforce/PortScan</option>
                                        <option value="8">Child Abuse</option>
                                        <option value="9">Violent Threats and Harassment</option>
                                        <option value="10">Other</option>

                                    </select>

                                </div>
                                <p style="text-align: center;color: #808693;margin-top: 40px;">Please select an abuse type above</p>

                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p>
                                    Trademark abuse is the unauthorized use of a trademark on
                                    or in connection with goods or services in a way that is
                                    likely to cause confusion about the source of the goods or
                                    services.
                                </p>
                                <p>
                                    Trademarks are national or regionally registered symbols,
                                    words, signs, or names used to identify or distinguish the
                                    brand, goods, or services of a company or individual. Each
                                    country or region has their own specific laws and authorities
                                    around trademark. The USPTO, the trademark authority in the
                                    US, requires registration and approval of US recognized
                                    trademarks.
                                </p>
                                <p>
                                    This form provides an easy way for trademark owners (or their
                                    agents) to notify DigitalOcean about trademark abuse that
                                    may be hosted by our customers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---End tabs content-->
        </div>
    </div>
    <!---End tabs-->
</div>

<!--End paragraph question. -->
<!---footer -->
<div class="container-fluid">
    <div class="row footer">
        <div class="container">
            <div class="row">
                <div style="margin:0 auto;" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link active" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Leadership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Referral Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Press</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Legal & Security</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li   class="nav-item">
                            <a style="color: white" class="nav-link " href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Droplets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Kubernetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Managed Databases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Spaces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Load Balancers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Block Storage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tools & Integrations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Documentation</a>
                        </li><li class="nav-item">
                            <a class="nav-link active" href="#">Release Notes</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link active" href="#">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutorials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meetups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Q&A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Write for DOnations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Droplets for Demos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Hatch Startup Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Shop Swag</a>
                        </li> <li class="nav-item">
                            <a class="nav-link " href="#">Research Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Currents Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Open Source</a>
                        </li>


                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link active" href="#">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Web & mobile apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Website hosting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Big data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Managed services</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link active" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Report Abuse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"> System Status</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="background:white"/>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p style="   color:#808693 ;font-weight: 500;font-size: 15px">© 2019 DigitalOcean, LLC. All rights reserved.</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- My js-->
<script src="scripts/js/custom.js" ></script>
</body>
</html>