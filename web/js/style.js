$(document).ready(function () {
    var child = $('#monthSelection').attr('month');
    if (child == 1) {
        $('#jan').attr('selected', 'selected');
    } else if (child == 2) {
        $('#feb').attr('selected', 'selected');
    }else if (child == 3) {
        $('#mar').attr('selected', 'selected');
    }else if (child == 4) {
        $('#apr').attr('selected', 'selected');
    }else if (child == 5) {
        $('#may').attr('selected', 'selected');
    }else if (child == 6) {
        $('#jun').attr('selected', 'selected');
    }else if (child == 7) {
        $('#jul').attr('selected', 'selected');
    }else if (child == 8) {
        $('#aug').attr('selected', 'selected');
    }else if (child == 9) {
        $('#sep').attr('selected', 'selected');
    }else if (child == 10) {
        $('#oct').attr('selected', 'selected');
    }else if (child == 11) {
        $('#nov').attr('selected', 'selected');
    } else {
        $('#dec').attr('selected', 'selected');
    }

    var year = $('#yearSelection').attr('year');

    if (year == 2017) {
        $('#2017').attr('selected', 'selected');
    } else {
        $('#2018').attr('selected', 'selected');
    }


    $('#gameTypeSelect input').click(function () {
        $(this).closest("form").submit();
    });

    var first = $('#p1t1');

    first.parent().parent().css('background-color', 'lightblue');
    first.parent().parent().prepend("<p>Drużyna 1 - <b>Biali</b></p>");

    var second = $('#p1t2');
    second.parent().prepend("<hr>Drużyna 2 - <b>Czarni</b><br><br>");
});