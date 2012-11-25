<?php

/**
 * Attachments text field
 *
 * @package Attachments
 * @subpackage Main
 */

// Declare our class
if ( !class_exists( 'Attachments_Field_Text' ) ) :

    class Attachments_Field_Text extends Attachments_Field implements Attachments_Field_Template
    {

        public $instance;       // the instance this field is used within
        public $name;           // the user-defined field name
        public $field_name;     // the name attribute to be used
        public $label;          // the field label
        public $value;          // the field's value

        function __construct( $name = 'text', $label = 'Text' )
        {
            $this->name     = sanitize_title( $name );
            $this->label    = __( $label, 'attachments' );
        }

        function html( $field )
        {
        ?>
            <input type="text" name="<?php echo $field->field_name; ?>" id="<?php echo $field->field_name; ?>" class="attachments attachments-field attachments-field-<?php echo $field->field_name; ?>" value="<?php echo $field->value; ?>" />
        <?php
        }

        function format_value_for_input( $value, $field = null  )
        {
            return htmlspecialchars( $value, ENT_QUOTES );
        }

    }

endif; // class_exists check