
const menuItems = document.querySelectorAll(".menu-item");

const  messagesNotification =document.querySelector('#massages-notification');

const messges = document.querySelector('.massages');

const messge = messges.querySelectorAll('.message');

const messgeSearch = document.querySelector('#message-search');

const theme = document.querySelector('#theme');

const themeModal = document.querySelector('.customize-theme');

const fontSize = document.querySelectorAll('.choose-size span');

var root = document.querySelector(':root');

const colorPalette = document.querySelectorAll('.choose-color span');

//nav bare
const  changeActiveItem =() => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}


menuItems.forEach(item => {
    item.addEventListener('click', () => {
        changeActiveItem();
        item.classList.add('active');
        if(item.id != 'notification'){
            document.querySelector('.notification-popup').
                style.display = 'none';
        }
        else{
            document.querySelector('.notification-popup').
                style.display = 'block';
        }
    })
})

//search chat
const searchMessage = () => {
    const val = messgeSearch.value.toLowerCase();
    console.log(val);
    messge.forEach(chat => {
        let name = chat.querySelector('h5').textContent.toLowerCase();
        if(name.indexOf(val) != -1){
            chat.style.display='flex';
        }
        else{
            chat.style.display='none';
        }
    })
}

//search chat
messgeSearch.addEventListener('keyup',searchMessage);

//maseges
messagesNotification.addEventListener('click', () => {
    messges.style.boxShadow ='0 0 1rem var(--color-primary)';
    setTimeout(() => {
        messges.style.boxShadow ='none';
    },2000);

})

//theme

const openThemeModel = () => {
    themeModal.style.display = 'grid';
}

const closeThemeModal = (e) => {
        if(e.target.classList.contains('customize-theme')){
            themeModal.style.display = 'none'
        }
}

themeModal.addEventListener('click', closeThemeModal);
theme.addEventListener('click',openThemeModel);

const removeSizeSelector = () => {
    fontSize.forEach(size => {
        size.classList.remove('active');
    })
}
//font

fontSize.forEach(size => {
size.addEventListener('click', () => {
    removeSizeSelector();
    let fontSize;
    size.classList.toggle('active');
    if(size.classList.contains('font-size-1')){
        fontSize ='10px';
        root.style.setProperty('--sticky-top-left','5.4rem');
        root.style.setProperty('--sticky-top-right','5.4rem');
    }
    else if (size.classList.contains('font-size-2')){
        fontSize ='13px';
        root.style.setProperty('--sticky-top-left','5.4rem');
        root.style.setProperty('--sticky-top-right','-17rem');
    }
    else if (size.classList.contains('font-size-3')){
        fontSize ='16px';
        root.style.setProperty('--sticky-top-left','-2rem');
        root.style.setProperty('--sticky-top-right','-1rem');
    }
    else if (size.classList.contains('font-size-4')){
        fontSize ='19px';
        root.style.setProperty('--sticky-top-left','-5rem');
        root.style.setProperty('--sticky-top-right','-25.4rem');
    }
    else if (size.classList.contains('font-size-5')){
        fontSize ='22px';
        root.style.setProperty('--sticky-top-left','-12rem');
        root.style.setProperty('--sticky-top-right','-35rem');
    }

    document.querySelector('html').style.fontSize = fontSize;
})
})

const changeActiveColor = () => {
    colorPalette.forEach(colors =>{
        colors.classList.remove('active');
    })
}
//color
colorPalette.forEach(color => {

    color.addEventListener('click', () => {
        changeActiveColor();
        let primary;
        let primaryHue;
        if(color.classList.contains('color-1')){
            primaryHue = 252;

        }
        else if(color.classList.contains('color-2')){
            primaryHue = 52;
        }
        else if(color.classList.contains('color-3')){
            primaryHue = 352;
        }
        else if(color.classList.contains('color-4')){
            primaryHue = 152;
        }
        else if(color.classList.contains('color-5')){
            primaryHue = 202;
        }
        color.classList.add('active');

        root.style.setProperty('--primary-color-hue',primaryHue);
        })
})
