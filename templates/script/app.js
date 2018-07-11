

var jwt = null;
$(document).ready(function() {
    $('#buy').on('click', function(event){
        var btn = $(this);
        btn.prop('disabled', true);
        $.post('/coin/create', {}, function(token){
            //jwt = jwt_decode(token);
            $('#buyInput').val(token);
            btn.prop('disabled', false);
        });
    });

    $('#check').on('click', function(event){
        var token = $('#checkInput').val();
        if(token != ''){
            $.post('/coin/check', {'hash':token}, function(result){
                if(result.error != undefined){
                    alert(result.error);
                }else {
                    $('#checkInput').val(result.coin);
                }
                btn.prop('disabled', false);
            });
        }
        /*if(jwt != null){
            $("#coinValue").val(jwt.coin);
        }*/
    });
});