
// function toggleMenu() {
//   var x = document.getElementById("site-nav-links");
//   if (x.className === "site-nav-links not-visible") {
//     x.className = "site-nav-links visible";
//   } else {
//     x.className = "site-nav-links not-visible";
//   }
// }

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
        card_map = {},
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
            next = card.find('.next-card');

        var interface = {
            index: index,
            card: card,
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
            }
        };

        cell_link.on('click', function(e){
            e.preventDefault();
            card_shown_index = index;
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

        return interface;
    }

    cell_links.each(function(i, link){
        instances.push(new CardController(i, link, cards.get(i)));
    })

    hype.on('click', function(e){
        // this is trigged whenever anything inside of it is clicked. even within the card
        // there is another way to do an outer click of the card
        // overlay.hide();
    })
}());