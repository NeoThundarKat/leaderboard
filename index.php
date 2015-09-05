<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="static/main.css" />
    <script src="static/jquery.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">NETWORKING NATIONAL FINALS</div>
        <p>C:\> cd NationalFinals</p>
        <p>C:\NationalFinals> php artisan tinker</p>
        <p>mysql> select * from `competitors` where `day` = 1</p>
        <table class="cmd_table">
            <thead>
                <tr class="break">
                    <td>--------</td>
                    <td>---------------------</td>
                    <td>--------------------------</td>
                    <td>----------------------------------</td>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Competitor Name</th>
                    <th>Provider</th>
                    <th>Progress Completed</th>
                </tr>
                <tr class="break start">
                    <td>--------</td>
                    <td>---------------------</td>
                    <td>--------------------------</td>
                    <td>----------------------------------</td>
                </tr>
            </thead>
            
            <!--Competitors info-->
            <tbody class="competitors">
                <tr>
                    <td>01</td>
                    <td>John Davis</td>
                    <td>John Davis</td>
                    <td>[###----------------] <span class="percent">18%</span></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>John Davis</td>
                    <td>John Davis</td>
                    <td>[########-----------] <span class="percent">18%</span></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>John Davis</td>
                    <td>John Davis</td>
                    <td>[###############----] <span class="percent">18%</span></td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>John Davis</td>
                    <td>John Davis</td>
                    <td>[#------------------] <span class="percent">18%</span></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>John Davis</td>
                    <td>John Davis</td>
                    <td>[######-------------] <span class="percent">18%</span></td>
                </tr>
                <!--end competitors info-->

                <tr class="break">
                    <td>--------</td>
                    <td>---------------------</td>
                    <td>--------------------------</td>
                    <td>----------------------------------</td>
                </tr>
            </tbody>
        </table>
        <p>mysql> select `time` from `timeleft`</p>
        <p class="time">0:01:00</p>
        <p>mysql> exit</p>
        <p>C:\NationalFinals> </p>
        <p style="position:relative;">C:\NationalFinals> <span class="blink show"></span></p>
    </div>
    
    <script type="text/javascript">
        var blink = true;
        var data = {};
        var interval = setInterval(function() {
              $.ajax({
                  url:'retrieve.php',
                  success:function(res) {
                      
                      var retrieved = JSON.parse(res);
                      console.log(res);
                      console.log(JSON.stringify(data));
                      if(JSON.stringify(data) == res) {
                          console.log("No change");
                      } else {
                          $('.competitors').html("");
                          $.each(retrieved, function(i, item) {
                              var noOfHash = Math.ceil((parseInt(item.score)/100)*20);
                              $('.competitors').append("<tr>\
                        <td>"+item.id+"</td>\
                        <td>"+item.name+"</td>\
                        <td>"+item.provider+"</td>\
                        <td>["+printNo("#", noOfHash)+""+printNo("-", 20-noOfHash)+"] <span class=\"percent\">"+item.score+"%</span></td>\
                    </tr>")
                          });
                          
                          $('.competitors').append("<tr class=\"break\">\
                        <td>--------</td>\
                        <td>---------------------</td>\
                        <td>--------------------------</td>\
                        <td>----------------------------------</td>\
                    </tr>");
                          
                          data = retrieved;
                      }
                  }
              })
            $('.blink').toggleClass("show");
            
            /*Timer*/
             var finish = false;
            var time = $('.time').html().split(':');
            var hour = parseInt(time[0])
            var minute = parseInt(time[1]);
            var second = parseInt(time[2]);
            var finalTime;
            if(minute == 0 && second == 0) {
                minute = 59;
                second = 59;
                if(hour == 0) {
                    finish = true;
                    console.log("TIMES UP");
                    clearInterval(interval);
                } else {
                    hour--;
                }
            }
            if(second == 0) {
                second = 59;
                minute--;
            } else {
                second--;
            }
            var finalTime = hour + ":" + ((minute < 10) ? "0"+minute : minute) + ":" + ((second < 10) ? "0"+second : second);
            if(finish) {
                $('.time').html("TIMES UP");
            } else {
                $('.time').html(finalTime);
            }
        }, 1000)
        
        
        
        function printNo(string, no) {
            var res = [];
            for(var i = 0; i < no; i++) {
                res.push(string);
            }
            return res.join("");
        }
      </script>
</body>
<html>
