<?php

namespace UncleCheese\BetterButtons\Buttons;

use UncleCheese\BetterButtons\Traits\SaveAndCloseTransforms;

/**
 * Defines the button that saves a record and closes the detail form
 *
 * @author  Uncle Cheese <unclecheese@leftandmain.com>
 * @package  silverstripe-gridfield-betterbuttons
 */
class SaveAndClose extends Button
{
    use SaveAndCloseTransforms;

    /**
     * Builds the button
     */
    public function __construct()
    {
        parent::__construct("doSaveAndQuit", _t('GridFieldDetailForm.SAVEANDCLOSE', 'Save and close'));
    }

    /**
     * Determines if the button should show
     * @return boolean
     */
    public function shouldDisplay()
    {
        $record = $this->getGridFieldRequest()->getRecord();

        return $record->canEdit();
    }

}
