/**
 * Created with JetBrains PhpStorm.
 * User: Илья
 * Date: 12.04.13
 * Time: 0:05
 * To change this template use File | Settings | File Templates.
 */
$(function() {
    var DATEPICKER_FORMAT = 'yyyy-m-d';
    var TIMEPICKER_FORMAT = 'g:ia';
    var DATE_FORMAT = 'Y-n-j'; // for this format see http://php.net/manual/function.date.php

    $('.datepair input.date').each(function(){
        var $this = $(this);

        $this.datepicker({
            'format': DATEPICKER_FORMAT,
            'autoclose': true
        });

        if ($this.hasClass('start') || $this.hasClass('end')) {
            $this.on('changeDate change', doDatepair);
        }

    });

    $('.datepair input.time').each(function() {
        var $this = $(this);

        $this.timepicker({
            'showDuration': true,
            'timeFormat': TIMEPICKER_FORMAT,
            'scrollDefaultNow': true
        });

        if ($this.hasClass('start') || $this.hasClass('end')) {
            $this.on('changeTime change', doDatepair);
        }

    });

    $('.datepair').each(initDatepair);

    function initDatepair()
    {
        var container = $(this);

        var startDateInput = container.find('input.start.date');
        var endDateInput = container.find('input.end.date');
        var dateDelta = 0;

        if (startDateInput.length && endDateInput.length) {
            var startDate = parseDate(startDateInput.val(), DATEPICKER_FORMAT);
            var endDate =  parseDate(endDateInput.val(), DATEPICKER_FORMAT);

            dateDelta = endDate.getTime() - startDate.getTime();
            container.data('dateDelta', dateDelta);
        }

        var startTimeInput = container.find('input.start.time');
        var endTimeInput = container.find('input.end.time');

        if (startTimeInput.length && endTimeInput.length) {
            var startInt = startTimeInput.timepicker('getSecondsFromMidnight');
            var endInt = endTimeInput.timepicker('getSecondsFromMidnight');

            container.data('timeDelta', endInt - startInt);

            if (dateDelta < 86400000) {
                endTimeInput.timepicker('option', 'minTime', startInt);
            }
        }
    }

    function doDatepair()
    {
        var target = $(this);
        if (target.val() == '') {
            return;
        }

        var container = target.closest('.datepair');

        if (target.hasClass('date')) {
            updateDatePair(target, container);

        } else if (target.hasClass('time')) {
            updateTimePair(target, container);
        }
    }

    function updateDatePair(target, container)
    {
        var start = container.find('input.start.date');
        var end = container.find('input.end.date');
        if (!start.length || !end.length) {
            return;
        }

        var startDate = parseDate(start.val(), DATEPICKER_FORMAT);
        var endDate =  parseDate(end.val(), DATEPICKER_FORMAT);

        var oldDelta = container.data('dateDelta');

        if (!isNaN(oldDelta) && oldDelta !== null && target.hasClass('start')) {
            var newEnd = new Date(startDate.getTime()+oldDelta);
            end.val(newEnd.format(DATE_FORMAT));
            end.datepicker('update');
            return;

        } else {
            var newDelta = endDate.getTime() - startDate.getTime();

            if (newDelta < 0) {
                newDelta = 0;

                if (target.hasClass('start')) {
                    end.val(start.val());
                    end.datepicker('update');
                } else if (target.hasClass('end')) {
                    start.val(end.val());
                    start.datepicker('update');
                }
            }

            if (newDelta < 86400000) {
                var startTimeVal = container.find('input.start.time').val();

                if (startTimeVal) {
                    container.find('input.end.time').timepicker('option', {'minTime': startTimeVal});
                }
            } else {
                container.find('input.end.time').timepicker('option', {'minTime': null});
            }

            container.data('dateDelta', newDelta);
        }
    }

    function updateTimePair(target, container)
    {
        var start = container.find('input.start.time');
        var end = container.find('input.end.time');

        if (!start.length) {
            return;
        }

        var startInt = start.timepicker('getSecondsFromMidnight');
        var dateDelta = container.data('dateDelta');

        if (target.hasClass('start') && (!dateDelta || dateDelta < 86400000)) {
            end.timepicker('option', 'minTime', startInt);
        }

        if (!end.length) {
            return;
        }

        var endInt = end.timepicker('getSecondsFromMidnight');
        var oldDelta = container.data('timeDelta');

        var endDateAdvance = 0;
        var newDelta;

        if (oldDelta && target.hasClass('start')) {
            // lock the duration and advance the end time

            var newEnd = (startInt+oldDelta)%86400;

            if (newEnd < 0) {
                newEnd += 86400;
            }

            end.timepicker('setTime', newEnd);
            newDelta = newEnd - startInt;
        } else if (startInt !== null && endInt !== null) {
            newDelta = endInt - startInt;
        } else {
            return;
        }

        container.data('timeDelta', newDelta);

        if (newDelta < 0 && (!oldDelta || oldDelta > 0)) {
            // overnight time span. advance the end date 1 day
            endDateAdvance = 86400000;

        } else if (newDelta > 0 && oldDelta < 0) {
            // switching from overnight to same-day time span. decrease the end date 1 day
            endDateAdvance = -86400000;
        }

        var startInput = container.find('.start.date');
        var endInput = container.find('.end.date');

        if (startInput.val() && !endInput.val()) {
            endInput.val(startInput.val());
            endInput.datepicker('update');
            dateDelta = 0;
            container.data('dateDelta', 0);
        }

        if (endDateAdvance != 0) {
            if (dateDelta || dateDelta === 0) {
                var endDate =  parseDate(endInput.val(), DATEPICKER_FORMAT);
                var newEnd = new Date(endDate.getTime() + endDateAdvance);
                endInput.val(newEnd.format(DATE_FORMAT));
                endInput.datepicker('update');
                container.data('dateDelta', dateDelta + endDateAdvance);
            }
        }
    }
});

