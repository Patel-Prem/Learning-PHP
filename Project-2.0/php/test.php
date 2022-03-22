<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
// var keydownCounter = 0;
// var keypressCounter = 0;
// $( document ).ready(function(){
 
//   $('#textbox').keydown(function(event){
//     $('#keydownCounter').html(++keydownCounter);
//   });
    
//   $('#textbox').keypress(function(event){
//     $('#keypressCounter').html(++keypressCounter);
//   });
 
// });
var keypressCounter = 0;
$(document).ready(function(event){
    $('#pswd').keyup(function(event){

    var len = $('#pswd').val().length;
    // console.log(len);
     
    if(len <= 2){
        $('#st').html("weak");
        $('#st').css("color", 'red');
    }

    else if(len > 2 && len <= 5){
        $('#st').html("medium");
        $('#st').css("color", 'orange');
    }
    else{
        $('#st').html("stronge");
        $('#st').css("color", 'green');
    }
  });
});

$(document).ready(function(){
    $(window).scroll(function(){
    if(window.scrollY > 20){
        $("#txt").css("background-color","red");
    }
    else{
        $("#txt").css("background-color","white");
    }
    });
});

</script>
</head>
<body>
  <h4>jQuery keydown() and keypress() difference</h4>
   
  <!-- <label>TextBox : </label><input id="textbox" type="text" size="50" />
   
  <div>
    <label>keydown() event fired : </label><span id="keydownCounter">0</span> times.
  </div>
   
  <div>
    <label>keypress() event fired : </label><span id="keypressCounter">0</span> times.
  </div> -->

  <label> Paassword : </label> <input type="text" id="pswd" />
  <div>
    <label> Password Strength : <sapn id="st">  </span> <label> 
</div>

<div>
    <p id="txt"> 
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae fringilla erat, ultricies auctor dolor. Nulla dui libero, lacinia eu bibendum eu, vulputate quis nunc. Morbi tempor ultricies justo, vel luctus velit. Sed hendrerit urna ut purus mattis, nec sagittis ipsum tristique. Nullam vel orci non ante lacinia malesuada. Vivamus rhoncus velit ut dui dignissim accumsan. Aliquam semper nisi id odio faucibus aliquam in vitae ex. Praesent lacus ligula, aliquam sed luctus quis, gravida quis quam. Proin nisl urna, pulvinar non pulvinar vel, ultricies id tortor. Nunc porta mattis purus, gravida faucibus purus convallis vehicula. Sed laoreet diam non diam sodales, in dapibus nulla posuere.

Nullam justo nisl, condimentum vitae aliquam ac, sollicitudin ut dui. Phasellus a euismod justo, et aliquam orci. Vivamus bibendum magna ac vestibulum faucibus. Nunc et ligula malesuada, fermentum felis quis, imperdiet est. Mauris ac pretium risus, eu luctus velit. Ut nec lectus egestas risus mollis vulputate. Nam aliquam ipsum velit, non tincidunt elit porta nec. Aenean non pulvinar lorem, imperdiet aliquet eros. Phasellus ultrices nisi mauris, eget tincidunt mauris consequat tincidunt. Phasellus libero est, gravida a posuere a, pharetra dictum quam. Suspendisse suscipit libero id tellus lacinia, at auctor lacus congue. Nam laoreet arcu eu ante tincidunt vehicula et nec augue.

Sed a erat non velit rutrum eleifend. Duis ut lobortis turpis, non aliquet mi. Integer non augue varius, elementum purus in, molestie nulla. Integer sodales lacus id pretium pretium. Proin porta massa quis egestas malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean non augue magna. In gravida et quam et varius. Pellentesque at dapibus nisi, sed tempor nibh. Ut id semper lectus, nec lobortis velit. Donec nec enim congue ipsum tincidunt ullamcorper. Suspendisse facilisis consequat mauris, sed malesuada odio rutrum eget. Nam condimentum sit amet nisi nec posuere.

Ut pretium quam erat, eu condimentum odio scelerisque ut. Quisque mauris felis, laoreet viverra dui a, porttitor maximus magna. Curabitur mattis nibh tincidunt, sodales tortor placerat, pretium augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum a libero id nisl condimentum mollis vel in erat. Nam eget nibh interdum, sollicitudin ex sit amet, tincidunt nunc. Nulla et quam diam. Vestibulum eget urna eget diam ultrices elementum.

In dignissim ligula enim, facilisis vehicula neque sodales eu. Sed orci dolor, vestibulum a pulvinar nec, iaculis sit amet nisi. Donec ornare neque ut vehicula egestas. Nullam egestas purus at odio elementum pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In dapibus fringilla felis, faucibus molestie metus euismod nec. Nullam vestibulum ac magna at imperdiet. Vestibulum dignissim mi in euismod accumsan. Quisque condimentum tortor in ligula aliquet, ut sodales lorem egestas. Mauris at odio velit. Nunc aliquam vestibulum nunc quis ultricies.
    </p>
<div>

</body>
</html>