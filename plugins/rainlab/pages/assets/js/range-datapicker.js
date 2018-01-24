(function () {
    var start = new Date();
    var end = new Date(new Date().setDate(new Date().getDate() + 3));
    console.log(end);
    $('input[name="datepicker"]').daterangepicker({
        "linkedCalendars": false,
        "autoApply": true,
        "minDate": new Date(),
        "startDate": new Date(),
        "endDate": end,
        "showMonthAfterYear": false,
        "locale": {
            "format": "DD.MM.YY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "Desde",
            "toLabel": "hasta",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "D",
                "L",
                "M",
                "X",
                "J",
                "V",
                "S"
            ],
            "monthNames": [
                calendarTranslate.enero,
                calendarTranslate.febrero,
                calendarTranslate.marzo,
                calendarTranslate.abril,
                calendarTranslate.mayo,
                calendarTranslate.junio,
                calendarTranslate.julio,
                calendarTranslate.agosto,
                calendarTranslate.septiembre,
                calendarTranslate.octubre,
                calendarTranslate.noviembre,
                calendarTranslate.diciembre
            ],
            "firstDay": 1,
        }
    });
})();
