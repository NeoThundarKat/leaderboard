<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./static/main.css" />
    <script src="static/jquery.js" ></script>
</head>
<body>
    <div id="wrapper">
        <h1 class="center">Network Security</h1>
        <br />
        <div class="ptScore center" id="first">
            <div class="left">
                <div  class="h2" id="name1">l1</div><br />
                <div  class="h2" id="score1">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location1">r1</div><br />
                <div  class="h2" id="provider1">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="second">
            <div class="left">
                <div  class="h2" id="name2">l1</div><br />
                <div  class="h2" id="score2">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location2">r1</div><br />
                <div  class="h2" id="provider2">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="third">
            <div class="left">
                <div  class="h2" id="name3">l1</div><br />
                <div  class="h2" id="score3">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location3">r1</div><br />
                <div  class="h2" id="provider3">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="fourth">
            <div class="left">
                <div  class="h2" id="name4">l1</div><br />
                <div  class="h2" id="score4">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location4">r1</div><br />
                <div  class="h2" id="provider4">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="fifth">
            <div class="left">
                <div  class="h2" id="name5">l1</div><br />
                <div  class="h2" id="score5">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location5">r1</div><br />
                <div  class="h2" id="provider5">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="sixth">
            <div class="left">
                <div  class="h2" id="name6">l1</div><br />
                <div  class="h2" id="score6">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location6">r1</div><br />
                <div  class="h2" id="provider6">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="seventh">
            <div class="left">
                <div  class="h2" id="name7">l1</div><br />
                <div  class="h2" id="score7">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location7">r1</div><br />
                <div  class="h2" id="provider7">r2</div>
            </div>
        </div><br />
        <div class="ptScore center" id="eighth">
            <div class="left">
                <div  class="h2" id="name8">l1</div><br />
                <div  class="h2" id="score8">l2</div>
            </div>
            <div class="right">
                <div  class="h2" id="location8">r1</div><br />
                <div  class="h2" id="provider8">r2</div>
            </div>
        </div>
        <div id="debug"></div>
    </div>
    <script type="text/javascript">
    setInterval(function() {
          $.ajax({
              url:'retrieve.php',
              success:function(res) {
                  var json = JSON.parse(res);

                  $('#name1').html(json[0].name);
                  $('#score1').html(json[0].score+'%');
                  $('#location1').html(json[0].location);
                  $('#provider1').html(json[0].provider);

                  $('#name2').html(json[1].name);
                  $('#score2').html(json[1].score+'%');
                  $('#location2').html(json[1].location);
                  $('#provider2').html(json[1].provider);

                  $('#name3').html(json[2].name);
                  $('#score3').html(json[2].score+'%');
                  $('#location3').html(json[2].location);
                  $('#provider3').html(json[2].provider);

                  $('#name4').html(json[3].name);
                  $('#score4').html(json[3].score+'%');
                  $('#location4').html(json[3].location);
                  $('#provider4').html(json[3].provider);

                  $('#name5').html(json[4].name);
                  $('#score5').html(json[4].score+'%');
                  $('#location5').html(json[4].location);
                  $('#provider5').html(json[4].provider);

                  $('#name6').html(json[5].name);
                  $('#score6').html(json[5].score+'%');
                  $('#location6').html(json[5].location);
                  $('#provider6').html(json[5].provider);

                  $('#name7').html(json[6].name);
                  $('#score7').html(json[6].score+'%');
                  $('#location7').html(json[6].location);
                  $('#provider7').html(json[6].provider);

                  $('#name8').html(json[7].name);
                  $('#score8').html(json[7].score+'%');
                  $('#location8').html(json[7].location);
                  $('#provider8').html(json[7].provider);

                  $('#debug').html(res);
              }
          })
      }, 1000)
      </script>
</body>
<html>
