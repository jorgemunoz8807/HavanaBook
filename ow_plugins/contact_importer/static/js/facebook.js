var CI_Facebook = function(libUrl, userId)
{
	var self = this;

        this.init = function(params)
        {
            $('body').prepend('<div id="fb-root"></div>');

            window.fbAsyncInit = function() {
                FB.init(params);
            };

            (function() {
                var e = document.createElement('script');
                e.src = libUrl;
                e.async = true;
                document.getElementById('fb-root').appendChild(e);
            }());
        }

        this.requireLogin = function(func)
        {
            FB.getLoginStatus(function(response)
            {
                if (response.authResponse)
                {
                    func(response);
                }
                else
                {
                    FB.login(function(r)
                    {
                        if (r.authResponse)
                        {
                            func(r);
                        }
                    });
                }
            });
        };

	this.request = function()
        {
            this.requireLogin(function(r){
                FB.ui({
                    method: 'apprequests',
		    data: {"userId": userId},
		    message: OW.getLanguageText('contactimporter', 'facebook_inv_message_text')
                }, function(res){
                    if ( res.to && res.to.length )
                    {
                        OW.info(OW.getLanguageText('contactimporter', 'facebook_after_invite_feedback', {
                            count: res.to.length
                        }));
                    }
		});
            });
	};
};