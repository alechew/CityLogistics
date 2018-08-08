=== WPCargo Track & Trace===

Contributors: WPTaskforce
Donate link: http://wpcargo.com/
Tags: shipment status,status tracking, shipment tracking, order tracking,  delivery tracking, tracking system, package tracking, courier tracking, order management, order status, order shortcode, order management system, order tracking system, status tracking system, status tracking software, delivery tracking system
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 3.8.1
Tested up to: 4.9.6
Stable tag: 4.x.x

WPCargo is a track &amp; trace system for courier, courier script, parcel, shipment and etc, ideal solution for freight forwarder, customs broker, balikbayan forwarder, importer, exporter, supplier, overseas agent, transporter, &amp; warehouse operator.​​

== Description ==

[Main Site](http://www.wpcargo.com/) | [Documentation](http://www.wpcargo.com/documentation/) | [Showcase](http://www.wpcargo.com/showcase/) | [Premium Addons](http://www.wpcargo.com/purchase) | [Demo](http://wpcargo.com/complete-demo/)

WPCargo is a WordPress plug-in designed to provide ideal technology solution for your Cargo and Courier Operations. Whether you are an exporter, freight forwarder, importer, supplier, customs broker, overseas agent, or warehouse operator, WPCargo helps you to increase the visibility, efficiency, and quality services of your cargo and shipment business.

= Core Plugin Features =

* Shipment Track Form
* Manage Shipment
* Shipment Settings
* Search & Sorting of Shipment List
* Email Notification
* Auto Generate Tracking Number
* Multilingual Support
* Support Barcode
* Shipment History - track location , date and status of the cargo
* Print Label
* Generate Report
* Multiple Packages

= Premium Features =

* [Fully customizable form fields](http://www.wpcargo.com/product/wpcargo-custom-field-add-ons/)
* [Add Signature in custom field manager](http://www.wpcargo.com/product/wpcargo-signature-add-ons/)
* [SMS Notification](http://www.wpcargo.com/product/wpcargo-sms-add-ons/)
* [Allow user to manage thier shipment](http://www.wpcargo.com/product/wpcargo-client-accounts-add-ons/)
* [CSV Import/Export](http://www.wpcargo.com/product/wpcargo-importexport-add-ons/)
* [Online Booking](http://www.wpcargo.com/product/wpcargo-pick-management-add-ons/)
* [Address Book](http://www.wpcargo.com/product/wpcargo-address-book-add-ons/)
* [Proof of Delivery - allow driver or delivery to sign by reciever  and add images as a proof that the cargo has been delivered](http://www.wpcargo.com/product/wpcargo-proof-delivery/)
* Vehicle Manager can assign the delivery to your driver or vehicle - Merge in Proof of Delivery
* [Detrack.com Integration](http://www.wpcargo.com/product/wpcargo-detrack-integration-add-ons/)
* [Branch Manager](http://www.wpcargo.com/product/wpcargo-branch-manager-add-ons/)
* [Container](http://www.wpcargo.com/product/wpcargo-shipment-container-add-ons/)
* [Multi Receiver](http://www.wpcargo.com/product/wpcargo-multi-receivier-add-ons/)
* [Request Quotes](http://www.wpcargo.com/product/wpcargo-parcel-quotation-add-ons/)
* Woocommerce Integration
* Delivery Calculator
* Collection Point
* Ability to track shipment from other company (Fedex , USPS)
* Shipping Rates
* Service API

= Demo =

Login for Admin:

http://wpcargo.com/complete-demo/wp-admin/
Username - usmanilaforwarders
Password - usmanilaforwarders

Login for Client Side:

http://wpcargo.com/complete-demo/my-account/
Username - wpcargo_client
Password - wpcargo_client

[View More features](http://www.wpcargo.com/features/)

Contact Skype: arni.cinco

== Installation ==

1. Upload `WPCargo.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently asked questions ==

- How can I add the Pages for Track Form and Track Result?

First thing to do is to create a pages and setup the Track Form and Track Result under the WPCargo Settings->Page Settings

- How can I add options on each fields?
In WPCargo Settings Page add the option that you needed on each fields.(New line on each option)

Example on Add Shipment Status section:

On-Hold,Pending,Delivered
- How to add an Agent?
Add a new user and change the role into "Agent".
- What is the shortcode to use?
Single Page with results:[wpcargo_trackform]
2 Page with results:
[wpcargo_trackform id=page id of results]
[wpcargo_trackresults]

== Screenshots ==

1. All Shipments
2. Track Shipment
3. Shipment Results

== Changelog ==

= 5.3.1 =
- Fixed autogenerate Shipment Number bug when updating shipment.

= 5.3.0 =
- Add new function to allow admin to decide the number of digits for the Shipment Title number.
- Allow auto generate shipment number even without shipment prefix.
- Fixed language translation in track form placeholder.

= 5.2.3 =
- Fixed Shipment History bug when no Wpcargo Settings is available.
- Add Shipment History Map Tab in WPCargo settings navigation.
- Fixed Navigation Tab wpcargo base color.

= 5.2.2 =
- Fixed the Email notification BCC and CC using shortcode.
- Add shipment filter for shipment category in shipment table
- Add class to shipment status for CSS customization
- Add class to shipment history class for CSS customization
- Fixed shipment history WPML comaptibility
- Fixed error on Shipment history Map

= 5.2.1 =
- Fixed the User timezone bug
- Create new user fields to set specific user timezone

= 5.2.0 =
- Newly added feature for Shipment History Google Map Tracker
- Add bulk and quick edit functionality in Shipment table
- Fixed minor bugs

= 5.1.0 =
- Add filters to shipment history and multiple package section header
- Fixed the Shipment history delete button bug
- Update the shipment status section, Remove the required attribute by default in all form fields and make it required when the shipment status option is not empty.

= 5.0.7 =
- Add option to enable User Timezone in general settings

= 5.0.6 =
- Fixed the script error on admin edit.php page
- Update the date and time default value based on current user localization.

= 5.0.5 =
- Add new Email settings for the Email Cc and Bcc.

= 5.0.4 =
- Fixed CSV format to SLYK format issue in exporting shipment data.
- Fixed the Select Option auto save bug in export shipment form.
- Add pre field value for the shipment history fields for the date, time and location.

= 5.0.3 =
- Fixed email notification bug.
- Add new email notification setting "Select Shipment Status to send email Notification"
- Fixed Color theme in report page
- Fixed Shipment History Shipment Status option bug

= 5.0.2 =
- Fixed the shipment history table list error when no settings are set.
- Remove the duplication of the Carrier field data.
- Update Styles for mobile responsive
- Update the Report Select option data to be form label.


= 5.0.1 =
- Fixed the shipment history display settings error.

= 5.0.0 =
- Add print label functionaly for the shipment.
- Add some styling for the data display consistency.
- Add option to Display Shipment History in result Page (General Settings).
- Update Shipment hitory template. Removed the add shipment history and add admin restriction for the user role to update shipment history (General Settings).
- Remove the Shipment Status in the Shipment fields.
- Merge the Shipment Status with the Shipment History form fields ( note: Add shipment History form above Publish Button ).
- Fixed bug with the Custom Field add on compatibilty
- Add the followig Filters for shipment data customization
- "wpcargo_status_option" - accepts one parameter ( must be array value ). this will affect the wpcargo status options.
- "wpc_shipper_name_table_data" - accept string ( metakey ). This will replace the Shipper name column in the Shipment table.
- "wpc_receiver_name_table_data" - accept string ( metakey ). This will replace the Receiver name column in the Shipment table.
- "wpc_report_search_shipper_name_metakey" - accept string ( metakay ). This will change the shipment metakey to be search in Senders name in Report page.
- "label_template_url" - Accept file Path. This will replace the Shipment label template.

= 4.2.2 =
- Fix array if empty in customfield manager

= 4.2.1 =
- Fix shipping history to get the colum header column in the settings

= 4.2.0 =
- Added settings for changing background color of column  and button colour in admin

= 4.1.2 =
- Fix shipment history  error in  fresh install

= 4.0.9 =
- Fix the default email template responsive

= 4.0.8 =
- Fix issues on shipment history (duplicating shipment history)

= 4.0.7 =

- Fix Templates on Shipment History
- Fix Styles on Shipment History

= 4.0.6 =
- Fixed issue on Shipment History Frontend

= 4.0.4 =
- Fixed issue on Shipment History Admin section

= 4.0.3 =
- Added sortable column on admin (Agent, Shipper Name, Receiver Name, Date)
- Default sort is order by date

= 4.0.2 =
- Fix issues on filter
- Added "Updated By" Column on Shipment History

= 4.0.1 =
- Update Admin Styles

= 4.0.0 =
- Added Shipment History
- Added Reports
- Added Filters for Reports(shipper name, status, date, category)
- Update Email Notification
- Fix issues on filter on admin dashboard

= 3.2.0 =
- Update the Email Notification Template at the frontend - http://www.wpcargo.com/email-settings/
- Added WPCargo Merge Tags Notification
- Update Email Notification for WPCargo Shipment History Add-ons
- Added Email Settings

= 3.1.9 =
- Changed the lists of Shipment Table (Tracking Number, Agent, Shipper Name, Receiver Name, Date, Status, Actions)
- Added Filter by Agent, Shipper and Receiver on Lists of Shipment

= 3.1.8 =

- Fix Bugs on metabox for the Client Accounts Add-ons

= 3.1.7 =
- Remove other styles

= 3.1.6 =
- Update Mobile Responsive in results
- Update Mobile Responsive in shipment admin dashboard

= 3.1.5 =
- Update the date format on frontend
- Update the time format of shipment based on WordPress(General Settings)
- Added Filter by Status on Admin
- Update Multiple Package Mobile Responsive

= 3.1.4 =
- Update the date format of shipment based on WordPress(General Settings)

= 3.1.3 =
- Fix Issues on Multiple Package Frontend and Backend

= 3.1.2 =
- Fix Issue of Multple Package at the shipment results
- Added Enable and Disable Settings for Multiple Package

= 3.1.1 =
- Added Multiple Packages

= 3.1.0 =
- Fix Issue on saving shipments

= 3.0.10 =
- Fix Issue/bugs on Email
- Fix Error on Email Settings
- Fix Error on Headers after activation

= 3.0.8 =
- Improve GUI on front-end and back-end

= 3.0.7 =
- Fix issue on print

= 3.0.6 =
- Fix CSS conflict on other theme's

= 3.0.5 =
- Fix Email Update Notification
- Fix jQuery Date Format
- Add Settings for the barcode to display at the frontend

= 3.0.4 =
- Improve Internationalization
- Improve Mobile Responsive

= 3.0.3 =
- Remove Flush Rewrite Rules Function
- Add Priority Parameter on Registering Custom Post Type

= 3.0.2 =
- Remove "wp_verify_nonce" to avoid conflict on other themes

= 3.0.1 =
- Added Print on Admin Shipments
- Added Developer Hooks on Print
- Fix Email Notification
- Fix Issue on Date and Time on Firefox Browser
- Added Filters

= 3.0.0 =
- Added Developer Hooks
- Fix jQuery Bugs
- Add Template Folder
- Add Language Folder
- Add Localization
- Enhance Script
- Update Styles
- Create Separate Settings
- Add Title Prefix Settings
- Organize Scripts and Directories
- Add Print on result page
- Add Email Notification when updating shipments

= 2.0.1 =
- Remove tabs
- Remove jQuery Bugs
- Fix Admin Notice Bugs
- Additional Settings for the WPCargo Title Prefix
- Add Functionality for the auto generation of the title

= 2.0.0 =
- Update the Track Form and Track Result to one(1) page
- Add a search functionality on "No results found"
- Add Filter on Forms
- Update for SMS Settings (Twilio Gateway)
- Update for WPCargo Email Add-ons

= 1.0.5 =
- Add Filter to edit other titles - http://www.wpcargo.com/added-apply-filter-on-version-1-0-5/
- Fix conflicts between the filter of the post and wpcargo
- Fix Print Layout on Result Page

= 1.0.4 =
- Fix the div tags closing on track result page

= 1.0.3 =
- Fix Error on Filter
- Add the Add-ons Settings (Email Settings, SMS Settings)
- Add details on Add-ons Page (WPCargo Email Add-ons, WPCargo SMS Add-ons)

= 1.0.2 =
- Fix bugs in inserting/updating into database

= 1.0.1 =
- Removed License Manager
- Fixed bugs for the add-ons
- Fixed the Shipment Status
- Change other strings to make it readable for developers
- Add Add-ons Page that might help you
- Fixed jQuery conflicts

= 1.0.0 =
- Add Filter by Shipment Status
- Add Filter by Shipment Category

== Upgrade Notice ==

Just upgrade via Wordpress.