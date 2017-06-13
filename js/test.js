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
        disabledDates:['2017/12/25','2017/06/24','2017/08/15','2017/01/01','2017/06/23'],
        formatDate:'d.m.Y'
        
    });
    jQuery("#datetimepicker").datetimepicker({
       formatDate:'Y/m/d',
       minDate:'+1970/01/02'
    });
});
