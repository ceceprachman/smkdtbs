$('div.alert').delay(3000).fadeOut(300);

$(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'E-Rapor User'
        },
        xAxis: {
            categories: [
                'Administrator',
                'Operator',
                'Head Master',
                'Teacher',
                'Student'
            ]
        },
        series: [{
            data: [{
                name: 'Administrator',
                y   : 1
            },{
                name: 'Operator',
                y   : 3
            },{
                name: 'Head Master',
                y   : 1
            },{
                name: 'Teacher',
                y   : 5
            },{
                name: 'Student',
                y   : 2
            }]
        }]
    });
});
