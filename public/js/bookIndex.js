$(document).ready(function(){
    var b = localStorage.getItem("myValue");
    $('#boo').val(b);
    $('.checkoption').click(function() {
        var r = $(this).attr('id');
        if($('#b'+r+'s').html() == 'in'){
            $('#in').attr('disabled', true);
            $('#out').attr('disabled', false);
        }
        else{
            $('#out').attr('disabled', true);
            $('#in').attr('disabled', false);
        }
        $('.checkoption').not(this).prop('checked', false);
       
        
     });
    $('#details').click(function(){
        
        var k = $(':checkbox:checked').attr('id');
        alert('Book-Title - ' + $('#b'+k+'t').html() + '\n\nISBN - '
        + $('#b'+k+'i').html() + '\n\nPublish-Year - ' + $('#b'+k+'p').html() +
        '\n\nCover Price - ' + $('#b'+k+'c').html() + '\n\nStatus - ' + $('#b'+k+'s').html());
    })
    $('#out').click(function(){
        
        localStorage.setItem("myValue", $(':checkbox:checked').attr('id'));
        $(location).attr('href', 'check-out');
    });
    $('#in').click(function(){
        function setCookie(key, value, expiry) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        }
        setCookie('bookId', $(':checkbox:checked').attr('id'), '1');
        $(location).attr('href', 'check-in');
        

    });
});