function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
var feedItems = [
	'WELCOME',
	'...............................',
	' ',
	' ',
	'Loading OS...',
	'OS Loaded',
	'BIOS will use to attempt to boot and OS',
	'< x > excludes or includes the device to boot. < 1 > Loads default boot sequence.',
	'USB BIOS support must be enabled for USB boot.',
	'Boot - Default boot priority order:',
	' ',
	'1: USB FDD',
	'2: ATAPI CD0:MATSHITADVD-RAM UJ-842-(PM)',
	'3:USB CD',
	'4: ATA HDD0 HTS541010G9SA00-(S1)',
	'5: PCI LAN: IBA GE Slot 0200 v1231',
	'6: -USB HDD',
	'7: ATA HDD1 Excluded from boot order: ATA HDD2, ATAPI CD1 Network - Default boot priority order: 1: PCI LAN: IBA GE Slot 0200 v1231, 2: USB FDD',
	' ',
	' ',
	'INTEL I7 KJSHDK U-ID: 8-76537-6281-723',
	' ',
	'IP: 1.7l11.2,5.8l11.2,5.7l0.1,11.6l-2.4-0.2l-1.3,2.1',
	'l-0.7,1.8l0.6,0.7l-0.9,0.9l0.3,1.2L537,427l-0.3,1.1l1-0.2l0.6,1.1l0',
	'1.7l1,0.8l0,0.7l-1.8,0.5l-1.4,1.1l-2,3.1l-2.6,1.3l-2.7-0.2l-0.8,0.3l0.3,1l-1.5,1l-1.2,1.1l-3.5,1.1l-0.7-0.6',
	' ',
	'.......................................',
	' ',

	'System Initiated.',
	' ',
	'flag{5up3r_S3cuR3}'
	
]

var i = 0;

var printLine = function(){
	if (feedItems[i]){
		var el = document.querySelector('#feed-area')
		var old = el.value;
		var newText = el.value + feedItems[i] + '\n';
		el.value = newText;
		i++;
	}
	
	window.setTimeout(printLine, getRandomInt(50,300));
}

var fillWindow = function(){
	printLine();
}

window.addEventListener('keyup', function(e){
	if(e.keyCode === 13){
		var el = document.querySelector('#js-login');
		el.classList.remove('active')
		var password = document.getElementById("password").value;
		if (password == "*;'hN><WW#j5{+(]"){
			var next = document.querySelector('#js-feed');
			next.classList.add('active')
			fillWindow()
		}
		else{
			alert ("DONT TEST ME YO! I ASKED FOR THE RIGHT PASSWORD!");
			window.location = "index.html";
		}
	}
}) 