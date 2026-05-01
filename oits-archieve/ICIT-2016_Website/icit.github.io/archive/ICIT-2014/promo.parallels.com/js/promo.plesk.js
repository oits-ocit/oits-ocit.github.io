(function(){
	var promo = document.getElementById('promo-plesk-domain') || document.getElementById('promo-plesk-server');
	if (promo) {
		var links = document.links,
			idx = 0,
			link,
			id = '?cid=' + promo.id;
		
		if (links) {

			while (link = links[idx++]) {

				link.href += id;

			}
		}
	
	}

})()