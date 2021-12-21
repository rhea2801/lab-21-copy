(function(){
	
	var Memory = {

		init: function(cards){
			this.$game = $(".game");
			this.$modal = $(".modal");
			this.$overlay = $(".modal-overlay");
			this.$restartButton = $("button.restart");
			this.cardsArray = $.merge(cards, cards);
			this.shuffleCards(this.cardsArray);
			this.setup();
		},

		shuffleCards: function(cardsArray){
			this.$cards = $(this.shuffle(this.cardsArray));
		},

		setup: function(){
			this.html = this.buildHTML();
			this.$game.html(this.html);
			this.$memoryCards = $(".card");
			this.paused = false;
     	this.guess = null;
			this.binding();
		},

		binding: function(){
			this.$memoryCards.on("click", this.cardClicked);
			this.$restartButton.on("click", $.proxy(this.reset, this));
		},
		cardClicked: function(){
			var _ = Memory;
			var $card = $(this);
			if(!_.paused && !$card.find(".inside").hasClass("matched") && !$card.find(".inside").hasClass("picked")){
				$card.find(".inside").addClass("picked");
				if(!_.guess){
					_.guess = $(this).attr("data-id");
				} else if(_.guess == $(this).attr("data-id") && !$(this).hasClass("picked")){
					$(".picked").addClass("matched");
					_.guess = null;
				} else {
					_.guess = null;
					_.paused = true;
					setTimeout(function(){
						$(".picked").removeClass("picked");
						Memory.paused = false;
					}, 600);
				}
				// _.win();
				if($(".matched").length == $(".card").length){
					_.win();
				}
			}
		},

		win: function(){
			this.paused = true;
			setTimeout(function(){
				Memory.showModal();
				Memory.$game.fadeOut();
			}, 1000);
		},

		showModal: function(){
			this.$overlay.show();
			this.$modal.fadeIn("slow");
		},

		hideModal: function(){
			this.$overlay.hide();
			this.$modal.hide();
		},

		reset: function(){
			this.hideModal();
			this.shuffleCards(this.cardsArray);
			this.setup();
			this.$game.show("slow");
		},

		shuffle: function(array){
			var counter = array.length, temp, index;
	   	while (counter > 0) {
        	index = Math.floor(Math.random() * counter);
        	counter--;
        	temp = array[counter];
        	array[counter] = array[index];
        	array[index] = temp;
	    	}
	    	return array;
		},

		buildHTML: function(){
			var frag = '';
			this.$cards.each(function(k, v){
				frag += '<div class="card" data-id="'+ v.id +'"><div class="inside">\
				<div class="front"><img src="'+ v.img +'"\
				alt="'+ v.name +'" /></div>\
				<div class="back"><img src="sf_logo.png"\
				alt="SpringFest" /></div></div>\
				</div>';
			});
			return frag;
		}
	};

	var cards = [
		{
			name: "php",
			img: "game-images/1.png",
			id: 1,
		},
		{
			name: "css3",
			img: "game-images/2.png",
			id: 2
		},
		{
			name: "html5",
			img: "game-images/3.png",
			id: 3
		},
		{
			name: "jquery",
			img: "game-images/4.png",
			id: 4
		}, 
		{
			name: "javascript",
			img: "game-images/5.png",
			id: 5
		},
		{
			name: "node",
			img: "game-images/6.png",
			id: 6
		},
		{
			name: "photoshop",
			img: "game-images/7.png",
			id: 7
		},
		{
			name: "python",
			img: "game-images/8.png",
			id: 8
		},
		{
			name: "rails",
			img: "game-images/9.png",
			id: 9
		},
		{
			name: "sass",
			img: "game-images/10.png",
			id: 10
		},
		{
			name: "sublime",
			img: "game-images/11.png",
			id: 11
		},
		{
			name: "wordpress",
			img: "game-images/12.png",
			id: 12
		},
	];
    
	Memory.init(cards);


})();