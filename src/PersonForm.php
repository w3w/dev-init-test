<?php
class PersonForm extends Zend_Form
{
    public function init()
    {
        $this->setView(new Zend_View());
        $this->addElement(new Zend_Form_Element_Text([
            'name' => 'age',
            'label' => 'Věk',
            'validators' => [
                new Zend_Validate_Int(),
            ],
            'filters' => [
                new Zend_Filter_Int(),
            ],
        ]));
        $this->addElement(new Zend_Form_Element_Text([
            'name' => 'email',
            'label' => 'Email',
            'required' => true,
        ]));
        $this->addElement(new Zend_Form_Element_Text([
            'name' => 'phone',
            'label' => 'Telefon do Čech ve formátu (+420XXXXXXXXX)',
            'required' => true,
        ]));
        $this->addElement(new Zend_Form_Element_Submit([
            'name' => 'submit',
            'ignore' => true,
        ]));
    }
}
