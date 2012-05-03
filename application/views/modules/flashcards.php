<? $this->load->helper('form'); ?>

<select id="deckselect">
<option value=''>-Select a Deck-</option>
<?
  if (!count($decks)) echo '<option value="0">No Decks available</option>';
    foreach($decks as $d){
      echo '<option value="' . $d['deck_name'] . '">' . $d['deck_name'] . '</option>';
    }
  ?>
</select>
<a onclick="return $('#add-new-deck').show();">Add a new Deck</a>
<a onclick="return $('#add-new-card').show();">Add a new Card</a>

<div id="deck">
</div>

<div id="add-new-deck" style="display : none;">
<h3>Add new Deck</h3>
<?= form_open('/modules/flashcards/adddeck', 'method="POST" id="adddeckform" class="well" onsubmit="return Twexter.modules.Flashcards.submit(this)"') ?>
	<label>Deck Name:
    <input type="text" name="deckname" class="span5">
  </label>	
	<br />
	<button type="submit" class="btn">Add</button><span id="deck_added"></span>
<?= form_close() ?>
<a onclick="return $('#add-new-deck').hide();">Hide</a>
</div>


<div id="add-new-card" style="display : none;">
<h3>Add new Card</h3>
<?= form_open('/modules/flashcards/addcard', 'method="POST" id="addcardform" class="well" onsubmit="return Twexter.modules.Flashcards.submit(this)"') ?>
<label>Add to:
<select id="deckselect-addcard">
<option value=''>-Select a Deck-</option>
<?
  if (!count($decks)) echo '<option value="0">No Decks available</option>';
    foreach($decks as $d){
      echo '<option value="' . $d['deck_name'] . '">' . $d['deck_name'] . '</option>';
    }
  ?>
</select>
</label>


	<label>Question:
    <input type="text" name="question" class="span5">
  </label>
  <label>Answer:
    <input type="text" name="answer" class="span5">
  </label>
	<br />
	<button type="submit" class="btn">Add</button><span id="card_added"></span>
<?= form_close() ?>
<a onclick="return $('#add-new-card').hide();">Hide</a>
</div>






