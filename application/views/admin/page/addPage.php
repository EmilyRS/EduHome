<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row" >
              <div class="col-md-8 col-xs-12 text-center">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Page</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" action="creatPage" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Slug</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Select Parent</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option></option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Select Template</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="Template"  class="select2_single form-control" tabindex="-1">
                            <option></option>
                            <option value="T1">Template 1</option>
                            <option value="T2">Template 2</option>
                            
                          </select>
                         </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>        


