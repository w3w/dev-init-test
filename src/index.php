<?php
require_once '..\vendor\autoload.php';
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
    $form->setDefaults([
            'age' => '4X',
            'email' => 'nic vám nedám',
            'phone' => '777 123 456',
    ]);
}
echo $form;
?>

<h1>Zadání</h1>
<p>Cílem je aby formulářem procházely jen platné hodnoty. Představ si, že je budeme dále používat. Na emailovou adresu budeme posílat nějaké potvrzení a na telefon budeme přes API posílat SMSku. Pokud se ti podaří uživatele našimi omezeními co nejméně otravovat, tak to bude skvělé. Takže pokud dokážeš zadaný údaj "opravit", tak se o to pokus.</p>
<p>Ve složce <code>tests</code> jsou připravené testy, které by ti měli pomoct zkontrolovat, že tvůj kód dělá všechno, co má. Testy spustíš pomocí <code>vendor/bin/phpunit tests/</code></p>
