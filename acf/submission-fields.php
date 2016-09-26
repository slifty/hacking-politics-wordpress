<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_submission-fields',
        'title' => 'Submission Fields',
        'fields' => array (
            array (
                'key' => 'field_57b2496952978',
                'label' => 'Your Name',
                'name' => 'submitter_name',
                'type' => 'text',
                'required' => 1,
                'default_value' => ''
            ),
            array (
                'key' => 'field_57b2496952977',
                'label' => 'Assignment',
                'name' => 'assignment',
                'type' => 'select',
                'required' => 1,
                'choices' => array (
                    1 => 'Week 1',
                    2 => 'Week 2',
                    3 => 'Week 3',
                    4 => 'Week 4',
                    5 => 'Week 5',
                    6 => 'Week 6',
                ),
                'default_value' => '',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_57b249933afbf',
                'label' => 'URL',
                'name' => 'url',
                'type' => 'text',
                'instructions' => 'Link to the content you are submitting',
                'required' => 1,
                'default_value' => 'http://',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_57b24aca6f928',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'instructions' => 'Describe the content of your video',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'html',
            ),
            array (
                'key' => 'field_57b24aeb6f929',
                'label' => 'Extra Information',
                'name' => 'extra_information',
                'type' => 'textarea',
                'instructions' => 'Anything you want to say to the instructors about this assignment - this content is not made public and is visible.',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'submission',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
?>
