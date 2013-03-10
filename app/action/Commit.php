<?php
/**
 *  Commit.php
 *
 *  @author     {$author}
 *  @package    Miniblog
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  commit Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Miniblog
 */
class Miniblog_Form_Commit extends Miniblog_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
     */
    protected $form = array(
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
              'comment' => array(
                  'type' => VAR_TYPE_STRING,
                  'form_type' => FORM_TYPE_TEXTAREA,
                  'name' => 'コメント',
                  'max' => 140,
                  'required' => true,
              ),
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    protected function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  commit action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Miniblog
 */
class Miniblog_Action_Commit extends Miniblog_ActionClass
{
    /**
     *  preprocess of commit Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    public function prepare()
    {
        if ($this->af->validate() > 0) {
          return 'index';
        }
        //$sample = $this->af->get('sample');
        return null;
    }

    /**
     *  commit action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
      $comment =& new Miniblog_Comment($this->backend);
      $comment->importForm();
      $comment->add();
      return 'index';
    }
}

