<!-- Uses UI Config PORTAL_TIPS_DISABLE_EMAIL_EDIT to disable users' ability to add/edit/remove email addresses for themselves.-->
     <?php

          // Allow email edit by default
          $disableEmailEdit = "no";

          if ($this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT', 'no') == 'yes' || $this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT_'.$this->Session->read('sub_reseller'), 'no') == 'yes')
          {
               if ($this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT', '') == 'yes')
               {
                    $disableEmailEdit = "yes";
                    // echo("<script>console.log('PHP User Email Edit first IF " . $disableEmailEdit . "');</script>");
               }
               elseif ($this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT_'.$this->Session->read('sub_reseller'), 'no') == 'yes')
               {
                    $disableEmailEdit = "yes";
                    // echo("<script>console.log('PHP User Email Edit ELSEIF " . $disableEmailEdit . "');</script>");
               }
          }

     // Logging, to be removed after completion of testing
          // $dueeUI = $this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT', '');
          // $dueeUIreseller = $this->Uiconfig->getUiConfig('PORTAL_TIPS_DISABLE_EMAIL_EDIT_'.$this->Session->read('sub_reseller'), '');
          // echo("<script>console.log('PHP User Email Edit: " . $disableEmailEdit . "');</script>");
          // echo("<script>console.log('DUEEUI: " . $dueeUI . "');</script>");
          // echo("<script>console.log('DUEE Reseller UI: " . $dueeUIreseller . "');</script>");

     ?>

     <!-- Pass user email edit variable to JavaScript -->
     <script> disableEmailEdit = "<?php echo $disableEmailEdit; ?>";</script>

<!-- End PORTAL_TIPS_DISABLE_EMAIL_EDIT UI Config injection -->