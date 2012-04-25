<?php
foreach($dtResults as $result) {
    $this->dtResponse['aaData'][] = array(
        $result['Intervention']['id'],
        $result['Intervention']['description'],
        $result['Intervention']['diagnostic'],
        $result['Intervention']['breakdown_found'],
        'edit',
    );
}