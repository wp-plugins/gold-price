<div class="wrap">
  <div id="icon-options-general" class="icon32"><br>
  </div>
  <h2>Settings</h2>
  <?php if ( isset( $_GET['settings-updated'] ) ) { ?>
  <div class='updated' style='margin-top:10px;'><p> Settings updated successfully</p></div><?php } ?>
  <table class="gold_price" style="margin-top:20px;">
    <tr>
      <td valign="top" width="76%" style="padding-right:20px;"><table class="widefat posts" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">General Setting</th>
            </tr>
          </thead>
          <tbody id="the-list">
            <tr valign="top">
              <td><form name="frm" method="post" action="options.php">
                   <?php settings_fields( 'gp-settings-group' ); ?>
                 <p style="font-weight:bold; margin-top:10px;"> Configure your widget here then add anywhere using shortcode  <input type="text" readonly="readonly" value="[gold-price]" size="7" /></p>
                  <table class="inner-setings">
                    <tr>
                      <td width="150" style="line-height:27px;">Metals to display</td>
                      <td><label>
                          <input type="checkbox" name="gp_metal_gold" value="gold" <?php if(get_option('gp_metal_gold')=='gold'){echo ' checked="checked"';} ?>  />
                          Gold</label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="checkbox" name="gp_metal_silver" value="silver" <?php if(get_option('gp_metal_silver')=='silver'){echo ' checked="checked"';} ?> />
                          Silver</label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="checkbox" name="gp_metal_platinum" value="platinum" <?php if(get_option('gp_metal_platinum')=='platinum'){echo ' checked="checked"';} ?> />
                          Platinum</label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="checkbox" name="gp_metal_palladium" value="palladium" <?php if(get_option('gp_metal_palladium')=='palladium'){echo ' checked="checked"';} ?> />
                          Palladium</label></td>
                    </tr>
                    <tr>
                      <td width="150" style="line-height:27px;">Currency to display</td>
                      <td><select name="gp_currency">
                          <option value="AUD" <?php if(get_option('gp_currency')=='AUD'){echo 'selected="selected"';} ?>>Australian Dollars</option>
                          <option value="AED" <?php if(get_option('gp_currency')=='AED'){echo 'selected="selected"';} ?>>Emirati Dirham</option>
                          <option value="CAD" <?php if(get_option('gp_currency')=='CAD'){echo 'selected="selected"';} ?>>Canadian Dollar</option>
                          <option value="JPY" <?php if(get_option('gp_currency')=='JPY'){echo 'selected="selected"';} ?>>Japanese Yen</option>
                          <option value="USD" <?php if(get_option('gp_currency')=='USD'){echo 'selected="selected"';} ?>>United States Dollar</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td width="150" style="line-height:27px;">Measurements in</td>
                      <td><select name="measurement">
                          <option value="grams" <?php if(get_option('measurement')=='grams'){echo 'selected="selected"';} ?>>Grams</option>
                          <option value="ounces" <?php if(get_option('measurement')=='ounces'){echo 'selected="selected"';} ?>>Ounces</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td width="150" style="line-height:27px;">Display measurement</td>
                      <td><label>
                          <input type="radio" value="on"  name="disp_measure" <?php if(get_option('disp_measure')=='on'){echo ' checked="checked"';} ?> />
                          ON</label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" value="off" name="disp_measure" <?php if(get_option('disp_measure')=='off'){echo ' checked="checked"';} ?> />
                          OFF</label>
                        <span>eg “$700.21 per gram” or just “$700.21”</span></td>
                    </tr>
                    <tr>
                      <td width="150" style="line-height:27px;">Time Stamp</td>
                      <td><label>
                          <input type="radio" value="on" name="time_stamp" <?php if(get_option('time_stamp')=='on'){echo ' checked="checked"';} ?> />
                          ON</label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" value="off" name="time_stamp" <?php if(get_option('time_stamp')=='off'){echo ' checked="checked"';} ?> />
                          OFF</label>
                        <span>Shows date and time price was last retrieved</span></td>
                    </tr>
                    <tr>
                      <td width="150" style="line-height:27px;">Widget Design</td>
                      <td><div class="widget-select">
                      
                      
                      
                      <label class="wdgt1" <?php if(get_option('widget_design')=='1'){echo 'style="border-color:#9d9b9b"'; }?>  >
                          <input type="radio" value="1" name="widget_design" <?php if(get_option('widget_design')=='1'){echo ' checked="checked"';} ?> /></label>
                        <label class="wdgt2" <?php if(get_option('widget_design')=='2'){echo 'style="border-color:#9d9b9b"'; }?>>
                          <input type="radio" value="2" <?php if(get_option('widget_design')=='2'){echo ' checked="checked"';} ?> name="widget_design" /></label>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td width="150" style="line-height:27px;">Custom CSS</td>
                      <td><label>
                        <textarea name="customcss" cols="55" rows="15"><?php echo get_option('customcss') ?></textarea>
                      </label>
                      <span>Enter custom styles here. This will override other default designs.</span>
                       </td>
                    </tr>
                  </table>
                  <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
                  </p>
                </form></td>
            </tr>
          </tbody>
        </table></td>
      <td valign="top" width="28%"><table cellpadding="0" class="widefat donation" style="margin-bottom:10px; border:solid 2px #008001;" width="50%">
          <thead>
          <th scope="col"><strong style="color:#008001;">Help Improve This Plugin!</strong></th>
            </thead>
          <tbody>
            <tr>
              <td style="border:0;">Enjoyed this plugin? All donations are used to improve and further develop this plugin. Thanks for your contribution.</td>
            </tr>
            <tr>
              <td style="border:0;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="A74K2K689DWTY">
                  <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                </form></td>
            </tr>
            <tr>
              <td style="border:0;">You can also help by <a href="http://wordpress.org/extend/plugins/gold-price/" target="_blank">rating this plugin on wordpress.org</a></td>
            </tr>
          </tbody>
        </table>
        <table cellpadding="0" class="widefat" border="0">
          <thead>
          <th scope="col">Need Support?</th>
            </thead>
          <tbody>
            <tr>
              <td style="border:0;">If you are having problems with this plugin please talk about them on the <a href="http://wordpress.org/support/plugin/gold-price" target="_blank">Support Forum</a></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </table>
</div>