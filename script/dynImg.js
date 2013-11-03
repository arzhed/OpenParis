var districts=[];

for (var i = 17; i <= 18 ; i++) {
 	districts[i-1]=document.getElementById("img"+i);
 	outer(i);
 	console.log(i);
 }

function outer(i) {
	console.log(i);
	districts[i-1].addEventListener('mouseover', function() {
		document.getElementById("map").src="img/map-site/parismap"+i+".png";
	}, false);
	districts[i-1].addEventListener('mouseout', function() {
    	document.getElementById("map").src="img/map-site/parismap.png";
    }, false);
}

function changeImage(i) {
    document.getElementById("map").src="img/parismap"+i+".png";
}