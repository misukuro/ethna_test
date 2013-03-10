<?php
/**
 *  Miniblog_Comment.php
 *
 *  @author     {$author}
 *  @package    Miniblog
 *  @version    $Id: 2043ca0d5627d5248d0761d3846d06ba3009300d $
 */

/**
 *  Miniblog_CommentManager
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Miniblog
 */
class Miniblog_CommentManager extends Ethna_AppManager
{
}

/**
 *  Miniblog_Comment
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Miniblog
 */
class Miniblog_Comment extends Ethna_AppObject
{
    /**
     *  property display name getter.
     *
     *  @access public
     */
    function getName($key)
    {
        return $this->get($key);
    }
}

