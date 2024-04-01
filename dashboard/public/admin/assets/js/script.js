$().ready(function(){

    document.querySelector("#sidebar-toggle").addEventListener('click', () => {
        document.querySelector("#sidebar").classList.toggle("collapsed");
    });

    document.querySelector(".theme-toogle").addEventListener('click', () => {
        toogleLocalStorage();
        toogleRootClass();
    });

    if (isLight()){
        toogleRootClass();
    }

})

function toogleRootClass(){
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = current == 'dark' ? 'light' : 'dark';

    document.documentElement.setAttribute('data-bs-theme', inverted);
}

function toogleLocalStorage(){
    if (isLight()){
        localStorage.removeItem("light");
    }else{
        localStorage.setItem("light", "set");
    }
}

function isLight(){
    return localStorage.getItem("light");
}