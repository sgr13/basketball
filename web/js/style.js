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

    //$("#gameTypeSelect").click(function() {
    //    $(this).closest("form").submit();
    //})
    //
    //$('#gameTypeSelect input').click(function(e){
    //    var gameType = $(this).attr('value');
    //    alert(gameType);
    //    $.ajax({
    //        method: 'POST',
    //        url: "/ajax",
    //        // OR: url: "/Manufacturer", if you don't want to install FOSJsRoutingBundle
    //        data: { gameType:gameType }
    //    }).done(function(response){
    //        console.log(response);
    //        alert("ok");
    //    }).fail(function(XMLHttpRequest, textStatus, errorThrown){
    //        console.log(textStatus + ' ' + errorThrown);
    //    })
    //});

    function showPlayers(players) {
        if (players != 5) {
            for (var i = 5; i > players; i--) {
                $('#player' + i).parent().css('display', 'none');
            }
        }
        for (var i = 2; i <= players; i++) {
            $('#player' + i).parent().show();
        }
    }

    $('#gameTypeSelect input').click(function () {
            var i = $(this).attr('value');
            if (i == 2) {
                showPlayers(i);
            } else if  (i == 3) {
                showPlayers(i);
            } else if (i == 4) {
                showPlayers(i)
            } else if (i == 5) {
                showPlayers(i)
            }


    })
});