<script>

    var colors = ['#FB5FA6','#0073B7','#00A65A','#605CA8','#FF851B','#CA195A','#66232C','#4EBB9C','#8886E3','#222D32'];

    var n = 0;

	$(function () {
                

                var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
                var pieChart = new Chart(pieChartCanvas);
                var PieData = [
                @foreach($bureaus as $bureau)
                {
                	value: {{(App\Ticket::where('bureau_id',[$bureau->id]))->count()}},
                	color: colors[n++],
                	highlight: "#DBDBDB",
                	label: "{{$bureau->getName()}}"
                },
                @endforeach
                ];
                var pieOptions = {
                    //Boolean - Whether we should show a stroke on each segment
                    segmentShowStroke: true,
                    //String - The colour of each segment stroke
                    segmentStrokeColor: "#fff",
                    //Number - The width of each segment stroke
                    segmentStrokeWidth: 2,
                    //Number - The percentage of the chart that we cut out of the middle
                    percentageInnerCutout: 50, // This is 0 for Pie charts
                    //Number - Amount of animation steps
                    animationSteps: 100,
                    //String - Animation easing effect
                    animationEasing: "easeOutBounce",
                    //Boolean - Whether we animate the rotation of the Doughnut
                    animateRotate: true,
                    //Boolean - Whether we animate scaling the Doughnut from the centre
                    animateScale: false,
                    //Boolean - whether to make the chart responsive to window resizing
                    responsive: true,
                    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                    maintainAspectRatio: true,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                };
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                pieChart.Doughnut(PieData, pieOptions);

                //-------------
                //- BAR CHART -
                //-------------
                var barChartCanvas = $("#barChart").get(0).getContext("2d");
                var barChart = new Chart(barChartCanvas);

                var barChartData = {
                	labels: [@foreach($problems as $problem)"{{$problem->getName()}}",@endforeach],
                	datasets: [
                	{
                		label: "Digital Goods",
                		fillColor: "#00A65A",
                		strokeColor: "#00A65A",
                		pointColor: "#00A65A",
                		pointStrokeColor: "rgba(60,141,188,1)",
                		pointHighlightFill: "#fff",
                		pointHighlightStroke: "rgba(60,141,188,1)",
                		data: [@foreach($problems as $problem)"{{$problem->ticket->count()}}",@endforeach]
                	},
                	]
                };

                var barChartOptions = {
                    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                    scaleBeginAtZero: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: true,
                    //String - Colour of the grid lines
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,
                    //Boolean - If there is a stroke on each bar
                    barShowStroke: true,
                    //Number - Pixel width of the bar stroke
                    barStrokeWidth: 2,
                    //Number - Spacing between each of the X value sets
                    barValueSpacing: 5,
                    //Number - Spacing between data sets within X values
                    barDatasetSpacing: 1,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                    //Boolean - whether to make the chart responsive
                    responsive: true,
                    maintainAspectRatio: true
                };

                barChartOptions.datasetFill = false;
                barChart.Bar(barChartData, barChartOptions);
            });
</script>
