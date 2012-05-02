<?php
foreach($dtResults as $result) {
    $this->dtResponse['aaData'][] = array(
        $result['Device']['id'],
        $result['Device']['date_end_of_warranty'],
        $result['Device']['date_first_seen'],
        $result['Device']['serial_number'],
        $result['Device']['device_type_id'],
        $result['Device']['person_id'],
        $this->Html->link(__('Edit'), array('action' => 'edit', $result['Device']['id']))
    );
}