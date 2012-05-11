<?php
foreach($dtResults as $result) {
    $this->dtResponse['aaData'][] = array(
        $result['Person']['id'],
        $result['Person']['sciper'],
        $result['Person']['first_name'],
        $result['Person']['last_name'],
        $result['Person']['email'],
        $result['Person']['phone_number'],
        $result['Person']['is_technician'],
        $result['Person']['is_banned'],
        $result['Language']['name'],
        $result['Person']['partner_id'],
        $this->Html->link(__('Edit'), array('action' => 'edit', $result['Person']['id']))
    );
}