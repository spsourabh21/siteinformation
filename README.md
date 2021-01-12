# Background Information:

When logged in as the administrator, the "Site Information" form can be found at the path /admin/config/system/site-information.

# Requirements:

This module needs to alter the existing Drupal "Site Information" form. Specifics:

* A new form text field named "Site API Key" needs to be added to the "Site Information" form with the default value of “No API Key yet”.
* When this form is submitted, the value that the user entered for this field should be saved as the system variable named "siteapikey".
* A Drupal message should inform the user that the Site API Key has been saved with that value.
* When this form is visited after the "Site API Key" is saved, the field should be populated with the correct value.
* The text of the "Save configuration" button should change to "Update Configuration".
* This module also provides a URL that responds with a JSON representation of a given node with the content type "page" only if the previously submitted API Key and a node id (nid) of an appropriate node are present, otherwise it will respond with "access denied".

# Example URL:

http://localhost/page_json/FOOBAR12345/17

# Resources

* Previously Known Creation of Module in Drupal 8
* https://www.drupal.org/docs/drupal-apis/configuration-api/simple-configuration-api
* https://drupal.stackexchange.com/questions/156703/how-can-i-add-a-textbox-in-site-information-configuration
* https://www.drupal.org/forum/support/post-installation/2019-02-06/add-a-new-custom-field-to-site-infomation-form-in-drupal8

# Time Taken:
The approximate time taken to implement this module was 8 hours.
