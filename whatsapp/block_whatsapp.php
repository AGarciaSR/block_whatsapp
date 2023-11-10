<?php
class block_whatsapp extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_whatsapp');
    }

    public function has_config() {
        return true;
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $phone_number = get_config('block_whatsapp', 'phone_number');
        $default_message = get_config('block_whatsapp', 'default_message');
        $whatsapp_url = 'https://wa.me/' . $phone_number . '?text=' . $default_message;

        $this->content         =  new stdClass;
        $this->content->text   = '<a id="whatsapp-button" href="' . $whatsapp_url . '" target="_blank"><img src="'.(new moodle_url('/blocks/whatsapp/pix/whatsapp_logo.png'))->out().'"></a>';
        $this->content->text   .= '<link rel="stylesheet" type="text/css" href="' . (new moodle_url('/blocks/whatsapp/styles/styles.css'))->out() . '" />';
        $this->content->footer = '';

        return $this->content;
    }
}