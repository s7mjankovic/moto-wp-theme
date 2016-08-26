<?php

	/**
	 *  ADDING Meni "MOTO Settings" to Apperance menu
	 */
	function add_theme_menu_item(){
		add_theme_page("MOTO Settings", "MOTO Settings", "manage_options", "pu_theme_options.php", "theme_settings_page");
	}
	add_action("admin_menu", "add_theme_menu_item");


	/**
	 *  Setting "MOTO Setings page"
	 */
	function theme_settings_page() {
	    ?>
		    <div class="wrap">
		    <h1>MOTO Settings</h1>
		    <form method="post" action="options.php">
		        <?php
		            settings_fields("section");
		            do_settings_sections("theme-options");      
		            submit_button(); 
		        ?>          
		    </form>
			</div>
		<?php
	}

	/**
	 *  Display language input form element
	 */
	function display_languages() {
		?>
	    	<input type="text" name="language_input" id="language_input" value="<?php echo get_option('language_input'); ?>" />
	    	<br><span style="font-size: 90%;font-style: italic" >Language separated with comma, enter two letters for language ( en, fr, de, sr ...)</span>
	    <?php
	}

	/**
	 *  Display all settings options
	 */
	function display_theme_panel_fields() {
		add_settings_section("section", "All Settings", null, "theme-options");
		
		add_settings_field("language_input", "Site languages", "display_languages", "theme-options", "section");

	    register_setting("section", "language_input");

	}
	add_action("admin_init", "display_theme_panel_fields");
?>