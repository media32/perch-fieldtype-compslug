<?php
/**
 * Composite Slug Field Type.
 *
 * File:  PERCH_PATH/addons/fieldtypes/compslug/compslug.class.php
 * Usage: <perch:content id="slug" type="compslug" for="lastname firstname" suppress="true" />
 * @author Jamie York
 **/
class PerchFieldType_compslug extends PerchFieldType
{
    public function render_inputs($details = array())
    {
        return '';
    }

    public function get_raw($post = false, $Item = false)
    {
        $fors = explode(' ', $this->Tag->for());
        $fors = array_map('trim', $fors);

        $slug = array();
        foreach ($fors as $for) {
            if (isset($post[$for])) {
                $slug[] = $post[$for];
            }
        }

        if (count($slug) === 0) {
            return '';
        }

        $slug = array_map('stripslashes', $slug);
        $slug = array_map('trim', $slug);

        return PerchUtil::urlify(implode(' ', $slug));
    }

    public function get_search_text($raw = false)
    {
        if ($raw === false) {
            $raw = $this->get_raw();
        }

        $parts = explode('-', $raw);
        return implode(' ', $parts);
    }
}