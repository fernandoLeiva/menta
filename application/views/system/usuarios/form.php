<?php

$new_item = array(
    'id' => 'new_item',
    'titulo' => 'Nuevo',
    'body' => gen_form($form),
    'accion' => 'Guardar',
);

modal($new_item);

$edit_item = array(
    'id' => 'edit_item',
    'titulo' => 'Editar',
    'body' => gen_form($form),
    'accion' => 'Editar',
);

modal($edit_item);

$delete_item = array(
    'id' => 'delete_item',
    'titulo' => 'Eliminar',
    'body' => '¿Confirma Eliminar?',
    'accion' => 'Eliminar',
);

modal($delete_item);

?>