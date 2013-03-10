<?php
// vim: foldmethod=marker
/**
 *  Miniblog_ActionClass.php
 *
 *  @author     {$author}
 *  @package    Miniblog
 *  @version    $Id: fa6d926943d0d227b86f127fa6d4ab9fd084e19d $
 */

// {{{ Miniblog_ActionClass
/**
 *  action execution class
 *
 *  @author     {$author}
 *  @package    Miniblog
 *  @access     public
 */
class Miniblog_ActionClass extends Ethna_ActionClass
{
    /**
     *  authenticate before executing action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    public function authenticate()
    {
        return parent::authenticate();
    }

    /**
     *  Preparation for executing action. (Form input check, etc.)
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    public function prepare()
    {
        return parent::prepare();
    }

    /**
     *  execute action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (we does not forward if returns null.)
     */
    public function perform()
    {
        return parent::perform();
    }
}
// }}}

