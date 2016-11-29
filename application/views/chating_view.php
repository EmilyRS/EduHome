
        <section>
            <div class="container-fluid">
            	<div class="row">
                    <div class="col-md-9">
                        <div class="panel-group accordion" id="accordionThree">
                            <div class="panel panel-default">
                                <div class="panel-heading panel_new_msg">
                                    <h4 class="panel-title">
				                      <?php
				                      if($to_id == null)
									     echo "New Message";
									  else {
										  	echo $to_id->user_name;
									  } 
				                      ?>
                                    </h4>
                                </div>
                                
                     <?php
			            //if($to_id != null)
					    echo'
					          <div class="container-fluid" style="height: 100%">
	                              <div class="row" > 
                            		<div class="chat_box">
                            		<div class="container-fluid">
                            		    <div class="row">
	                            		    <div class="col-lg-1 col-md-1">
	                            		      <div class="row">
									      	    <img src="'; echo base_url(); echo'img/product3.jpg"  class="img-circle img-responsive" alt="Cinque Terre" style="">
											  </div>
									      	  <div class="row text-center">
									      	      ola
									      	  </div>
									      	</div>
	                            		    <div class="col-lg-11 col-md-11">
									      	   <div class="alert alert-info "  role="alert"><p class="time">12 pm 12-04-2012</p>This is A</div>
									      	</div>
								      	</div>
								      	<div class="row">
	                            		    <div class="col-lg-11 col-md-11">
									      	   <div class="alert alert-danger msg_insert"  role="alert"><p class="time">12 pm 12-04-2012</p>This is B</div>
									      	</div>
									      	<div class="col-lg-1 col-md-1">
	                            		      <div class="row">
									      	    <img src="'; echo base_url(); echo'img/product3.jpg"  class="img-circle img-responsive" alt="Cinque Terre" style="">
											  </div>
									      	  <div class="row text-center">
									      	      Alaa
									      	  </div>
									      	</div>
								      	</div>
								      </div>
								      	
									</div>
                                    <div class="panel panel-info">
										 <textarea class="form-control t_send" rows="5" id="comment" style="resize: none;"></textarea>
										 <div class="panel-footer" style="background-color:white;">
										     <div class="col-lg-9 col-md-9">
										         <div class="checkbox">
											         <label><input id="press_enter" type="checkbox">press enter to send</label>
											     </div>
										     </div>
										     <div class="col-lg-3 col-md-3">
	                                        		<button type="button" id="submit" onclick="send_btnChat('; echo $from_id+","+$to_id; echo')"  class="btn btn-primary">Send</button>		
	                                         </div>
										 </div>
									</div> 
								</div>
                             </div>
                    ';
					?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel-group accordion" id="accordionThree">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
					                      My Freinds
                                     </h4>
                                </div>
                                <div  class="panel-body freind_list" style="height: 570px;">
                                   	<?php
                                   	     foreach ($user_info as $data)
										 {
										 	echo '
										 	<div class="row freind" type="submit" onclick="open_chat_with('.$data->user_id.');">
	                                    		<div class="col-lg-3 col-md-3 colo-sm-2">
	                                    			 <img src="'; echo base_url(); echo'img/product3.jpg"  class="img-rounded img-responsive" alt="Cinque Terre" style=""> 
	                                    		</div>
	                                    		<div class="col-lg-7 col-md-7 col-sm-2" style="margin-top: 2%; padding-left:0px;" >
	                                    			'.$data->user_name.' 
	                                    		</div>
	                                    		<div class="col-lg-1 col-md-1 col-sm-1" >
	                                    		   <i class="fa fa-circle" style="';
	                                    		   if($data->online == 1 ){
	                                    		   	 echo 'color:green;';
												   }else{
												   	echo'color:gray;';
												   }
												   echo' font-size:12px; margin-top:5px;"></i>
	                                    		</div>
		                                    </div> 
										 	';
										 }
                                   	
                                   	?>

                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!-- /.container -->

        </section>

  