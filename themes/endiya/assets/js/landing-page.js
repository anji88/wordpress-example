// this niceselect pulgin
$(document).ready(function () {
    $('.banner__dropdown-input').niceSelect();
    $('.insights__blog-text p').css('box-orient', 'vertical')
    //search verstion one buttons placehoder text changing start

    $('.banner__button-label').click(function () {
        $('.banner__search-button').find('.banner__button-label.banner__button-label--active').removeClass('banner__button-label--active')
        var selectedbutton = $(this).addClass('banner__button-label--active').text();
        var placeholdetext = selectedbutton
        $('.banner__searchbar').find('input[type=text]').val('');
        changeInputText(placeholdetext);
    })
    $('.list .option').click(function () {
        var placeholdetext = $(this).text();
        changeInputText(placeholdetext)
    })

});
// drop down in mobile end

function changeInputText(placeholdetext) {
    if (placeholdetext === "Ask a Question") {
        $('.banner__result').find('.banner__result-button').text('Get Answers');
        $('.banner__searchbar').find('input[type=text]').attr("placeholder", "Ex. How to add domain user to local admin group on Win 10");
        $('.banner__searchbar').find('input[type=text]').attr("labelValue", "");
    } else if (placeholdetext === "Learn Tech Skills") {
        $('.banner__result').find('.banner__result-button').text('Find Resources');
        $('.banner__searchbar').find('input[type=text]').attr("placeholder", "Ex. Cloud Computing");
        $('.banner__searchbar').find('input[type=text]').attr("labelValue", "Learn_");
    } else if (placeholdetext === "Read Product Reviews") {
        $('.banner__result').find('.banner__result-button').text('Find Products');
        $('.banner__searchbar').find('input[type=text]').attr("placeholder", "Ex. Cisco Routers");
        $('.banner__searchbar').find('input[type=text]').attr("labelValue", "Products_");
    }
}
//search verstion one buttons placehoder text changing end

// slick function start
(function press() {
    $('.press__links').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        swipe: true,
        infinite: true,
        variableWidth: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 10000,
        responsive: [{
            breakpoint: 1023,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                variableWidth: false,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay: true,
                variableWidth: false,
            }
        },
        ]
    })
    $('.slider-nav .slick-slide').on('click', function (event) {
        $('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
        });
})()
// slick function end

// assigning show class by default
$('.press__popup-block').not(':first').addClass('hide');
$('.press__links').on('afterChange', function(){
    $('.press__link.slick-slide[aria-hidden="false"]').eq(0).click();
});

setTimeout(() => {
    $('.press__link').not('.slick-cloned').eq(0).addClass('press__link--active');
}, 100)

$('.m-button').not(':first').addClass('hide');

// press section click function start
$('.press__link').click(function (e) {
    let data = e.currentTarget.attributes.data.nodeValue;

    $('.press__link').each(function () {
        $(this).removeClass('press__link--active');
    });
    $('.m-button').each(function () {
        $(this).addClass('hide');
        $(this).removeClass('d-show');
    });

    $('.press__popup-block').each(function () {
        $(this).addClass('hide');
        $(this).removeClass('d-show');
    });
    $(`[data=${data}]`).removeClass('hide');
    $(this).addClass('press__link--active');
})

// press section click function end

//search page banner button function start

$(document).ready(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        var id;

        if (window.innerWidth > 767) {
            id = $('.banner__search-button').find('.banner__button-label.banner__button-label--active').attr('urlId')
        }
        else {
            //for mobile dropdown(used plugin)
            var mobileText = $('.banner__dropdown-input').find('.current').text();
            if (mobileText == 'Ask a Question') id = '1';
            else if (mobileText == 'Learn Tech Skills') id = '2';
            else if (mobileText == 'Read Product Reviews') id = '3';
            else id = 1;
        }

        var inputdata = $('.banner__searchbar').find('input[type=text]').val();
        if (inputdata) {
            redirectUrl(id, inputdata);
        }
    })
})


$('.banner__input-label').keypress(function (event) {
    var labelValue = $('.banner__searchbar').find('input[type=text]').attr("labelValue");
    var inputdata = $('.banner__searchbar').find('input[type=text]').val();
    $('.banner__result-button').attr('id', labelValue + inputdata);
});

function redirectUrl(id, inputdata) {

    //finding selected tab in banner search
    var selectedTab = [
        {
            id: "1",           
            url: "https://community.spiceworks.com/search?query=",          
        }, {
            id: "2",            
            url: "https://community.spiceworks.com/search?utf8=✓&query=",           
        }, {
            id: "3",          
            url: "https://community.spiceworks.com/products/search/products/all?product_keyword=",
           
        }

    ].find(obj => obj.id == id);

    // var specificGaDump = ga_dump["landing-page-version1-get-answers-button"];   
    // Google analytics
   
    // specificGaDump['x-ga-redirect-to'] = selectedTab.url + inputdata;
    // specificGaDump['x-ga-self'] = "false";
    // sendGA(specificGaDump);

    redirectToLink(selectedTab.url + inputdata);

    $('.banner__searchbar').find('input[type=text]').val('');

}
function redirectToLink(link, _self) {
    var a = document.createElement('a');
    a.href = link;
    a.target = _self ? "_self" : "_blank";
    a.click();
}
//search page banner button function end