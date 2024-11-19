const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

let first = document.getElementById("password");  
let second = document.getElementById('reenterpassword');
let btn = document.querySelector(".signinButton");
let passwordMessage =  document.querySelector('.pass');
let min = document.querySelector("#min");

let combine = first + second;

btn.addEventListener('click',()=>{
    if(combine.length<16)
    {
        min.style.display="flex";
    } else{
        min.style.display="none";
    }
})


second.addEventListener('input', () => {
    if (second.value === first.value) {
        passwordMessage.style.display = "none";
        btn.removeAttribute('disabled');
    } else {
        passwordMessage.style.display = "flex";
        btn.setAttribute('disabled', '');
    }
});

