<form class="well" name="tellsform" action="http://fourtell.co/components/updateTable.php" method="get">
  <label>Add a new friend</label>
  <input type="text" name="friend" class="span3" placeholder="Friend's name…">
  <label>Enter the email or cell phone # to use. Just use numbers</label>
  <input type="text" name="contact" class="span3" placeholder="example@example.com or 6666666666">
  <label class="radio">
    <input type="radio" name="optionsRadios" value="email" checked>
    This is an email address
  </label>
  <label class="radio">
    <input type="radio" name="optionsRadios" value="phone">
    This is a cell phone number
  </label>
  <label>Enter the Tell groups for this friend. Must be entered as #hashtags separated by commas</label>
  <input type="text" name="tells" class="span3" placeholder="#example, #example2…"><br>
  <input type="hidden" name="adddel" value="add">
  <input type="submit" class="btn btn-success" value="Submit">
</form>