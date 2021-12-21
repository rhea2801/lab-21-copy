 
(function getval() {
  $(function() {
    var $compass,$beach,checks, $directions, $left, $right, $wheel, degree, index, jump_sky, percentage, rotate, slide_sky, turningLeft, turningRight;
    $wheel = $(".steering-wheel");
    $compass = $("#spinner");
    $submit = $(".submit");
    console.log($submit);
    $island = $(".island");
    $left = $("#left");
    $right = $("#right");
    $directions = $(".directions");
    index = 4;
    degree = 0;
    percentage = 0;
    turningLeft = false;
    checks= false;
    turningRight = false;
    $submit.hide();
     $(function(){
       $island.click(function(){
    $submit.show();
    });
    });
    

    

     

    rotate = (degree) => {
      $wheel.css({
        "transform": "rotate(" + degree + "deg)"
      });
      return $compass.css({
        "transform": "rotate(" + degree / 4 + "deg)"
      });
    };
    jump_sky = (percentage) => {
      return $directions.css({
        "left": +percentage + "%"
      });
    };
    slide_sky = (percentage) => {
      return $directions.animate({
        "left": +percentage + "%"
      }, 3000, function() {
        turningLeft = false;
        return turningRight = false;
      });
    };
    $left.on("click", function() {
      if (turningLeft !== true) {
        turningRight = false;
        $directions.stop();
        turningLeft = true;
        if (index === 4) {
          index = 1;
          percentage -= 400;
          jump_sky(percentage);
        } else {
          index += 1;
        }
        percentage += 100;
        slide_sky(percentage);
        degree -= 360;
        return rotate(degree);
      }
    });
    return $right.on("click", function() {
      if (turningRight !== true) {
        turningLeft = false;
        $directions.stop();
        turningRight = true;
        if (index === 0) {
          percentage += 400;
          jump_sky(percentage);
          index = 3;
        } else {
          index -= 1;
        }
        percentage -= 100;
        slide_sky(percentage);
        degree += 360;
        return rotate(degree);
      }
    });
  });
  return checks;
}).call(this);


