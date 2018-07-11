(function(){function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s}return e})()({1:[function(require,module,exports){


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
},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJ0ZW1wbGF0ZXMvc2NyaXB0L2FwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKXtmdW5jdGlvbiBlKHQsbixyKXtmdW5jdGlvbiBzKG8sdSl7aWYoIW5bb10pe2lmKCF0W29dKXt2YXIgYT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2lmKCF1JiZhKXJldHVybiBhKG8sITApO2lmKGkpcmV0dXJuIGkobywhMCk7dmFyIGY9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitvK1wiJ1wiKTt0aHJvdyBmLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsZn12YXIgbD1uW29dPXtleHBvcnRzOnt9fTt0W29dWzBdLmNhbGwobC5leHBvcnRzLGZ1bmN0aW9uKGUpe3ZhciBuPXRbb11bMV1bZV07cmV0dXJuIHMobj9uOmUpfSxsLGwuZXhwb3J0cyxlLHQsbixyKX1yZXR1cm4gbltvXS5leHBvcnRzfXZhciBpPXR5cGVvZiByZXF1aXJlPT1cImZ1bmN0aW9uXCImJnJlcXVpcmU7Zm9yKHZhciBvPTA7bzxyLmxlbmd0aDtvKyspcyhyW29dKTtyZXR1cm4gc31yZXR1cm4gZX0pKCkiLCJcblxudmFyIGp3dCA9IG51bGw7XG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAkKCcjYnV5Jykub24oJ2NsaWNrJywgZnVuY3Rpb24oZXZlbnQpe1xuICAgICAgICB2YXIgYnRuID0gJCh0aGlzKTtcbiAgICAgICAgYnRuLnByb3AoJ2Rpc2FibGVkJywgdHJ1ZSk7XG4gICAgICAgICQucG9zdCgnL2NvaW4vY3JlYXRlJywge30sIGZ1bmN0aW9uKHRva2VuKXtcbiAgICAgICAgICAgIC8vand0ID0gand0X2RlY29kZSh0b2tlbik7XG4gICAgICAgICAgICAkKCcjYnV5SW5wdXQnKS52YWwodG9rZW4pO1xuICAgICAgICAgICAgYnRuLnByb3AoJ2Rpc2FibGVkJywgZmFsc2UpO1xuICAgICAgICB9KTtcbiAgICB9KTtcblxuICAgICQoJyNjaGVjaycpLm9uKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KXtcbiAgICAgICAgdmFyIHRva2VuID0gJCgnI2NoZWNrSW5wdXQnKS52YWwoKTtcbiAgICAgICAgaWYodG9rZW4gIT0gJycpe1xuICAgICAgICAgICAgJC5wb3N0KCcvY29pbi9jaGVjaycsIHsnaGFzaCc6dG9rZW59LCBmdW5jdGlvbihyZXN1bHQpe1xuICAgICAgICAgICAgICAgIGlmKHJlc3VsdC5lcnJvciAhPSB1bmRlZmluZWQpe1xuICAgICAgICAgICAgICAgICAgICBhbGVydChyZXN1bHQuZXJyb3IpO1xuICAgICAgICAgICAgICAgIH1lbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2NoZWNrSW5wdXQnKS52YWwocmVzdWx0LmNvaW4pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBidG4ucHJvcCgnZGlzYWJsZWQnLCBmYWxzZSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgICAgICAvKmlmKGp3dCAhPSBudWxsKXtcbiAgICAgICAgICAgICQoXCIjY29pblZhbHVlXCIpLnZhbChqd3QuY29pbik7XG4gICAgICAgIH0qL1xuICAgIH0pO1xufSk7Il19
