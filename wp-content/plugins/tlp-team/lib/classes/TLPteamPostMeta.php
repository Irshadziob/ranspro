<?php
if (!class_exists('TLPteamPostMeta')):

    /**
     *
     */
    class TLPteamPostMeta
    {

        function __construct() {
            add_action('add_meta_boxes', array($this, 'team_meta_boxs'));
            add_action('save_post', array($this, 'save_team_meta_data'), 10, 2);
            add_action('admin_print_scripts-post-new.php', array($this, 'tpl_team_script'), 11);
            add_action('admin_print_scripts-post.php', array($this, 'tpl_team_script'), 11);
            add_action( 'edit_form_after_title', array($this, 'team_after_title') );
        }
        function team_after_title($post){
            global $TLPteam;
            if( $TLPteam->post_type !== $post->post_type) {
                return;
            }
            $html = null;
         

            echo $html;
        }

        function team_meta_boxs() {
            add_meta_box(
                'tlp_team_meta',
                __('Announcement Info', TLP_TEAM_SLUG ),
                array($this,'tlp_team_meta'),
                'team',
                'normal',
                'high');
        }

        function tlp_team_meta($post){
                global $TLPteam;
                wp_nonce_field( $TLPteam->nonceText(), 'tlp_nonce' );
                $meta = get_post_meta( $post->ID );
            ?>
            <div class="member-field-holder">

				
	
				
				  <div class="tlp-field-holder">
                    <div class="tplp-label">
                        <label for="position"><?php _e('Position', TLP_TEAM_SLUG); ?>:</label>
                    </div>
                    <div class="tlp-field">
                        <input type="name" name="position" class="tlpfield" value="<?php echo (@$meta['position'][0] ? @$meta['position'][0] : null) ?>" required>
                    </div>
                </div>	
				
			        
				
				  <div class="tlp-field-holder">
                    <div class="tplp-label">
                        <label for="facebook"><?php _e('Facebook', TLP_TEAM_SLUG); ?>:</label>
                    </div>
                    <div class="tlp-field">
                        <input type="url" name="facebook" class="tlpfield" value="<?php echo (@$meta['facebook'][0] ? @$meta['facebook'][0] : null) ?>">
                    </div>
                </div>
				  <div class="tlp-field-holder">
                    <div class="tplp-label">
                        <label for="twitter"><?php _e('Twitter', TLP_TEAM_SLUG); ?>:</label>
                    </div>
                    <div class="tlp-field">
                        <input type="url" name="twitter" class="tlpfield" value="<?php echo (@$meta['twitter'][0] ? @$meta['twitter'][0] : null) ?>">
                    </div>
                </div>				
				
				  <div class="tlp-field-holder">
                    <div class="tplp-label">
                        <label for="instagram"><?php _e('Instagram', TLP_TEAM_SLUG); ?>:</label>
                    </div>
                    <div class="tlp-field">
                        <input type="url" name="instagram" class="tlpfield" value="<?php echo (@$meta['instagram'][0] ? @$meta['instagram'][0] : null) ?>">
                    </div>
                </div>			
				
				
				
				
			

              

            


         
            </div>
            <?php
        }
        function save_team_meta_data($post_id, $post) {

            if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

            global $TLPteam;
            if ( ! $TLPteam->verifyNonce() ) {
                return $post_id;
            }
            if ( $TLPteam->post_type != $post->post_type ) {
                return $post_id;
            }


            if ( isset( $_REQUEST['short_bio'] ) ) {
                update_post_meta( $post_id, 'short_bio', sanitize_text_field( $_REQUEST['short_bio'] ) );
            }

            if ( isset( $_REQUEST['email'] ) ) {
                update_post_meta( $post_id, 'email', sanitize_text_field( $_REQUEST['email'] ) );
            }
 if ( isset( $_REQUEST['years'] ) ) {
                update_post_meta( $post_id, 'years', sanitize_text_field( $_REQUEST['years'] ) );
            }
			
			 if ( isset( $_REQUEST['months'] ) ) {
                update_post_meta( $post_id, 'months', sanitize_text_field( $_REQUEST['months'] ) );
            }
			
			 if ( isset( $_REQUEST['days'] ) ) {
                update_post_meta( $post_id, 'days', sanitize_text_field( $_REQUEST['days'] ) );
            }
			
			 if ( isset( $_REQUEST['catogarynos'] ) ) {
                update_post_meta( $post_id, 'catogarynos', sanitize_text_field( $_REQUEST['catogarynos'] ) );
            }
			
			
	

            if ( isset( $_REQUEST['designation'] ) ) {
                update_post_meta( $post_id, 'designation', sanitize_text_field( $_REQUEST['designation'] ) );
            }

            if ( isset( $_REQUEST['web_url'] ) ) {
                update_post_meta( $post_id, 'web_url', sanitize_text_field( $_REQUEST['web_url'] ) );
            }

            if ( isset( $_REQUEST['telephone'] ) ) {
                update_post_meta( $post_id, 'telephone', sanitize_text_field( $_REQUEST['telephone'] ) );
            }

            if ( isset( $_REQUEST['location'] ) ) {
                update_post_meta( $post_id, 'location', sanitize_text_field( $_REQUEST['location'] ) );
            }

            if( isset($_REQUEST['social'])){
                $s = array_filter($_REQUEST['social']);
                update_post_meta( $post_id, 'social', serialize($s) );
            }
			
			if ( isset( $_REQUEST['position'] ) ) {
                update_post_meta( $post_id, 'position', sanitize_text_field( $_REQUEST['position'] ) );
            }			
			if ( isset( $_REQUEST['facebook'] ) ) {
                update_post_meta( $post_id, 'facebook', sanitize_text_field( $_REQUEST['facebook'] ) );
            }
				if ( isset( $_REQUEST['twitter'] ) ) {
                update_post_meta( $post_id, 'twitter', sanitize_text_field( $_REQUEST['twitter'] ) );
            }
				if ( isset( $_REQUEST['instagram'] ) ) {
                update_post_meta( $post_id, 'instagram', sanitize_text_field( $_REQUEST['instagram'] ) );
            }

        }

        function tpl_team_script() {
            global $post_type,$TLPteam;
            if($post_type == $TLPteam->post_type){
                $TLPteam->tlp_style();
                $TLPteam->tlp_script();
            }
        }
    }
endif;
