<!-- Uses UI Config PORTAL_TIPS_DISABLE_EMAIL_EDIT to disable users' ability to add/edit/remove email addresses for themselves.-->
     <?php

          // Allow email edit by default
          $disableEmailEdit = "no";

          if ($this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT', 'no') == 'yes' || $this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT_'.$this->Session->read('sub_reseller'), 'no') == 'yes')
          {
               if ($this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT', '') == 'yes')
               {
                    $disableEmailEdit = "yes";
               }
               elseif ($this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT_'.$this->Session->read('sub_reseller'), 'no') == 'yes')
               {
                    $disableEmailEdit = "yes";
               }
          }

     ?>

     <!-- Pass user email edit variable to JavaScript -->
     <script> disableEmailEdit = "<?php echo $disableEmailEdit; ?>";</script>

<!-- End PORTAL_TIPS_DISABLE_EMAIL_EDIT UI Config injection -->