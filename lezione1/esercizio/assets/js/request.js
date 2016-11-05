function createCard(root, obj) {
	var article = document.createElement('article');
	article.id = obj.imdbID;
	article.classList.add('card');

	var cardHeader = document.createElement('div');
	cardHeader.classList.add('card-header');
	cardHeader.innerHTML =
		'<div class="card-title card-text-ellipsis">'
			+'<div class="card-subtitle">'
				+obj.Type + ', ' + obj.Year
			+'</div>'
			+obj.Title
		+'</div>';

	var cardMedia = document.createElement('div');
	cardMedia.classList.add('card-media');

	if(obj.Poster != "N/A") {
		var img = document.createElement('img');
		img.src = obj.Poster;
		img.alt = obj.Title;
	} else {
		var img = document.createElement('p');
		img.textContent = 'immagine non presente';
		img.style.marginLeft = '16px';
	}

	cardMedia.appendChild(img);

	article.appendChild(cardHeader);
	article.appendChild(cardMedia);

	root.appendChild(article);
}

function onReadyStateChange() {
	if (this.readyState === 4) {
		if (this.status === 200) {
			// Pagina trovata, richiesta processata
			var risposta = JSON.parse(this.response)
			// console.log(risposta);
			// console.log(risposta.totalResults);
			if (page === 1) {
				maxPage = parseInt(risposta.totalResults / 10) + 1;
			}
			var padre = document.getElementById('cardContainer');
			for (var i = 0; i < risposta.Search.length; ++i) {
				var obj = risposta.Search[i];
				// console.log(obj.Title, obj.Type, obj.Poster, obj.Year, obj.imdbID);
				createCard(padre, obj);
			}
			var pulsante = document.getElementById('cardSearchOthers');
			if (!pulsante && maxPage > 1) {
				// C'è bisogno di creare il pulsante
				pulsante = document.createElement('button');
				pulsante.id = 'cardSearchOthers';
				pulsante.textContent = 'Visualizza altro...';
				pulsante.addEventListener('click', sendRequest);
				document.getElementById('cardContainerActions').appendChild(pulsante);

				var testo_totali = document.createElement('p');
				testo_totali.textContent = 'Totale: '+risposta.totalResults;

				document.getElementById('cardContainerActions').appendChild(testo_totali);
			}
			if (pulsante && maxPage == page) {
				// document.getElementById('cardContainerActions').removeChild(pulsante);
				pulsante.parentNode.removeChild(pulsante);
			}
			page++;
		} else {
			console.log('Errore 404: pagina non trovata.');
		}
	}
}

function onSearch() {
	text = document.getElementById('navbar-search-input').value;
	page = 1;
	document.getElementById('cardContainer').innerHTML = '';
	document.getElementById('cardContainerActions').innerHTML = '';
	sendRequest();
}

function sendRequest() {
	var richiesta = new XMLHttpRequest();
	richiesta.addEventListener('readystatechange', onReadyStateChange);
	richiesta.open("GET", link+'?s='+text+'&page='+page, true);
	richiesta.send();
}

/* Variabili Globali */
var page = 1;
var maxPage = 1;
var text = '';
var link = 'http://www.omdbapi.com/';