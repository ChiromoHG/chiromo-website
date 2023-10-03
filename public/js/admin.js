const body = document.querySelector('body'),
    modeToggle = body.querySelector('.mode-toggle');
sidebar = body.querySelector("nav");
sidebarToggle = body.querySelector('.sidebar-toggle')

const date = document.getElementById('date');


let mode = localStorage.getItem('mode');
if(mode && mode === "dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem('status');
if(getStatus && getStatus === "close"){
    sidebar.classList.toggle('close');
}

modeToggle.addEventListener('click', function(){
    body.classList.toggle('dark')
    if(body.classList.contains('dark')){
        localStorage.setItem('mode', 'dark')
    }else{
        localStorage.setItem('mode', 'light')
    }
});

sidebarToggle.addEventListener('click', function(){
    sidebar.classList.toggle('close');
    if(sidebar.classList.contains('close')){
        localStorage.setItem('status', 'close')
    }else{
        localStorage.setItem('status', 'open')
    }
})

