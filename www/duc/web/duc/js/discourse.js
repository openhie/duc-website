      (function ($) {
        'use strict'

        $(function () {
          $.ajax('https://forum.datausecommunity.org/latest.json').then(function (result) {
            // Parse data to generate content from Discourse:
            // * Discourse endpoint, i.e. `result`,
            // * Number of posts to be shown on your site, e.g. `3`,
            // * Optional array of user IDs (whitelist)
            //   if only posts published by particular users are intended to be shown on your site, e.g. `[1, 2, 3]`.
            $('#discourse-latest').discourse(result, 6);
          });

          $.fn.discourse = function (feed, numToShow) {
            var feedLength = feed.topic_list.topics.length;
              var discourseURL = 'https://forum.datausecommunity.org';

            // Make sure there are enough posts to be shown.
            if (numToShow > feedLength) {
              numToShow = feedLength;
            }
                  var avatars = {};
                  for(var i = 0; i < feed.users.length; i++) {
                        var user_id = feed.users[i].id;
                          avatars[user_id] = discourseURL + feed.users[i].avatar_template.replace('/{size}', '/50');
                }
                  console.log(avatars);

             var content = '';
            for (var i = 0; i < numToShow; i++) {

              // Variables for Discourse post data.
              var post          = feed.topic_list.topics[i],
                  postAuthor    = post.posters[0].user_id,
                  postDate      = new Date(post.created_at),
                  postLink      = discourseURL + '/t/' + post.slug + '/' + post.id;

                console.log(post);
              // The purpose is to ignore the "About the X category" post
              // since it may not be desirable to be displayed on your site.
              if (post.title.substring(0, 10) === "About the " && post.title.substring(post.title.length - 9) === ' category') {
                // Increase number of posts to be shown if possible
                // to compensate for the eliminated post.
                if (numToShow < feedLength) {
                  numToShow++;
                }
                continue;
              }

              post.image_url = avatars[postAuthor];

              // Generate HTML for your site.
              // This part of the code may need to be modified accordingly
              // to fit the markup of your site.
              content += '<div class="box">';
                content += '<img alt="' + post.fancy_title + '" src="' + post.image_url + '">';
                content += '<h4><a href="' + postLink + '" target="_blank">' + post.fancy_title + '</a>';
                content += ' <span>' + postDate.getFullYear() + '-' + ('0' + (postDate.getMonth()+1)).slice(-2) + '-' + ('0' + postDate.getDate()).slice(-2) + '</span></h4>';
                 // content += '<a href="' + postLink + '" target="_blank">Read more</a>';
              content += '</div>';

            }
                 $(this).append('<div class="flex-container">' + content + '</div>');
          };
        });
      }(jQuery));

