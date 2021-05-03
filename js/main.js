'use strict';

const sendButton = $('#send');

sendButton.click(() => {

    let name = $("#name").val();
    let name = $("#email").val();
    let name = $("#subject").val();
    let name = $("#message").val(); 

    $.ajax({
        url: 'sendmail.php',
        method: 'POST',
        data: { name: name, email: email, subject: subject, description: description},
        dataType: 'html',
    }).done( function(data) {

        // $('.result').html(data);     Ez ugyanazt csijálja mint az alattalévő sor, csak jquery-ben. sokkal rövidebb, lehet a kódokat vegyíteni

        document.querySelector('.result').textContent = data;
    });
});

