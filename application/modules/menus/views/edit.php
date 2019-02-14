<style>
    .modal-footer .btn + .btn {
    margin-bottom: 5px !important;
    margin-left: 5px;
}
</style>
<div id="commonModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('menus/menu_update') ?>" enctype="multipart/form-data">
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
                               <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('store');?></label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="store" id="store">
                                            <option value=""><?php echo lang('select_stores');?></option>
                                            <?php if(!empty($storeslist)){foreach($storeslist as $store){?>
                                              <option <?php if($results->store==$store->id) echo "selected";?> value="<?php echo $store->id;?>"><?php echo $store->store_name;?></option> 
                                            <?php }}?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" >
                               <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('menu_category');?></label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="menu_category" id="menu_category">
                                            <option value="">Select Menu Category</option>
                                            <?php if(!empty($menu_category)){foreach($menu_category as $result){?>
                                              <option <?php if($results->menu_category_id==$result->id) echo "selected";?> value="<?php echo $result->id;?>"><?php echo $result->category_name;?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('menu_subcategory');?></label>
                                    <div class="col-md-9">
                                       <select class="form-control" name="menu_subcategory_id" id="category">
                                            <option value="">Select Menu Subcategory</option>

                                            <?php if(!empty($menu_subcategory)){foreach($menu_subcategory as $result){?>
                                              <option <?php if($results->menu_subcategory_id==$result->id) echo "selected";?> value="<?php echo $result->id;?>"><?php echo $result->subcategory_name;?></option>
                                            <?php }}?>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>


                             <div class="col-md-12" >
                               <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('menu_name_en');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="menu_name_en" id="menu_name_en" placeholder="<?php echo lang('menu_name_en');?>" value="<?php echo $results->menu_name_en;?>"/>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note');?></span>
                                </div>
                            </div>
                            
                             <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('menu_name_el');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="menu_name_el" id="menu_name_el" placeholder="<?php echo lang('menu_name_el');?>" value="<?php echo $results->menu_name_el;?>"/>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('greek_note');?></span>
                                </div>
                            </div>
                            
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('description_en');?></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description_en" id="description_en" placeholder="<?php echo lang('description_en');?>"><?php echo $results->description_en;?></textarea>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('greek_note');?></span>
                                </div>
                            </div>

                             <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('description_el');?></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description_el" id="description_el" placeholder="<?php echo lang('description_el');?>"><?php echo $results->description_el;?></textarea>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('greek_note');?></span>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('price');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="price" id="price" placeholder="<?php echo lang('price');?>" value="<?php echo $results->price;?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('stock');?></label>
                                <div class="col-md-9">
                                  <div class="minus_left custom_chk chk_box">
                                    <div class="checkbox">
                                        <input type="radio" name="stock" id="stock" <?php if($results->stock=='INSTOCK') echo 'checked="checked"';?> value="INSTOCK"><label class="checkbox-inline"><?php echo lang('instock');?></label>
                                        </div>
                                     <div class="checkbox">
                                        <input type="radio" name="stock" id="stock" <?php if($results->stock=='OUT OF STOCK') echo 'checked="checked"';?> value="OUT OF STOCK"><label class="checkbox-inline"><?php echo lang('out_of_stock');?></label>
                                        </div>
                                       </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('image'); ?></label>
                                    <div class="col-md-9">
                                            <div class="profile_content edit_img">
                                            <div class="file_btn file_btn_logo">
                                              <input type="file"  class="input_img2" id="image" name="image" style="display: inline-block;">
                                              <span class="glyphicon input_img2 logo_btn" style="display: block;">
                                                <div id="show_company_img"></div>
                                                <span class="ceo_logo">
                                                    <?php if(!empty($results->image)){ ?>
                                                        <img src="<?php echo base_url().'uploads/menu/'.$results->image;?>">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url().'assets/img/default.jpg';?>">
                                                   <?php }?>
                                                    
                                                </span>
                                                <i class="fa fa-camera"></i>
                                              </span>
                                              <img class="show_company_img2" style="display:none" alt="img" src="<?php echo base_url() ?>/assets/img/logo.png">
                                              <span style="display:none" class="fa fa-close remove_img"></span>
                                            </div>
                                          </div>
                                          <div class="ceo_file_error file_error text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            
                             <input type="hidden" name="id" value="<?php echo $results->id;?>" />
                            <input type="hidden" name="exists_image" value="<?php echo $results->image;?>" />
                            <div class="space-22"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary" id="submit">Update</button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
   
        $(document).on('change' , '#menu_category' , function(){
            var _this = $(this).val();
           
            
            $.ajax({
              type: "POST",
              url: '<?php echo base_url('menus/getSubcat') ?>/'+_this,
              dataType: 'html'
            }).done(function( category ) {
                $('#category').html(category);
          });

        });
    
</script>