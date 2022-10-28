$(function () {
    "use strict";

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Other', page_data],
                ['Desktop', page_data],
                ['Tablet', page_data],
                ['Mobile', page_data],
            ],

            type: 'donut',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Visits",
            width: 20,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#eceff1', '#24d2b5', '#6772e5', '#20aee3']
        }
    });
    // ============================================================== 
    // Our Income
    // ==============================================================
    var chart = c3.generate({
        bindto: '#income',
        data: {
            columns: [
                ['Growth Income', 100, 200, 100, 300],
                ['Net Income', 130, 100, 140, 200]
            ],
            type: 'bar'
        },
        bar: {
            space: 0.2,
            // or
            width: 15 // this makes bar width 100px
        },
        axis: {
            y: {
                tick: {
                    count: 4,

                    outer: false
                }
            }
        },
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        grid: {
            x: {
                show: false
            },
            y: {
                show: true
            }
        },
        size: {
            height: 290
        },
        color: {
            pattern: ['#24d2b5', '#20aee3']
        }
    });

    // ============================================================== 
    // Sales Different
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#sales',
        data: {
            columns: [
                ['One+', 50],
                ['T', 60],
                ['Samsung', 20],

            ],

            type: 'donut',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "",
            width: 18,

        },
        size: {
            height: 150
        },
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#eceff1', '#24d2b5', '#6772e5', '#20aee3']
        }
    });
    // ============================================================== 
    // Sales Prediction
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#prediction',
        data: {
            columns: [
                ['data', 91.4]
            ],
            type: 'gauge',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },

        color: {
            pattern: ['#ff9041', '#20aee3', '#24d2b5', '#6772e5'], // the three color levels for the percentage values.
            threshold: {
                //            unit: 'value', // percentage is default
                //            max: 200, // 100 is default
                values: [30, 60, 90, 100]
            }
        },
        gauge: {
            width: 22,
        },
        size: {
            height: 120,
            width: 150
        }
    });
    setTimeout(function () {
        chart.load({
            columns: [
                ['data', 10]
            ]
        });
    }, 1000);

    setTimeout(function () {
        chart.load({
            columns: [
                ['data', 50]
            ]
        });
    }, 2000);

    setTimeout(function () {
        chart.load({
            columns: [
                ['data', 70]
            ]
        });
    }, 3000);

    // ============================================================== 
    // Sales chart
    // ============================================================== 
    Morris.Area({
        element: 'sales-chart',
        data: [{
            period: '2021',
            Categories: page_data,
            Accounts: acc_data,
            Posts: 0
        }, {
            period: '2022',
            Categories: page_data,
            Accounts: acc_data,
            Posts: 0
        }, {
            period: '2023',
            Categories: null,
            Accounts: null,
            Posts: null
        }, {
            period: '2024',
            Categories: null,
            Accounts: null,
            Posts: null
        }, {
            period: '2025',
            Categories: null,
            Accounts: null,
            Posts: null
        }, {
            period: '2026',
            Categories: null,
            Accounts: null,
            Posts: null
        },
        {
            period: '2027',
            Categories: null,
            Accounts: null,
            Posts: null
        }
        ],
        xkey: 'period',
        ykeys: ['Categories', 'Accounts', 'Posts'],
        labels: ['Categories Created', 'Accounts Created', 'Posts Created'],
        pointSize: 0,
        fillOpacity: 0,
        pointStrokeColors: ['#20aee3', '#24d2b5', '#6772e5'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#20aee3', '#24d2b5', '#6772e5'],
        resize: true

    });


});