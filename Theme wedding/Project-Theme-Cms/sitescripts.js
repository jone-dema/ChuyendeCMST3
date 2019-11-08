$(document).ready(function() {

    /*----------------------------------Click Slide Submenu------------*/




    $('.nav-item').click(function() {
        var _this = $(this);
        _this.children(".dropdown-menu").slideToggle();
        $('.nav-item').not(_this).children('.dropdown-menu').slideUp();
    });
    $('.navbar .respon').click(function() {
        $(".navbar-nav").slideToggle();
    });





    // $(window).resize(function() {
    var width = $(window).width();
    if (width < 982) {
        console.log(width);
        $(".nav-link").each(function() { // thêm Hover 1 lần duy nhất

            $(this).removeClass('active');
            $(".nav-link").removeClass("hover");

        });
    } else {
        active_hover();
    }
    // });

    /*--------------------------------------KHÔNG CẦN  RESIZE ( LẤY SIZE KHI ON LOAD )---------------------------------------------*/


    /*--------------------------------------KHI RESIZE BẮT ĐẦU THỰC HIỆN---------------------------------------------*/
    $(window).resize(function() {

        var width = $(window).width();

        if (width > 982) {


            active_hover();




            $(".navbar-nav").css({ "display": "flex", "flex-direction": "row" });
            $('.pushmenu-push').removeClass('pushmenu-push-toright');
            $('.pushmenu-left').removeClass('pushmenu-right');
            // window.onscroll = function() { menuscrolll() };
        } else {
            $(".navbar-nav").css({ "display": "block" });
            $(".nav-link").removeClass("hover");

        }

    });

    /*---------------------------- SLIDE MENU LEFT TO RIGHT  -------------------------*/

    $menuLeft = $('.pushmenu-left');
    $nav_list = $('.fa-bars');

    $nav_list.click(function() {

        $('.fa-bars').toggleClass('rotate_bars');


        $('.pushmenu-push').toggleClass('pushmenu-push-toright');
        $menuLeft.toggleClass('pushmenu-right');
    });

    /*-------------------------------------- CLICK SEARCH --------------------------------*/
    $(".fa-search").click(function() {

        $('.menu-search-text').toggleClass('menu-search-add');

    });

    /*------------------------------------------ ACTIVE , HOVER MENU----------------------------------------*/


    function active_hover() {
        $(".nav-link").each(function() { // thêm Hover 1 lần duy nhất
            if (!$(this).hasClass('active')) {
                $(this).addClass('hover');
            }
        });


        var xnav = document.querySelectorAll(".nav-link");

        for (i = 0; i < xnav.length; i++) {

            xnav[i].addEventListener("click", function() { // bắt sự kiện click tại vị trí nào 
                //   debugger;

                var current = document.getElementsByClassName("active");

                if ($(".nav-link").not('active')) {
                    $(".nav-link").addClass('hover'); // add lại class hover sau khi bị xóa ở bên dưới

                }

                // debugger;
                current[0].className = current[0].className.replace("active", "");
                // debugger;

                this.className += " active";

                if ($(".nav-link").hasClass('active') && $(".nav-link").hasClass('hover')) {
                    $(this).removeClass('hover'); // check nếu có active thì xóa hover 
                }
                //   debugger;

            });
        }

    }


    /*------------------------------------------ SCROLL MENU----------------------------------------*/


    document.getElementsByClassName("wrap_header")[0].setAttribute("id", "myHeader");


    window.onscroll = function() { menuscrolll() };

    var header = document.getElementById("myHeader");

    var sticky = header.offsetTop;



    function menuscrolll() {

        header.classList.add("sticky");
        var width = $(window).width();

        if (width > 982) {

            if (window.pageYOffset > sticky) {


                $(".navbar").addClass('headerAnimate');
                $(".removeto").removeClass("navbar-brand");


            } else {

                $(".removeto").addClass("navbar-brand");
                $(".navbar").removeClass('headerAnimate');
            }

        } else if (width < 982) {
            $(".navbar").addClass('headerAnimate');
            $(".removeto").removeClass("navbar-brand");
        }




    }







});