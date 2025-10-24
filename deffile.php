<?php
require_once('vendor/inter-mediator/inter-mediator/INTER-Mediator.php');

IM_Entry(
    array(
        array(
            'name' => 'address_list',
            'view' => 'address',
            'table' => 'address',
            'key' => 'id',
            'navi-control' => 'master-hide',
            'paging' => true,
            'repeat-control' => 'insert-confirm delete-confirm'
        ),
        array(
            'name' => 'address_detail',
            'view' => 'address',
            'table' => 'address',
            'key' => 'id',
            'navi-control' => 'detail-update',
            'records' => 1
        )
    ),
    null,
    null,
    2
);
?>