function parseDate(input, format) {
    if (input == '')
        return new Date('');

    format = format || 'yyyy-mm-dd'; // default format
    var parts = input.match(/(\d+)/g), i = 0, fmt = {};
    // extract date-part indexes from the format
    format.replace(/(yyyy|dd?|mm?)/g, function(part) { fmt[part] = i++; });

    return new Date(parts[fmt['yyyy']], parts[fmt['mm'] == undefined ? fmt['m'] : fmt['mm']]-1, parts[fmt['dd'] == undefined ? fmt['d'] : fmt['dd']]);
}

// Simulates PHP's date function
Date.prototype.format=function(format){var returnStr='';var replace=Date.replaceChars;
    for(var i=0;i<format.length;i++){
        var curChar=format.charAt(i);
        if(replace[curChar]){
            returnStr+=replace[curChar].call(this);
        }else{
            returnStr+=curChar;
        }
    }return returnStr;
};
Date.replaceChars={shortMonths:
    ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    longMonths:['January','February','March','April','May','June','July','August','September','October','November','December'],
    shortDays:['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
    longDays:['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
    d:function(){
        return(this.getDate()<10?'0':'')+this.getDate();
    },
    D:function(){
        return Date.replaceChars.shortDays[this.getDay()];
    },
    j:function(){
        return this.getDate();
    },
    l:function(){
        return Date.replaceChars.longDays[this.getDay()];
    },
    N:function(){
        return this.getDay()+1;
    },
    S:function(){
        return(this.getDate()%10==1&&this.getDate()!=11?'st':(this.getDate()%10==2&&this.getDate()!=12?'nd':(this.getDate()%10==3&&this.getDate()!=13?'rd':'th')));
    },
    w:function(){
        return this.getDay();
    },
    z:function(){
        return"Not Yet Supported";
    },
    W:function(){
        return"Not Yet Supported";
    },
    F:function(){
        return Date.replaceChars.longMonths[this.getMonth()];
    },
    m:function(){
        return(this.getMonth()<9?'0':'')+(this.getMonth()+1);
    },
    M:function(){
        return Date.replaceChars.shortMonths[this.getMonth()];
    },
    n:function(){
        return this.getMonth()+1;
    },
    t:function(){
        return"Not Yet Supported";
    },
    L:function(){return(((this.getFullYear()%4==0)&&(this.getFullYear()%100!=0))||(this.getFullYear()%400==0))?'1':'0';},o:function(){return"Not Supported";},Y:function(){return this.getFullYear();},y:function(){return(''+this.getFullYear()).substr(2);},a:function(){return this.getHours()<12?'am':'pm';},A:function(){return this.getHours()<12?'AM':'PM';},B:function(){return"Not Yet Supported";},g:function(){return this.getHours()%12||12;},G:function(){return this.getHours();},h:function(){return((this.getHours()%12||12)<10?'0':'')+(this.getHours()%12||12);},H:function(){return(this.getHours()<10?'0':'')+this.getHours();},i:function(){return(this.getMinutes()<10?'0':'')+this.getMinutes();},s:function(){return(this.getSeconds()<10?'0':'')+this.getSeconds();},e:function(){return"Not Yet Supported";},I:function(){return"Not Supported";},O:function(){return(-this.getTimezoneOffset()<0?'-':'+')+(Math.abs(this.getTimezoneOffset()/60)<10?'0':'')+(Math.abs(this.getTimezoneOffset()/60))+'00';},P:function(){return(-this.getTimezoneOffset()<0?'-':'+')+(Math.abs(this.getTimezoneOffset()/60)<10?'0':'')+(Math.abs(this.getTimezoneOffset()/60))+':'+(Math.abs(this.getTimezoneOffset()%60)<10?'0':'')+(Math.abs(this.getTimezoneOffset()%60));},T:function(){var m=this.getMonth();this.setMonth(0);var result=this.toTimeString().replace(/^.+ \(?([^\)]+)\)?$/,'$1');this.setMonth(m);return result;},Z:function(){return-this.getTimezoneOffset()*60;},c:function(){return this.format("Y-m-d")+"T"+this.format("H:i:sP");},r:function(){return this.toString();},U:function(){return this.getTime()/1000;}};