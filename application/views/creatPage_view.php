  <div id="content">
            <div class="container" id="contact">
                <div class="row">
                  <section>
                       <h3>Tabs with nav pills</h3> 

                        <div class="tabs">
                            <ul class="nav nav-pills nav-justified">
                                <li class="<?php if ($data == "T1") echo"active"; ?> "><a href="#tab2-1" data-toggle="tab">Tamplate 1</a>
                                </li>
                                <li class="<?php if ($data == "T2") echo"active"; ?>"><a href="#tab2-2" data-toggle="tab">Tamplate 2</a>
                                </li>
                                <li class=""><a href="#tab2-3" data-toggle="tab">Template 3</a>
                                </li>
                                <li class=""><a href="#tab2-4" data-toggle="tab">Template 4</a>
                                </li>
                                <li class=""><a href="#tab2-5" data-toggle="tab">Template 5</a>
                                </li>
                                <li class=""><a href="#tab2-6" data-toggle="tab">new Template</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane <?php  if ($data == "T1") echo"active"; ?>" id="tab2-1">
                                   <div class="container-fluid">	
                                   	<div class="row" style="margin-bottom: 10px;">
                                   		<div class="col-lg-8 col-md-8">
                                   		  press on content to change	
                                   		</div>
                                   		<div class="col-lg-4 col-md-4">
                                   		  <button type="button" class="btn btn-info" onclick="creat();">creat</button>	
                                   		</div>
                                   	  
                                   	</div>
                                   	<div class="row">
                                       <?php $this->load->view('templat1_view'); ?>
                                    </div>
                                   </div>
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane <?php if ($data == "T2") echo"active"; ?>" id="tab2-2">
                                    <div class="container-fluid">	
	                                   	<div class="row" style="margin-bottom: 10px;">
	                                   		<div class="col-lg-8 col-md-8">
	                                   		  press on content to change	
	                                   		</div>
	                                   		<div class="col-lg-4 col-md-4">
	                                   		  <button type="button" class="btn btn-info" onclick="creat();">creat</button>	
	                                   		</div>
	                                   	  
	                                   	</div>
	                                   	<div class="row">
	                                    <?php $this->load->view('templat2_view'); ?>
	                                    </div>
                                   </div>
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane " id="tab2-3">
                                    <p>
                                        NON.
                                    </p>
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane " id="tab2-4">
                                    <p>
                                        NON.
                                    </p>
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane " id="tab2-5">
                                    <p>
                                        NON.
                                    </p>
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane " id="tab2-6">
                                    <p>
                                        NON.
                                    </p>
                                </div>
                                <!-- /.tab -->
                            </div>
                        </div>
                        <!-- /.tabs -->
                     
                  </section> 

                </div>
                <!-- /.row -->
            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->
