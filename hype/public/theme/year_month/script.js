
function toggleMenu() {
  var x = document.getElementById("site-nav-links");
  if (x.className === "site-nav-links not-visible") {
    x.className = "site-nav-links visible";
  } else {
    x.className = "site-nav-links not-visible";
  }
}

(function(){
    var doc = $(document),
        cell_links = $('.cell-link'),
        cards = $('.card'),
        month_selector = $('.month_selector'),
        month = $('.month'),
        grid = $('#grid'),
        hype = $('#hype'),
        off_click = $('#off-click'),
        instances = [];

    var overlay = {
        'active_card': -1,
        'shown': false,

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
            this.shown = true;
            month.addClass('blur');
            grid.addClass('blur');
            hype.addClass('visible');
            keyEvents.enable();
        },

        // this will hide the active card
        'hide': function(){
            this.shown = false;
            month.removeClass('blur');
            grid.removeClass('blur');
            hype.removeClass('visible');
            keyEvents.disable();

            for(i in instances){
                if(instances.hasOwnProperty(i)){
                    instances[i].hideCard();
                }
            }

            window.history.replaceState({}, '', window.location.origin + window.location.pathname);
        }
    };

    var keyEvents = {
        'enabled': false,

        'touchDownEvents':  function(e){
            if(overlay.shown){
                e.preventDefault();

                switch(e.which){
                    // right
                    case 39:
                        overlay.showNext();
                        break;
                    
                    //left
                    case 37:
                        overlay.showPrevious();
                        break;

                    //escape
                    case 27:
                        overlay.hide();
                        break;
                }
            }
        },

        'enable': function(){
            if(!this.enabled){
                doc.on('keydown', this.touchDownEvents);
                this.enabled = true;
            }
        },

        'disable': function(){
            doc.off('keydown', this.touchDownEvents);
            this.enabled = false;
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
        if(e.target == this){  
            overlay.hide();
        }
    })

    // change the url when the month changes
    month_selector.on('change', function(e){
    	if(month_selector.val() !== "default") {
        window.location = month_selector.val();
    	}
    });

    // on window load, show a card if it matches the hash
    for(var i = 0, l = instances.length; i < l; i++){
        if(instances[i].card_id == window.location.hash){
            instances[i].showCard();
            break;
        }
    }
}());
