<?php
/*
Plugin Name: Buscador de terminos
Description: Buscador de terminos por palabra.
Version: 1.0
Author: Omar, Eduardo, Steven
*/

// Hook para agregar el campo personalizado al menú de administración
add_action('admin_menu', 'my_custom_plugin_menu');

// Función para agregar un nuevo elemento al menú de administración
function my_custom_plugin_menu() {
    add_menu_page(
        'My Custom Plugin', // Título de la página
        'Custom Plugin',    // Título del menú
        'manage_options',   // Capacidad requerida para acceder a este menú
        'my-custom-plugin', // Slug del menú
        'my_custom_plugin_page' // Función para mostrar el contenido de la página
    );
}

// Función para mostrar el contenido de la página del plugin personalizado
function my_custom_plugin_page() {
    ?>
    <div class="wrap">
        <h1>My Custom Plugin</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Custom Text Field</th>
                    <td><input type="text" name="custom_text_field" value="" /></td>
                </tr>
            </table>
            <?php submit_button(); // Mostrar el botón de envío ?>
        </form>
    </div>
    <?php
}

// Shortcode para mostrar "Hola Mundo"
function my_custom_plugin_shortcode() {
    return 'Hola Mundo';
}
add_shortcode('hola_mundo', 'my_custom_plugin_shortcode');

// Encolar estilos personalizados
function my_custom_plugin_enqueue_styles() {
    wp_enqueue_style('my-custom-plugin-styles', plugin_dir_url(__FILE__) . 'custom-styles.css');
}
add_action('admin_enqueue_scripts', 'my_custom_plugin_enqueue_styles');
?>
