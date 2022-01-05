<?php
/**
 * Free White Label functions.
 *
 * @package White Label
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Add White Label Pro features upsell to Upgrade section.
 *
 * @return void
 */
function white_label_free_upgrade()
{
    echo '
    <div class="white_label-subsection white_label-upgrade-tab">
        <h1>Upgrade to White Label Pro</h1>

        <p>
        Give your clients and users an even better WordPress experience with <a href="https://whitewp.com?utm_source=plugin_white_label&utm_content=upgrade_tab" target="_blank">White Label Pro</a>.
        Unlock the following set of features when you upgrade:
        </p>

        <h3>Remove Individual Dashboard Widgets</h3>
        <p>
        Remove individual dashboard widgets from the front of the WordPress admin. Control exactly what users see when they first log in to their WordPress sites.
        </p>

        <h3>Rename Sidebar Menus</h3>
        <p>
        Change the text for any of the sidebar menu items shown on the admin side of your WordPress installation.
        </p>
        
        <h3>Rename or Hide Admin Bar Menus</h3>
        <p>
        Hide or rename individual admin bar menu items on the front end and back end of your site. Remove the admin bar entirely from the front end of your WordPress installation for non-administrators and other users.
        </p>

        <h3>Elementor Template Support</h3>
        <p>
        White Label Pro offers the ability to use Elementor directly inside of your WordPress admin. 
        Easily assign any Elementor template to be used as a custom WordPress dashboard for your clients.
        </p>

        <h3>Hide Update Notifications & Nags</h3>
        <p>
        Hide WordPress update notification alerts and nags from non-White Label Administrators.
        </p>

        <h3>Redirect Users After Login</h3>
        <p>
        Redirect users to a specific URL after they have successfully logged in to the WordPress admin.
        </p>

        <h3>Change Email Settings</h3>
        <p>
        Change the default WordPress email settings to your own business name and email address. Disable the Administration Email Verification screen when non-White Label Administrators log into WordPress.
        </p>

        <a class="button-primary" href="https://whitewp.com?utm_source=plugin_white_label&utm_content=upgrade_tab" target="_blank">Upgrade to White Label Pro</a>
	</div>
    ';
}

add_action('white_label_form_bottom_white_label_upgrade', 'white_label_free_upgrade');

/**
 * PRO options to admin settings.
 *
 * @param mixed $settings White Label Settings.
 */
function white_label_free_sidebar($settings)
{
    if (!$settings) {
        return;
    }

    $upgrade = [
        'id' => 'white_label_pro_upsell',
        'title' => __('Upgrade to White Label Pro', 'white-label'),
        'content' => __(
            'Give your clients and users an even better WordPress experience with <a href="https://whitewp.com?utm_source=plugin_white_label&utm_content=upgrade" target="_blank">White Label Pro</a>.
			<p><b>Included in White Label Pro:</b></p>
			<ul>
            <li>Remove Individual Dashboard Widgets</li>
            <li>Rename Sidebar Menus</li>
            <li>Rename or Hide Admin Bar Menus</li>
            <li>Remove Front End Admin Bar</li>
            <li>Elementor Template Support</li>
            <li>Hide Update Notifications &amp; Nags</li>
            <li>Redirect Users After Login</li>
            <li>Change Email Settings</li>
			</ul>
			<a class="button-primary button-white_label" href="https://whitewp.com?utm_source=plugin_white_label&utm_content=documentation" target="_blank">Upgrade to White Label Pro</a>',
            'white-label'
        ),
    ];

    array_unshift($settings['sidebars'], $upgrade);

    return $settings;
}
add_filter('white_label_admin_settings', 'white_label_free_sidebar');
