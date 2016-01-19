<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);

$form = new PersonForm();
if (count($_POST)) {
    if ($form->isValid($_POST)) {
        echo '<ul>';
        foreach ($form->getValues() as $key => $value) {
            echo sprintf('<li><strong>%s:</strong> %s</li>', $form->getElement($key)->getLabel(), $value);
        }
        echo '</ul>';
    }
} else {
    $form->setDefaults(array(
            'age' => '4X',
            'email' => 'nic vám nedám',
            'phone' => '777 123 456',
    ));
}
echo $form;
