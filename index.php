<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test homepage</title>
        <meta charset="utf-8">

        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


        <!--            Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <!--            FONT AWESOME-->

        <link href="assets/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>

        <!--        CUSTOM CSS-->
        <link href="assets/css/font-awesome/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome/css/media-query.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!--HEADER
=================================================================-->

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">LOGO<em>GOES</em>HERE</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">WHY US</a></li>
                        <li  class="active"><a href="#"> OUR SERVICES</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMPANY FORMATION<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right questions">
                        <li><a href="#" class="pull-right">Questions ? Let's talk</a><p>000-000-0000|9AM TO 6AM SUPPORT</p></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <!-- ====JUMBOTRON=====-->

        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <h1 class="text-center">Incorporate in all 50 states</h1>
                    <p class="text-center">Fast & efficient, full service </p>
                </div>
                <div class="row jumbo-row">
              
                    <div class="col-sm-6  left-column pull-left">
                        MAIN SERVICES OFFERED:
                        <ul>
                            <li><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;&nbsp;  company formation</li>
                            <li><i class="fa fa-user "></i>&nbsp;&nbsp;   registered agent</li>
                            <li><i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;&nbsp;   virtual offices</li>
                            <li><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;  business plan preparation</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;  office system setup</li>
                            <li>
                                <button type="button" class="btn btn-primary btn-lg frame-button">GET YOUR QUOTE NOW!</button>
                            </li>
                        </ul>
                        <p class="text-center">

                        </p>
                    </div>
                    <div class="col-sm-6 image-row">
                        <button class="btn btn-primary play-button" data-toggle="modal" data-target=".bd-example-modal-lg">                         
                            <i class="fa fa-play" style="font-size:48px;color:white"></i>
                        </button>
                        <img src="assets/img/businessman-cloud.jpg"  class=" img-responsive play-image" alt=""/>
                    </div>
                 
                </div>


                <div class="modal fade bd-example-modal-lg videoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <iframe width="1280" height="720" src="https://www.youtube.com/embed/Xhn7FHHQbVw" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- ====JUMBOTRON=====-->

        <!--        ===CREDIT CARDS===-->

        <div class="well">
            <div class="row">
                <div class="text-center">
