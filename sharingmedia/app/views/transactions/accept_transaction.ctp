<!-- File: /app/views/transaction/accept_transaction.ctp -->

<!--
	Created: 5/18/2011
	Author: John Wang

	Changelog:
	5/18/2011 - John Wang - Started this page. Wrote skeleton display
	5/20/2011 - John Wang - Finished page.
-->
<?php echo $this->Html->css('main', NULL, array('inline' => FALSE)); ?>

<div class = "trans_detail">

	<h2> Transaction Accepted! </h2>

	<br />

	<p>Congratulations, you have a completed a transaction! Please use Facebook's private messaging system to
	make an exchange. Final transaction details are as follows:</p>

	<br />

	<fieldset>
		<legend> Book Offer </legend>
		<p class="book_display">
			<label >
				<img src=<?= $data['Transaction']['book_image'] ?> alt="Book image" />
				<strong>Title:</strong>	<?= $data['Transaction']['book_title'] ?> <br />
				<strong>Author(s):</strong> <?= $data['Transaction']['book_author'] ?> <br />
				<strong>ISBN:</strong> <?= $data['Transaction']['book_isbn'] ?> <br />
			</label>
		</p>
	</fieldset>

	<fieldset>
		<legend> Owner Information </legend>
		<p>
			<label >
				<strong>Name:</strong>	<?= $data['Transaction']['owner_name'] ?> <br />
			</label>
		</p>
	</fieldset>


	<fieldset>
		<legend> Selected Offer Details </legend>
		<p>
		<?php

			if(!empty($data['Transaction']['duration']) && ("NULL" <> $data['Transaction']['duration'])){
				echo '<strong> Loan for ' . $data['Transaction']['duration'] .' days. </strong></br>';
			}

			if(!empty($data['Transaction']['price']) && ("NULL" <> $data['Transaction']['price'])){
				echo '<strong> For Sale at $' . $data['Transaction']['price'] .'</strong></br>';
			}

			if(!empty($data['Transaction']['allow_trade']) && (0 < $data['Transaction']['allow_trade']) && $data['Transaction']['price'] == "NULL" && $data['Transaction']['duration'] == "NULL"){
				?>
				<fieldset style="border: 3px solid #000000">
				<legend> Use This Book In The Trade: </legend>
				<p class="book_display">
					<label >
						<img src=<?= $data['Transaction']['trade_image'] ?> alt="Book image" />
						<strong>Title:</strong>	<?= $data['Transaction']['trade_title'] ?> <br />
						<strong>Author(s):</strong> <?= $data['Transaction']['trade_author'] ?> <br />
						<strong>ISBN:</strong> <?= $data['Transaction']['trade_isbn'] ?> <br />
					</label>
				</p>
				</fieldset>
				<?php
			}

		?>
		</p>
	</fieldset>

</div>