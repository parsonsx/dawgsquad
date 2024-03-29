<!-- File: /app/views/book_initial_offers/add_books_confirm.ctp -->

<!--
	Created: 5/8/2011
	Author: James Parsons

	Changelog:
	5/8/2011 - James Parsons - Created page, added functionality to print offer details, TODO: write SQL to allow adding new tuple to book_initial_offer on confirm press.
	5/11/2011 - James Parsons - Added ability to recieve book info from calling page, and display the book.
-->

<?php echo $this->Html->css('main', NULL, array('inline' => FALSE)); ?>

<div class="top_progress_arrows">
	<?php echo $this->Html->image('arrow_confirm_select.png', array('alt' => 'book info')) ?>
</div>

<div>

	<h2> Confirm Selection </h2>

	</br>

	<fieldset>
		<legend> Your Book </legend>
		<p class="book_display">
			<label >
				<img src=<?php echo $image ?> alt="Book image" />
				<strong>Title:</strong>	<?php echo $title; ?> <br />
				<strong>Author(s):</strong> <?php echo $author ?> <br />
				<strong>ISBN:</strong> <?php echo $ISBN ?> <br />
				<strong>Summary:</strong> <?php echo $summary ?> <br />
			</label>
		</p>
	</fieldset>


	<fieldset>
		<legend> Selected Offer Details </legend>
		<p>
		<?php

			if(!empty($loan_duration)){
				echo '<strong> Loan for ' . $loan_duration .' days. </strong><br />';
			}

			if(!empty($sell_price)){
				echo '<strong> For Sale at $' . $sell_price .'. </strong><br />';
			}

			if($trade_id >= 0){
				echo '<strong> Willing to Trade for Another Book. </strong><br />';
			}

			if(empty($loan_duration) && empty($sell_price) && $trade_id == -1){
				echo '<strong> No Initial Offer Details Were Selected. </strong><br />';
			}

		?>
		</p>
	</fieldset>

</div>

<?php echo $form->create('BookInitialOffer', array('action' => 'add_book_to_mylibrary/'.$this->Session->read('uid'), 'type'=>'post')); ?>
		<!-- Hidden fields, to transfer data to next page -->
		<input name="data[BookInitialOffer][title]" id="title" value="<?php echo $title ?>" type="hidden">
		<input name="data[BookInitialOffer][author]" id="author" value="<?php echo $author ?>" type="hidden">
		<input name="data[BookInitialOffer][ISBN]" id="ISBN" value="<?php echo $ISBN ?>" type="hidden">
		<input name="data[BookInitialOffer][image]" id="image" value="<?php echo $image ?>" type="hidden">
		<input name="data[BookInitialOffer][summary]" id="image" value="<?php echo $summary ?>" type="hidden">


		<?php
		if(!empty($loan_duration)){
				echo '<input name="data[BookInitialOffer][loan_duration]" id="ld" value="' . $loan_duration . '" type="hidden">';
		}

		if(!empty($sell_price)){
				echo '<input name="data[BookInitialOffer][sell_price]" id="sp" value="' . $sell_price . '" type="hidden">';
		}


				echo '<input name="data[BookInitialOffer][trade_id]" id="ti" value="' . $trade_id . '" type="hidden">';

		?>

<?php
	echo $this->Form->end('Confirm Add To MyLibrary');
?>
		<?php
			echo $this->Form->create('Book', array('action' => 'add_books'));
			echo $this->Form->end('Cancel and start new search');
		?>
