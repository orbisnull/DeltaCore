<?php
/**
 * User: Vasiliy Shvakin (orbisnull) zen4dev@gmail.com
 */

namespace DeltaCore\Parts;

trait SymfonyForms {

    /**
     * @return \DeltaCore\View\TwigView
     */
    abstract public function getView();

    /**
     * @return \Symfony\Component\Form\FormBuilder
     */
    public function createFormBuilder()
    {
        return $this->getView()->getFormFactory()->createBuilder();
    }
}
