<?php
header ("Content-type: text/xml");
echo "<?xml version=\"1.0\"?>\n";

$formid = $_GET[formid];
$phoneid = $_GET[phoneid];

?>

<vxml version="2.0">
  <form>
    <block>
      <prompt>
        Your phone number number is <?php echo($phoneid)?>.
      </prompt>
      <prompt>
        Your Form ID is <?php echo($formid)?>.
      </prompt>
    </block>
  </form>
</vxml>