<!--                    <i class="fa fa-cc-visa" style="font-size:48px; background-color: blue;"></i>
                    <i class="fa fa-cc-mastercard" style="font-size:48px;background-color: blue;"></i>
                    <i class="fa fa-cc-amex" style="font-size:48px;background-color: #51c1d4;"></i>
                    <i class="fa fa-cc-discover" style="font-size:48px;background-color: #ccff99;"></i>-->
                    <img class="credit-card-png" src="assets/img/credit-cards/visa.png" alt=""/>
                    <img class="credit-card-png" src="assets/img/credit-cards/mastercard.png" alt=""/>
                    <img class="credit-card-png" src="assets/img/credit-cards/amex.png" alt=""/>
                    <img class="credit-card-png" src="assets/img/credit-cards/discover.png" alt=""/>
                </div>
            </div>
        </div><!--        ===CREDIT CARDS===-->

        <!--        ===SERVICES OFFERED===-->
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2>Services offered</h2>
                </div>

                <p class="text-center">
                    Florida Corporate Center is uniquely positioned to provide consulting services to businesses.
                    We do this through a unique collection of established tools, processes, unique expertise and strategies that help companies find solutions when they need them at the best market rates possible.
                    Our experts are standing by 24 hours a day, 7 days a week, when YOU need us, to help you discover our specialties and how they will enhance your ability to grow, become more secure and make and hold onto more profit.
                </p>


            </div>
            <div class="col-sm-12 service-row">

                <div class="row">
                    <div class="col-sm-7 five-three">
                        <div class="row">
                            <div class="col-sm-4">

                                <img src="assets/img/bookkeeping.jpg" class="img-thumbnail img-first-row mob-width" alt=""/>

                                <div class="div-border-top">
                                    <h3 class="text-center">Bookkeeping</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta quis nisi ut scelerisque.

                                    </p>
                                    <button type="button" class="btn btn-default btn-lg btn-block btn-custom">LEARN MORE</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img src="assets/img/tax_return.jpg"  class="img-thumbnail img-first-row mob-width" alt=""/>
                                <div class="div-border-top">
                                    <h3 class="text-center">TAX RETURN PREPARATION</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta quis nisi ut scelerisque.

                                    </p>
                                    <button type="button" class="btn btn-default btn-lg btn-block btn-custom">LEARN MORE</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img src="assets/img/employees_background_screening.jpg" class="img-thumbnail img-first-row mob-width"  alt=""/>
                                <div class="div-border-top">
                                    <h3 class="text-center">EMPLOYEE BACKGROUND SCREENING</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta quis nisi ut scelerisque. 

                                    </p>
                                    <button type="button" class="btn btn-default btn-lg btn-block btn-custom">LEARN MORE</button>
                                </div>
                            </div><!-- end inner row -->
                        </div>
                    </div>
                    <div class="col-sm-5 five-two">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="assets/img/employees_drug_testing.jpg"  class="img-thumbnail img-second-row mob-width" alt=""/>
                                <div class="div-border-top">
                                    <h3 class="text-center">EMPLOYEE DRUG TESTING</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta quis nisi ut scelerisque.

                                    </p>
                                    <button type="button" class="btn btn-default btn-lg btn-block btn-custom">LEARN MORE</button>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <img src="assets/img/tax_and_business_consulting.png" class="img-thumbnail img-second-row mob-width" width="304px" height="400px" alt=""/>

                                <div class="div-border-top">
                                    <h3 class="text-center">TAX & BUSINESS CONSULTING </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta quis nisi ut scelerisque.

                                    </p>
                                    <button type="button" class="btn btn-default btn-lg btn-block btn-custom">LEARN MORE</button>
                                </div>
                            </div>
                        </div><!-- end inner row -->
                    </div>
                </div>​<!-- end outer row -->
            </div><!--        ===SERVICES OFFERED===-->
        </div>

        <!--        ===REAL CLIENT EXPERIENCES=== -->

        <div id="client-experiences">
            <div class="row">
                <div class="text-center">
                    <h2>Real client experiences</h2>
                </div>     
            </div>
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Daniel - Dallas, TX</h3>
                                    <p>
                                        “I was previously using Interspire with several Mail
                                        Servers and it was a nightmare to manage, so switching
                                        over to Ravage was really a No-Brainer. No other Bulk 
                                        E-Mail System comes even close to Ravage - All the 
                                        other ones are full of shortcomings you have to learn
                                        to live with, but with Ravage you have everything you 
                                        always wanted in a single elegant hosted solution”.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Glynn Hackett - Manchester, UK</h3>
                                    <p>
                                        “After getting multiple SMTP Accounts shut down 
                                        because of my List Source and my Industry, I found
                                        out about Ravage and I am currently running 2 Mail 
                                        Servers plugged into Ravage with over 200 SMTPs at
                                        a fraction of the cost I was previously paying and 
                                        highly recommend Ravage as a solid long-term solution
                                        to anyone who’s ever had an SMTP Account shut down before”.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Daniel - Dallas, TX</h3>
                                    <p>
                                        “I was previously using Interspire with several Mail
                                        Servers and it was a nightmare to manage, so switching
                                        over to Ravage was really a No-Brainer. No other Bulk 
                                        E-Mail System comes even close to Ravage - All the 
                                        other ones are full of shortcomings you have to learn
                                        to live with, but with Ravage you have everything you 
                                        always wanted in a single elegant hosted solution”.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Glynn Hackett - Manchester, UK</h3>
                                    <p>
                                        “After getting multiple SMTP Accounts shut down 
                                        because of my List Source and my Industry, I found
                                        out about Ravage and I am currently running 2 Mail 
                                        Servers plugged into Ravage with over 200 SMTPs at
                                        a fraction of the cost I was previously paying and 
                                        highly recommend Ravage as a solid long-term solution
                                        to anyone who’s ever had an SMTP Account shut down before”.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Daniel - Dallas, TX</h3>
                                    <p>
                                        “I was previously using Interspire with several Mail
                                        Servers and it was a nightmare to manage, so switching
                                        over to Ravage was really a No-Brainer. No other Bulk 
                                        E-Mail System comes even close to Ravage - All the 
                                        other ones are full of shortcomings you have to learn
                                        to live with, but with Ravage you have everything you 
                                        always wanted in a single elegant hosted solution”.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Glynn Hackett - Manchester, UK</h3>
                                    <p>
                                        “After getting multiple SMTP Accounts shut down 
                                        because of my List Source and my Industry, I found
                                        out about Ravage and I am currently running 2 Mail 
                                        Servers plugged into Ravage with over 200 SMTPs at
                                        a fraction of the cost I was previously paying and 
                                        highly recommend Ravage as a solid long-term solution
                                        to anyone who’s ever had an SMTP Account shut down before”.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Daniel - Dallas, TX</h3>
                                    <p>
                                        “I was previously using Interspire with several Mail
                                        Servers and it was a nightmare to manage, so switching
                                        over to Ravage was really a No-Brainer. No other Bulk 
                                        E-Mail System comes even close to Ravage - All the 
                                        other ones are full of shortcomings you have to learn
                                        to live with, but with Ravage you have everything you 
                                        always wanted in a single elegant hosted solution”.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Glynn Hackett - Manchester, UK</h3>
                                    <p>
                                        “After getting multiple SMTP Accounts shut down 
                                        because of my List Source and my Industry, I found
                                        out about Ravage and I am currently running 2 Mail 
                                        Servers plugged into Ravage with over 200 SMTPs at
                                        a fraction of the cost I was previously paying and 
                                        highly recommend Ravage as a solid long-term solution
                                        to anyone who’s ever had an SMTP Account shut down before”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!--        ===FREQUENTLY ASKED QUESTIONS===-->

        <div id="faq">
            <div class="container">
                <div class="text-center faq-title">
                    <h2>frequently asked questions</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseOne1">
                                    <div class="circle">?</div>      <h4 class="panel-title">Collapsible Group Item #1</h4>

                                </div>
                                <div id="collapseOne1" class="panel-collapse collapse in">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseTwo1">
                                    <div class="circle">?</div>        <h4 class="panel-title">Collapsible Group Item #2</h4>

                                </div>
                                <div id="collapseTwo1" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseThree1">
                                    <div class="circle">?</div>                <h4 class="panel-title">Collapsible Group Item #3</h4>

                                </div>
                                <div id="collapseThree1" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <!--    four-->
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4" data-target="#collapseFour1">
                                    <div class="circle">?</div>         <h4 class="panel-title">Collapsible Group Item #4</h4>

                                </div>
                                <div id="collapseFour1" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!--        second accordion-->
                        <div class="panel-group" id="accordion2">
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseOne2">
                                    <div class="circle">?</div>         <h4 class="panel-title">Collapsible Group Item #1</h4>

                                </div>
                                <div id="collapseOne2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseTwo2">
                                    <div class="circle">?</div>       <h4 class="panel-title">Collapsible Group Item #2</h4>

                                </div>
                                <div id="collapseTwo2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseThree2">
                                    <div class="circle">?</div>       <h4 class="panel-title">Collapsible Group Item #3</h4>

                                </div>
                                <div id="collapseThree2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>

                            <!--    four-->
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4" data-target="#collapseFour2">
                                    <div class="circle">?</div>          <h4 class="panel-title">Collapsible Group Item #4</h4>

                                </div>
                                <div id="collapseFour2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5" data-target="#collapseFive2">
                                    <div class="circle">?</div>        <h4 class="panel-title">Collapsible Group Item #5</h4>

                                </div>
                                <div id="collapseFive2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseSix2">
                                    <div class="circle">?</div>        <h4 class="panel-title">Collapsible Group Item #6</h4>

                                </div>
                                <div id="collapseSix2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed"
                                     data-toggle="collapse" 
                                     data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseSeven2">
                                    <div class="circle">?</div>         <h4 class="panel-title">Collapsible Group Item #7</h4>

                                </div>
                                <div id="collapseSeven2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed"
                                     data-toggle="collapse" 
                                     data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseEight2">
                                    <div class="circle">?</div>       <h4 class="panel-title">Collapsible Group Item #8</h4>

                                </div>
                                <div id="collapseEight2" class="panel-collapse collapse">
                                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        ===TEMPOR===--> 
        <div id="tempor">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                             <img class="credit-card-png" src="assets/img/credit-cards/visa.png" alt=""/>
                    <img class="credit-card-png" src="assets/img/credit-cards/mastercard.png" alt=""/>
                    <img class="credit-card-png" src="assets/img/credit-cards/amex.png" alt=""/>
                    <img class="credit-card-png" src="assets/img/credit-cards/discover.png" alt=""/>
                    </div>
                    <div class="text-center tempor-title">
                        <h2>tempor fastidii electram pro cu</h2>
                    </div>
                    <div class="text-center lead tempor-text">
                        <p>
                            Graecis delicatissimi ad per. Te nam wisi disputationi, ea mei dicant vocibus. Elit delicatissimi no per, te soleat putent iuvaret ius. Eu munere partem pri, invidunt antiopam per no. Quo ad munere labitur. Te volutpat disputando sea. Modus probatus deterruisset ei duo, ei esse mediocrem sit.
                        </p>
                    </div>
                    <div class="text-center tempor-button">
                        <button type="button" class="btn btn-info btn-lg frame-button">Get your quote now</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    === CONTACT===-->
        <div id="contact">
            <div class="container">
                <div class="container-contact">
                    <div class="row">
                        <div class="text-center">
                            <small>  
                                <a href="#">Support</a>   //
                                <a href="#">Terms of Use</a> //
                                <a href="#">Refund Policy</a> // 
                                <a href="#">Privacy Policy</a>
                            </small> 
                        </div>
                    </div>
                    <div class="row contact-second-row">
                        <div class="text-center">
                            <p>
                                <small>  
                                    <strong>Phone:</strong>000-000-0000 <strong>Email:</strong> Support@MagelusTaxServices.com
                                </small> 
                            </p>
                            <p>
                                <small>  
                                    <strong>Miami Office:</strong>123 Easy Street,Los Angeles,CA 123456
                                </small> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--        ===FOOTER===-->
        <div id="footer-section">
            <footer>
                <div class="footer-text">
                    <div class="text-center">
                        <p> <small>  &COPY; 2016 All Rights Reserved.MagelusTaxServices.com</small></p>
                    </div>   
                </div>    
            </footer>
  
            <script src="assets/js/stopmodal.js" type="text/javascript"></script>
        </div>
    </body>
</html>
