
    
const mQuery = window.matchMedia('(max-width: 375px)');

window.onload=function() {
    ojs();
    notmobile = document.querySelector('#new-cards');
    notmobile.style.width = 100 +'%';
    notmobile.style.left = 0;
    notmobile.style.transform = '';

    notmobile1 = document.querySelector('#recommend-cards');
    notmobile1.style.width = 100 +'%';
    notmobile1.style.left = 0;
    notmobile1.style.transform = '';


    notmobile2 = document.querySelector('#noGenre_cards');
    notmobile2.style.width = 100 +'%';
    notmobile2.style.left = 0;
    notmobile2.style.transform = '';

    notmobile3 = document.querySelector('#fighting_cards');
    notmobile3.style.width = 100 +'%';
    notmobile3.style.left = 0;
    notmobile3.style.transform = '';
    $('.clone').remove();
}

function handleMobilePhoneResize(e) {   
   // Check if the media query is true
   if (e.matches) {     
        // Then log the following message to the console     
        console.log('Media Query Matched!') 
        ojs();  
   }else{
       notmobile = document.querySelector('#new-cards');
       notmobile.style.width = 100 +'%';
       notmobile.style.left = 0;
       notmobile.style.transform = '';

       notmobile1 = document.querySelector('#recommend-cards');
       notmobile1.style.width = 100 +'%';
       notmobile1.style.left = 0;
       notmobile1.style.transform = '';


       notmobile2 = document.querySelector('#noGenre_cards');
       notmobile2.style.width = 100 +'%';
       notmobile2.style.left = 0;
       notmobile2.style.transform = '';

       notmobile3 = document.querySelector('#fighting_cards');
       notmobile3.style.width = 100 +'%';
       notmobile3.style.left = 0;
       notmobile3.style.transform = '';
       $('.clone').remove();
   }    
} 

// Set up event listener 
mQuery.addListener(handleMobilePhoneResize)

function makeClone() {  
    if(slideCount > 2) {
        for (var i = 0; i < slideCount; i++) {
            var cloneSlide = slide[i].cloneNode(true);
            cloneSlide.classList.add('clone');
            slides.appendChild(cloneSlide);
        }
        for (var i = slideCount - 1; i >= 0; i--) {
            var cloneSlide = slide[i].cloneNode(true);
            cloneSlide.classList.add('clone');
            slides.prepend(cloneSlide);
        }
        updateWidth();
        setInitialPos();
        setTimeout(function () {
            slides.classList.add('animated');
        }, 100);
    }else{
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    }
}

function updateWidth() {
    var currentSlides = document.querySelectorAll('#new-cards div');
    var newSlideCount = currentSlides.length;
    var newWidth = (slideWidth + slideMargin) * newSlideCount + 'px';
    slides.style.width = newWidth;
}

function setInitialPos() {   
    var initialTranslateValue = -(slideWidth + slideMargin) * slideCount;
    slides.style.transform = 'translateX(' + initialTranslateValue + 'px)';
}

//.....

function makeClone1() {
    if(slideCount > 2) {
        for (var i = 0; i < slideCount1; i++) {
            var cloneSlide1 = slide1[i].cloneNode(true);
            cloneSlide1.classList.add('clone');
            slides1.appendChild(cloneSlide1);
        }
        for (var i = slideCount1 - 1; i >= 0; i--) {
            var cloneSlide1 = slide1[i].cloneNode(true);
            cloneSlide1.classList.add('clone');
            slides1.prepend(cloneSlide1);
        }
        updateWidth1();
        setInitialPos1();
        setTimeout(function () {
            slides1.classList.add('animated');
        }, 100);
    }else{
        prevBtn1.style.display = 'none';
        nextBtn1.style.display = 'none';
    }
}

function updateWidth1() {
    var currentSlides1 = document.querySelectorAll('#recommend-cards div');
    var newSlideCount1 = currentSlides1.length;
    var newWidth1 = (slideWidth1 + slideMargin1) * newSlideCount1 + 'px';
    slides1.style.width = newWidth1;
}

function setInitialPos1() {
    var initialTranslateValue1 = -(slideWidth1 + slideMargin1) * slideCount1;
    slides1.style.transform = 'translateX(' + initialTranslateValue1 + 'px)';
}

//.....
function makeClone2() {
    if(slideCount > 2) {
        for (var i = 0; i < slideCount2; i++) {
            var cloneSlide2 = slide2[i].cloneNode(true);
            cloneSlide2.classList.add('clone');
            slides2.appendChild(cloneSlide2);
        }
        for (var i = slideCount2 - 1; i >= 0; i--) {
            var cloneSlide2 = slide2[i].cloneNode(true);
            cloneSlide2.classList.add('clone');
            slides2.prepend(cloneSlide2);
        }
        updateWidth2();
        setInitialPos2();
        setTimeout(function () {
            slides2.classList.add('animated');
        }, 100);
    }else{
        prevBtn2.style.display = 'none';
        nextBtn2.style.display = 'none';
    }
}

function updateWidth2() {
    var currentSlides2 = document.querySelectorAll('#noGenre_cards div');
    var newSlideCount2 = currentSlides2.length;

    var newWidth2 = (slideWidth2 + slideMargin2) * newSlideCount2 + 'px';
    slides2.style.width = newWidth2;
}

function setInitialPos2() {
    var initialTranslateValue2 = -(slideWidth2 + slideMargin2) * slideCount2;
    slides2.style.transform = 'translateX(' + initialTranslateValue2 + 'px)';

}

//.....


