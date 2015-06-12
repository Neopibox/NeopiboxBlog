var CPU_usage = 100;
var RAM_usage = 100;
var SWAP_usage = 100;
var HDD_usage = 100;

function callback()
{
	if(!(typeof $('.dashboard').html() == "undefined"))
	{
		$.getJSON('admin/dashboard/refresh', function(data)
		{
			/*CPU_usage = i;
			RAM_usage = i;
			SWAP_usage = i;
			HDD_usage = i;*/

			$('#CPU > span').attr('style', 'width: ' + data.CPU_usage + '%;');
			$('#RAM > span').attr('style', 'width: ' + data.RAM_usage + '%;');
			$('#SWAP > span').attr('style', 'width: ' + data.SWAP_usage + '%;');
			$('#HDD > span').attr('style', 'width: ' + data.HDD_usage + '%;');
		});
	}
}

var truc = setInterval(callback, 500);