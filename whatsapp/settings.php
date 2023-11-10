<?php
    defined('MOODLE_INTERNAL') || die;

    if ($ADMIN->fulltree) {
        $settings->add(new admin_setting_configtext(
            'block_whatsapp/phone_number',
            get_string('phone_number', 'block_whatsapp'),
            get_string('phone_number_desc', 'block_whatsapp'),
            '',
            PARAM_NOTAGS
        ));
        $settings->add(new admin_setting_configtext(
            'block_whatsapp/default_message',
            get_string('default_message', 'block_whatsapp'),
            get_string('default_message_desc', 'block_whatsapp'),
            '',
            PARAM_NOTAGS
        ));
    }