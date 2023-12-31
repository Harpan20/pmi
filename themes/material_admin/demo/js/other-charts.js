'use strict';

$(document).ready(function () {
    /*---------------------------------------
        jQuery Sparklines
    ----------------------------------------*/

    // Quick stats bar chart
    if ($('.sparkline-bar-stats')[0]) {
        $('.sparkline-bar-stats').sparkline('html', {
            type: 'bar',
            height: 36,
            barWidth: 3,
            barColor: '#fff',
            barSpacing: 2
        });
    }

    //Sample Sparkline Line Chart
    if ($('.sparkline-line')[0]) {
        $('.sparkline-line').sparkline('html', {
            type: 'line',
            width: '100%',
            height: 50,
            lineColor: '#39bbb0',
            fillColor: 'rgba(0,0,0,0)',
            lineWidth: 1,
            maxSpotColor: '#39bbb0',
            minSpotColor: '#39bbb0',
            spotColor: '#39bbb0',
            spotRadius: 4,
            highlightSpotColor: '#39bbb0',
            highlightLineColor: '#39bbb0'
        });
    }

    //Sample Sparkline Bar Chart
    if ($('.sparkline-bar')[0]) {
        $('.sparkline-bar').sparkline('html', {
            type: 'bar',
            height: 40,
            barWidth: 3,
            barColor: '#03A9F4',
            barSpacing: 2
        });
    }

    //Sample Sparkline Tristate Chart
    if ($('.sparkline-tristate')[0]) {
        $('.sparkline-tristate').sparkline('html', {
            type: 'tristate',
            height: 40,
            posBarColor: '#c7304b',
            zeroBarColor: '#c7304b',
            negBarColor: '#f5c942',
            barWidth: 3,
            barSpacing: 2
        });
    }

    //Sample Sparkline Discrete Chart
    if ($('.sparkline-discrete')[0]) {
        $('.sparkline-discrete').sparkline('html', {
            type: 'discrete',
            height: 40,
            lineColor: '#00BCD4',
            thresholdColor: '#d066e2',
            thresholdValue: 4
        });
    }

    //Sample Sparkline Bullet Chart
    if ($('.sparkline-bullet')[0]) {
        $('.sparkline-bullet').sparkline('html', {
            type: 'bullet',
            targetColor: '#fff',
            performanceColor: '#03A9F4',
            rangeColors: ['#ff6b68', '#fc7f7d', '#fc918f'],
            width: '100%',
            height: 50
        });
    }

    //Sample Sparkline Pie Chart
    if ($('.sparkline-pie')[0]) {
        $('.sparkline-pie').sparkline('html', {
            type: 'pie',
            height: 50,
            sliceColors: ['#f5c942', '#ff6b68', '#03A9F4', '#c7304b']
        });
    }

    /*---------------------------------------
        Easy Pie Charts
    ----------------------------------------*/
    if ($('.easy-pie-chart')[0]) {
        $('.easy-pie-chart').each(function () {
            var value = $(this).data('value');
            var size = $(this).data('size');
            var trackColor = $(this).data('track-color');
            var barColor = $(this).data('bar-color');

            $(this).find('.easy-pie-chart__value').css({
                lineHeight: (size) + 'px',
                fontSize: (size / 4) + 'px',
                color: barColor
            });

            $(this).easyPieChart({
                easing: 'easeOutBounce',
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: 'rgba(0,0,0,0)',
                lineCap: 'round',
                lineWidth: 2,
                size: size,
                animate: 3000,
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            })
        });
    }
});