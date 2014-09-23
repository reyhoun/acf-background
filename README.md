# ACF Background Field
![enter image description here](http://reyhoun.com/lab/acf-background.png)

Background field include all background css attribute and compatible with Reyhoun SassWatcher plugin.

-----------------------

### Structure

* `/css`:  folder for .css files.
* `/js`: folder for .js files
* `/lang`: folder for .pot, .po and .mo files
* `acf-background.php`: Main plugin file that includes the correct field file based on the ACF version
* `acf-background-v5.php`: Field class compatible with ACF version 5 
* `acf-background-v4.php`: Field class compatible with ACF version 4
* `readme.txt`: WordPress readme file to be used by the wordpress repository

### Compatibility

This ACF field type is compatible with:
* ACF 5
* ACF 4
* Reyhoun SassWatcher

### Installation

1. Copy the `acf-background` folder into your `wp-content/plugins` folder
2. Activate the Background plugin via the plugins admin page
3. Create a new field via ACF and select the Background type
4. Please refer to the description for more info regarding the field type settings

-----------------------

### Subfields
* Repeat
* Attachment
* Size
* Position
* Clip
* Origin
* Color Picker
* Upload Image
* External Image URL

-----------------------

### Changelog

## 1.2.0
* Add: Style for display fields

## 1.1.1
* Bug fix Live Preview.

## 1.1.0
* Add default value.
* Bug fix Preview JS.

## 1.0.0
* Initial Release.