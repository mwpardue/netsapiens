// Java injection to disable email add/edit/remove functionality for users
     if (disableEmailEdit == "yes") {

          // Select the entire DOM for observing:
          var target = document.querySelector('body');


          // Create new observer to watch for Email Delete button:
          var profileEmailDeleteButtonObserver = new MutationObserver(function() {
               
               if (document.querySelector('a#Link.del.rem-email')) {
                    console.log("Disabling Email Delete Button");
                    var profileEmailDeleteButton = document.querySelectorAll("a#Link.del.rem-email").forEach(profileEmailDeleteButton => profileEmailDeleteButton.remove());
               }
               });
          
               // Set configuration object for email delete button:
               var profileEmailDeleteButtonConfig = { childList: true, characterData:true, subtree:true };


          // Create new observer to watch for Email Add button:
          var profileEmailAddButtonObserver = new MutationObserver(function() {
          
               if (document.querySelector('a#add-email')) {
                    console.log("Disabling Emai Add Button");
                    var profileEmailAddButton = document.querySelectorAll("a#add-email").forEach(profileEmailAddButton => profileEmailAddButton.remove());
               }
               });
          
               // Set configuration object for email add button:
               var profileEmailAddButtonConfig = { childList: true, characterData:true, subtree:true };


          // Create new observer to watch for Email Address Fields:
          var profileEmailAddressObserver = new MutationObserver(function() {
               
               if (document.querySelector('[id^=UserEmailAddress]')) {
                    console.log("Disabling User Email Address");
                    var profileEmailAddress = document.querySelectorAll('[id^=UserEmailAddress]').forEach(profileEmailAddress => profileEmailAddress.setAttribute('disabled', true));
               }
               });
          
               // Set configuration object for email address fields:
               var profileEmailAddressConfig = { childList: true, characterData:true, subtree:true };


          // Enable observers
          profileEmailDeleteButtonObserver.observe(target, profileEmailDeleteButtonConfig);
          profileEmailAddButtonObserver.observe(target, profileEmailAddButtonConfig);
          profileEmailAddressObserver.observe(target, profileEmailAddressConfig);
     }
     else {}
// End JavaScript injection for disabling email add/edit/remove functionality for users