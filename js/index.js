$(document).ready(function() {

    $('.block .part_content').hide();

    $('.part_title').css('cursor', 'pointer')

    $('.part_title').each(function(index) {
        $(this).toggle(function() {
            $(this).find('img').each(function(index) {
                if (index==0) {
                    this.src = "img/down.png";
                };
            });
            $(this).parent('div').find('.part_content').slideDown('fast');
        }, function() {
            $(this).parent('div').find('img').each(function(index) {
                if (index==0) {
                    this.src = "img/left.png";
                };
            });
            $(this).parent('div').find('.part_content').slideUp('fast');
        });
    });

    $('#presentationBtn').click(function() { $('#presentation').ScrollTo(800); });
    $('#softwareBtn').click(function() { $('#software').ScrollTo(800); });
    $('#publisBtn').click(function() { $('#publis').ScrollTo(800); });
    $('#linksBtn').click(function() { $('#links').ScrollTo(800); });

    $('.thickbox a').thickbox({ width: '600' });

    $('#expand-text').click(function() {
        $('.block .part_content').slideDown('fast');
        $('#expand-text').hide();
        $('#collapse-text').show();
        $('.part_title').find('img').each(function(index) { this.src = "img/down.png"; });
    });

    $('#collapse-text').click(function() {
        $('.block .part_content').slideUp('fast');
        $('#collapse-text').hide();
        $('#expand-text').show();
        $('.part_title').find('img').each(function(index) { this.src = "img/left.png"; });
    });
});