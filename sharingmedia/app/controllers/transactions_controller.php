<?php

/* This assumes that the status for the transaction is
 * 0 - pending; 1 - rejected; 2 - accepted.
 * We should definitely make that an enum or something later.
 * This is just quick-and-dirty skeleton code.
 *  -- Greg
 *
 *		Changelog:
 *		5/12/2011 - John Wang - Added function for accept transaction()
 */

class TransactionsController extends AppController {
  var $name = 'Transactions';
  var $helpers = array('Form', 'Html');

  /* owner agrees on user's proposed medium of exchange
   * pre: transaction is pending
   * post: transaction is completed (status == 2)
   */
  function acceptTransaction($tid) {
    /* get the transaction */
    $t = $this->Transaction->query("SELECT * FROM transactions WHERE id = $tid");

    /* do all the update stuff */

    /* post info to view for updating / test */
    $this->set('transaction_info', $t[0]);

  }

  /* updates the current offer
   * pre: transaction is pending
   * post: this->trade_id OR this->duration OR this->price updated
   */
  function counterTransaction($tid, $type, $offer) {
    /* get the transaction */
    $t = $this->Transaction->query("SELECT * FROM transactions WHERE id = $tid");

    /* do all the update stuff */

    /* post info to view for updating / test */
    $this->set('transaction_info', $t[0]);
  }

  /* changes state of transaction to rejected
   * pre: transaction is pending
   * post: transaction is rejected */
  function rejectTransaction($tid) {
    /* get the transaction */
    $t = $this->Transaction->query("SELECT * FROM transactions WHERE id = $tid");

    /* do all the update stuff */

    /* post info to view for updating / test */
    $this->set('transaction_info', $t[0]);
  }

  function accept_transaction() {
		$this->layout = 'main_layout';
		$this->set('title_for_layout', 'accept transaction');
  }

	function my_transactions() {
                $this->layout = 'main_layout';
                $this->set('title_for_layout', 'Library || My Transactions');
  }

}
?>
