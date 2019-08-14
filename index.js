$(document).ready(function () {
    $('#tofix2').affix({
        offset: {
            top: 900
        }
    });
});
$(document).ready(function () {
    $('#tofix3').affix({
        offset: {
            top: 1300
        }
    });
});

$(function () {
    $(window).scroll(function () {
        $(".slideanimate").each(function () {
            var winTop = $(window).scrollTop();
            var winheight = $(window).height();
            var pos = $(this).offset().top;
            if (pos < winTop + winheight*0.8) {
                $(this).addClass("animated fadeInUp slide");
            }
            if(winTop == 0){
                $(this).removeClass("animated fadeInUp slide");
            }
        });
    });
});

$(function () {
    $(window).scroll(function () {
        $(".leftanimate").each(function () {
            var winTop = $(window).scrollTop();
            var winheight = $(window).height();
            var pos = $(this).offset().top;
            if (pos < winTop + winheight*0.8) {
                $(this).addClass("animated fadeInRight slide");
            }
            if(winTop == 0){
                $(this).removeClass("animated fadeInRight slide");
            }
        });
    });
});

$(function () {
    $(window).scroll(function () {
        $(".upanimate").each(function () {
            var winTop = $(window).scrollTop();
            var winheight = $(window).height();
            var pos = $(this).offset().top;
            if (pos < winTop + winheight*0.8) {
                $(this).addClass("animated bounceInUp slide");
            }
            if(winTop == 0){
                $(this).removeClass("animated bounceInUp slide");
            }
        });
    });
});

$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['中國大陸', '美國', '印度', '俄羅斯', '日本'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '二氧化碳排放量 (公噸)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' 公噸'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 2012',
            data: [8205, 5074, 1954, 1659, 1223]
        },]
    });
});


