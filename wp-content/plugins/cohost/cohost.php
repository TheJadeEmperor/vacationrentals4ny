<?php
/*
Plugin Name: Property Hub
Description: A simple plugin to add a page in the admin panel and save two text fields into a custom table, vertically like wp_options.
Version: 0.1

  

*/

global $property_hub_fields;
 $property_hub_fields = [
    'prop_hub_addr' => 'Address',
    'prop_hub_b_b' => 'Guests-Bedrooms-Bathrooms',
    'prop_hub_nickname' => 'Prop Nickname',
    'prop_hub_airbnb_url'  => 'Prop Nickname',
    'prop_hub_wifi' => 'prop_hub_wifi',
    'prop_hub_door_code' => 'prop_hub_door_code',
    'prop_hub_trash' => 'prop_hub_trash',
    'prop_hub_owner_name' => 'prop_hub_owner_name',
    'prop_hub_owner_phone' => 'prop_hub_owner_phone',
    'prop_hub_owner_email' => 'prop_hub_owner_email',
    'prop_hub_owner_report' => 'prop_hub_owner_report',
    'prop_hub_cleaner' => 'prop_hub_cleaner',
    'prop_hub_doorlock' => 'prop_hub_doorlock',
    'prop_hub_ring' => 'prop_hub_ring',
    'prop_hub_noise' => 'prop_hub_noise',
    'prop_hub_pets' => 'prop_hub_pets',
    'prop_hub_notes' => 'prop_hub_notes',
];

// Create custom table on plugin activation
function property_hub_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'property_hub';

    $charset_collate = $wpdb->get_charset_collate();

    echo $sql = "CREATE TABLE $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        prop_id INT(11) NOT NULL,
        option_name VARCHAR(255) NOT NULL,
        option_value TEXT DEFAULT NULL,
        PRIMARY KEY  (id),
        KEY prop_id (prop_id),
        KEY option_name (option_name)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook( __FILE__, 'property_hub_create_table' );



// Add menu item
function onboarding_add_admin_menu() {
    add_menu_page(
        'Onboarding',
        'Onboarding Checklist',
        'manage_options',
        'onboarding',
        'onboarding',
        '',
        3
    );
}
add_action('admin_menu', 'onboarding_add_admin_menu');
// Add menu item
function property_hub_add_admin_menu() {
    add_menu_page(
        'Property Hub',
        'Property Hub',
        'manage_options',
        'property-hub',
        'property_hub_settings_page',
        '',
        4
    );

    add_submenu_page(
        'property-hub',
        'NY - 2037 Coyle Street',
        'NY - 2037 Coyle Street',
        'manage_options',
        'property-hub&prop_id=1',
        'property_hub_settings_page'
    );

    add_submenu_page(
        'property-hub',
        'PA - 105 Pine Cone Ln',
        'PA - 105 Pine Cone Ln',
        'manage_options',
        'property-hub&prop_id=2',
        'property_hub_settings_page'
    );

    add_submenu_page(
        'property-hub',
        'PA - 3262 Birch Hill Dr, Tannersville',
        'PA - 3262 Birch Hill Dr, Tannersville',
        'manage_options',
        'property-hub&prop_id=3',
        'property_hub_settings_page'
    );
}
add_action('admin_menu', 'property_hub_add_admin_menu');






// Handle form submit
function property_hub_handle_form($prop_id) {
    if (isset($_POST['property_hub_submit'])) {
        if (!current_user_can('manage_options')) {
            return;
        }

        global $wpdb;
        $table_name = $wpdb->prefix . 'property_hub';

        $fields = [
            'prop_hub_addr' => sanitize_text_field($_POST['prop_hub_addr']),
            'prop_hub_b_b' => sanitize_text_field($_POST['prop_hub_b_b']),
        ];

        foreach ($fields as $option_name => $option_value) {
            $existing = $wpdb->get_var($wpdb->prepare(
                "SELECT id FROM $table_name WHERE prop_id = %d AND option_name = %s",
                $prop_id, $option_name
            ));

            if ($existing) {
                $wpdb->update(
                    $table_name,
                    ['option_value' => $option_value],
                    ['prop_id' => $prop_id, 'option_name' => $option_name]
                );
            } else {
                $wpdb->insert(
                    $table_name,
                    [
                        'prop_id' => $prop_id,
                        'option_name' => $option_name,
                        'option_value' => $option_value,
                    ]
                );
            }
        }

        echo '<div class="updated"><p>Settings saved.</p></div>';
    }
}

add_action('admin_init', 'property_hub_handle_form');


function property_hub_get_fields($prop_id) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'property_hub';

    // Fetch all fields for the given prop_id
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT option_name, option_value FROM $table_name WHERE prop_id = %d",
            $prop_id
        ),
        OBJECT_K
    );

    $fields = [];

    // Map results into simple array: ['fieldname' => 'value']
    if (!empty($results)) {
        foreach ($results as $option_name => $data) {
            $fields[$option_name] = $data->option_value;
        }
    }

    return $fields;
}


function property_hub_settings_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    global $property_hub_fields;

    $prop_id = isset($_GET['prop_id']) ? intval($_GET['prop_id']) : 1; // default to 1 if missing

    property_hub_handle_form($prop_id);

    global $wpdb;
    $table_name = $wpdb->prefix . 'property_hub';
 

    $fields = property_hub_get_fields($prop_id);

    //print_r($fields);

    ?>

    <div class="wrap">
        <h1><?php  echo "#".esc_html($prop_id)." | ". esc_attr($fields['prop_hub_addr'])." | ".esc_attr($fields['prop_hub_b_b']); ?></h1>
        <form method="post" action="">
            <?php wp_nonce_field('property_hub_settings_nonce_action_' . $prop_id, 'property_hub_settings_nonce_field_' . $prop_id); ?>


<?php foreach ($property_hub_fields as $field_name => $label) : ?>
    <p>
        <label for="<?php echo esc_attr($field_name); ?>"><?php echo esc_html($label); ?></label><br>
        <input type="text" id="<?php echo esc_attr($field_name); ?>" name="<?php echo esc_attr($field_name); ?>" value="<?php echo esc_attr($fields[$field_name] ?? ''); ?>" class="regular-text">
    </p>
<?php endforeach; ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Address</th>
                    <td><input type="text" name="prop_hub_addr" value="<?php echo esc_attr($fields['prop_hub_addr']); ?>" class="regular-text" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Guests-Bedrooms-Bathrooms</th>
                    <td><input type="text" name="prop_hub_b_b" value="<?php echo esc_attr($fields['prop_hub_b_b']); ?>" class="regular-text" /></td>
                </tr>
            </table>

            <?php submit_button('Save Settings', 'primary', 'property_hub_submit'); ?>
        </form>
    </div>
    <?php
}

?>