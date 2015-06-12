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
			$('#CPU > span').attr('style', 'width: ' + (100 - data.CPU_usage) + '%;');
			$('#RAM > span').attr('style', 'width: ' + (100 - data.RAM_usage) + '%;');
			$('#SWAP > span').attr('style', 'width: ' + (100 - data.SWAP_usage) + '%;');
			$('#HDD > span').attr('style', 'width: ' + (100 - data.HDD_usage) + '%;');
		});
	}
}

var truc = setInterval(callback, 1000);