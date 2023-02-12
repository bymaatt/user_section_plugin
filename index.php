<?php

/**
 * Plugin Name: User section
 * Plugin URL: https://github.com/bymaatt/user_section_plugin
 * Description: Este plugin es para personalizar los datos de usuarios de Wordpress
 * Author: Matias Maciel
 * Version: 1.0.0
 * Author URL: https://www.linkedin.com/in/matias-maciel-dev/
 * License: Free license
 */
    add_filter( 'user_contactmethods', 'modify_user_contact_methods' );

    function modify_user_contact_methods( $methods ) {
        // Add user info
        $methods['user_nombre']   = __( 'Tu nombre'   );
        $methods['user_direccion']   = __( 'Tu dirección'   );
        $methods['user_telefono']   = __( 'Tu telefono'   );
        $methods['user_correo'] = __( 'Tu correo electrónico' );
        return $methods;
    }
?>