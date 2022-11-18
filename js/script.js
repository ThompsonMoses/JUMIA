// countdown timmer demo
const startingMinutes = 60;
let time = startingMinutes * 60;

const countdownEl = document.getElementById('countdown')

setInterval(updateCountdown, 1000);

function updateCountdown() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    seconds = seconds < 10 ? `0` + seconds : seconds;

    countdownEl.innerHTML = `${minutes}: ${seconds}`;
    time--;
}

// read more/show less demo
const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.note');

readMoreBtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if (readMoreBtn.innerHTML === 'show more') {
        readMoreBtn.innerHTML = 'show less';
        
    } else {
        readMoreBtn.innerHTML = 'show more';
    }
})

// bact to top demo

// - define variables
// - calculate the document height and set the offset to a quarter of that value
// - add event listners for scroll and click

// step one: define variables

var btt = document.getElementById("back-to-top"),
    body = document.body,
    docElem = document.documentElement,
    offset = 100,
    scrollPos, docHeight;
    isFirefox = 1;
    // navvigator.UserAgent.toLowerCase().indexOf("firefox") > 1

// step two:- calculate the document height
docHeight = Math.max(body.scrollHeight, body.offsetHeight, docElem.clientHeight, docElem.scrollHeight, docElem.offsetHeight);
// set offset to a quater of document height
if ( docHeight != 'undefined'){
    offset = docHeight / 8;
}

// add event listner for scroll
window.addEventListener("scroll", function(event) {
    scrollPos = body.scrollTop || docElem.scrollTop;

    btt.className = ( scrollPos > offset ) ? "visible" : "";
} );

// add event listner for click
btt.addEventListener("click", function(event){
    event.preventDefault();

    if ( isFirefox ){
        docElem.scrollTop = 0;
    } else {
        body.scrollTop =  0;
    }
    
})
