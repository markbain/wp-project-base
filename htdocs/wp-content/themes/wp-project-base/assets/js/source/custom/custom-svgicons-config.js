var svgIconConfig = {
	hamburgerCross : {
		url : (directory_uri.stylesheet_directory_uri) + '/assets/images/icons/svg/hamburger.svg',
		animation : [
			{ 
				el : 'path:nth-child(1)', 
				animProperties : { 
					from : { val : '{"path" : "m 5.0916789,20.818994 53.8166421,0"}' }, 
					to : { val : '{"path" : "M 12.972944,50.936147 51.027056,12.882035"}' }
				} 
			},
			{ 
				el : 'path:nth-child(2)', 
				animProperties : { 
					from : { val : '{"transform" : "s1 1", "opacity" : 1}', before : '{"transform" : "s0 0"}' }, 
					to : { val : '{"opacity" : 0}' }
				} 
			},
			{ 
				el : 'path:nth-child(3)', 
				animProperties : { 
					from : { val : '{"path" : "m 5.0916788,42.95698 53.8166422,0"}' }, 
					to : { val : '{"path" : "M 12.972944,12.882035 51.027056,50.936147"}' }
				} 
			}
		]
	},
	navRightArrow : {
		url : (directory_uri.stylesheet_directory_uri) + '/assets/images/icons/svg/nav-right-arrow.svg',
		animation : [
			{ 
				el : 'path', 
				animProperties : { 
					from : { val : '{"path" : "M 34.419061,13.24425 57.580939,32.017897 34.419061,50.75575"}' }, 
					to : { val : '{"path" : "M 31.580939,13.24425 8.419061,32.017897 31.580939,50.75575"}' }
				} 
			}
		]
	},
	navUpArrow : {
		url : (directory_uri.stylesheet_directory_uri) + '/assets/images/icons/svg/nav-up-arrow.svg',
		animation : [
			{ 
				el : 'path', 
				animProperties : { 
					from : { val : '{"path" : "M 9.8831175,48.502029 31.978896,15.316152 54.116883,48.502029"}' }, 
					to : { val : '{"path" : "M 9.8831175,33.502029 31.978896,0.316152 54.116883,33.502029"}' }
				} 
			}
		]
	},
};