class WhackAMole {
	constructor(startButton, moles, scoreOut, gameTimeLength, peepTimeMin, peepTimeMax, user){		
		// Game HTML Elements
		this.btnStart = startButton;
		this.moles = moles;
		this.scoreOut = scoreOut;
		
		// Game Images
		this.moleImgSrc = 'assets/images/';
		this.moleBonkedImg = new Image();
		this.moleBonkedImg.src = 'assets/images/mole.png';
		
		// Game Parameters
		this.gameTime = gameTimeLength;
		this.minPeepTime = peepTimeMin;
		this.maxPeepTime = peepTimeMax;
		this.numOfMoles = this.moles.length;
		
		// Game State Variables
		this.prevMoleNumber = null;
		this.timeUp = false;
		this.score = 0;
		this.gameTimer = null;
		this.peepTimer = null;		

		// current value of mole
		this.currentAlpha = "";

		// level of game
		this.level = 1;

		// user
		this.user = user;
	}
	
	saveScore(){
		var scoresJSON = localStorage.getItem('scores');
		var score = {username : this.user, score : this.score};
		var scores1 = [];
		var scores2 = [];
		if (scoresJSON != null){
			var scores = JSON.parse(scoresJSON);
			scores1 = scores.scores1;
			scores2 = scores.scores2;			
		}
		if (this.level === "1") scores1.push(score);
		else scores2.push(score);

		scores = {
			scores1 : scores1,
			scores2 : scores2
		}
		// save scores result to localStorage
		localStorage.setItem('scores', JSON.stringify(scores))
	}

	init(){
		this.score = 0;
		this.scoreOut.text(this.score);
		this.timeUp = false;
		this.prevMoleNumber = null;
		this.btnStart.text('Stop Game');
		this.peep();
		this.gameTimer = setTimeout(() => {			
			this.btnStart.html('<span>Start Game</span>');
			this.timeUp = true;
			//  game over 
			$('.modal-title').html('Result - Level ' + this.level);
			$('.modal-body').html("Score : " + this.score);
			$("#myModal").modal();
			this.saveScore()
		}, this.gameTime);
	}
	
	stop(){
		console.log('Game Stopped...');
		this.btnStart.html('<span>Start Game</span>');
		this.timeUp = true;
		this.moles.removeClass('up');
		clearInterval(this.peepTimer);
		clearInterval(this.gameTimer);
	}
	
	peep(){
		const time = this._randomTime(this.minPeepTime, this.maxPeepTime);
    	const mole = this._randomMole(this.moles);
    	mole.addClass('up');
    	this.peepTimer = setTimeout(() => {
      		mole.removeClass('up');      		
      		if(this.timeUp === false){
      			    mole.attr('value', "");
				    this.peep();
			    }
    	}, time);
	}
	
	bonk(mole) {
		/* animation when mole is bonked */
		mole.attr('src', this.moleBonkedImg.src)
    	  .removeClass('up')
		    .addClass('bonked')
		    .one('transitionend', () => {
    	  		  mole.attr('value', "");
				  mole.removeClass('bonked');
			  });
		this.score++;
    this.scoreOut.text(this.score);
	}
	
	// Utility functions
	
	// generate a random time to determine how long
	// the moles stay up
	_randomTime(min, max){
		return Math.round(Math.random() * (max - min) + min);
	}
	
	// randomly selects one of the moles to display
	_randomMole(moles) {
    	const idx = Math.floor(Math.random() * this.numOfMoles);
    	var alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  	
    	if (this.level === "2"){    		
    		alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    	}

    	const alpha = alphabets.charAt(Math.floor(Math.random() * alphabets.length));
    	const mole = moles.eq(idx);
    	if(idx === this.prevMoleNumber ) {
      		return this._randomMole(moles);
    	}
    	  mole.attr('src', this.moleImgSrc + alpha + '.png');
    	  mole.attr('value', alpha);    	  
    	  this.currentAlpha = alpha.charCodeAt();    	  
		  this.prevMoleNumber = idx;		  
    	return mole;
	}	
}

/* init game */
(function(){
	// Get a new instance of the Whack A Mole
	// class
	// Parameters:
	// 1. Start Button
	// 2. Mole Image
	// 3. Score out
	// 4. Game Time Length (ms)
	// 5. Peep Time Min (ms)
	// 6. Peep Time Max (ms)
	// 7. user

	user = localStorage.getItem('currentUser');
	const wam = new WhackAMole($('#btn-start'), $('.mole-pic'), $('#score-out'), 12000, 800, 1500, user);
	// Game Event Handlers
	wam.btnStart.click(function(){
		if (user === null) {
			$('.modal-title').html('Warning');
			$('.modal-body').html('You need to log in first.');
			$("#myModal").modal();
			return;
		}
		if(wam.btnStart.text() === 'Start Game'){
			wam.init();
			wam.level = $('input[name=level]:checked').val();
		}else{
			wam.stop();
		}	
	});
	/* Detect keypress events */
	$(document).keydown(function(event){
	    console.log(event.which);
	    if (event.which === wam.currentAlpha && wam.timeUp === false){
	    	wam.bonk($("img[value='" +  String.fromCharCode(wam.currentAlpha) + "']"));	
        }
	});	
})();

