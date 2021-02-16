/* Chart functions for Daily eligible policys */   

    var lineChartData = {
        labels: ["7/1", "7/2", "7/3", "7/5", "7/6", "7/7", "7/8"],
        datasets: [{
            label: "My Eligible Policies",
            borderColor: "#DF7A00",
            backgroundColor: "#DF7A00",
            fill: false,
            data: [
                36,
                15,
                4,
                9,
               36,
               9,
                3
            ],
            yAxisID: "y-axis-1",
        }, {
            label: "Daily Leader - Eligible Policies",
            borderColor: "#003150",
            backgroundColor: "#003150",
            fill: false,
            data: [
                36,
                25,
                15,
                7,
                37,
                50,
                15
            ],
            yAxisID: "y-axis-2"
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = Chart.Line(ctx, {
            data: lineChartData,
            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title:{
                    display: true,
                    text:'Daily Eligible Policies'
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",

                        // grid line settings
                        gridLines: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    }],
                }
            }
        });
    };
	
	/* End Eligible Policy Chart */