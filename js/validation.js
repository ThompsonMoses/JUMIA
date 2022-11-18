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
