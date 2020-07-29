$(document).ready(function(e) {
	$(document).ready(function() {
   		 $('#policy-table').DataTable();
	} );
});


/* Chart functions for Daily eligible policys */   
        var config1 = {
            type: 'line',
            data: {
                labels: ["7/1", "7/2", "7/3", "7/4", "7/5", "7/6", "7/7"],
                datasets: [{
                     label: "My Policies",
           			 borderColor: "#DF7A00",
           			 backgroundColor: "#DF7A00",
                    data: [
                        36,
                		15,
                		4,
               			9,
              			36,
              			 9,
               			 3
                    ],
                    fill: false,
                },{
                     label: "Average Policies",
           			 borderColor: "#7CA940",
           			 backgroundColor: "#7CA940",
                    data: [
                        24,
                		22,
                		25,
               			19,
              			30,
              			 20,
               			 18
                    ],
                    fill: false,
                }, {
                     label: "Leader in Policies",
           			 borderColor: "#003150",
           			 backgroundColor: "#003150",
            		fill: false,
                    data: [
                       36,
                		25,
                		27,
               			 24,
               			 37,
               			 50,
               			 25
                    ],
					
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:false,
                    text:'Daily Eligible Policies'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Date'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Eligible Policies'
                        }
                    }]
                }
            }
        };

       
	/* End Eligible Policy Chart */
	
	
	/* YTD Eligible Policies */
	
	
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'My Policies',
                backgroundColor: "#DF7A00",
                borderColor: "#DF7A00",
                borderWidth: 1,
                data: [
                        36,
                		15,
                		4,
               			9,
              			36,
              			 9,
               			 3
                ]
            },
			{
                label: 'Average Policies',
                backgroundColor: "#7CA940",
                borderColor: "#7CA940",
                borderWidth: 1,
                data: [
                        24,
                		22,
                		25,
               			19,
              			30,
              			 20,
               			 18
                ]
            },
			 {
                label: 'Leader in Policies',
                backgroundColor: "#003150",
                borderColor: "#003150",
                borderWidth: 1,
                data: [
                   36,
                		25,
                		27,
               			 24,
               			 37,
               			 50,
               			 25
                ]
            }]

        };
		
		
		/* End YTD Eligible Policies */
		
		
		/* TOTALS Eligible Policies */
		
		
       
        var totalChartData = {
            labels: ["Year To Date"],
            datasets: [{
                label: 'My Policies',
                backgroundColor: "#DF7A00",
                borderColor: "#DF7A00",
                borderWidth: 1,
                data: [1895]
            },
			{
                label: 'Average Policies',
                backgroundColor: "#7CA940",
                borderColor: "#7CA940",
                borderWidth: 1,
                data: [1963]
            },
			 {
                label: 'Leader in Policies',
                backgroundColor: "#003150",
                borderColor: "#003150",
                borderWidth: 1,
                data: [
                   2659
                ]
            }]

        };
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

        window.onload = function() {
            var ctx1 = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx1, config1);
		   
		   
		    var ctx = document.getElementById("bar-canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Eligible Policies'
                    }
                }
            });
			
			var ctx2 = document.getElementById("total-bar-canvas").getContext("2d");
            window.myBar = new Chart(ctx2, {
                type: 'bar',
                data: totalChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Total Eligible Policies'
                    },scales: {
            		yAxes: [{
                		ticks: {
                    		beginAtZero:true
                			}
            			}]
        			}
                }
            });
        };// End window load