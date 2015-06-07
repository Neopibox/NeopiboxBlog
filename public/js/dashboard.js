var CPU_usage = 100;
var RAM_usage = 100;
var SWAP_usage = 100;
var HDD_usage = 100;

// variable "statique"
var i;

function callback()
{
	if (typeof i == 'undefined')
	{
		i = 0;
	}

	if(!(typeof $('.dashboard').html() == "undefined"))
	{
		i++;

		if(i > 100)
			i = 0;

		CPU_usage = i;
		RAM_usage = 100 - i;
		SWAP_usage = i;
		HDD_usage = 100 - i;

		$('#CPU > span').attr('style', 'width: ' + CPU_usage + '%;');
		$('#RAM > span').attr('style', 'width: ' + RAM_usage + '%;');
		$('#SWAP > span').attr('style', 'width: ' + SWAP_usage + '%;');
		$('#HDD > span').attr('style', 'width: ' + HDD_usage + '%;');
	}
}

var truc = setInterval(callback, 100);