//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsUUFBQSxDQUFBLENBQUE7QUFDQSxRQUFBLFFBQUEsRUFBQSxXQUFBLEVBQUEsS0FBQSxFQUFBLE1BQUEsRUFBQSxNQUFBLEVBQUEsTUFBQSxFQUFBLEtBQUEsRUFBQSxRQUFBLEVBQUEsVUFBQSxFQUFBLE1BQUEsRUFBQSxTQUFBLEVBQUEsV0FBQSxFQUFBO0lBQUEsTUFBQSxHQUFTLENBQUEsQ0FBRSxpQkFBRjtJQUNULFFBQUEsR0FBVyxDQUFBLENBQUUsVUFBRjtJQUVYLEtBQUEsR0FBUSxDQUFBLENBQUUsT0FBRjtJQUNSLE1BQUEsR0FBUyxDQUFBLENBQUUsUUFBRjtJQUVULFdBQUEsR0FBYyxDQUFBLENBQUUsYUFBRjtJQUVkLEtBQUEsR0FBUTtJQUNSLE1BQUEsR0FBUztJQUNULFVBQUEsR0FBYTtJQUNiLFdBQUEsR0FBYztJQUNkLFlBQUEsR0FBZTtJQUVmLE1BQUEsR0FBUyxDQUFDLE1BQUQsQ0FBQSxHQUFBO01BQ1AsTUFBTSxDQUFDLEdBQVAsQ0FDRTtRQUFBLFdBQUEsRUFBYSxTQUFBLEdBQVksTUFBWixHQUFxQjtNQUFsQyxDQURGO2FBRUEsUUFBUSxDQUFDLEdBQVQsQ0FDRTtRQUFBLFdBQUEsRUFBYSxTQUFBLEdBQVksTUFBQSxHQUFPLENBQW5CLEdBQXVCO01BQXBDLENBREY7SUFITztJQU1ULFFBQUEsR0FBVyxDQUFDLFVBQUQsQ0FBQSxHQUFBO2FBQ1QsV0FBVyxDQUFDLEdBQVosQ0FBZ0I7UUFBQSxNQUFBLEVBQVEsQ0FBRSxVQUFGLEdBQWU7TUFBdkIsQ0FBaEI7SUFEUztJQUdYLFNBQUEsR0FBWSxDQUFDLFVBQUQsQ0FBQSxHQUFBO2FBQ1YsV0FBVyxDQUFDLE9BQVosQ0FDRTtRQUFBLE1BQUEsRUFBUSxDQUFFLFVBQUYsR0FBZTtNQUF2QixDQURGLEVBRUksSUFGSixFQUVVLFFBQUEsQ0FBQSxDQUFBO1FBQ04sV0FBQSxHQUFjO2VBQ2QsWUFBQSxHQUFlO01BRlQsQ0FGVjtJQURVO0lBUVosS0FBSyxDQUFDLEVBQU4sQ0FBUyxPQUFULEVBQWtCLFFBQUEsQ0FBQSxDQUFBO01BQ2hCLElBQU8sV0FBQSxLQUFlLElBQXRCO1FBQ0UsWUFBQSxHQUFlO1FBQ2YsV0FBVyxDQUFDLElBQVosQ0FBQTtRQUNBLFdBQUEsR0FBYztRQUNkLElBQUcsS0FBQSxLQUFTLENBQVo7VUFDRSxLQUFBLEdBQVE7VUFDUixVQUFBLElBQWE7VUFDYixRQUFBLENBQVUsVUFBVixFQUhGO1NBQUEsTUFBQTtVQUtFLEtBQUEsSUFBUyxFQUxYOztRQU1BLFVBQUEsSUFBYztRQUNkLFNBQUEsQ0FBVyxVQUFYO1FBQ0EsTUFBQSxJQUFVO2VBQ1YsTUFBQSxDQUFRLE1BQVIsRUFiRjs7SUFEZ0IsQ0FBbEI7V0FpQkEsTUFBTSxDQUFDLEVBQVAsQ0FBVSxPQUFWLEVBQW1CLFFBQUEsQ0FBQSxDQUFBO01BQ2pCLElBQU8sWUFBQSxLQUFnQixJQUF2QjtRQUNFLFdBQUEsR0FBYztRQUNkLFdBQVcsQ0FBQyxJQUFaLENBQUE7UUFDQSxZQUFBLEdBQWU7UUFDZixJQUFHLEtBQUEsS0FBUyxDQUFaO1VBQ0UsVUFBQSxJQUFjO1VBQ2QsUUFBQSxDQUFVLFVBQVY7VUFDQSxLQUFBLEdBQVEsRUFIVjtTQUFBLE1BQUE7VUFLRSxLQUFBLElBQVMsRUFMWDs7UUFNQSxVQUFBLElBQWM7UUFDZCxTQUFBLENBQVcsVUFBWDtRQUNBLE1BQUEsSUFBVTtlQUNWLE1BQUEsQ0FBUSxNQUFSLEVBYkY7O0lBRGlCLENBQW5CO0VBakRBLENBQUY7QUFBQSIsInNvdXJjZXNDb250ZW50IjpbIiQgLT5cbiAgJHdoZWVsID0gJChcIi5zdGVlcmluZy13aGVlbFwiKVxuICAkY29tcGFzcyA9ICQoXCIjc3Bpbm5lclwiKVxuICBcbiAgJGxlZnQgPSAkKFwiI2xlZnRcIilcbiAgJHJpZ2h0ID0gJChcIiNyaWdodFwiKVxuICBcbiAgJGRpcmVjdGlvbnMgPSAkKFwiLmRpcmVjdGlvbnNcIilcbiAgICBcbiAgaW5kZXggPSA0ICBcbiAgZGVncmVlID0gMFxuICBwZXJjZW50YWdlID0gMFxuICB0dXJuaW5nTGVmdCA9IGZhbHNlXG4gIHR1cm5pbmdSaWdodCA9IGZhbHNlICBcblxuICByb3RhdGUgPSAoZGVncmVlKSA9PlxuICAgICR3aGVlbC5jc3NcbiAgICAgIFwidHJhbnNmb3JtXCI6IFwicm90YXRlKFwiICsgZGVncmVlICsgXCJkZWcpXCJcbiAgICAkY29tcGFzcy5jc3NcbiAgICAgIFwidHJhbnNmb3JtXCI6IFwicm90YXRlKFwiICsgZGVncmVlLzQgKyBcImRlZylcIlxuICAgICAgXG4gIGp1bXBfc2t5ID0gKHBlcmNlbnRhZ2UpID0+XG4gICAgJGRpcmVjdGlvbnMuY3NzKFwibGVmdFwiOiArIHBlcmNlbnRhZ2UgKyBcIiVcIilcblxuICBzbGlkZV9za3kgPSAocGVyY2VudGFnZSkgPT5cbiAgICAkZGlyZWN0aW9ucy5hbmltYXRlIFxuICAgICAgXCJsZWZ0XCI6ICsgcGVyY2VudGFnZSArIFwiJVwiXG4gICAgICAsIDMwMDAsIC0+IFxuICAgICAgICB0dXJuaW5nTGVmdCA9IGZhbHNlXG4gICAgICAgIHR1cm5pbmdSaWdodCA9IGZhbHNlXG4gIFxuICAgIFxuICAkbGVmdC5vbiBcImNsaWNrXCIsIC0+XG4gICAgdW5sZXNzIHR1cm5pbmdMZWZ0IGlzIHRydWVcbiAgICAgIHR1cm5pbmdSaWdodCA9IGZhbHNlXG4gICAgICAkZGlyZWN0aW9ucy5zdG9wKCkgIFxuICAgICAgdHVybmluZ0xlZnQgPSB0cnVlXG4gICAgICBpZiBpbmRleCBpcyA0XG4gICAgICAgIGluZGV4ID0gMVxuICAgICAgICBwZXJjZW50YWdlIC09NDAwXG4gICAgICAgIGp1bXBfc2t5KCBwZXJjZW50YWdlIClcbiAgICAgIGVsc2VcbiAgICAgICAgaW5kZXggKz0gMVxuICAgICAgcGVyY2VudGFnZSArPSAxMDBcbiAgICAgIHNsaWRlX3NreSggcGVyY2VudGFnZSApICAgXG4gICAgICBkZWdyZWUgLT0gMzYwXG4gICAgICByb3RhdGUoIGRlZ3JlZSApICBcbiAgICAgIFxuICAgICAgXG4gICRyaWdodC5vbiBcImNsaWNrXCIsIC0+ICAgXG4gICAgdW5sZXNzIHR1cm5pbmdSaWdodCBpcyB0cnVlXG4gICAgICB0dXJuaW5nTGVmdCA9IGZhbHNlXG4gICAgICAkZGlyZWN0aW9ucy5zdG9wKClcbiAgICAgIHR1cm5pbmdSaWdodCA9IHRydWVcbiAgICAgIGlmIGluZGV4IGlzIDBcbiAgICAgICAgcGVyY2VudGFnZSArPSA0MDBcbiAgICAgICAganVtcF9za3koIHBlcmNlbnRhZ2UgKVxuICAgICAgICBpbmRleCA9IDNcbiAgICAgIGVsc2VcbiAgICAgICAgaW5kZXggLT0gMVxuICAgICAgcGVyY2VudGFnZSAtPSAxMDBcbiAgICAgIHNsaWRlX3NreSggcGVyY2VudGFnZSApXG4gICAgICBkZWdyZWUgKz0gMzYwXG4gICAgICByb3RhdGUoIGRlZ3JlZSApIFxuICAgICAgXG4gIFxuIl19
//# sourceURL=coffeescript