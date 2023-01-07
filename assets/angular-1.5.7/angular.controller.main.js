angular.module('controller',[])   
	
	.controller('ProductController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {

	$scope.fetchall = function(path,url){
		$http.post(path+url)
		.success(function(data, status, headers, config) {
		$scope.product = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};
	
	$scope.fetchpromo = function(path,url){
		$http.post(path+url)
		.success(function(data, status, headers, config) {
		$scope.promo = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetchcategory = function(path,url){
		$http.post(path+url)
		.success(function(data, status, headers, config) {
		$scope.category = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetchlistpromo = function(path,url,id = 1){
		$http.post(path + url, { "id": id })
		.success(function(data, status, headers, config) {
		$scope.listpromo = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetchallproduct = function(path,url,id=99){
		$http.post(path+url,{"id":id})
		.success(function(data, status, headers, config) {
		$scope.product = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};


	$scope.fetchcart = function(path,url,id){
		$http.post(path + url,{"id":id})
		.success(function(data, status, headers, config) {
		$scope.listcart = data;
		$scope.getModal = function(){
			var total = 0;
			for(var i = 0; i < $scope.listcart.length; i++){
				var product = $scope.listcart[i];
				total += Number(product.harga_beli);
			}
			
			return total;
		}
		$scope.getTotal = function(){
			var total = 0;
			for(var i = 0; i < $scope.listcart.length; i++){
				var product = $scope.listcart[i];
				total += Number(product.harga);
			}
			
			return total;
		}
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetchpesanan = function(path,url,status=""){
		$http.post(path+url,{"status":status})
		.success(function(data, status, headers, config) {
		$scope.pesanan = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetch_listpesanan = function(path,url,id){
		$http.post(path+url,{"id":id})
		.success(function(data, status, headers, config) {
		$scope.listpesanan = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetch_listpenawaran = function(path,url,id){
		$http.post(path+url,{"id":id})
		.success(function(data, status, headers, config) {
		$scope.listpenawaran = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};

	$scope.fetchcomment = function(path,url,id){
		$http.post(path+url,{"id":id})
		.success(function(data, status, headers, config) {
		$scope.listcomment = data;
		}).error(function(data, status, headers, config) {
			$scope.status = status;
			alert("Error "+status+" fetch Activity. Try again later");
		});
	};
	

	}])

	.controller('ActionsController', ['$scope', '$http', '$log', '$interval', '$compile', '$filter', '$location',
		function ($scope, $http, $log, $interval, $compile, $filter, $location) {

			$scope.remove = function ($event) {
				var element = angular.element($event.target);
				var id = element.data('id');
				var path = element.data('path');
				var url = element.data('dir');


				$http.post(path + "/" + url, { "id": id})
					.success(function (data, status, headers, config) {
						$scope.data = data;
					}).error(function (data, status, headers, config) {
						$scope.status = status;
						alert("Error " + status + " love review. Try again later");
					});

			};

	}])

	.controller('UserController', ['$scope', '$http', '$log', '$interval', '$compile', '$filter', '$location',
		function ($scope, $http, $log, $interval, $compile, $filter, $location) {

			$scope.getuser = function(path,url,id = 1){
				$http.post(path + url, { "id": id })
				.success(function(data, status, headers, config) {
				$scope.user = data;
				}).error(function(data, status, headers, config) {
					$scope.status = status;
					alert("Error "+status+" fetch Activity. Try again later");
				});
			};

		}])