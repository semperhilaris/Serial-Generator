function serialgenerator_generate() {
  var count = $('#sg_count').val();
  var part_count = $('#sg_part_count').val();
  var part_length = $('#sg_part_lenght').val();
  var seperator = $('#sg_seperator').val();
  
  var pool = serialgenerator_build_pool();
  
  $.post('keygen.php', {
    count: count,
	part_count: part_count,
	part_length: part_length,
	seperator: seperator,
	pool: pool
	}, function(data) {
      $('#result').html(data);
  });
  
  var combinations = Math.pow(pool.length, part_count*part_length);
  if (combinations > 9999999999999999) {
    combinations = "enough";
  }
  
  $('#combinations').html("POSSIBLE COMBINATIONS: " +  combinations);
}

function serialgenerator_build_pool() {
  var pool = "";
  
  $('.pool_selector:checked').each(function () {
    pool = pool + $(this).val();
  });
  
  return pool;
}