window.addEventListener('load', function () {
    if (localStorage.getItem('bsm-lecentre-preloader') !== 'true') {
        document.getElementsByClassName('app-wrapper')[0].classList.add('hide');
    }
})