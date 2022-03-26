'use strict';

function getCurrentY() {
    let currentY = window.scrollY;
    const element = document.getElementById('debugInfo');
    element.innerHTML = currentY + 'px';
    window.addEventListener('scroll', function(){
        currentY = window.scrollY;
        element.innerHTML = '<p>'.concat('', currentY + 'px</p>')
    });
}

function navFunction() {
    // 現在のY座標を取得
    let currentY = window.scrollY;
    let navPosition = 500;

    // ブレークポイントは存在するか -> bool
    let hasBreakpoint = document.getElementById('breakPointForNav');

    if (hasBreakpoint) {
        // ブレークポイントのY座標値を取得して再代入
        navPosition = document.getElementById('breakPointForNav').getBoundingClientRect().top + window.pageYOffset;
    }

    // デバッグ用    
    const element = document.getElementById('positionElement');
    element.innerHTML = '<p>'.concat('', navPosition, 'px</p>');

    // 現在の座標に応じて何らかの操作を行う関数
    function byCurrentY(coord, idName, className) {

        idName = document.getElementById(idName);
        if (coord < currentY) {
            idName.classList.add(className);
        } else {
            idName.classList.remove(className);
        }
    }

    // 現在の座標に応じてクラスを与える関数 (ブレークポイントとなるY座標の値, 操作を行いたい id 名, どんなクラスを与えるか)
    byCurrentY(navPosition, 'topNav', 'has-bg-color');

}

window.addEventListener('DOMContentLoaded', function() {
    getCurrentY();
    navFunction();
});

window.addEventListener('scroll', function() {
    navFunction();
});

const element = document.getElementById('toHead');

element.onclick = function() {
    console.log('clicked');
    function jumpHeader() {
        window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
    }
    jumpHeader();
};
