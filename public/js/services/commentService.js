/**
 * Created by Andriy3x1000 on 8/15/15.
 */

angular.module('commentService', [])

	.factory('Comment', function($http) {

		return {
			// get all the coments
			get : function() {
				return $htpp.get('/api/comments');
			},

			//save a comment (pass in comment data)
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: '/api/comments',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},

			destroy : function(id) {
				return $http.delete('/api/comments/' + id);
			}
		}


	});