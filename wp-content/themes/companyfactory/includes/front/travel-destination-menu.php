<div class="travelDestinationMenu">

    <a id="travelDestinationbtn" class="travelDestinationbtn" href="#" onclick="travelDestinationMenu()" style="display: block;"><img src="http://www.ocm.ch/wp-content/uploads/2020/07/btn-travel-menu.svg" width="70"></a>

    <div id="travelDestinationMenu" class="collapse" style="display: none;">

        <a href="#" onclick="travelDestinationMenu()" class="travelDestinationbtn-expand"><img src="http://www.ocm.ch/wp-content/uploads/2020/07/btn-travel-menu.svg" width="70"></a>

        <?php

        if ( has_nav_menu ('secondary') ) {
            wp_nav_menu (array(
                'theme_location'	=> 'secondary',
                'container'			=> 'false',
                'menu_class'		=> 'travelDestinationNavbar',
                'fallback_cb'		=> 'false',
                'depth'				=> 1,
                'add_li_class'      => 'nav-item-travel-destination-menu'
            ));
        }

        ?>

    </div>

</div>

<script>

    function travelDestinationMenu() {
        let travelDestinationMenu = document.getElementById("travelDestinationMenu");
        let travelDestinationbtn = document.getElementById("travelDestinationbtn");
        if (travelDestinationMenu.style.display === "none") {
            travelDestinationMenu.style.display = "block";
            travelDestinationbtn.style.display = "none";
        } else {
            travelDestinationMenu.style.display = "none";
            travelDestinationbtn.style.display = "block";
        }
    }

</script>
