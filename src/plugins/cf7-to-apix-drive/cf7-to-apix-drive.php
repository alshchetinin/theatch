<?php
/*
 * Plugin Name: Apix-Drive connector
 */
 
add_action( 'wpcf7_mail_sent', 'wpcf7_apix_mail_sent_function' );
function wpcf7_apix_mail_sent_function( $contact_form )
{
  $properties = $contact_form->prop('cf7apix_data');

  if(empty($properties) || empty($properties['activate']) || empty($properties['hook_url'])) {
    return false;
  }
  
  
  
   $title = $contact_form->title;
   //$posted_data = $contact_form->posted_data;

   $submission = WPCF7_Submission::get_instance();
   $posted_data = $submission->get_posted_data();
  
   $hook_url = $properties['hook_url'];
  
   $args = array(
    'method'    => 'POST',
    'body'      => json_encode( $posted_data ),
    'headers'   => array(
      'Content-Type'  => 'application/json',
    ),
  );
  $result = wp_remote_post( $hook_url, apply_filters( 'ctz_post_request_args', $args ) );
}


add_filter('wpcf7_editor_panels', 'wpcf7_editor_panels');
function wpcf7_editor_panels( $panels )
{
  $panels['apix-panel'] = array(
    'title'     => 'Apix-Drive',
    'callback'  => 'apix_panel_html',
  );

  return $panels;
}
function apix_panel_html(WPCF7_ContactForm $contactform)
{
  $activate = '0';
  $hook_url = '';

  
  if ( is_a( $contactform, 'WPCF7_ContactForm' ) ) {
    $properties = $contactform->prop('cf7apix_data');

    if ( isset( $properties['activate'] ) ) {
      $activate = $properties['activate'];
    }

    if ( isset( $properties['hook_url'] ) ) {
      $hook_url = $properties['hook_url'];
    }
  }
  
?>
<fieldset>
    <legend>
    Для активации связи с ApiX-Drive вам нужно включить передачу данных и указать webhook URL (получить его можно в личном кабинете ApiX-Drive).<br/>
    Справка по интеграции доступна по <a href="javascript:;">ссылке</a>
    </legend>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label>
                        Интеграция
                    </label>
                </th>
                <td>
                    <p>
                        <label for="ctz-apix-activate">
                            <input type="checkbox" id="ctz-apix-activate" name="ctz-apix-activate" value="1" <?php checked( $activate, "1" ) ?>>
                            Включить передачу данных в ApiX-Drive
                        </label>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>
                        Webhook URL
                    </label>
                </th>
                <td>
                    <p>
                        <label for="ctz-apix-hook-url">
                            <input type="url" id="ctz-apix-hook-url" name="ctz-apix-hook-url" value="<?php echo $hook_url; ?>" style="width: 100%;">
                        </label>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>

<?php
}


add_action('wpcf7_save_contact_form', 'wpcf7_apix_save_contact_form');
function wpcf7_apix_save_contact_form($contact_form)
{
  $new_properties = array();

  if ( isset( $_POST['ctz-apix-activate'] ) && $_POST['ctz-apix-activate'] == '1' ) {
    $new_properties[ 'activate' ] = '1';
  } else {
    $new_properties[ 'activate' ] = '0';
  }

  if ( isset( $_POST['ctz-apix-hook-url'] ) ) {
    $new_properties[ 'hook_url' ] = esc_url_raw( $_POST['ctz-apix-hook-url'] );
  }

  $properties = $contact_form->get_properties();
  $old_properties = $properties['cf7apix_data'];
  $properties['cf7apix_data'] = array_merge( $old_properties, $new_properties );
  $contact_form->set_properties( $properties );
}


add_filter('wpcf7_contact_form_properties', 'wpcf7_apix_contact_form_properties', 10, 2);
function wpcf7_apix_contact_form_properties($properties, $instance)
{
  if(!isset($properties['cf7apix_data'])){
    $properties['cf7apix_data'] = array(
      'activate'          => '0',
      'hook_url'          => '',
    );
  }

  return $properties;
}


