(function ($) {
    $(function () {
        
        var url = $("#container-url-id").text();

        $(document).delegate("a.gz-summary-link-month", "click", function (e) {
            e.preventDefault();
            
            var $this = $(this), date = $this.attr("rel");
            
            $("#preloader").show();
            $("#status").show();
            
            $.ajax({
                type: "GET",
                data: {
                    day: date.split("-")[0],
                    month: date.split("-")[1],
                    year: date.split("-")[2],
                    view: date.split("-")[3]
                },
                url: url + "index.php?controller=GzAvailability&action=get_summary",
                success: function (result) {
                    $("#cal-container").html(result);
                   
                    $("#preloader").hide();
                    $("#status").hide();
                }
            });
        });
        
        function weekAmountChart() {
            
            if ($('#week-amount-chart').length > 0) {

                var series1 = [];
                var series = [];
                var xaxis = [];

                var e = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                        t = $("#week-amount-chart").data("colors");
                t && (e = t.split(","));

                $('.week-chart').each(function () {
                    series1.push($(this).attr('data-a'));
                    xaxis.push($(this).attr('data-y'));
                });

                $('.last-week-chart').each(function () {
                    series.push($(this).attr('data-a'));
                    xaxis.push($(this).attr('data-y'));
                });

                var options = {
                    dataLabels: {enabled: !1},
                    colors: e,
                    zoom: {enabled: !1},
                    legend: {show: !1},
                    tooltip: {
                        y: {
                            formatter: function (e) {
                                return e;
                            },
                        },
                    },
                    chart: {height: 195, type: "line", dropShadow: {enabled: !0, opacity: 0.2, blur: 7, left: -7, top: 7}},
                    xaxis: {type: "string", categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], tooltip: {enabled: !1}, axisBorder: {show: !1}},
                    series: [
                        {name: "Current Week", data: series1},
                        {name: "Previous Week", data: series},
                    ]
                }

                var chart = new ApexCharts(document.querySelector("#week-amount-chart"), options);

                chart.render();
            }
        }

        weekAmountChart();
    });
})(jQuery);