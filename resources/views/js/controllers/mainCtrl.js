/**
 * Created by Andriy3x1000 on 8/15/15.
 */
namespace mainController;

angular.module('mainCtrl', [])

/**
 * injecting the Comment service into our controller
 */
	.controller('mainController', function($scope, $http, Comment) {
		// object will hold all data for comment form
		$scope.commentData = {};

		// loading variable that show the spinning loading icon
		$scope.loading = true;

		/**
		 * Get all Comments
		 */
		Comment.get()
			.success(function(data) {
				$scope.comments = data;
				$scope.loading = false;
			});

		/**
		 * Save Comment
		 */
		$scope.submitComment = function() {
			$scope.loading = true;

			// save the comment. pass in comment data from the form
			Comment.save($scope.commentData)
				.success(function(data) {

					// if creation is successful, comment list will be refreshed.
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				})
				//if error, log the data in console
				.error(function(data) {
					console.log(data);
				});
		};

		/**
		 * Delete Comment
		 * @param id
		 */
		$scope.deleteComment = function(id) {
			$scope.loading = true;

			Comment.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				});
		};

	});