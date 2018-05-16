<?php return [
    'plugin' => [
        'name' => 'Translate',
        'description' => 'Enables multi-lingual websites.',
        'tab' => 'Translation',
        'manage_locales' => 'Manage locales',
        'manage_messages' => 'Manage messages',
    ],
    /*'locale_picker' => [
        'component_name' => 'Locale Picker',
        'component_description' => 'Shows a dropdown to select a front-end language.',
    ],*/
    'locale_picker' => [
        'component_name' => 'Selección de idioma',
        'component_description' => 'Muestra una lista desplegable para seleccionar un idioma para el usuario',
    ],
    'alternate_hreflang' => [
        'component_name' => 'Alternate hrefLang elements',
        'component_description' => 'Injects the language alternatives for page as hreflang elements'
    ],
    /*
    'locale' => [
        'title' => 'Manage languages',
        'update_title' => 'Update language',
        'create_title' => 'Create language',
        'select_label' => 'Select language',
        'default_suffix' => 'default',
        'unset_default' => '":locale" is already default and cannot be unset as default.',
        'delete_default' => '":locale" is the default and cannot be deleted.',
        'disabled_default' => '":locale" is disabled and cannot be set as default.',
        'name' => 'Name',
        'code' => 'Code',
        'is_default' => 'Default',
        'is_default_help' => 'The default language represents the content before translation.',
        'is_enabled' => 'Enabled',
        'is_enabled_help' => 'Disabled languages will not be available in the front-end.',
        'not_available_help' => 'There are no other languages set up.',
        'hint_locales' => 'Create new languages here for translating front-end content. The default language represents the content before it has been translated.',
        'reorder_title' => 'Reorder languages',
        'sort_order' => 'Sort Order',
    ],
    'messages' => [
        'title' => 'Translate messages',
        'description' => 'Update Messages',
        'clear_cache_link' => 'Clear cache',
        'clear_cache_loading' => 'Clearing application cache...',
        'clear_cache_success' => 'Cleared the application cache successfully!',
        'clear_cache_hint' => 'You may need to click <strong>Clear cache</strong> to see the changes on the front-end.',
        'scan_messages_link' => 'Scan for messages',
        'scan_messages_begin_scan' => 'Begin scan',
        'scan_messages_loading' => 'Scanning for new messages...',
        'scan_messages_success' => 'Scanned theme template files successfully!',
        'scan_messages_hint' => 'Clicking <strong>Scan for messages</strong> will check the active theme files for any new messages to translate.',
        'scan_messages_process' => 'This process will attempt to scan the active theme for messages that can be translated.',
        'scan_messages_process_limitations' => 'Some messages may not be captured and will only appear after the first time they are used.',
        'scan_messages_purge_label' => 'Purge all messages first',
        'scan_messages_purge_help' => 'If checked this will delete all messages before performing the scan.',
        'scan_messages_purge_confirm' => 'Are you sure you want to delete all messages? This cannot be undone!',
        'hint_translate' => 'Here you can translate messages used on the front-end, the fields will save automatically.',
        'hide_translated' => 'Hide translated',
    ],*/
    'locale' => [
        'title' => 'Administrar idiomas',
        'update_title' => 'Actualizar idioma',
        'create_title' => 'Crear idioma',
        'select_label' => 'Seleccionar idioma',
        'default_suffix' => 'Defecto',
        'unset_default' => '": locale" ya está predeterminado y no puede ser nulo por defecto.',
        'disabled_default' => '":locale" esta desactivado y no puede ser idioma por defecto',
        'name' => 'Nombre',
        'code' => 'Código',
        'is_default' => 'Por defecto',
        'is_default_help' => 'El idioma por defecto con el que se representa el contenido antes de la traducción.',
        'is_enabled' => 'Habilitado',
        'is_enabled_help' => 'Los idiomas desactivados no estarán disponibles en el front-end',
        'not_available_help' => 'No hay otros idiomas establecidos.',
        'hint_locales' => 'Crear nuevos idiomas aquí para traducir el contenido de front-end. El idioma por defecto representa el contenido antes de que haya sido traducido.',
    ],
    'messages' => [
        'title' => 'Traducir mensajes',
        'description' => 'Editar mensajes',
        'clear_cache_link' => 'Limpiar cache',
        'clear_cache_loading' => 'Borrado de la memoria caché de aplicaciones ...',
        'clear_cache_success' => 'Se ha borrado la memoria cache dela aplicación con éxito',
        'clear_cache_hint' => 'Es posible que tenga que hacer clic en <strong> Borrar caché </ strong> para ver los cambios en el front-end.',
        'scan_messages_link' => 'Escanear mensajes',
        'scan_messages_loading' => 'Escaneando nuevos mensajes...',
        'scan_messages_success' => 'Escaneado de los archivos del tema completado!',
        'scan_messages_hint' => 'Al hacer click en Escanear comprobaremos los mensajes de </ strong> los archivos de los temas activos <strong> para localizar nuevos mensajes a traducir.',
        'hint_translate' => 'Aquí usted puede traducir los mensajes utilizados en el front-end, los campos se guardará automáticamente.',
        'hide_translated' => 'Ocultar traducción',
    ],
];
