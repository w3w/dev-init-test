<?php
class PersonForm extends Zend_Form
{
    public function init()
    {
        $this->setView(new Zend_View());
        $this->addElement(new Zend_Form_Element_Text(array(
            'name' => 'age',
            'label' => 'Věk',
            'validators' => array(
                new Zend_Validate_Int(),
            ),
            'filters' => array(
                new Zend_Filter_Int(),
            ),
        )));
        $this->addElement(new Zend_Form_Element_Text(array(
            'name' => 'email',
            'label' => 'Email',
            'required' => true,
        )));
        $this->addElement(new Zend_Form_Element_Text(array(
            'name' => 'phone',
            'label' => 'Telefon do Čech ve formátu (+420XXXXXXXXX)',
            'required' => true,
        )));
        $this->addElement(new Zend_Form_Element_Submit(array(
            'name' => 'submit',
            'ignore' => true,
        )));
    }
}
