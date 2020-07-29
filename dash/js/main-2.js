$(document).ready(function(e) {
	$(document).ready(function() {
   		 $('#policy-table').DataTable();
	} );
});

	/* MONTHLY Eligible Policies */
	 
        var weekBarChartData = {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            datasets: [{
                label: 'My Policies',
                backgroundColor: "#7CA940",
                borderColor: "#7CA940",
                borderWidth: 1,
                data: [
                        5,
                		9,
                		4,
               			6,
              			15,
              			 9,
               			 3
                ]
            }
			]

        };
		
		/* End MONTHLY Eligible Policies */
	
	/* MONTHLY Eligible Policies */
	 
        var monthBarChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'My Policies',
                backgroundColor: "#7CA940",
                borderColor: "#7CA940",
                borderWidth: 1,
                data: [
                        36,
                		15,
                		4,
               			9,
              			36,
              			 27,
               			 8
                ]
            }
			]

        };
		
		/* End MONTHLY Eligible Policies */
	
        window.onload = function() {
 
		    var ctx = document.getElementById("week-graph").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: weekBarChartData,
                options: {
                    responsive: true,
                    legend: {
						display:false,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Eligible Policies'
                    }
                }
            });
			
			var ctx2 = document.getElementById("month-graph").getContext("2d");
            window.myBar = new Chart(ctx2, {
                type: 'bar',
                data: monthBarChartData,
                options: {
                    responsive: true,
                    legend: {
						display:false,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Eligible Policies'
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