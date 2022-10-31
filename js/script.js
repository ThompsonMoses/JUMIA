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

const email = document.getElementById('email')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (email.value === '' || email.value == null){
        messages.push('email is required')
    }

    if(password.value.length <=6){
        messages.push('pasword is too short')
    }

    if (messages.length > 0 ) {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
})


// hourly timer

// const startingHour = 2;
// const startingMinutes = 60;
// let time = startingHour * 3600;

// const countDownEl = document.getElementById('test')

// setInterval(updateCountdown,100000);


// function updateCountdown() {
//     const hour = Math.floor(time / 7200)
//     const minutes = Math.floor(time / 60)
//     let seconds = time % 60;

//     seconds = seconds < 10 ? `0` + seconds : seconds

//     countDownEl.innerHTML = `${minutes}: ${seconds}`;
//     time--;

// }