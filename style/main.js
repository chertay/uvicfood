$(document).ready(function(){
             setInterval(_initTimer, 1000);
         });
         function _initTimer(){
             $.ajax({
                 url: 'timer.php',
                 success: function(data) {
                    console.log(data);
                     data = data.split(':');
                     $('#hrs').html(data[0]);
                     $('#mins').html(data[1]);
                     $('#secs').html(data[2]);
                 }
             });
         }
