<!-- help desk  -->
<?php
   $pathUrl = get_stylesheet_directory_uri();
   ?>
<div class="help-desk">
   <div class="help-desk__card-wapper">
      <div class="help-desk__main padding-lr">
         <div class="help-desk__img">
            <img class="lazyload browserSpecificImage" data-src="<?php echo  $pathUrl; ?>/assets/images/help-desk.png" alt="Spiceworks Help Desk Screenshot">
            <div class="mobile">
            <img  class="lazyload" data-src="<?php echo $pathUrl; ?>/assets/images/mobile.png" alt="Spiceworks Help Desk Screenshot">
         </div>
         </div>
         <div class="help-desk__content">
            <div class="help-desk__heading">
               <h1 class="help-desk__heading__text">Launch Help Desk</h1>
            </div>
            <div class="help-desk__full-conent"> Understand the technology needs and challenges of your business. Easy to Use. Up and Running in Minutes. Built for IT.</p>
            </div>
            <div class="help-desk__links">
                <?php $launchHelpDeskLink = "https://on.spiceworks.com/registrations/new?utm_medium=internal&utm_source=www_homepage&utm_campaign=new_daily_destination_www_homepage&_ga=2.123681101.715809464.1551041881-1738401187.1540508754"; ?>
               <a  href="<?php echo $launchHelpDeskLink; ?>" class="help-desk__button helpdesk-lanch-button" target="_self">Launch Help Desk</a>
               <div class="help-desk__learnmore">
                  <a href="https://www.spiceworks.com/free-help-desk-software/?utm_medium=internal&utm_source=www_homepage&utm_campaign=new_daily_destination_www_homepage" target="_self" class="help-desk__learnmore__text helpdesk-learn-more-button">Learn More >>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="help-desk__card-wapper">
      <div class="help-desk__main padding-lr">
         <div class="help-desk__img">
            <img class="lazyload browserSpecificImage" data-src="<?php echo $pathUrl; ?>/assets/images/Inventory.png" alt="Spiceworks Inventory Tool Screenshot">
         </div>
         <div class="help-desk__content">
            <div class="help-desk__heading">
               <h1 class="help-desk__heading__text">Manage Inventory</h1>
            </div>
            <div class="help-desk__full-conent">Discover the technologies in use within your organization. Device Inventory. Software tracking. Customized
Reporting.
            </div>
            <div class="help-desk__links">
               <?php $launchInventoryLink="https://apps.spiceworks.com/tools/device-inventory/login?utm_medium=internal&utm_source=www_homepage"; ?>
               <a href="<?php echo $launchInventoryLink; ?>"  class="help-desk__button manage-inventory-button" target="_self">Launch Inventory</a>
               <div class="help-desk__learnmore">
                  <a href="https://www.spiceworks.com/free-pc-network-inventory-software/"   class="help-desk__learnmore__text manage-inventory-learn-more-button" target="_self">Learn More >>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>