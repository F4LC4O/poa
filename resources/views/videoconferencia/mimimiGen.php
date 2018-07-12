<style>

/* Demos styles. Remove if desired */

/* demo #1 textarea */

.control-copytextarea{
  cursor: pointer;
  font-weight: bold;
  padding:3px 10px;
  border-radius: 5px 5px 0 0;
  background: darkred;
  color: white;
  display: inline-block;
  box-shadow: 0 0 3px gray;
}

/* demo #2 input text with control */

#select2{
  line-height: 25px;
  font-size: 105%;
	width: 95%;
	max-width: 500px;
  margin: 0;
}

.control-copyinput{
  cursor: pointer;
  font-weight: bold;
  padding:3px 10px;
  border-radius: 8px;
  background: darkred;
  color: white;
  display: inline-block;
  box-shadow: 0 0 3px gray;
  line-height: 25px;
}

/* demo #3 input text only */

fieldset{
	width: 95%;
	background: lightyellow;
	max-width: 600px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

#select3{
  font-size: 105%;
  margin: 0;
	width: 90%;
	max-width: 500px;
}

/* demo #4 regular div */

#select4{
	width: 200px;
	border: 1px solid orange;
	padding: 5px;
	background: lightyellow;
}

.control-copydiv{
  cursor: pointer;
	margin-top: 8px;
	display: inline-block;
	border: 1px solid red;
	color: red;
	padding: 2px 5px;
	border-radius: 3px;
  margin-top: 8px;
  background: white;
}

</style>


<?php

if ( $_POST )
{
    $mimimi = $_POST[ 'string' ];
}
else
{
    $mimimi = "Olá MundO";
}
if ( !( $_GET ) )
{
?>

<form action='?a=1' method='post'>
<input type='text' name='string'>
<button type='submit'> Envia </submit>
</form>
<?php
}
else
{
 
    $vogais = array("a", 
                    "e", 
                    "o", 
                    "u", 
                    "A", 
                    "E",
                    "O",
                    "U",
                    "á",
                    "é",
                    "ê",
                    "ó",
                );
    $mimimi = str_replace($vogais, "i", $mimimi );
   

//echo '<br><br>'.$stringCorrigida; // resultado: O João foi ao Hotel e Spa passar férias
}
?>

<form action=''> <button type='submit'> Voltar </button> </form>

<!-- demo #1 textarea -->

<input id="select2" name="select2" type="text" value="<?php echo $mimimi ?>" size="35" />

<span class="control-copyinput" onClick="return fieldtoclipboard.copyfield(event, 'select2')">Copy</span>

<br /><br />
<form action='
https://imgflip.com/memegenerator/83549294/mimimi'> <button type='submit' target='_blank'> Meme Gen </button> </form>


<span class="control-copydiv" onClick="return fieldtoclipboard.copyfield(event, 'select4')">copy</span>

<script src="fieldtoclipboard.js">


</script>