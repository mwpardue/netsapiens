# Disable Email Edit Capability

This disables users' ability to add/edit/remove email addresses in the Manager's Portal. This has only gone through limited testing so make sure you test in a sandbox environment before implementing in production.

## PHP

- Add the contents of [emailDisable.php](./emailDisable.php) to the custom PHP header (UI Config `PORTAL_PHP_HEAD_INCLUDE_PHP`). 

This example uses UI config `PORTAL_TIPS_DISABLE_EMAIL_EDIT`, but you can customize it as you like. Note that the portal only respects custom UI configs that start with `PORTAL_`.

- A value of 'no' means users can still edit their email address freely. A value of 'yes' means email address add/edit/removal is disabled. 

- The UI config is confirmed to work with all variations of application (user, scope, reseller, domain, and combinations thereof). If the UI config doesn't exist the default position is to allow the default behavior (user CAN add/edit/remove email addresses). 

One caveat is that, if UI config is 'yes' on Office Manager and higher scopes, it does disable add/edit/removal of email addresses in the Domain view. This could be prevented by looking at the user's current omp_level or some other variable, but I am presently only trying to disable for scopes below Office Manager so I have not implemented this yet. 

## Java Script

- The contents of [emailDisable.js](./emailDisable.js) goes into the custom JS file (UI Config `PORTAL_EXTRA_JS`). 

Using the variable that was passed from the PHP header, `$disableEmailEdit`, it creates observers to watch for the creation of the CSS IDs that pertain to email addresses, as well as the add/remove buttons. It removes each instance of the buttons and disables text entry on each address field. I haven't found any unintended consequences of this so far. It should work regardless of how many email addresses the user has.