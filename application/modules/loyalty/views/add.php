<style>
    .modal-footer .btn + .btn {
    margin-bottom: 5px !important;
    margin-left: 5px;
}
.datepicker{z-index:9999 !important;}
</style>
<div id="commonModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('loyalty/loyalty_add') ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><?php echo (isset($title)) ? ucwords($title) : "" ?></h4>
                </div>
                <div class="modal-body"> 
                    <div class="loaders">
                        <img src="<?php echo base_url().'assets/images/Preloader_3.gif';?>" class="loaders-img" class="img-responsive">
                    </div>
                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                    <div class="form-body">
                        <div class="row">
                             <div class="col-md-12" >
                              <div class="col-md-6" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('user_name');?></label>
                                    <div class="col-md-9">

                                        <select class="formcontrol" multiple="" name="user_id[]" id="user_id" placeholder="<?php echo lang('select_user');?>" style="width:100%">
                                           
                                            <?php if(!empty($results)){foreach($results as $result){?>
                                              <option value="<?php echo $result->id;?>"><?php echo $result->name;?></option>
                                            <?php }}?>
                                        </select>
                                         <span class="help-block m-b-none"><?php echo form_error('user_id'); ?></span>  
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12" >
                              <div class="col-md-6" >
                                <div class="form-group">
                                 <label class="col-md-3 control-label"><?php echo lang('title_en');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title_en" id="title_en" placeholder="<?php echo lang('title_en');?>"/>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note');?></span>
                                   
                                </div>
                            </div>

                                <div class="col-md-6" >
                                <div class="form-group">
                                 <label class="col-md-3 control-label"><?php echo lang('title_el');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title_el" id="title_el" placeholder="<?php echo lang('title_el');?>"/>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('greek_note');?></span>
                                   
                                </div>
                            </div>
                          </div>

                            <div class="col-md-12" >
                             <div class="col-md-6" >
                               <div class="form-group">
                                 <label class="col-md-3 control-label"><?php echo lang('description_en');?></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description_en" id="description_en" placeholder="<?php echo lang('description_en');?>"></textarea>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note');?></span>
                                    
                                </div>
                            </div>

                              <div class="col-md-6" >
                                <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo lang('description_el');?></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description_el" id="description_el" placeholder="<?php echo lang('description_el');?>"></textarea>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('greek_note');?></span>
                                   
                                   </div> 
                                </div>
                            </div>
                            
                              <div class="col-md-12" >
                               <div class="col-md-6" >
                                <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo lang('no_of_scane');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="no_of_scane" id="no_of_scane" placeholder="<?php echo lang('no_of_scane');?>"/>
                                    </div>
                                   
                                </div>
                            </div>
                            

                             <div class="col-md-6" >
                              <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('qr_code');?></label>
                                    <?php $characters = '1234567890';

                                    $string = '';

                                    for ($i = 0; $i < 6; $i++) {
                                    $string .= $characters[rand(0, strlen($characters) - 1)];
                                    }   
                                    ?>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" readonly="" name="qr_code" id="qr_code" value="<?Php echo $string;?>" placeholder="<?php echo lang('qr_code');?>" />
                                    </div>
                                </div>
                            </div>
                         </div>
                        
                          <div class="col-md-12" >
                            <div class="col-md-6" >
                             <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('start_date');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="start_date" id="start_date" placeholder="<?php echo lang('start_date');?>" readonly=""/>
                                    </div>
                              </div>
                           </div>
                            
                             <div class="col-md-6" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('end_date');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="end_date" id="end_date" placeholder="<?php echo lang('end_date');?>" readonly=""/>
                                    </div>
                                </div>
                            </div>
                         </div>

                            <div class="space-22"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo lang('reset_btn');?></button>
                    <button type="submit" id="submit" class="btn btn-primary" ><?php echo lang('submit_btn');?></button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<script type="text/javascript">
$('input[name="no_of_scane"]').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }
});

$("#start_date").datepicker({ 
               todayBtn: "linked",
               format: 'dd/mm/yyyy',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
               
                startDate: '-0m'
   });

$("#end_date").datepicker({
                startDate: '-0m',
                format: 'dd/mm/yyyy',
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                
                  });

    
</script>

<script type="text/javascript">
$("#user_id").select2({
  allowClear: true
  
});
</script>