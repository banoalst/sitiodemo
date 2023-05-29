<?php
//assets script
function comercio_script()
{

    //nos aseguramos que no estamos en el area de administracción
    if (!is_admin()) {
        //nos aseguramos nuestro script con el nombre "mi-script" y describimos que es depensiente de iqueri para que wordpressse asegura de incluir JQuerry antes de este archivo
        //en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer de sitio , en lugar donde encuentre la funcion wp_footer

        //register the script like  this for theme

        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', false, false);
        // wp_register_script('MI-ARCHIVO-JS', get_bloginfo('template_directory'), '/assets/librarias/js/MIARCHIVO.js', false, false);

        //encolar los js
        wp_enqueue_script('bootstrap-js');
        // wp_enqueue_script('MI-ARCHIVO-JS', array('jquery'), true);
    }
}
add_action("wp_enqueue_script", "comercio_script", 1);
