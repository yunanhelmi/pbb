$(document).ready(function() {
            var options = {
                chart: {
					type: 'pie',
                    renderTo: 'pbbviewchart',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
					options3d: {
						enabled: true,
						alpha: 70,
						beta: 0
					}
                },
                title: {
                    text: ''
                },
                tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
							depth: 55,
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000'
                        }
                    }
                },
				credits: { 
					enabled: false
				},
                series: [{
                    type: 'pie',
					name: []
                    data: []
                }]
            }
            
            $.getJSON("http://localhost/index.php/homecon/keluarpiepbb", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });
            
});   