<!-- File: /app/views/user/index.ctp -->

<!-- 
     Author: Greg Brandt
     Purpose: This is a dummy splash page for ZFR
	 
	 Changelog:
	 5/3/2011 - James Parsons - Moved to /user
 -->

<?php echo $this->Html->css('main'); ?>

<div id="top_bar_logo">
  <?php echo $this->Html->image('logo.png', array('alt' => 'SharingBooksLogo')) ?>
</div>

<div id="top_bar_options">
  <p>Account | FAQ | Help</p>
</div>

<div id="hello_message">
  <h1>Welcome to SharingMedia!</h1>
  <h2>What would you like to do?</h2>
</div>

<div id="splash_boxes">
  <?php echo Inflector::pluralize('book_initial_offer') ?>
  <?php echo $this->Html->image('add_book.png', array('alt' => 'AddBook')) ?>
  <?php echo $this->Html->image('find_book.png', array('alt' => 'FindBook')) ?>
  <?php echo $this->Html->image('my_library.png', array('alt' => 'MyLibrary')) ?>
</div>

<div id="splash_description">
  SharingMedia lets you share, trade, or sell books you own with your friends across Facebook. For more information, including how to get the latest build, please visit <?php echo $this->Html->link('our wiki', 'http://code.google.com/p/dawgsquad/', array('class' => 'button', 'target' => '_blank')); ?>
</div>