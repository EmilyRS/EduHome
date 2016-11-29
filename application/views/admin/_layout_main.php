<?php $this->load->view('admin/components/page_head');?>

  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="color:#34495e;"></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                     <?php $this->load->view($subview,$this->data); ?>
                  
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



<!-- $this->load->view($view,$page); 
if(isset($page))
 $this->load->view($view,$page); 
else
 $this->load->view($view);-->

 <?php $this->load->view('admin/components/page_tail',$this->data); ?>