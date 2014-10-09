    var bblGame = { // Object name 

            /*

                    bblGame properties 

            */

            color         : '',

            speed         : '',

            radius        : 0,

            posX        : '',

            posY         : '',

            number        : 0,

            /*

                    bblGame Methods

            */

            throwBbl        : function(PARAMETERS){

            },
        createBubble : function(numb){

                 color="red";

                 radius=" ";

                 number="";

                var bblDiv = document.createElement('div');
                var number = document.createElement('p');
                number.innerHTML = numb;

                bblDiv.setAttribute('id','bblDiv');
                bblDiv.setAttribute('class','bblAnimate ascDesc');
                // adding animation claas  //


                bblDiv.setAttribute('onclick','bblClicked(this)');

                // console.log(bblDiv);

                document.getElementById('gameCon').appendChild(bblDiv);
            bblDiv.appendChild(number);
             

        },

            setSpeed        : function(speed){

                            bblGame.speed = speed;

                            // console.log(speed);

            },

            calcPos                : function(acc,time,initial){

                            posInt();

                            function posInt(){

                                            var distance1 = initial*time;

                                            var distance2 = 0.5 * acc * Math.pow(time,2);

                                            var positionY = distance1 - distance2;

                                            // setting bubble vertical position

                                            bblGame.posY = positionY;

                                            // setting speed

                                            var bblSpeed = Math.sqrt( Math.pow(initial,2) - (acc * 2 * positionY ));

                                            bblGame.setSpeed(bblSpeed);

                                            // animate the bubble

                                            bblGame.setPos();

                                            // checking max pos

                                            var maxHeight = bblGame.bounce();

                                                            if( maxHeight==true ){
                                                                    bblGame.calcPos2();
                                                                    return 0;

                                                            }

                                            // termination annalysis

                                            if( positionY < 0 ){

                                                    //if termination point has been reached then return 0

                                                    return 0;

                                            }

                                            // if not termination point then wait for some time

                                            else{

                                                    setTimeout(function(){

                                                            time = time + 0.01;

                                                            posInt();

                                                    },10);

                                            }

                            }

                    

                    

            },

    setPos         : function(){

                             var bblDiv = document.getElementById('bblDiv');

                             bblDiv.style.display = 'block';

                             var devHeight = window.screen.availHeight + ( window.screen.height - window.screen.availHeight);

                             // console.log(devHeight);

                             bblDiv.style.top = devHeight - bblGame.posY;

             },

    setPos2         : function(){

                             var bblDiv = document.getElementById('bblDiv');

                             bblDiv.style.display = 'block';

                             // var devHeight = window.screen.availHeight + ( window.screen.height - window.screen.availHeight);

                             // console.log(devHeight);

                             bblDiv.style.top = bblGame.posY;

             },


    bounce                : function(){

                     var bblDiv = document.getElementById('bblDiv');

                     // console.log(bblDiv.style.top);

                     if( parseInt(bblDiv.style.top) <= 0){

                             return true;

                     }

             }, // end of bounce method

    questionGen : function(){
       var question =[];
       var answer = [];

       question = ["2+5","2+8","2+2"];
       answer = ["7","10","4","7","10","4"];
       var qnDiv= document.getElementById('qnDiv');
       qnDiv.innerHTML = question[0];

       bblGame.createBubble(answer[0]);

       var bubble = 0;
       var waitTime = setInterval(function(){
        // alert(bubble);
        bblGame.createBubble(answer[1 + bubble]);
        bubble++;
        if( bubble == 3){
            clearInterval(waitTime);
        }
       },1000);

        // animating the bubble
        // bblGame.calcPos(9,0,200); --> stoping javascrpt animation method
    },

    calcPos2 : function(){
             var time = 0;
             pos2Int();
             function pos2Int(){
                // bblGame.posY = positionY;
                //               Ypos = bblGame.posY;
                //         console.log(Ypos);
                        // console.log('executing');
                         var Uspeed = bblGame.speed;
                         var g = 9.8;
                         // var time = 0;
                         distance1 = Uspeed* time;

                        distance2 = 0.5*g * Math.pow(time,2);
                        distanceY = distance1 + distance2;
                        bblGame.posY = distanceY;
                        bblGame.setPos2  ();

                    if(distanceY > window.screen.height){
                        return 0;
                    }
                    else{

                      setTimeout(function(){

                              time = time + 0.01;
                                pos2Int();
                              },10);

                         }
             }
                 
       }      

    }

// bbl cliced function //
    function bblClicked(obj){
        alert("clicked me");
        // var bblDiv = obj;
        // bblDiv.className = "bblBurst";
    }
    

    //-----------  STYLE  --------//

    //-----------  STYLE  --------//



/*
    CLASS MANIPULATION FUNCTIONS 
    ============================
*/

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };