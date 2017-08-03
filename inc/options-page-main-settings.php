<div class="meta-box-sortables ui-sortable">
                        <div class="postbox">
                            <div class="inside">
                                
                                    <table class="form-table">
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_authorization">Authorization</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_authorization" id="gotowebinar_authorization" type="text" value="<?php if(isset($gotowebinar_authorization)) { echo esc_attr($gotowebinar_authorization); } ?>" class="regular-text" minlength="24" maxlength="32" />
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_organizer_key">Organizer Key</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_organizer_key" id="gotowebinar_organizer_key" type="text" value="<?php if(isset($gotowebinar_organizer_key)) { echo esc_attr($gotowebinar_organizer_key); }?>" class="regular-text" minlength="15" maxlength="23" />
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_date_format">Date Format</label>
                                            </td>
                                            <td>
                                                <select name="gotowebinar_date_format" id="gotowebinar_date_format">
                                                    
                                                    <?php 
                                                    if(isset($gotowebinar_date_format)) {} else {$gotowebinar_date_format = "j/n/Y";}
                                                    ?>
                                                    
                                                    
                                                    <option value="j/n/Y" <?php if( 'j/n/Y'==$gotowebinar_date_format) echo 'selected="selected"'; ?>>
                                                        <?php echo esc_html(date('j/n/Y')); ?>
                                                    </option>
                                                    <option value="n/j/Y" <?php if( 'n/j/Y'==$gotowebinar_date_format) echo 'selected="selected"'; ?>>
                                                        <?php echo esc_html(date('n/j/Y')); ?>
                                                    </option>
                                                    <option value="j M, Y" <?php if( 'j M, Y'==$gotowebinar_date_format) echo 'selected="selected"'; ?>>
                                                        <?php echo esc_html(date('j M, Y')); ?>
                                                    </option>
                                                    <option value="M j, Y" <?php if( 'M j, Y'==$gotowebinar_date_format) echo 'selected="selected"'; ?>>
                                                        <?php echo esc_html(date('M j, Y')); ?>
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_time_format">Time Format</label>
                                            </td>
                                            <td>
                                                <select name="gotowebinar_time_format" id="gotowebinar_time_format">
                                                    <?php 
                                                    if(isset($gotowebinar_time_format)) {} else {$gotowebinar_time_format = "g:ia T";}
                                                    ?>
                                                    
                                                    <option value="g:ia T" <?php if('g:ia T'==$gotowebinar_time_format) echo 'selected="selected"'; ?>>12 Hour Time</option>
                                                    <option value="H:i T" <?php if('H:i T'==$gotowebinar_time_format) echo 'selected="selected"'; ?>>24 Hour Time</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_disable_tooltip">Disable GMT Tooltips <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>(by default a tooltip displays when a user hovers over the start date and start time of your webinar)</em></p>
                                                </label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_disable_tooltip" id="gotowebinar_disable_tooltip" type="checkbox" value="1" <?php if(isset($gotowebinar_disable_tooltip)) { esc_attr(checked(1, $gotowebinar_disable_tooltip, true)); } ?> /></td>
                                        </tr>
                                        <tr valign="top" class="tooltipcolors">
                                            <td scope="row">
                                                <label for="gotowebinar_tooltip_text_color">Tooltip Text Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_tooltip_text_color" id="gotowebinar_tooltip_text_color" type="text" value="<?php if(isset($gotowebinar_tooltip_text_color)) { echo esc_attr($gotowebinar_tooltip_text_color); } ?>" class="my-color-field" data-default-color="" />
                                            </td>
                                        </tr>
                                        <tr valign="top" class="tooltipcolors">
                                            <td scope="row">
                                                <label for="gotowebinar_tooltip_background_color">Tooltip Background Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_tooltip_background_color" id="gotowebinar_tooltip_background_color" type="text" value="<?php if(isset($gotowebinar_tooltip_background_color)){ echo esc_attr($gotowebinar_tooltip_background_color); } ?>" class="my-color-field" data-default-color="#FFFFFF" />
                                            </td>
                                        </tr>
                                        <tr valign="top" class="tooltipcolors">
                                            <td scope="row">
                                                <label for="gotowebinar_tooltip_border_color">Tooltip Border Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_tooltip_border_color" id="gotowebinar_tooltip_border_color" type="text" value="<?php if(isset($gotowebinar_tooltip_border_color)){ echo esc_attr($gotowebinar_tooltip_border_color); } ?>" class="my-color-field" data-default-color="" />
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_icon_color">Icon Link and Link Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_icon_color" id="gotowebinar_icon_color" type="text" value="<?php if(isset($gotowebinar_icon_color)) { echo esc_attr($gotowebinar_icon_color); } ?>" class="my-color-field" data-default-color="" />
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_custom_registration_page">Custom Registration Page (Optional) <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>Select a custom page from the list and when a user clicks on a "Register" link they will be taken to your selected registration page instead of the default GoToWebinar registration page.</em></p>
                                                    </br><span style="color: #CC0000;"><strong>Important:</strong> add the shortcode <strong><code>[gotowebinar-reg]</code></strong> on the selected page. If you don't do this the registration form won't appear.</span>
                                                </label>
                                            </td>
                                            <td>
                                                <?php 
                                                
                                                
                                                if(isset($gotowebinar_custom_registration_page)) {
                                                    
                                                    
                                                } else {
                                                    
                                                    $gotowebinar_custom_registration_page = "--Use GoToWebinar Website--";
                                                }
                                                
                                                
                                                
                                                
                                                $args = array(
                                                'echo' => 1,
                                                    
                                                   
                                                'selected' => $gotowebinar_custom_registration_page,
                                                    
                                                'name' => "gotowebinar_custom_registration_page",
                                                'id' => "gotowebinar_custom_registration_page",
                                                'show_option_none' => "--Use GoToWebinar Website--",
                                                'option_none_value' => "default",
                                                'sort_column'  => 'post_title',
                                                );
                                                wp_dropdown_pages( $args );
                                                
                                                
                                                
                                                ?>
                                            </td>
                                        </tr>
                            <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_custom_thankyou_page">Custom Thank You Page (Optional) <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>Select a custom page from the list and when a user registers successfully for a webinar they will be redirected to this page. Please note that if this field is left blank a default success message will appear. You can customise this default message using the translation settings below.</em></p>
                                                </label>
                                            </td>
                                            <td>
                                                <?php 
                                                
                                                
                                                if(isset($gotowebinar_custom_thankyou_page)) {
                                                    
                                                    
                                                } else {
                                                    
                                                    $gotowebinar_custom_thankyou_page = "--Use Default Message--";
                                                }
                                                
                                                
                                                
                                                
                                                $args2 = array(
                                                'echo' => 1,
                                                    
                                                   
                                                'selected' => $gotowebinar_custom_thankyou_page,
                                                    
                                                'name' => "gotowebinar_custom_thankyou_page",
                                                'id' => "gotowebinar_custom_thankyou_page",
                                                'show_option_none' => "--Use Default Message--",
                                                'option_none_value' => "default",
                                                'sort_column'  => 'post_title',
                                                );
                                                wp_dropdown_pages( $args2 );
                                                
                                                
                                                
                                                ?>
                                            </td>
                                        </tr>
                                        <tr valign="top" class="buttoncolors">
                                            <td scope="row">
                                                <label for="gotowebinar_button_text_color">Button Text Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_button_text_color" id="gotowebinar_button_text_color" type="text" value="<?php if(isset($gotowebinar_button_text_color)) { echo esc_attr($gotowebinar_button_text_color); } ?>" class="my-color-field" data-default-color="" />
                                            </td>
                                        </tr>
                                        <tr valign="top" class="buttoncolors">
                                            <td scope="row">
                                                <label for="gotowebinar_button_background_color">Button Background Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_button_background_color" id="gotowebinar_button_background_color" type="text" value="<?php if(isset($gotowebinar_button_background_color)){ echo esc_attr($gotowebinar_button_background_color); } ?>" class="my-color-field" data-default-color="" />
                                            </td>
                                        </tr>
                                        <tr valign="top" class="buttoncolors">
                                            <td scope="row">
                                                <label for="gotowebinar_button_border_color">Button Border Color</label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_button_border_color" id="gotowebinar_button_border_color" type="text" value="<?php if(isset($gotowebinar_button_border_color)) { echo esc_attr($gotowebinar_button_border_color); } ?>" class="my-color-field" data-default-color="" />
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_disable_cache">Turn Caching Off <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>By default WP GoToWebinar keeps a cache of your upcoming webinars and webinar details to both improve page loading speed and to reduce API calls made to GoToWebinar. This means that old webinars can appear on your site for up to one day. It is recommended to keep the cache on, however for smaller sites it's probably ok to turn off. If you do turn the cache off remember to use the "Clear Webinar Cache" button below.</em></p>
                                                </label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_disable_cache" id="gotowebinar_disable_cache" type="checkbox" value="1" <?php if(isset($gotowebinar_disable_cache)) { esc_attr(checked(1, $gotowebinar_disable_cache, true)); } ?> /></td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_enable_timezone_conversion">Enable Timezone Conversion Link <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>By checking this option a timezone conversion link will appear just above the main table display of upcoming webinars and just below the time and date on the registration page which will allow users to convert the webinar time and date into their local time.</em></p>
                                                </label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_enable_timezone_conversion" id="gotowebinar_enable_timezone_conversion" type="checkbox" value="1" <?php if(isset($gotowebinar_enable_timezone_conversion)) { esc_attr(checked(1, $gotowebinar_enable_timezone_conversion, true)); } ?> /></td>
                                        </tr>
                                        <tr class="timezoneerrormessage" valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_timezone_error_message">Custom Error Message for Failed Location Detection <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>If the location of the user can't be determined please enter a custom error message to display. If left blank the error message displayed will be "Sorry, your location could not be determined."</em></p>
                                                </label>
                                            </td>
                                            <td>
                                                <textarea cols="46" rows="3" name="gotowebinar_timezone_error_message" id="gotowebinar_timezone_error_message"><?php if(isset($gotowebinar_timezone_error_message)) { echo esc_attr($gotowebinar_timezone_error_message); }?></textarea>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row">
                                                <label for="gotowebinar_recaptcha_site_key">reCAPTCHA Site Key <i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
                                                    <p class="hidden"><em>If you would like to enable Google reCAPTCHA on the registration form please enter in your reCAPTCHA Site Key in this setting. You can get your reCAPTCHA key from <a target="_blank" href="https://www.google.com/recaptcha/admin#list">here</a>. If left blank no reCAPTCHA will be used.</em></p></label>
                                            </td>
                                            <td>
                                                <input name="gotowebinar_recaptcha_site_key" id="gotowebinar_recaptcha_site_key" type="text" value="<?php if(isset($gotowebinar_recaptcha_site_key)) { echo esc_attr($gotowebinar_recaptcha_site_key); }?>" class="regular-text" minlength="35" maxlength="45" />
                                            </td>
                                        </tr>
                                        <tr style="display:none;" valign="top">
                                            <td scope="row">
                                            </td>
                                            <td>
                                                <input name="gotowebinar_welcome_message" id="gotowebinar_welcome_message" type="checkbox" value="1" <?php if(isset($gotowebinar_welcome_message)) { esc_attr(checked(0, $gotowebinar_welcome_message, true)); } ?> /></td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row"></td>
                                            <td>
                                                <input class="button-primary" type="submit" id="save" name="save" value="Save All Settings" />
                                            </td>
                                        </tr>
                                    </table>
                                
                            </div>
                            <!-- .inside -->
                        </div>
                        <!-- .postbox -->
                    </div>
                