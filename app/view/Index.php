<?php
/**
 *  Index.php
 *
 *  @author     {$author}
 *  @package    Miniblog
 *  @version    $Id: 213d11c251104242f9806527d410cf7dad779c54 $
 */

/**
 *  Index view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Miniblog
 */
class Miniblog_View_Index extends Miniblog_ViewClass
{
    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
      $db = $this->backend->getDB();
      $result =& $db->query("select * from comment");
      $comments = array();
      while ($row =& $result->fetchRow(DB_FETCHMODE_ASSOC)) {
        //array_push($comments, array('id' => $row['id'], 'comment' => $row['comment']));
        array_push($comments, $row['comment']);
      }
      $this->af->setApp('comments', $comments);
    }
}

