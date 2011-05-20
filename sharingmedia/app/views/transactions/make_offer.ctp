<!--
File: /app/views/transaction.ctp
 
	Created: 5/19/2011
	Author: James Parsons
	
	Changelog:
	5/19/2011 - James Parsons - Created page and basic functionality
	
	# This is the view for the add books form.
-->
<head>
<?php echo $this->Html->css('main', NULL, array('inline' => FALSE)); ?>
<?php echo $this->Html->css('transactions', NULL, array('inline' => FALSE)); ?>
</head>

<body>

<div>

	<fieldset style="border: 3px solid #000000">
			<legend> Book Available </legend>
			<p class="book_display">
				<label >
					<img src=<?= $book_image ?> alt="Book image" />
					<strong>Title:</strong>	<?= $book_title ?> <br />
					<strong>Author(s):</strong> <?= $book_author ?> <br />
					<strong>ISBN:</strong> <?= $book_isbn ?> <br />
				</label>
			</p>
	</fieldset>


	<fieldset style="border: 3px solid #000000">
			<legend> Selected Offer Details </legend>
			<p>
			<?php
			
				if(!empty($loan_duration)){		
					echo '<strong> Loan for ' . $loan_duration .' days. </strong></br>';
				}
				
				if(!empty($sell_price)){		
					echo '<strong> For Sale at $' . $sell_price .'</strong></br>';
				}
				
				if(!empty($trade_id)){		
					echo '<strong> Willing to Trade for Another Book. </strong></br>';
				}
			
			?>
			</p>
	</fieldset>

</div>

</body>