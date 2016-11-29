          <div id="content">
            <div class="container">

                <div class="row">
					 <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Customer section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-tabs nav-pills nav-stacked">
                                    <li class="active">
                                       <a data-toggle="tab" href="#menu1"><i class="fa fa-user"></i> My account</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#menu2"><i class="fa fa-heart"></i> Messages</a>
                                    </li>
                                    <li>
                                         <a data-toggle="tab" href="#menu3"><i class="fa fa-list"></i> Mail</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#menu4"><i class="fa fa-list"></i> My Couses</a>
                                    </li>
                                    <li>
                                        <a data-toggle="" href=""><i class="fa fa-sign-out"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- *** RIGHT COLUMN END *** -->
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix" id="customer-order">                       
                        <div class="tab-content">
						    <div id="menu1" class="tab-pane fade in active">
						      <?php  $this->load->view('studentAccount_view'); ?>
						    </div>
						     <div id="menu2" class="tab-pane fade in  ">
						        <?php
						         
						                $sess_array = array('user_id' => "Ann");
										$this->session->set_userdata('logged_in', $sess_array);
										$arr_sess=$this->session->userdata('logged_in');
										$this->view_data['from_id']=$arr_sess['user_id'];
										
									//	 var_dump( $this->input->post('user_id'),TRUE);
										$default=$this->input->post('user_id',TRUE);
										if($default != null){
									//	    var_dump($default);
										    $this->view_data['to_id']=$this->Chat_model->get_user_info($default);
										}
										else{
										   $this->view_data['to_id']=null;
										
										}
										
										$this->view_data['user_info']=$this->Chat_model->get_users();
										    // if(!  $this->seesion-userdata('logged_in)){
											// redirect('user/login');
										// } 
										 
										
										$this->load->view('chating_view',$this->view_data);
		
						        ?>
						    </div>
						    <div id="menu3" class="tab-pane fade in">
						       
						    </div>
						    <div id="menu4" class="tab-pane fade in">
						        <?php  $this->load->view('studentCourses_view'); ?>
						    </div>
                      </div>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                   

                </div>
                <!-- /.row -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->