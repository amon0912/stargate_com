var card_1 = document.querySelector(".card-1");
var card_2 = document.querySelector(".card-2");
var card_3 = document.querySelector(".card-3");
var card_4 = document.querySelector(".card-4");
var card_5 = document.querySelector(".card-5");
var card_6 = document.querySelector(".card-6");
var playing = false;

card_1.addEventListener('click',function() {
  if(playing)
    return;
  
  playing = true;
  anime({
    targets: card_1,
    scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
    rotateY: {value: '+=180', delay: 200},
    easing: 'easeInOutSine',
    duration: 400,
    complete: function(anim){
       playing = false;
    }
  });
});


card_2.addEventListener('click',function() {
    if(playing)
      return;
    
    playing = true;
    anime({
      targets: card_2,
      scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
      rotateY: {value: '+=180', delay: 200},
      easing: 'easeInOutSine',
      duration: 400,
      complete: function(anim){
         playing = false;
      }
    });
  });

  card_3.addEventListener('click',function() {
    if(playing)
      return;
    
    playing = true;
    anime({
      targets: card_3,
      scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
      rotateY: {value: '+=180', delay: 200},
      easing: 'easeInOutSine',
      duration: 400,
      complete: function(anim){
         playing = false;
      }
    });
  });

  card_4.addEventListener('click',function() {
    if(playing)
      return;
    
    playing = true;
    anime({
      targets: card_4,
      scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
      rotateY: {value: '+=180', delay: 200},
      easing: 'easeInOutSine',
      duration: 400,
      complete: function(anim){
         playing = false;
      }
    });
  });

  card_5.addEventListener('click',function() {
    if(playing)
      return;
    
    playing = true;
    anime({
      targets: card_5,
      scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
      rotateY: {value: '+=180', delay: 200},
      easing: 'easeInOutSine',
      duration: 400,
      complete: function(anim){
         playing = false;
      }
    });
  });

  card_6.addEventListener('click',function() {
    if(playing)
      return;
    
    playing = true;
    anime({
      targets: card_6,
      scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
      rotateY: {value: '+=180', delay: 200},
      easing: 'easeInOutSine',
      duration: 400,
      complete: function(anim){
         playing = false;
      }
    });
  });