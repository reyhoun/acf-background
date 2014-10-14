<?php

class acf_field_background extends acf_field {
    
    
    /*
    *  __construct
    *
    *  This function will setup the field type data
    *
    *  @type    function
    *  @date    5/03/2014
    *  @since   5.0.0
    *
    *  @param   n/a
    *  @return  n/a
    */
    
    function __construct() {
        
        /*
        *  name (string) Single word, no spaces. Underscores allowed
        */
        
        $this->name = 'background';
        
        
        /*
        *  label (string) Multiple words, can include spaces, visible when selecting a field type
        */
        
        $this->label = __('Background', 'acf-background');
        
        
        /*
        *  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
        */
        
        $this->category = 'Design';
        
        
        /*
        *  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
        */
        
        $this->defaults = array(
            'ext_value'  => array(),
            'show_background_repeat'      =>  1,
            'show_background_size'        =>  0,
            'show_background_attachment'  =>  0,
            'show_background_position'    =>  0,
            'display_background_color'    =>  1,
            'show_background_image'       =>  1,
            'show_background_clip'        =>  0,
            'show_background_origin'      =>  0,
            'show_preview_media'          =>  1,
            'show_preview'                =>  1,
            'background_repeat'     => 'repeat',
            'background_clip'      => 'border-box',
            'background_size'      => 'auto',
            'background_attachment'=> 'scroll',
            'background_position'  => 'left top',
            'background_origin'    => 'padding-box',
            'show_text_color'       =>  0,
            'text_color'            => '#fff',
            'background_color'     => '',
            'preview-height'        => 200,
            'background_repeat_values'     => array(
                                            'no-repeat' => 'No Repeat',
                                            'repeat'    => 'Repeat All',
                                            'repeat-x'  => 'Repeat Horizontally',
                                            'repeat-y'  => 'Repeat Vertically',
                                            'inherit'   => 'Inherit',
                                        ),
            'background_clip_values'       => array(
                                            'border-box'    => 'Border Box',
                                            'padding-box'   => 'Padding Box',
                                            'content-box'   => 'Content Box',
                                            'inherit'       => 'Inherit',
                                        ),
            'background_size_values'       => array(
                                            'cover'     => 'Cover',
                                            'contain'   => 'Contain',
                                            'inherit'   => 'Inherit',
                                            'auto'      => 'auto'
                                        ),
            'background_attachment_values' => array(
                                            'scroll'    => 'Scroll',
                                            'fixed'     => 'Fixed',
                                            'local'     => 'Local',
                                            'inherit'   => 'Inherit',
                                        ),
            'background_position_values'   => array(
                                            'left top'      => 'Left Top',
                                            'left center'   => 'Left center',
                                            'left bottom'   => 'Left Bottom',
                                            'center top'    => 'Center Top',
                                            'center center' => 'Center Center',
                                            'center bottom' => 'Center Bottom',
                                            'right top'     => 'Right Top',
                                            'right center'  => 'Right center',
                                            'right bottom'  => 'Right Bottom',
                                            'inherit'       => 'Inherit',
                                        ),
            'background_origin_values'     => array(
                                            'border-box'    => 'Border Box',
                                            'padding-box'   => 'Padding Box',
                                            'content-box'   => 'Content Box',
                                            'inherit'       => 'Inherit',
                                        ),
        );
        
        
        /*
        *  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
        *  var message = acf._e('background', 'error');
        */
        
        $this->l10n = array(
            'error' => __('Error! Please enter a higher value', 'acf-background'),
        );
        
                
        // do not delete!
        parent::__construct();
        
    }
    
    
    /*
    *  render_field_settings()
    *
    *  Create extra settings for your field. These are visible when editing a field
    *
    *  @type    action
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   $field (array) the $field being edited
    *  @return  n/a
    */
    
    function render_field_settings( $field ) {
        
        /*
        *  acf_render_field_setting
        *
        *  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
        *  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
        *
        *  More than one setting can be added by copy/paste the above code.
        *  Please note that you must also have a matching $defaults value for the field name (font_size)
        */

        acf_render_field_setting( $field, array(
            'label'         => __('Display Repeat Option?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_repeat',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));


        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Repeat','acf-typography'),
            'type'          => 'select',
            'ui'            => 1,
            'layout'        =>  'horizontal',
            'name'          => 'background_repeat',
            'choices'       =>  $field['background_repeat_values']
        ));
        


