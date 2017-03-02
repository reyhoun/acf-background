/* global rey_change, wp */

(function($){

	var remove = 1;
	"use strict";
    
    $.reyBackground = $.reyBackground || {};
	
    $(document).ready(function () {
         $.reyBackground.init();
    });

	/**
	* rey Background
	* Dependencies		: jquery, wp media uploader
	* Feature added by	: Dovy Paukstys
	* Date				: 07 Jan 2014
	*/
    $.reyBackground.init = function(){
		// Remove the image button
		$('.rey-container-background .remove-image, .rey-container-background .remove-file .wp-picker-container').unbind('click').on('click', function(e) {
			$.reyBackground.removeImage( $(this).parents('.rey-container-background') );
			$.reyBackground.preview($(this));
			return false;
		});

		// Upload media button
		$('.rey-container-background .background_upload_button').unbind().on('click', function( event ) {
			$.reyBackground.addImage( event, $(this).parents('.rey-container-background') );
		});

		$('.rey-background-input').on('change', function() {
			$.reyBackground.preview($(this));
		});

		$('.rey-container-background .rey-color').wpColorPicker();
		

    };

    // Update the background preview
    $.reyBackground.preview = function(selector) {
		var parent = selector.parents('.rey-container-background:first');
		var preview = $(parent).find('.acf-field-body_background_previewer');

		if (!preview) { // No preview present
			return;
		}

		var split = parent.data('id')+'][';
		var css = 'height:'+preview.height()+'px;';
		$(parent).find('.rey-background-input').each(function() {
			var data = $(this).serializeArray();
			data = data[0];
			if (data && data.name.indexOf('[background') != -1) {
			
				if (data.value !== "") {
					data.name = data.name.split('[');
					data.name = data.name[2].replace(']', '');
					if (data.name == "background-image") {
						css += data.name+':url("'+data.value+'");';
					} else {
						css += data.name+':'+data.value+';';	
					}					
				}
				
			}
		});

		preview.attr('style', css).fadeIn();

	};

    // Add a file via the wp.media function
    $.reyBackground.addImage = function (event, selector) {

		event.preventDefault();

		var frame;
		var jQueryel = jQuery(this);

		// If the media frame already exists, reopen it.
		if ( frame ) {
			frame.open();
			return;
		}

		// Create the media frame.
		frame = wp.media({
			multiple: false,
			library: {
				//type: 'image' //Only allow images
			},
			// Set the title of the modal.
			title: jQueryel.data('choose'),

			// Customize the submit button.
			button: {
				// Set the text of the button.
				text: jQueryel.data('update')
				// Tell the button not to close the modal, since we're
				// going to refresh the page when the image is selected.

			}
		});

		// When an image is selected, run a callback.
		frame.on( 'select', function() {
			// Grab the selected attachment.
			var attachment = frame.state().get('selection').first();
			frame.close();

			//console.log(attachment.attributes.type);

			if ( attachment.attributes.type !== "image") {
				return;
			}

			selector.find('.upload').val(attachment.attributes.url);
			selector.find('.upload-id').val(attachment.attributes.id);
			selector.find('.upload-height').val(attachment.attributes.height);
			selector.find('.upload-width').val(attachment.attributes.width);
			//rey_change( jQuery(selector).find( '.upload-id' ) );
			var thumbSrc = attachment.attributes.url;
			if (typeof attachment.attributes.sizes !== 'undefined' && typeof attachment.attributes.sizes.thumbnail !== 'undefined') {
				thumbSrc = attachment.attributes.sizes.thumbnail.url;
			} else if ( typeof attachment.attributes.sizes !== 'undefined' ) {
				var height = attachment.attributes.height;
				for (var key in attachment.attributes.sizes) {
					var object = attachment.attributes.sizes[key];
					if (object.height < height) {
						height = object.height;
						thumbSrc = object.url;
					}
				}
			} else {
				thumbSrc = attachment.attributes.icon;
			}
			selector.find('.upload-thumbnail').val(thumbSrc);
			if ( !selector.find('.upload').hasClass('noPreview') ) {
				selector.find('.screenshot').empty().hide().append('<img class="rey-option-image" src="' + thumbSrc + '">').animate({width:'toggle'}, 150);
				selector.find('.screenshot2').css("background-image" , "url(" + attachment.attributes.url + ")");
				remove = 1;
				// alert(attachment.attributes.url);

			}
			//selector.find('.media_upload_button').unbind();
			selector.find('.remove-image').removeClass('hide');//show "Remove" button
			
			// Aniamte for decrease .acf-background-uplaod-fields field width
			$('.acf-background-uplaod-fields').css('width', 'calc(100% - 165px)');

			selector.find('.rey-background-input-properties').animate({width:'toggle'}, 150);
			$.reyBackground.preview(selector.find('.upload'));
		});

		// Finally, open the modal.
		frame.open();
	};

    // Update the background preview
    $.reyBackground.removeImage = function(selector) {

		// This shouldn't have been run...
		if (!selector.find('.remove-image').addClass('hide')) {
			return;
		}
		//remove 
		selector.find('.screenshot2').css("background-image" , "");
		selector.find('.remove-image').addClass('hide'); //hide "Remove" button

		selector.find('.upload').val('');
		selector.find('.upload-id').val('');
		selector.find('.upload-height').val('');
		selector.find('.upload-width').val('');
		selector.find('.upload-thumbnail').val('');
		//rey_change( jQuery(selector).find( '.upload-id' ) );
		selector.find('.rey-background-input-properties').hide();
		var screenshot = selector.find('.screenshot');
		
		// Hide the screenshot
		if (remove) {
			screenshot.animate({width:'toggle'}, 300);
			remove = 1;
		};
		
		selector.find('.acf-background-uplaod-fields').animate({width: "100%"});

		selector.find('.remove-file').unbind();
		// We don't display the upload button if .upload-notice is present
		// This means the user doesn't have the WordPress 3.5 Media Library Support
		if ( jQuery('.section-upload .upload-notice').length > 0 ) {
			jQuery('.background_upload_button').remove();
		}

		$.reyBackground.preview(selector);

    };    

})(jQuery);
