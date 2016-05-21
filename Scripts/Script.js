var app = angular
    .module("myModule", ['ngAnimate', 'angular-scroll-animate'])
    .controller("myController", function ($scope, $location, $window) {
    
    //JOHN CENA
    $scope.cena = function(){
    	$window.location.href = "http://www.instantcena.com/";
    }
    
    //Animations
	$scope.animation = 'bounceInLeft';
	$scope.entry = 'zoomIn'
	$scope.fade = 'fadeInLeft';

	$scope.animateElementIn = function($el) {
		$el.removeClass('hidden');
		$el.addClass('animated ' + $scope.animation);
	};

	$scope.animateElementOut = function($el) {
		$el.addClass('hidden');
		$el.removeClass('animated ' + $scope.animation);
	};
        
        
	$scope.animateFrontIn = function($el) {
		$el.removeClass('hidden');
		$el.addClass('animated ' + $scope.entry);
	};

	$scope.animateFrontOut = function($el) {
		$el.addClass('hidden');
		$el.removeClass('animated ' + $scope.entry);
	};
	
	$scope.fadeIn = function($el) {
		$el.removeClass('hidden');
		$el.addClass('animated ' + $scope.fade);
	};

	$scope.fadeOut = function($el) {
		$el.addClass('hidden');
		$el.removeClass('animated ' + $scope.fade);
	};
	
	//Toggle project 1
	$scope.project_1_show = false;
	
	//Toggle nav
	$scope.nav_show = true;
	
	//Toggle languages bar div
	$scope.toggle_bar = true;
	
	$scope.barToggle = function(){
		$scope.toggle_bar = !$scope.toggle_bar;
		
		if($scope.toggle_bar == true){
			$('.bar_button').html("Proficiencies");
		}
		else {
			$('.bar_button').html("Back to Grid");
		}
	}

	$scope.navToggle = function(){
		$scope.nav_show = !$scope.nav_show;
		
		if($scope.nav_show == true){
			$('#nav_button').css("opacity", "1");
			$('#nav_button').html("Hide");
		}
		else {
			$('#nav_button').css("opacity", "0.1");	
			$('#nav_button').html("Show");
		}
	}
	
	//JQuery
	$(document).ready(function() {
        
        //li styling
        var colors = ["#5330FF", "#FFCC00", "#00990A"];
        var count = 0;
        
        $( "li" ).each(function( index, element ) {
            if(count == colors.length){
                count = 0;
            }

            $(element).css("color", colors[count]);
			            
            count++;
        });
        
    });
            
});

//https://github.com/rpocklin/angular-scroll-animate