$(document).ready(function () {
    // Menu responsywne
    let header_h = $('body header').outerHeight();
    $('body main aside header nav').css('top', header_h);

    let tmpMenu = 0;
    $('#icon-menu').click(function () {
        $(this).toggleClass("open");
        if (tmpMenu == 0) {
            $('body header').addClass('show');
            // -8rem to margines .stage, a 16px to standardowy font-size w bootstrap. 
            // Stąd należy dokonać obliczeń
            let margin_top = -8 * 16 + header_h;
            $('body main aside .stage').css('margin-top', margin_top);
            $('body main aside header nav').css('height', 'auto');
            $('body main span.after').css({ 'z-index': '1', 'background-color': '#000000cc' });
            tmpMenu = 1;
        } else {
            $('body header').removeClass('show');
            $('body main aside .stage').css('margin-top', '-8rem');
            setTimeout(function () {
                $('body main aside header nav').css('height', '0');
            }, 300);
            $('body main span.after').css({ 'z-index': '-1', 'background-color': 'transparent' });
            tmpMenu = 0;
        }
    });

    // Zamknij menu klikając w span.after
    $('body main span.after').click(function () {
        $('#icon-menu').removeClass('open');
        $('body header').removeClass('show');
        $('body main aside .stage').css('margin-top', '-8rem');
        setTimeout(function () {
            $('body main aside header nav').css('height', '0');
        }, 300);
        $('body main span.after').css({ 'z-index': '-1', 'background-color': 'transparent' });
        tmpMenu = 0;
    });

    // Zdjęcia w losowej kolejności
    const images = [
        '/wp-content/themes/piwnica-kata/images/piwnica_kata_1.webp',
        '/wp-content/themes/piwnica-kata/images/piwnica_kata_2.webp',
        '/wp-content/themes/piwnica-kata/images/piwnica_kata_3.webp'
    ];
    // Shuffle the images array
    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    const shuffledImages = shuffle(images);

    console.log(`1 ${shuffledImages[0]}`);
    console.log(`2 ${shuffledImages[1]}`);
    console.log(`3 ${shuffledImages[2]}`);

    $('#actor_1').css('background-image', `url(${shuffledImages[0]})`);
    $('#actor_2').css('background-image', `url(${shuffledImages[1]})`);
    $('#actor_3').css('background-image', `url(${shuffledImages[2]})`);
});