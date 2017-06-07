$(document).ready(function(){
    jQuery.datetimepicker.setLocale('es');
    jQuery("#datetimepicker").datetimepicker({
        allowTimes:[
        '09:30', '10:30', '11:30', '12:30',
        '15:30', '16:30', '17:30', '18:30', '19:30', '20:30'],
        onGenerate:function( ct ){
            jQuery(this).find('.xdsoft_date.xdsoft_weekend')
            .addClass('xdsoft_disabled');
        },
        theme:'dark',
        dayOfWeekStart:'1',
        disabledDates:['25.12.2017','24.06.2017','15.08.2017','01.01.2017','23.06.2017'],
        formatDate:'d.m.Y'
        //minDate:'+1970/01/02'
        
    });
    jQuery("#datetimepicker").datetimepicker({
       formatDate:'Y/m/d',
       minDate:'+1970/01/02'
    });
});
