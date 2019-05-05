$("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("active");
   });


$(function () {
           $('#datetimepicker6').datetimepicker();
           $('#datetimepicker7').datetimepicker({
               useCurrent: false 
           });
           $("#datetimepicker6").on("dp.change", function (e) {
               $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
           });
           $("#datetimepicker7").on("dp.change", function (e) {
               $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
           });
       });