function makeClone3() {
    if(slideCount > 2) {
        for (var i = 0; i < slideCount3; i++) {
            var cloneSlide3 = slide3[i].cloneNode(true);
            cloneSlide3.classList.add('clone');
            slides3.appendChild(cloneSlide3);
        }
        for (var i = slideCount3 - 1; i >= 0; i--) {
            var cloneSlide3 = slide3[i].cloneNode(true);
            cloneSlide3.classList.add('clone');
            slides3.prepend(cloneSlide3);
        }
        updateWidth3();
        setInitialPos3();
        setTimeout(function () {
            slides3.classList.add('animated');
        }, 100);
    }else{
        prevBtn3.style.display = 'none';
        nextBtn3.style.display = 'none';
    }
}

function updateWidth3() {
    var currentSlides3 = document.querySelectorAll('#fighting_cards div');
    var newSlideCount3 = currentSlides3.length;

    var newWidth3 = (slideWidth3 + slideMargin3) * newSlideCount3 + 'px';
    slides3.style.width = newWidth3;
}

function setInitialPos3() {
    var initialTranslateValue3 = -(slideWidth3 + slideMargin3) * slideCount3;
    slides3.style.transform = 'translateX(' + initialTranslateValue3 + 'px)';

}

function ojs(){ 
    let slides = document.querySelector('#new-cards');
    let slide = document.querySelectorAll('#new-cards>.wrapNewCard');
    let currentIdx = 0;
    let slideCount = slide.length;
    let slideWidth = 98;
    let slideMargin = 20;
    let prevBtn = document.querySelector('#movieList_slideLeft_new');
    let nextBtn = document.querySelector('#movieList_slideRight_new');

    makeClone();

    slides1 = document.querySelector('#recommend-cards'),
    slide1 = document.querySelectorAll('#recommend-cards>.wrapRecomCard'),
    currentIdx1 = 0,
    slideCount1 = slide1.length,
    slideWidth1 = 98,
    slideMargin1 = 20,
    prevBtn1 = document.querySelector('#movieList_slideLeft_recom'),
    nextBtn1 = document.querySelector('#movieList_slideRight_recom')

    makeClone1();

    slides2 = document.querySelector('#noGenre_cards'),
    slide2 = document.querySelectorAll('#noGenre_cards>.wrapNoGenreCard'),
    currentIdx2 = 0,
    slideCount2 = slide2.length,
    slideWidth2 = 98,
    slideMargin2 = 20,
    prevBtn2 = document.querySelector('#movieList_slideLeft_noGenre'),
    nextBtn2 = document.querySelector('#movieList_slideRight_noGenre')

    makeClone2();

    slides3 = document.querySelector('#fighting_cards'),
    slide3 = document.querySelectorAll('#fighting_cards>.wrapFightingCard'),
    currentIdx3 = 0,
    slideCount3 = slide3.length,
    slideWidth3 = 98,
    slideMargin3 = 20,
    prevBtn3 = document.querySelector('#movieList_slideLeft_fighting'),
    nextBtn3 = document.querySelector('#movieList_slideRight_fighting')

    makeClone3();

    if (window.ojs_makeClone == undefined) {
        window.ojs_makeClone = true;
    } else {
        return;
    }
   
    nextBtn.addEventListener('click', function () {
        moveSlide(currentIdx + 1);
    })

    prevBtn.addEventListener('click', function () {
        moveSlide(currentIdx - 1);
    })

    function moveSlide(num) {
        slides.style.left = -num * (slideWidth + slideMargin) + 'px';
        currentIdx = num;
        console.log(num);
        if (currentIdx == slideCount || currentIdx == -slideCount) {
            setTimeout(function () {
                slides.classList.remove('animated');
                slides.style.left = '0px';
                currentIdx = 0;
            }, 500);

            setTimeout(function () {
                slides.classList.add('animated');
            }, 550);
        }
    }

    /*후원*/

    nextBtn1.addEventListener('click', function () {
    moveSlide1(currentIdx1 + 1);
    })

    prevBtn1.addEventListener('click', function () {
    moveSlide1(currentIdx1 - 1);
    })

    function moveSlide1(num) {
        slides1.style.left = -num * (slideWidth1 + slideMargin1) + 'px';
        currentIdx1 = num;
        if (currentIdx1 == slideCount1 || currentIdx1 == -slideCount1) {
            setTimeout(function () {
                slides1.classList.remove('animated');
                slides1.style.left = '0px';
                currentIdx1 = 0;
            }, 500);

            setTimeout(function () {
                slides1.classList.add('animated');
            }, 550);
        }

    }

    /*투자*/


    nextBtn2.addEventListener('click', function () {
    moveSlide2(currentIdx2 + 1);
    })

    prevBtn2.addEventListener('click', function () {
    moveSlide2(currentIdx2 - 1);
    })

    function moveSlide2(num) {
        slides2.style.left = -num * (slideWidth2 + slideMargin2) + 'px';
        currentIdx2 = num;
    if (currentIdx2 == slideCount2 || currentIdx2 == -slideCount2) {
        setTimeout(function () {
            slides2.classList.remove('animated');
            slides2.style.left = '0px';
            currentIdx2 = 0;
        }, 500);

        setTimeout(function () {
            slides2.classList.add('animated');
        }, 550);
    }

    }

    /*북마크*/

    nextBtn3.addEventListener('click', function () {
        moveSlide3(currentIdx3 + 1);
    })

    prevBtn3.addEventListener('click', function () {
        moveSlide3(currentIdx3 - 1);
    })

    function moveSlide3(num) {
        slides3.style.left = -num * (slideWidth3 + slideMargin3) + 'px';
        currentIdx3 = num;
        if (currentIdx3 == slideCount3 || currentIdx3 == -slideCount3) {
            setTimeout(function () {
                slides3.classList.remove('animated');
                slides3.style.left = '0px';
                currentIdx3 = 0;
            }, 500);

            setTimeout(function () {
                slides3.classList.add('animated');
            }, 550);
        }

    }  
        
};

