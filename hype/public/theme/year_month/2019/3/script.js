
function toggleMenu() {
  var x = document.getElementById("site-nav-links");
  if (x.className === "site-nav-links not-visible") {
    x.className = "site-nav-links visible";
  } else {
    x.className = "site-nav-links not-visible";
  }
}

// function showCard(id) {
// 	let cardID = '#card-' + id;
// 	//add blur
// 	$('#splash').addClass(' blur');
// 	$('#grid').addClass(' blur');

// 	$('#hype').addClass('visible');
// 	$(cardID).addClass(' visible');
// 	console.log('card should be visible');
// }

// function hideCard() {
// 	let $blur = $('.blur');
// 	for(let i = 0; i < $blur.length; i++) {
// 		$( $blur[i] ).removeClass('blur');
// 	}

// 	$('.visible').removeClass('visible');
// 	$('#hype').removeClass('visible');
// }

(function(){
    var cell_links = $('.cell-link'),
        cards = $('.card'),
        month_selector = $('.month_selector'),
        splash = $('#splash'),
        grid = $('#grid'),
        hype = $('#hype'),
        instances = [];

    var overlay = {
        'active_card': -1,

        'showNext': function(){
            var next = this.active_card + 1 < cards.length ? this.active_card + 1 : 0;
            instances[this.active_card].hideCard();
            instances[next].showCard();
        },

        'showPrevious': function(){
            var previous = this.active_card - 1 > - 1 ? this.active_card - 1 : cards.length - 1;
            instances[this.active_card].hideCard();
            instances[previous].showCard();
        },

        'show': function(){
            splash.addClass('blur');
            grid.addClass('blur');
            hype.addClass('visible');
        },

        // this will hide the active card
        'hide': function(){
            splash.removeClass('blur');
            grid.removeClass('blur');
            hype.removeClass('visible');

            for(i in instances){
                if(instances.hasOwnProperty(i)){
                    instances[i].hideCard();
                }
            }
        }
    };

    function CardController(index, cell_link, card){
        cell_link = $(cell_link);
        card = $(card);

        var previous = card.find('.previous-card'),
            next = card.find('.next-card'),
            close_card = card.find('.close-card'),
            card_id = '#' + card.attr('id'),
            hype_this = card.find('.hype_this');

        var interface = {
            index: index,
            card: card,
            card_id: card_id,
            link: cell_link,
            previous: previous,
            next: next,

            'hideCard': function(){
                card.removeClass('visible');
            },

            'showCard': function(){
                overlay.active_card = index;

                card.addClass('visible');
                overlay.show();

                window.history.replaceState({}, '', card_id);
            }
        };

        cell_link.on('click', function(e){
            e.preventDefault();
            interface.showCard();
        });

        next.on('click', function(e){
            e.preventDefault();
            overlay.showNext();
        });

        previous.on('click', function(e){
            e.preventDefault();
            overlay.showPrevious();
        });

        close_card.on('click', function(e){
            e.preventDefault()
            overlay.hide();

            window.history.replaceState({}, '', window.location.origin + window.location.pathname);
        });

        // hype the card
        hype_this.on('click', function(e){
            e.preventDefault()
            window.open(hype_this.attr('href'), hype_this.attr('href'));
        });

        return interface;
    }

    cell_links.each(function(i, link){
        instances.push(new CardController(i, link, cards.get(i)));
    })

    hype.on('click', function(e){
        if( e.target !== this) { return; } 
        else { overlay.hide(); }
    })

    // change the url when the month changes
    month_selector.on('change', function(e){
        window.location = month_selector.val();
    });

    // on window load, show a card if it matches the hash
    for(var i = 0, l = instances.length; i < l; i++){
        if(instances[i].card_id == window.location.hash){
            instances[i].showCard();
            break;
        }
    }
}());