        acf_render_field_setting( $field, array(
            'label'         => __('Display Clip Option?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_clip',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));


        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Clip','acf-background'),
            'type'          => 'select',
            'ui'            => 1,
            'name'          => 'background_clip',
            'layout'  =>  'horizontal',
            'choices' =>  $field['background_clip_values'],
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('Display Size Option?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_size',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));


        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Size','acf-background'),
            'type'          => 'select',
            'ui'            => 1,
            'name'          => 'background_size',
            'layout'  =>  'horizontal',
            'choices' =>  $field['background_size_values']
        ));

         
        acf_render_field_setting( $field, array(
            'label'         => __('Display Attachment Option?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_attachment',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Attachment','acf-background'),
            'type'          => 'select',
            'ui'            => 1,
            'name'          => 'background_attachment',
            'layout'  =>  'horizontal',
            'choices' =>  $field['background_attachment_values']
        ));

        
        acf_render_field_setting( $field, array(
            'label'         => __('Display Position?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_position',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Position','acf-background'),
            'type'          => 'select',
            'ui'            => 1,
            'name'          => 'background_position',
            'layout'  =>  'horizontal',
            'choices' =>  $field['background_position_values']
        ));


        acf_render_field_setting( $field, array(
            'label'         => __('Display Origin Option?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_origin',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Origin','acf-background'),
            'type'          => 'select',
            'ui'            => 1,
            'name'          => 'background_origin',
            'layout'  =>  'horizontal',
            'choices' => $field['background_origin_values']
        ));


        acf_render_field_setting( $field, array(
            'label'         => __('Display Color Option','acf-background'),
            'type'          => 'radio',
            'name'          => 'display_background_color',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                2 => __('RGBA', 'acf-background'),
                1 => __('HEX', 'acf-background'),
                0 => __('NO', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('defaults background Color','acf-background'),
            'type'          => 'text',
            'name'          => 'background_color',
            'layout'  =>  'horizontal',
        ));

//=========================================================

        
        acf_render_field_setting( $field, array(
            'label'         => __('Display Image Option?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_background_image',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('Display Preview Media?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_preview_media',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'         => __('Display Preview?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_preview',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'         => __('Preview Height','acf-background'),
            'type'          => 'number',
            'name'          => 'preview-height',
            'prepend'       => 'px',
        ));


        acf_render_field_setting( $field, array(
            'label'         => __('Display Text Color ?','acf-background'),
            'type'          => 'radio',
            'name'          => 'show_text_color',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'         => __('Text Color','acf-background'),
            'type'          => 'text',
            'name'          => 'text_color',
            'prepend'       => 'hex',
        ));



    }
    
    
    
    /*
    *  render_field()
    *
    *  Create the HTML interface for your field
    *
    *  @param   $field (array) the $field being rendered
    *
    *  @type    action
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   $field (array) the $field being edited
    *  @return  n/a
    */
    
    function render_field( $field ) {
        
          // add empty value (allows '' to be selected)
        if( empty($field['value']) ){

            $field['value'][''] = '';
            $field['value']['background-repeat']        =  $field['background_repeat'];
            $field['value']['background-clip']          =  $field['background_clip'];
            $field['value']['background-size']          =  $field['background_size'];
            $field['value']['background-attachment']    =  $field['background_attachment'];
            $field['value']['background-position']      =  $field['background_position'];
            $field['value']['background-origin']        =  $field['background_origin'];
            $field['value']['background-color']         =  $field['background_color'];
            $field['value']['background-text']          =  $field['text_color'];
            $field['value']['background-image']         =  '';
            $field['value']['media']['thumbnail']       =  '';
            $field['value']['media']['width']           =  0;
            $field['value']['media']['height']          =  0;
            $field['value']['media']['id']              =  '';
        }

        // $field_value = $field['value'];



        if( empty($field['value']['background-color']) ){

                $field['ext_value']['he-op']['hex']     = '#000000';
                $field['ext_value']['he-op']['opacity'] = '0';
                
                $field['ext_value']['rgba']     = '';

            } else {
                if( preg_match("/^rgba/", $field['value']['background-color'])) {//XXXX

                    $rgba = sscanf($field['value']['background-color'], "rgba(%d, %d, %d, %f)");

                    $hex = "#";
                    $hex.= str_pad(dechex($rgba[0]), 2, "0", STR_PAD_LEFT);
                    $hex.= str_pad(dechex($rgba[1]), 2, "0", STR_PAD_LEFT);
                    $hex.= str_pad(dechex($rgba[2]), 2, "0", STR_PAD_LEFT);

                    $field['ext_value']['he-op']['hex']     = $hex;
                    $field['ext_value']['he-op']['opacity'] = $rgba[3];
                
                    $field['ext_value']['rgba']     = $field['value']['background-color'];

                } elseif( preg_match("/#/", $field['value']['background-color'])) {

                    $field['ext_value']['he-op']['hex']     = $field['value']['background-color'];
                    $field['ext_value']['he-op']['opacity'] = '1';


                    $hex = preg_replace("/#/", "", $field['value']['background-color']);
                    $color = array();
 
                    if(strlen($hex) == 3) {
                        $color['r'] = hexdec(substr($hex, 0, 1) . $r);
                        $color['g'] = hexdec(substr($hex, 1, 1) . $g);
                        $color['b'] = hexdec(substr($hex, 2, 1) . $b);
                    }
                    else if(strlen($hex) == 6) {
                        $color['r'] = hexdec(substr($hex, 0, 2));
                        $color['g'] = hexdec(substr($hex, 2, 2));
                        $color['b'] = hexdec(substr($hex, 4, 2));
                    }
                
                    $field['ext_value']['rgba']     = 'rgba(' . $color['r'] . ',' . $color['g'] . ',' . $color['b'] . ',1)';

                } else {
                    $field['ext_value']['he-op']['hex']     = '#000000';
                    $field['ext_value']['he-op']['opacity'] = '0';
                    $field['ext_value']['rgba']     = 'Not Valid';
                }
            }







        /*
        *  Review the data of $field.
        *  This will show what data is available
        */
        $_field = $field;
        $field = array_merge($this->defaults, $field);
        $value = $field['value'];
        ?>
        <div class="rey-main">
            <div class="rey-container-background" id="container-background">
                <div class="clearfix">
                    <?php
                    if ($field['show_background_repeat'] == 1):
                        $array = $field['background_repeat_values'];
                    ?>
                        <div class="acf-background-subfield acf-background-repeat">
                            <label class="acf-background-field-label" for="<?php print $field['id']; ?>-repeat-select"><?php _e("Background Repeat", "acf-background"); ?></label>
                            <select id="<?php print $field['id']; ?>-repeat-select" data-placeholder="<?php print __("Background Repeat","acf"); ?>" name="<?php print $field['name']; ?>[background-repeat]" class="rey-select-item rey-background-input background-repeat <?php print $field['class']; ?>">
                                <option value="repeat"><?php _e("Background Repeat", "acf-background"); ?></option>
                                <?php foreach ($array as $k=>$v) { ?>
                                    <option value="<?php print $k; ?>" <?php print selected($value['background-repeat'], $k, false); ?>><?php print $v; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php endif; ?>

                    <?php
                    if ( $field['show_background_attachment'] == 1 ) {
                        $array = $field['background_attachment_values'];

                        echo '<div class="acf-background-subfield acf-background-attachment">';
                            echo '<label class="acf-background-field-label" for="' . $field['id'] . '-attachment-select">' . __("Background Attachment", "acf-background") . '</label>';
                            echo '<select id="'.$field['id'].'-attachment-select" data-placeholder="' . __( 'Background Attachment', 'acf' ) . '" name="' . $field['name'] . '[background-attachment]' . '" class="rey-select-item rey-background-input background-attachment '.$field['class'].'">';
                            echo '<option value="scroll">' . __("Background Attachment","acf") . '</option>';
                                foreach ($array as $k=>$v) {
                                    echo '<option value="'. $k .'"'.selected($value['background-attachment'], $k, false).'>'. $v .'</option>';
                                }
                            echo '</select>';
                        echo '</div>';
                    }

                    if ($field['show_background_size'] == 1) {
                        $array = $field['background_size_values'];

                        echo '<div class="acf-background-subfield acf-background-size">';
                            echo '<label class="acf-background-field-label" for="' . $field['id'] . '-size-select">' . __("Background Size", "acf-background") . '</label>';
                            echo '<select id="' . $field['id'] . '-size-select" data-placeholder="' . __( 'Background Size', 'acf' ) . '" name="' . $field['name'] . '[background-size]' . '" class="rey-select-item rey-background-input background-size ' . $field['class'] . '">';
                                echo '<option value="auto">' . __("Background Size","acf") . '</option>';
                                foreach ($array as $k => $v) {
                                    echo '<option value="' . $k . '"' . selected($value['background-size'], $k, false) . '>' . $v . '</option>';
                                }
                            echo '</select>';
                        echo '</div>';
                    }

                    if ( $field['show_background_position'] == 1 ) {
                        $array = $field['background_position_values'];

                        echo '<div class="acf-background-subfield acf-background-position">';
                            echo '<label class="acf-background-field-label" for="' . $field['id'] . '-position-select">' . __("Background Position", "acf-background") . '</label>';
                            echo '<select id="'.$field['id'].'-position-select" data-placeholder="' . __( 'Background Position', 'acf' ) . '" name="' . $field['name'] . '[background-position]' . '" class="rey-select-item rey-background-input background-position '.$field['class'].'">';
                                echo '<option value="0 0">' . __("Background Position","acf") . '</option>';
                                foreach ($array as $k=>$v) {
                                    echo '<option value="'. $k .'"'.selected($value['background-position'], $k, false).'>'. $v .'</option>';
                                }
                            echo '</select>';
                        echo '</div>';
                    }

                    if ($field['show_background_clip'] == 1) {
                        $array = $field['background_clip_values'];
                        
                        echo '<div class="acf-background-subfield acf-background-clip">';
                            echo '<label class="acf-background-field-label" for="' . $field['id'] . '-clip-select">' . __("Background Clip", "acf-background") . '</label>';
                            echo '<select id="' . $field['id'] . '-clip-select" data-placeholder="' . __("Background Clip","acf") . '" name="' . $field['name'] . '[background-clip]" class="rey-select-item rey-background-input background-clip ' . $field['class'] . '">';
                                echo '<option value="border-box">' . __("Background Clip","acf") . '</option>';
                                foreach ($array as $k=>$v) {
                                    echo '<option value="' . $k . '" ' . selected($value['background-clip'], $k, false) . '>' . $v . '</option>';
                                }
                            echo '</select>';
                        echo '</div>';
                    }

                    if ($field['show_background_origin'] == 1) {
                        $array = $field['background_origin_values'];

                        echo '<div class="acf-background-subfield acf-background-origin">';
                            echo '<label class="acf-background-field-label" for="' . $field['id'] . '-origin-select">' . __("Background Origin", "acf-background") . '</label>';
                            echo '<select id="' . $field['id'] . '-origin-select" data-placeholder="' . __("Background Origin","acf") . '" name="' . $field['name'] . '[background-origin]" class="rey-select-item rey-background-input background-origin ' . $field['class'] . '">';
                                echo '<option value="padding-box">' . __("Background Origin","acf") . '</option>';
                                foreach ($array as $k => $v) {
                                    echo '<option value="' . $k . '" ' . selected($value['background-origin'], $k, false) . '>' . $v . '</option>';
                                }
                            echo '</select>';
                        echo '</div>';
                    }
                    ?>

                    <?php if ($field['display_background_color'] == 1): ?>
                        <div class="acf-background-subfield acf-background-color">
                            <label class="acf-background-field-label" for="<?php print $field['id']; ?>-color"><?php _e("Background Color", "acf-background"); ?></label>
                            <input data-id="<?php print $field['id']; ?>" name="<?php print $field['name']; ?>[background-color]" id="<?php print $field['id']; ?>-color" class="rey-color rey-background-input rey-color-init <?php print $field['class']; ?>" type="text" value="<?php print $value['background-color']; ?>" data-default-color="#ffffff" />
                        </div>
                    <?php endif; ?>

                    <?php if ($field['display_background_color'] == 2){ 
                        echo '<div class="acf-background-subfield acf-background-color">';
                            echo '  <label class="acf-background-field-label" for="' . $field['id'] . '-color">' . __("Background Color", "acf-background") . '</label>';
                            echo '  <div class="toping">
                                        <input name="" type="hidden" id="' . $field['key'] . '-rgba" class="form-control rgba" data-inline="true" value="' . $field['ext_value']['he-op']['hex'] . '" data-opacity="' . $field['ext_value']['he-op']['opacity'] . '">
                                        <input name="" type="hidden" id="' . $field['key'] . '-opacity" value="' . $field['ext_value']['he-op']['opacity'] . '">
                                        <input name="' . $field['name'] . '[background-color]" id="' . $field['id'] . '-color" value="' . $field['ext_value']['rgba'] . '" class="rgbatext">
                                    </div>';
                        echo '</div>';              
                    } ?>


                    <?php if ($field['show_text_color']): ?>
                        <div class="acf-background-subfield acf-background-color">
                            <label class="acf-background-field-label" for="<?php print $field['id']; ?>-background-text"><?php _e("Text Color", "acf-background"); ?></label>
                            <input data-id="<?php print $field['id']; ?>-text" name="<?php print $field['name']; ?>[background-text]" id="<?php print $field['id']; ?>-background-text" class="rey-color rey-background-input rey-color-init <?php print $field['class']; ?>" type="text" value="<?php print $value['background-text']; ?>" data-default-color="#ffffff" />
                        </div>
                    <?php endif; ?>


                    <?php
                    if ($field['show_background_image'] == 1) {
                        echo '<div class="acf-background-subfield acf-background-image">';
                            echo '<label class="acf-background-field-label" for="' . $field['name'] . '[' . $field['id'] . '][background-image]">' . __("Background Image", "acf-background") . '</label>';

                            if( !empty( $value['background-image'] ) && !empty( $value['media']['id'] ) ) {
                                $img = wp_get_attachment_image_src( $value['media']['id'], 'full' );
                                $value['background-image']  = $img[0];
                                $value['media']['width']    = $img[1];
                                $value['media']['height']   = $img[2];
                            }

                            $hide = 'hide ';

                            if( (isset( $field['show_preview_media'] ) && $field['show_preview_media'] == 0) ) {
                                $field['class'] .= " noPreview";
                            }

                            if( ( !empty( $field['show_background_image'] ) && $field['show_background_image'] == 1 ) || isset( $field['show_preview'] ) && $field['show_preview'] == 0 ) {
                                $hide = '';
                            }   

                            $placeholder = isset($field['placeholder']) ? $field['placeholder'] : __('No media selected','acf');

                            //Preview
                            $hide                   = '';
                            $none                   = 'block';
                            $width_upload_fields    = 'calc(100% - 165px)';

                            if( ($field['show_preview_media'] == 1 && $field['show_preview_media'] == 0) || ($value['background-image'] == '') ) {
                                $hide                   = 'hide ';
                                $none                   = 'none';
                                $width_upload_fields    = '100%';
                            }

                            echo '<div class="clearfix">';
                                echo '<div class="acf-background-uplaod-fields" style="width: ' . $width_upload_fields . '">';
                                    echo '<div class="acf-background-img-url">';
                                        echo '<label class="acf-background-subfield-label" for="' . $field['name'] . '[' . $field['id'] . '][background-image]">' . __("External image URL:", "acf-background") . '</label>';
                                        echo '<input placeholder="' . $placeholder .'" type="text" class="rey-background-input ' . $hide . 'upload ' . $field['class'] . '" name="' . $field['name'] . '[background-image]' . '" id="' . $field['name'] . '[' . $field['id'] . '][background-image]" value="' . $value['background-image'] . '" />';
                                    echo '</div>';

                                    echo '<input type="hidden" class="upload-id ' . $field['class'] . '" name="' . $field['name'] . '[media][id]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][id]" value="' . $value['media']['id'] . '" />';
                                    echo '<input type="hidden" class="upload-height" name="' . $field['name'] . '[media][height]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][height]" value="' . $value['media']['height'] . '" />';
                                    echo '<input type="hidden" class="upload-width" name="' . $field['name'] . '[media][width]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][width]" value="' . $value['media']['width'] . '" />';
                                    echo '<input type="hidden" class="upload-thumbnail" name="' . $field['name'] . '[media][thumbnail]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][thumbnail]" value="' . $value['media']['thumbnail'] . '" />';

                                    if ( $value['media']['thumbnail'] == '' && !empty( $value['background-image'] ) ) { // Just in case
                                        if ( !empty( $value['media']['id'] ) ) {
                                            $image = wp_get_attachment_image_src( $value['media']['id'], array(150, 150) );
                                            $value['media']['thumbnail'] = $image[0];
                                        } else {
                                            $value['media']['thumbnail'] = $value['background-image'];    
                                        }
                                    }

                                    // Upload controls DIV
                                    echo '<div class="upload_button_div">';
                                        // If the user has WP3.5+ show upload/remove button
                                        echo '<span class="button background_upload_button" id="' . $field['id'] . '-media">' . __( 'Upload', 'acf' ) . '</span>';

                                        $hide = '';
                                        if( empty( $value['background-image'] ) || $value['background-image'] == '' ) {
                                            $hide =' hide';
                                        }

                                        echo '<span class="button remove-image' . $hide . '" id="reset_' . $field['id'] . '" rel="' . $field['id'] . '">' . __( 'Remove', 'acf' ) . '</span>';
                                    echo '</div>';
                                echo '</div>';

                                echo '<div class="screenshot acf-background-thumbnail" style="display:' . $none . '">';
                                    echo '<a class="of-uploaded-image" href="' . $value['background-image'] . '" target="_blank">';
                                        echo '<img class="rey-option-image" id="image_' . $value['media']['id'] . '" src="' . $value['media']['thumbnail'] . '" alt="" target="_blank" rel="external" />';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <?php
                if ( !isset( $field['show_preview'] ) || $field['show_preview'] != 0 ) {
                    echo '<div class="acf-background-preview">';
                        echo '<label class="acf-background-field-label">' . __("Background Preview", "acf-background") . '</label>';
                        $css = $this -> getCSS($field);
                        $css .= 'height: ' . $field['preview-height'] . 'px;';
                        echo '<div class="screenshot2 acf-background-preview-live" id="' . $field['key'] . '-previewer" style="' . $css . '">';
                            if ($field['show_text_color']) {
                                echo '<p id="' . $field['key'] . '-text" style="color:' . $value['background-text'] . '"> Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>';
                            }
                        echo '</div>';
                    echo '</div>';
                }

                ?>
            </div>
        </div>
    <?php


            echo '<script>

                (function($){
                    $("#' . $field['id'] . '-color").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-repeat" , $(this).val())});
                    $("body").mouseup(function(){$("#' . $field['key'] . '-previewer").css("background-color" , $("#' . $field['id'] . '-color").val());$("#' . $field['key'] . '-text").css("color" , $("#' . $field['id'] . '-background-text").val());});
                    $("#' . $field['id'] . '-repeat-select").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-repeat" , $(this).val());});
                    $("#' . $field['id'] . '-clip-select").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-clip" , $(this).val());});
                    $("#' . $field['id'] . '-origin-select").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-origin" , $(this).val())});
                    $("#' . $field['id'] . '-size-select").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-size" , $(this).val())});
                    $("#' . $field['id'] . '-attachment-select").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-attachment" , $(this).val())});
                    $("#' . $field['id'] . '-position-select").on("change",function(){$("#' . $field['key'] . '-previewer").css("background-position" , $(this).val())});


                    var colpick = $(".rgba").each( function() {
                        $(this).minicolors({
                            defaultValue: "#ff6167",
                            inline: false,

                            opacity: true,
                            change: function(hex, opacity) {
                                if(!hex) return;
                                text = hex ? hex : "transparent";
                                if( opacity ) text += ', ' + opacity;
                                text = jQuery(this).minicolors("rgbaString");
                                $("#' . $field['id'] . '-color").val(text);
                                $("#' . $field['key'] . '-opacity").val(opacity);
                            },
                        });
                    });


                })(jQuery);

             </script>';

    }
    
    function getCSS($field) {
        $css = '';
        if (!empty($field['value'])) {
            foreach($field['value'] as $key=>$value) {
                if (!empty($value) && $key != "media" && $key!='color-transparency') {
                    if ($key == "background-image") {
                        $css .= $key.":url('".$value."');";
                    } else {
                        $css .= $key.":".$value.";";
                    }

                }
            }
        }
        return $css;
    }
    
        
    /*
    *  input_admin_enqueue_scripts()
    *
    *  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
    *  Use this action to add CSS + JavaScript to assist your render_field() action.
    *
    *  @type    action (admin_enqueue_scripts)
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   n/a
    *  @return  n/a
    */

    /*
    
    function input_admin_enqueue_scripts() {
        
        $dir = plugin_dir_url( __FILE__ );
        
        
        // register & include JS
        wp_register_script( 'acf-input-background', "{$dir}js/input.js" );
        wp_enqueue_script('acf-input-background');
        
        
        // register & include CSS
        wp_register_style( 'acf-input-background', "{$dir}css/input.css" ); 
        wp_enqueue_style('acf-input-background');
        
        
    }
    
    */
    
    
    /*
    *  input_admin_head()
    *
    *  This action is called in the admin_head action on the edit screen where your field is created.
    *  Use this action to add CSS and JavaScript to assist your render_field() action.
    *
    *  @type    action (admin_head)
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   n/a
    *  @return  n/a
    */
    
    function input_admin_head() {
        
        $dir = plugin_dir_url( __FILE__ );

        // register & include JS
        wp_register_script( 'acf-js-background', "{$dir}js/field_background.js" );
        wp_enqueue_script('acf-js-background');

        // register & include CSS
        wp_register_style( 'acf-css-background', "{$dir}css/field_background.css" ); 
        wp_enqueue_style('acf-css-background');
        
        wp_enqueue_media();
        
    }

    function input_admin_enqueue_scripts() {

        $dir = plugin_dir_url( __FILE__ );

        // register & include JS
        wp_register_script( 'acf-js-rgba_minicolors', "{$dir}js/jquery.minicolors.min.js" );
        wp_enqueue_script('acf-js-rgba_minicolors');

    }
    
    
    /*
    *  input_form_data()
    *
    *  This function is called once on the 'input' page between the head and footer
    *  There are 2 situations where ACF did not load during the 'acf/input_admin_enqueue_scripts' and 
    *  'acf/input_admin_head' actions because ACF did not know it was going to be used. These situations are
    *  seen on comments / user edit forms on the front end. This function will always be called, and includes
    *  $args that related to the current screen such as $args['post_id']
    *
    *  @type    function
    *  @date    6/03/2014
    *  @since   5.0.0
    *
    *  @param   $args (array)
    *  @return  n/a
    */
    
    /*
    
    function input_form_data( $args ) {
        
        
    
    }
    
    */
    
    
    /*
    *  input_admin_footer()
    *
    *  This action is called in the admin_footer action on the edit screen where your field is created.
    *  Use this action to add CSS and JavaScript to assist your render_field() action.
    *
    *  @type    action (admin_footer)
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   n/a
    *  @return  n/a
    */

    /*
        
    function input_admin_footer() {
    
        
        
    }
    
    */
    
    
    /*
    *  field_group_admin_enqueue_scripts()
    *
    *  This action is called in the admin_enqueue_scripts action on the edit screen where your field is edited.
    *  Use this action to add CSS + JavaScript to assist your render_field_options() action.
    *
    *  @type    action (admin_enqueue_scripts)
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   n/a
    *  @return  n/a
    */

    /*
    
    function field_group_admin_enqueue_scripts() {
        
    }
    
    */

    
    /*
    *  field_group_admin_head()
    *
    *  This action is called in the admin_head action on the edit screen where your field is edited.
    *  Use this action to add CSS and JavaScript to assist your render_field_options() action.
    *
    *  @type    action (admin_head)
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   n/a
    *  @return  n/a
    */

    /*
    
    function field_group_admin_head() {
    
    }
    
    */


    /*
    *  load_value()
    *
    *  This filter is applied to the $value after it is loaded from the db
    *
    *  @type    filter
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   $value (mixed) the value found in the database
    *  @param   $post_id (mixed) the $post_id from which the value was loaded
    *  @param   $field (array) the field array holding all the field options
    *  @return  $value
    */
    
    /*
    
    function load_value( $value, $post_id, $field ) {
        
        return $value;
        
    }
    
    */
    
    
    /*
    *  update_value()
    *
    *  This filter is applied to the $value before it is saved in the db
    *
    *  @type    filter
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   $value (mixed) the value found in the database
    *  @param   $post_id (mixed) the $post_id from which the value was loaded
    *  @param   $field (array) the field array holding all the field options
    *  @return  $value
    */
    
    /*
    
    function update_value( $value, $post_id, $field ) {
        
        return $value;
        
    }
    
    */
    
    
    /*
    *  format_value()
    *
    *  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
    *
    *  @type    filter
    *  @since   3.6
    *  @date    23/01/13
    *
    *  @param   $value (mixed) the value which was loaded from the database
    *  @param   $post_id (mixed) the $post_id from which the value was loaded
    *  @param   $field (array) the field array holding all the field options
    *
    *  @return  $value (mixed) the modified value
    */
        
    /*
    
    function format_value( $value, $post_id, $field ) {
        
        // bail early if no value
        if( empty($value) ) {
        
            return $value;
            
        }
        
        
        // apply setting
        if( $field['font_size'] > 12 ) { 
            
            // format the value
            // $value = 'something';
        
        }
        
        
        // return
        return $value;
    }
    
    */
    
    
    /*
    *  validate_value()
    *
    *  This filter is used to perform validation on the value prior to saving.
    *  All values are validated regardless of the field's required setting. This allows you to validate and return
    *  messages to the user if the value is not correct
    *
    *  @type    filter
    *  @date    11/02/2014
    *  @since   5.0.0
    *
    *  @param   $valid (boolean) validation status based on the value and the field's required setting
    *  @param   $value (mixed) the $_POST value
    *  @param   $field (array) the field array holding all the field options
    *  @param   $input (string) the corresponding input name for $_POST value
    *  @return  $valid
    */
    
    /*
    
    function validate_value( $valid, $value, $field, $input ){
        
        // Basic usage
        if( $value < $field['custom_minimum_setting'] )
        {
            $valid = false;
        }
        
        
        // Advanced usage
        if( $value < $field['custom_minimum_setting'] )
        {
            $valid = __('The value is too little!','acf-background'),
        }
        
        
        // return
        return $valid;
        
    }
    
    */
    
    
    /*
    *  delete_value()
    *
    *  This action is fired after a value has been deleted from the db.
    *  Please note that saving a blank value is treated as an update, not a delete
    *
    *  @type    action
    *  @date    6/03/2014
    *  @since   5.0.0
    *
    *  @param   $post_id (mixed) the $post_id from which the value was deleted
    *  @param   $key (string) the $meta_key which the value was deleted
    *  @return  n/a
    */
    
    /*
    
    function delete_value( $post_id, $key ) {
        
        
        
    }
    
    */
    
    
    /*
    *  load_field()
    *
    *  This filter is applied to the $field after it is loaded from the database
    *
    *  @type    filter
    *  @date    23/01/2013
    *  @since   3.6.0   
    *
    *  @param   $field (array) the field array holding all the field options
    *  @return  $field
    */
    
    /*
    
    function load_field( $field ) {
        
        return $field;
        
    }   
    
    */
    
    
    /*
    *  update_field()
    *
    *  This filter is applied to the $field before it is saved to the database
    *
    *  @type    filter
    *  @date    23/01/2013
    *  @since   3.6.0
    *
    *  @param   $field (array) the field array holding all the field options
    *  @return  $field
    */
    
    /*
    
    function update_field( $field ) {
        
        return $field;
        
    }   
    
    */
    
    
    /*
    *  delete_field()
    *
    *  This action is fired after a field is deleted from the database
    *
    *  @type    action
    *  @date    11/02/2014
    *  @since   5.0.0
    *
    *  @param   $field (array) the field array holding all the field options
    *  @return  n/a
    */
    
    /*
    
    function delete_field( $field ) {
        
        
        
    }   
    
    */
    
    
}


// create field
new acf_field_background();

?>
