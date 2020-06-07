"use strict";

function revolutionSliderActiver() {

    if ( $( '.rev_slider_wrapper #slider1' ).length ) {
        $( "#slider1" ).revolution( {
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                }
            },
            gridwidth: 1170,
            gridheight: 770
        } );
    };
}

function galleryMasonaryLayout() {
    if ( $( '.img-masonary' ).length ) {
        $( '.img-masonary' ).isotope( {
            layoutMode: 'masonry'
        } );
    }
}

function accrodion() {
    if ( $( '.accrodion-grp' ).length ) {

        $( '.accrodion-grp' ).each( function () {
            var accrodionName = $( this ).data( 'grp-name' );
            var Self = $( this );
            Self.addClass( accrodionName );
            Self.find( '.accrodion .accrodion-content' ).hide();
            Self.find( '.accrodion.active' ).find( '.accrodion-content' ).show();
            Self.find( '.accrodion' ).each( function () {
                $( this ).find( '.accrodion-title' ).on( 'click', function () {
                    if ( $( this ).parent().hasClass( 'active' ) === false ) {
                        $( '.accrodion-grp.' + accrodionName ).find( '.accrodion' ).removeClass( 'active' );
                        $( '.accrodion-grp.' + accrodionName ).find( '.accrodion' ).find( '.accrodion-content' ).slideUp();
                        $( this ).parent().addClass( 'active' );
                        $( this ).parent().find( '.accrodion-content' ).slideDown();
                    };
                } );
            } );
        } );

    };
}

function teamCarosule() {
    if ( $( '.team-carousel' ).length ) {
        $( '.team-carousel' ).owlCarousel( {
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        } );
    }
}

function testiCarosule() {
    if ( $( '.testimonaials-carousel' ).length ) {
        $( '.testimonaials-carousel' ).owlCarousel( {
            loop: true,
            margin: 50,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        } );
    }
}

function CounterNumberChanger() {
    var timer = $( '.timer' );
    if ( timer.length ) {
        timer.appear( function () {
            timer.countTo();
        } )
    }
}

function stickyHeader() {
    if ( $( '.stricky' ).length ) {
        var strickyScrollPos = 100;
        if ( $( window ).scrollTop() > strickyScrollPos ) {
            $( '.stricky' ).removeClass( 'fadeIn animated' );
            $( '.stricky' ).addClass( 'stricky-fixed fadeInDown animated' );
        } else if ( $( this ).scrollTop() <= strickyScrollPos ) {
            $( '.stricky' ).removeClass( 'stricky-fixed fadeInDown animated' );
            $( '.stricky' ).addClass( 'slideIn animated' );
        }
    };
}

function selectInput() {
    if ( $( '.select-input' ).length ) {
        $( '.select-input' ).selectmenu();
    };
}

function datePicker() {
    if ( $( '.date-picker' ).length ) {
        $( '.date-picker' ).datepicker();
    };
}

function mobileMenu() {
    if ( $( '.navigation .nav-footer button' ).length ) {
        $( '.navigation .nav-footer button' ).on( 'click', function () {
            $( '.navigation .nav-header' ).slideToggle();
            $( '.navigation .nav-header' ).find( '.dropdown' ).children( 'a' ).append( function () {
                return '<button><i class="fa fa-bars"></i></button>';
            } );
            $( '.navigation .nav-header .dropdown a button' ).on( 'click', function () {
                $( this ).parent().parent().children( 'ul.submenu' ).slideToggle();
                return false;
            } );
        } );
    };
}

window.notify = function ( className, type, message ) {
    $( className ).fadeIn( 'slow' );
    $( className ).html( '<div class="alert ' + type + '">' + message + '</div>' );
    setTimeout( function () {
        $( className ).fadeOut( 'slow' );
    }, 30000 );
};

$( '#subscribe-form' ).submit( function () {
    var email = $( '#subscribe-email' ).val();
    var url = $( this ).attr( 'action' );

    if ( email == '' ) {
        notify( '.subscribe-response', 'alert-warning', 'Email address is required' );
    } else {

        notify( '.subscribe-response', 'alert-info', 'Loading. Please wait...' );

        $.ajax( {
            url: url,
            type: 'POST',
            data: {
                'email': email
            }
        } ).done( function ( res ) {

            if ( res.status == 200 ) {
                notify( '.subscribe-response', 'alert-success', res.status_message );
                $( '#subscribe-email' ).val( '' );
            } else {
                notify( '.subscribe-response', 'alert-danger', res.status_message );
            }

        } );

    }

    return false;
} );

( function ( $ ) {
    revolutionSliderActiver();
    accrodion();
    galleryMasonaryLayout();
    teamCarosule();
    CounterNumberChanger();
    testiCarosule();
    selectInput();
    datePicker();
    mobileMenu();
} )( jQuery );

jQuery( window ).on( 'scroll', function () {
    ( function ( $ ) {
        stickyHeader();
    } )( jQuery );
} );
