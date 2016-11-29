<nav id="top" class="hidden-lg hidden-md" style="margin-top: -40px; margin-bottom: 40px;">
	<div class="nav toggle">
		<a class="" href="#"><span class="fa fa-bars" onclick="openNav()"></span></a>
	</div>
</nav>
<div id="content">
     <div class="container">
           <div class="row">
                    <!-- *** LEFT COLUMN ***
			_________________________________________________________ -->

                    <div id="sideNav" class="col-lg-3 col-md-3 col-sm-3 sidNav">
                      <div>
                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-tabs nav-pills nav-stacked ">
                                    <li class="list">
                                        <a data-toggle="tab" href="#menu1" onclick="openNav1()">About Course</a>
                                    </li>
                                    <li class="list courseLec" >
                                        <a data-toggle="collapse" href="#demo">Lectures</a>
                                        <ul id="demo" class="collapse nav nav-tabs  nav-stacked category-menu sub_tabs" >
                                            <li class="sub_list"><a data-toggle="tab" href="#sub-menu1" onclick="openNav1()">Lesson 1</a>
                                            </li>
                                            <li class="sub_list"><a  data-toggle="tab" href="#sub-menu2">Lesson 2</a>
                                            </li>
                                            <li class="sub_list"><a  data-toggle="tab" href="#sub-menu3">Lesson 3</a>
                                            </li>
                                            <li class="sub_list"><a  data-toggle="tab" href="#sub-menu4">Lesson 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list">
                                        <a  data-toggle="tab" href="#menu3">Course Exam</a>
                                    </li>

                                </ul>
                                
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu downloadsCourse" style="display: none;">

                            <div class="panel-heading">
                                <h3 class="panel-title">Dawnloads</h3>
                            </div>

                            <div class="panel-body">
                              <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="text.html">Slides</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Video</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">Files</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">Quiz</a>
                                    </li>
                              </ul>
                            </div>
                        </div>

                       </div>

                        <!-- *** MENUS AND FILTERS END *** -->
                    </div>
                    <!-- /.col-md-3 -->
                
                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			_________________________________________________________ -->

                    <div id="sideMain" class="col-lg-9 col-md-9 col-sm-9  col-xs-12">
					  <div class="tab-content">
						    <div id="menu1" class="tab-pane fade in active">
						      <?php $this->load->view('aboutCourse_view');?>
						    </div>
						     <div id="sub-menu1" class="tab-pane fade in  ">
						      <?php $this->load->view('courseContent_view');?>
						    </div>
						    <div id="menu3" class="tab-pane fade in">
						       <?php $this->load->view('exam_view');?>
						    </div>
                      </div>
                      
                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->