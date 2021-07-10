var topProductsChart = document.getElementById('topProductsChart').getContext('2d');

var myTopProductsChart = new Chart(topProductsChart, {
	type:"line",
	data: {
		labels:["January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"January",
		"February",
		"March",
		"April"],
		datasets:[ {
			label: "Sales Analytics", fill: !0, backgroundColor: "rgba(53, 205, 58, 0.2)", borderColor: "#35cd3a", borderCapStyle: "butt", borderDash: [], borderDashOffset: 0, pointBorderColor: "#35cd3a", pointBackgroundColor: "#35cd3a", pointBorderWidth: 1, pointHoverRadius: 5, pointHoverBackgroundColor: "#35cd3a", pointHoverBorderColor: "#35cd3a", pointHoverBorderWidth: 1, pointRadius: 1, pointHitRadius: 5, data: [20, 10, 18, 14, 32, 18, 15, 22, 8, 6, 17, 12, 17, 18, 14, 25, 18, 12, 19, 21, 16, 14, 24, 21, 13, 15, 27, 29, 21, 11, 14, 19, 21, 17]
		}
		]
	},
	options : {
		maintainAspectRatio:!1, legend: {
			display: !1
		}
		, animation: {
			easing: "easeInOutBack"
		}
		, scales: {
			yAxes:[ {
				display:!1, ticks: {
					fontColor: "rgba(0,0,0,0.5)", fontStyle: "bold", beginAtZero: !0, maxTicksLimit: 10, padding: 0
				}
				, gridLines: {
					drawTicks: !1, display: !1
				}
			}
			], xAxes:[ {
				display:!1, gridLines: {
					zeroLineColor: "transparent"
				}
				, ticks: {
					padding: -20, fontColor: "rgba(255,255,255,0.2)", fontStyle: "bold"
				}
			}
			]
		}
	}
});

var activeUsersChart = document.getElementById('activeUsersChart').getContext('2d');

var myActiveUsersChart = new Chart(activeUsersChart, {
	type:"bar",
	data: {
		labels:["January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"January",
		"February",
		"March",
		"April"],
		datasets:[ {
			label: "Sales Analytics", fill: !0, backgroundColor: "rgba(255,255,255,0.2)", borderColor: "#35cd3a", borderCapStyle: "butt", borderDash: [], borderDashOffset: 0, pointBorderColor: "#35cd3a", pointBackgroundColor: "#35cd3a", pointBorderWidth: 1, pointHoverRadius: 5, pointHoverBackgroundColor: "#35cd3a", pointHoverBorderColor: "#35cd3a", pointHoverBorderWidth: 1, pointRadius: 1, pointHitRadius: 5, data: [20, 10, 18, 14, 32, 18, 15, 22, 8, 6, 17, 12, 17, 18, 14, 25, 18, 12, 19, 21, 16, 14, 24, 21, 13, 15, 27, 29, 21, 11, 14, 19, 21, 17]
		}
		]
	},
	options : {
		maintainAspectRatio:!1, legend: {
			display: !1
		}
		, animation: {
			easing: "easeInOutBack"
		}
		, scales: {
			yAxes:[ {
				display:!1, ticks: {
					fontColor: "rgba(0,0,0,0.5)", fontStyle: "bold", beginAtZero: !0, maxTicksLimit: 10, padding: 0
				}
				, gridLines: {
					drawTicks: !1, display: !1
				}
			}
			], xAxes:[ {
				display:!1, gridLines: {
					zeroLineColor: "transparent"
				}
				, ticks: {
					padding: -20, fontColor: "rgba(255,255,255,0.2)", fontStyle: "bold"
				}
			}
			]
		}
	}
});

