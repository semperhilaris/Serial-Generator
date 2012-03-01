<html>
  <head>
    <title>Serial-Generator</title>
    <link type="text/css" rel="stylesheet" media="all" href="css/style.css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/serialgenerator-ui.js"></script>
  </head>
  
  <body>
    <div id="content">
    <h1>SERIAL-GENERATOR 1.0</h1>
    <form action="" method="post">
	  <table>
	    <tr><th>Count:</th><td><input type="text" id="sg_count" name="sg_count" value="5" /></td></tr>
	    <tr><th>Parts:</th><td><input type="text" id="sg_part_count" name="sg_part_count" value="3" /></td></tr>
		<tr><th>Part-Length:</th><td><input type="text" id="sg_part_lenght" name="sg_part_lenght" value="5" /></td></tr>
		<tr><th>Seperator:</th><td><input type="text" id="sg_seperator" name="sg_seperator" value="-" /></td></tr>
		<tr>
		  <th>Characters to use:</th>
		  <td>
		    <input type="checkbox" class="pool_selector" name="sg_pool" value="ABCDEFGHIJKLMNOPQRSTUVWXYZ" id="sg_az_caps" checked="checked"/><label for="sg_az_caps">A-Z</label>
			<input type="checkbox" class="pool_selector" name="sg_pool" value="abcdefghijklmnopqrstuvwxyz" id="sg_az" /><label for="sg_az">a-z</label>
			<input type="checkbox" class="pool_selector" name="sg_pool" value="0123456789" id="sg_nums" checked="checked" /><label for="sg_nums">0-9</label>
		  </td>
		</tr>
	  </table>
	  <div>
	  <a id="generate_button" href="javascript:serialgenerator_generate()">Generate!</a>
	  </div>
	  <textarea id="result"></textarea>
	  <div id="combinations">...</div>
	</form>
	</div>
  </body>
  
</html>